//
//  JavaScriptBridge.m
//  Untitled
//
//  Created by Toru Hisai on 3/25/11.
//  Copyright 2011 Avatar Reality Inc. All rights reserved.
//

#import "Util.h"
#import "JavaScriptBridge.h"
#import "NSStringAdditions.h"
#import "JavaScriptBridgeURLConnectionDelegate.h"

#include <objc/runtime.h>
#include <CommonCrypto/CommonHMAC.h>

@implementation JavaScriptBridge

@synthesize stack, webView, viewController;

- (id)init {
	[super init];
	[self setStack:[[NSMutableArray alloc] init]];
	DebugLog(@"init: %@", self);
	return self;
}

- (void)push:(NSString*)operand {
	[[self stack] addObject:operand];
	DebugLog(@"pushed: %@, [%d]", operand, [self stackDepth]);
}

- (id)pop {
    id obj = [[[[self stack] lastObject] retain] autorelease];
    [[self stack] removeLastObject];
    
    return obj;
}

- (int)stackDepth {
    return [[self stack] count];
}

- (void)operate:(NSString*)op {
	DebugLog(@"--> [%d]", [self stackDepth]);
	NSString *func = [NSString stringWithFormat:@"op_%@", op];
	char buf[128];
	[func getCString:buf maxLength:sizeof(buf) encoding:NSUTF8StringEncoding];
	SEL sel = sel_getUid(buf);
	if ([self respondsToSelector:sel]) {
		objc_msgSend(self, sel);
	} else {
		DebugLog(@"unknown operator: %@", op);
	}
	DebugLog(@"--> [%d]", [self stackDepth]);
}

- (void)error:(NSString*)mesg {
	DebugLog(@"JavaScript bridge error: %@", mesg);
}

#define CHECK_STACK_DEPTH_WITH_FAIL(n, fail) \
do {\
    const char *name = sel_getName(_cmd);\
    DebugLog(@"method = %s", name);\
    if ([self stackDepth] < (n)) {\
        [self error:[NSString stringWithFormat:@"%s: stack underflow", name]];\
        return fail;\
    }\
} while (0)

#define CHECK_STACK_DEPTH(n) CHECK_STACK_DEPTH_WITH_FAIL(n,)

- (void)op_call {
}

// string -> number
- (void)op_num {
    CHECK_STACK_DEPTH(1);
    
    NSString *str = [self pop];
    [self push:[NSNumber numberWithDouble:[str doubleValue]]];
}

// string -> integer
- (void)op_int {
    CHECK_STACK_DEPTH(1);
    
    NSString *str = [self pop];
    [self push:[NSNumber numberWithInteger:[str integerValue]]];
}

// data -> str
- (void)op_str {
    CHECK_STACK_DEPTH(1);

    NSData *dat = [self pop];
    NSString *str = [[[NSString alloc] initWithData:dat encoding:NSUTF8StringEncoding] retain];
    [self push:str];
    [str release];
}

// a:number/string, b:number/string -> a+b:number
- (void)op_add {
    CHECK_STACK_DEPTH(2);

    NSNumber *n1 = [self pop];
    NSNumber *n2 = [self pop];
    [self push:[NSNumber numberWithDouble:[n1 doubleValue] + [n2 doubleValue]]];
}

// any -> (none)
- (void)op_print {
    CHECK_STACK_DEPTH(1);

    DebugLog(@"print: %@", [NSString stringWithFormat:@"%@", [self pop]]);
}

// src:string -> data
- (void)op_hexstr {
    CHECK_STACK_DEPTH(1);
    
    NSString *str = [self pop];
    
    NSUInteger len = [str lengthOfBytesUsingEncoding:NSASCIIStringEncoding];
    NSMutableData *data = [[NSMutableData alloc] init];
    
    if (len % 2 > 0) {
        [self error:@"odd number of character"];
    } else {
        int p = 0;
        while (p < len) {
            NSScanner *scan = [NSScanner scannerWithString:[str substringWithRange:NSMakeRange(p, 2)]];
            unsigned int val = 0;
            [scan scanHexInt:&val];
            p += 2;
            unsigned char chr = val;
            [data appendBytes:&chr length:1];
        }
    }
    
    DebugLog(@"hexstr: %@", data);
    [self push:data];
    [data release];
}

// numargs:int/string, funcname:string, arg:string[, ...] -> (none)
- (void)op_callback {
    CHECK_STACK_DEPTH(2);
    
    NSNumber *num = [self pop];
    NSString *funcname = [self pop];
    
    NSInteger n = [num integerValue];
    
    DebugLog(@"callback: [%d] num: %@, %d, func: %@", [self stackDepth], num, n, funcname);
    
    CHECK_STACK_DEPTH(n);

    NSMutableArray *args = [[NSMutableArray alloc] init];
    
    for (int i = 0; i < n; i ++) {
        NSString *arg = [self pop];
        if (!arg) {
            arg = @"";
        }
            // arg must be a *safe* string, which doesn't contain any control charactor nor ", \, etc...
        [args addObject:arg];
    }
    
    NSString *arglist = n > 0 ? [NSString stringWithFormat:@"\"%@\"", [args componentsJoinedByString:@"\",\""]] : @"";
    NSString *expr = [NSString stringWithFormat:@"%@(%@)", funcname, arglist];
    DebugLog(@"callback: %@", expr);
    [self performSelector:@selector(eval:) withObject:expr afterDelay:0];
    [args release];
}

- (void)eval:(NSString*)expr {
    DebugLog(@"eval: %@ -> webView: %@", expr, [self webView]);
    [[self webView] stringByEvaluatingJavaScriptFromString:expr];
}

// data -> hexstr:string
- (void)op_hexifydata {
    CHECK_STACK_DEPTH(1);

    NSData *dat = [self pop];
    
    NSMutableString *str = [[NSMutableString alloc] init];
    const unsigned char *bytes = [dat bytes];
    NSUInteger len = [dat length];
    
    for (NSUInteger i = 0; i < len; i ++) {
        unsigned char ch = bytes[i];
        [str appendFormat:@"%02x", ch];
    }
    
    [self push:str];
    [str release];
}

// data -> base64:string
- (void)op_base64data {
    CHECK_STACK_DEPTH(1);
    
    NSData *dat = [self pop];
    NSString *str = [NSString base64StringFromData:dat length:[dat length]];
    
    [self push:str];
}

// key:string / data:string -> data
- (void)op_hmac_sha1 {
    CHECK_STACK_DEPTH(2);
    
    NSString *key = [self pop];
    DebugLog(@"hmac_sha1: key: %@", key);
    
		// The length does not include space for a terminating NULL character.
    NSInteger keylen = [key lengthOfBytesUsingEncoding:NSASCIIStringEncoding];
    char *keybuf = malloc(keylen + 1);
		// The maximum number of bytes in the string to return in buffer (including the NULL termination byte).
    [key getCString:keybuf maxLength:keylen + 1 encoding:NSASCIIStringEncoding];
    
    NSString *str = [self pop];
    DebugLog(@"hmac_sha1: str: %@", str);
    
		// The length does not include space for a terminating NULL character.
    NSInteger datalen = [str lengthOfBytesUsingEncoding:NSUTF8StringEncoding];
    char *databuf = malloc(datalen + 1);
		// The maximum number of bytes in the string to return in buffer (including the NULL termination byte).
    [str getCString:databuf maxLength:datalen + 1 encoding:NSUTF8StringEncoding];
    
    uint8_t digest[CC_SHA1_DIGEST_LENGTH];
    CCHmac(kCCHmacAlgSHA1, keybuf, keylen, databuf, datalen, digest);
    
    free(keybuf);
    free(databuf);
    
    NSData *dest = [NSData dataWithBytes:digest length:CC_SHA1_DIGEST_LENGTH];
    [self push:dest];
}

static NSMutableURLRequest*
prepareHTTPConnection (JavaScriptBridge* self, SEL _cmd)
{
    CHECK_STACK_DEPTH_WITH_FAIL(2, nil);
    
    NSString *url_str = [self pop];
    NSInteger n = [[self pop] integerValue];
    
    NSURL *url = [NSURL URLWithString:url_str];
    NSMutableURLRequest *req = [NSMutableURLRequest requestWithURL:url];
    
    CHECK_STACK_DEPTH_WITH_FAIL(n * 2, nil);
    for (NSInteger i = 0; i < n; i ++) {
        NSString *field = [self pop];
        NSString *value = [self pop];
        [req addValue:value forHTTPHeaderField:field];
    }
    
    return req;
}

static void
returnHTTPHandle (JavaScriptBridge *self, SEL _cmd, NSURLRequest *req)
{
    JavaScriptBridgeURLConnectionDelegate *hndl = [[JavaScriptBridgeURLConnectionDelegate alloc] initWithWebView:[self webView]];
    NSURLConnection *conn = [[NSURLConnection alloc] initWithRequest:req delegate:hndl startImmediately:NO];
    
    [self push:[NSString stringWithFormat:@"%d", [hndl connectionID]]];
    [self push:[NSString stringWithFormat:@"%d", conn]];
}

// url:string, num_header:number, header_field:string, header_value:string, ... -> connection_handle:string, connectionID:string
- (void)op_http_get {
    NSURLRequest *req = prepareHTTPConnection(self, _cmd);
    if (!req) {// fail
        return;
    }
    
    returnHTTPHandle(self, _cmd, req);
}

// url:string, num_header:number, header_field:string, header_value:string, ..., request_body:string -> connection_handle:string, connectionID:string
- (void)op_http_post {
    NSMutableURLRequest *req = prepareHTTPConnection(self, _cmd);
    if (!req) {// fail
        return;
    }
    
    CHECK_STACK_DEPTH(1);
    NSData *body = [self pop];
    [req setHTTPBody:body];
    [req setHTTPMethod:@"POST"];
    
    returnHTTPHandle(self, _cmd, req);
}

// request_handle:string -> (none)
- (void)op_http_send {
    CHECK_STACK_DEPTH(1);
    NSURLConnection *conn = (NSURLConnection*)[[self pop] integerValue];

    [conn start];
}

// oauth_token:string, oauth_token_secret:string -> (none)
- (void)op_store_twitter_credential {
    CHECK_STACK_DEPTH(2);
    NSString *token = [self pop];
    NSString *secret = [self pop];
    
    DebugLog(@"token = %@, secret = %@", token, secret);
    
    NSUserDefaults *def = [NSUserDefaults standardUserDefaults];
    [def setValue:token forKey:@"oauth_token"];
    [def setValue:secret forKey:@"oauth_token_secret"];
}

// (none) -> oauth_token:string, oauth_token_secret:string
- (void)op_twitter_credential {
    NSUserDefaults *def = [NSUserDefaults standardUserDefaults];
    NSString *token = [def stringForKey:@"oauth_token"];
    NSString *secret = [def stringForKey:@"oauth_token_secret"];
    
    if (!secret) secret = @"";
    if (!token) token = @"";
    
    [self push:secret];
    [self push:token];
}

// url:string -> handle:string
- (void)op_open_url_in_new_browser {
    CHECK_STACK_DEPTH(1);
    NSString *url = [self pop];
    
    UIWebView *newWebView = [[UIWebView alloc] initWithFrame:[[self webView] frame]];
    [newWebView setDelegate:[[self webView] delegate]];
    [[self webView] addSubview:newWebView];
    [newWebView release];
    
    [newWebView loadRequest:[NSURLRequest requestWithURL:[NSURL URLWithString:url]]];
    [self push:[NSString stringWithFormat:@"%d", newWebView]];
}

// handle:string -> (none)
- (void)op_close_browser {
    CHECK_STACK_DEPTH(1);
    NSInteger hndl = [[self pop] integerValue];
    UIWebView *wv = (UIWebView*)hndl;
    
    [wv removeFromSuperview];
}


#pragma mark View Controller

// (none) -> nav_controller:id
- (void)navigation_controller {
    [self push:[[self viewController] navigationController]];
}

// class:string -> handle:string
- (void)op_create_instance {
    CHECK_STACK_DEPTH(1);
    
    Class cls = (Class)[self pop];
    
    if (cls) {
        id x = class_createInstance(cls, 0);
        [self push:x];
    } else {
        [self push:nil];
    }
}

// class_name:string -> class:string
- (void)op_look_up_class {
    CHECK_STACK_DEPTH(1);
    NSString *clsname = [self pop];
    Class cls = objc_lookUpClass([clsname cStringUsingEncoding:NSUTF8StringEncoding]);
    
    [self push:cls];
}

///////////////
#pragma mark -
#pragma mark UITableViewDataSource methods
// Customize the number of sections in the table view.
static NSInteger
numberOfSectionsInTableView(id self, SEL sel, UITableView *tableView)
{
    Class cls = objc_getClass("TwitterTimeLineTableView");
    UIWebView *wv = object_getIvar(self, class_getInstanceVariable(cls, "webView"));
    NSString *hndl = object_getIvar(self, class_getInstanceVariable(cls, "handler")); 
    NSString *ret = [wv stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"%@(\"numberOfSectionsInTableView\")", hndl]];
    DebugLog(@"numberOfSectionsInTableView: hndl: %@, ret: %@", hndl, ret);
    return [ret integerValue];
}


// Customize the number of rows in the table view.
static NSInteger
tableView_numberOfRowsInSection(id self, SEL sel, UITableView *tableView, NSInteger section)
{
    Class cls = objc_getClass("TwitterTimeLineTableView");
    UIWebView *wv = object_getIvar(self, class_getInstanceVariable(cls, "webView"));
    NSString *hndl = object_getIvar(self, class_getInstanceVariable(cls, "handler")); 
    NSString *ret = [wv stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"%@(\"tableView_numberOfRowsInSection\", %d)", hndl, section]];
    DebugLog(@"tableView_numberOfRowsInSection: hndl: %@, ret: %@, section: %d", hndl, ret, section);
    return [ret integerValue];
}

static CGFloat tableView_heightForRowAtIndexPath(id self, SEL sel, UITableView *tableView, NSIndexPath *indexPath);

// Customize the appearance of table view cells.
static UITableViewCell *
tableView_cellForRowAtIndexPath(id self, SEL sel, UITableView *tableView, NSIndexPath *indexPath)
{
    static NSString *CellIdentifier = @"Cell";
    enum {
        TWITTER_TABLE_CELL_WEBVIEW = 1,
    };
    
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:CellIdentifier];
    if (cell == nil) {
        cell = [[[UITableViewCell alloc] initWithStyle:UITableViewCellStyleDefault reuseIdentifier:CellIdentifier] autorelease];
        CGRect webViewFrame = [[cell contentView] frame];
        UIWebView *wv = [[UIWebView alloc] initWithFrame:webViewFrame];
        [cell addSubview:wv];
        [wv setTag:TWITTER_TABLE_CELL_WEBVIEW];
        [wv release];
    }
    
    // Configure the cell.
    Class cls = objc_getClass("TwitterTimeLineTableView");
    UIWebView *wv = object_getIvar(self, class_getInstanceVariable(cls, "webView"));
    NSString *hndl = object_getIvar(self, class_getInstanceVariable(cls, "handler")); 
    NSString *ret = [wv stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"%@(\"tableView_cellForRowAtIndexPath\", %d, %d)",
                                                                hndl, [indexPath section], [indexPath row]]];

    CGFloat height = tableView_heightForRowAtIndexPath(self, sel, tableView, indexPath);

    UIWebView *cell_wv = (UIWebView*)[cell viewWithTag:TWITTER_TABLE_CELL_WEBVIEW];
    CGRect rect = [cell frame];
    rect.origin.x = 0;
    rect.origin.y = 0;
    rect.size.height = height;
    [cell_wv setFrame:rect];
//    DebugLog(@"row: %d, HTML: %@", [indexPath row], ret);
    [cell_wv loadHTMLString:ret baseURL:nil];
    
    return cell;
}
#pragma mark UITableViewDelegate methods

static CGFloat
tableView_heightForRowAtIndexPath(id self, SEL sel, UITableView *tableView, NSIndexPath *indexPath)
{
//    DebugLog(@"tableView_heightForRowAtIndexPath: %@, %@", tableView, indexPath);
    Class cls = objc_getClass("TwitterTimeLineTableView");
    UIWebView *wv = object_getIvar(self, class_getInstanceVariable(cls, "webView"));
    NSString *hndl = object_getIvar(self, class_getInstanceVariable(cls, "handler")); 
    NSString *ret = [wv stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"%@(\"tableView_heightForRowAtIndexPath\", %d, %d)",
                                                                hndl, indexPath.section, indexPath.row]];
//    DebugLog(@"tableView_heightForRowAtIndexPath: hndl: %@, ret: %@, section: %d", hndl, ret, indexPath.section, indexPath.row);
    return [ret floatValue];
}

////////////////////////
#pragma mark -

// func:string, controller:UITableViewController -> table:?
- (void)op_xxx_pushtable {
    CHECK_STACK_DEPTH(2);
    NSString *func = [self pop];
    UITableViewController *cont = [self pop];
    DebugLog(@"xxx_pushtable: %@, %@", func, cont);
    
    UIBarButtonItem *back = [[UIBarButtonItem alloc] initWithTitle:nil style:UIBarButtonItemStyleDone target:nil action:nil];
    [[[self viewController] navigationItem] setBackBarButtonItem:back];
    [[self viewController] setTitle:@"Top"];
    
    Class hogeClass = objc_allocateClassPair([NSObject class], "TwitterTimeLineTableView", 0);
    class_addProtocol(hogeClass, objc_getProtocol("UITableViewDataSource"));
    class_addProtocol(hogeClass, objc_getProtocol("UITableViewDelegate"));
    
    BOOL res1 = class_addMethod(hogeClass, @selector(numberOfSectionsInTableView:), (IMP)numberOfSectionsInTableView, "i@:@");
    BOOL res2 = class_addMethod(hogeClass, @selector(tableView:numberOfRowsInSection:), (IMP)tableView_numberOfRowsInSection, "i@:@i");
    BOOL res3 = class_addMethod(hogeClass, @selector(tableView:cellForRowAtIndexPath:), (IMP)tableView_cellForRowAtIndexPath, "i@:@@");

    BOOL res4 = class_addIvar(hogeClass, "handler", sizeof(id), log2(sizeof(id)), "@");
    BOOL res5 = class_addIvar(hogeClass, "webView", sizeof(id), log2(sizeof(id)), "@");

    BOOL res6 = class_addMethod(hogeClass, @selector(tableView:heightForRowAtIndexPath:), (IMP)tableView_heightForRowAtIndexPath, "f@:@@");

    DebugLog(@"res = %d, %d, %d, %d, %d, %d", res1, res2, res3, res4, res5, res6);
    if (!(res1 && res2 && res3 && res4 && res5 && res6)) {
        ErrorLog(@"Failed to create a class: %d, %d, %d, %d, %d, %d", res1, res2, res3, res4, res5, res6);
    }

    objc_registerClassPair(hogeClass);

    id tbl = class_createInstance(hogeClass, 0);
    [tbl init];
    object_setIvar(tbl, class_getInstanceVariable(hogeClass, "handler"), [func retain]);
    object_setIvar(tbl, class_getInstanceVariable(hogeClass, "webView"), [[self webView] retain]);
    DebugLog(@"tbl %@", tbl);
    [[cont tableView] setDataSource:tbl];
    [[cont tableView] setDelegate:tbl];
    
    UINavigationController *navcont = [[self viewController] navigationController];
    [navcont pushViewController:cont animated:YES];
    
    [self push:@"hoge"];
}

// handle:string, selector:string, numargs:integer, arg:id, ... -> id
- (void)op_send_mesg {
    CHECK_STACK_DEPTH(2);
    id obj = (id)[[self pop] integerValue];
    SEL mesg = (SEL)[[self pop] integerValue];
    int n = [[self pop] integerValue];
    id ret = nil;

    CHECK_STACK_DEPTH(n);

    switch (n) {
        case 0:
            ret = objc_msgSend(obj, mesg);
            break;
            
        case 1:
            ret = objc_msgSend(obj, mesg, [self pop]);
            break;
            
        case 2:
            ret = objc_msgSend(obj, mesg, [self pop], [self pop]);
            break;
            
        case 3:
            ret = objc_msgSend(obj, mesg, [self pop], [self pop], [self pop]);
            break;
            
        default:
            break;
    }
    
    [self push:ret];
}



@end
