//
//  JavaScriptBridgeReceiver.m
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/25.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import "Util.h"
#import "JavaScriptBridgeReceiver.h"

@implementation JavaScriptBridgeReceiver

@synthesize bridge;

- (id)init {
    [super init];
    
    JavaScriptBridge *brdg = [[JavaScriptBridge alloc] init];
    [self setBridge:brdg];
    [brdg release];

    return self;
}

- (void)dealloc {
    [super dealloc];
    [self setBridge:nil];
}

- (BOOL)webView:(UIWebView *)webView shouldStartLoadWithRequest:(NSURLRequest *)request navigationType:(UIWebViewNavigationType)navigationType {
    NSURL *url = [request URL];
    NSString *scheme = [url scheme];
    DebugLog(@"url: %@", url);
    
    if ([scheme isEqualToString:@"bridge"]) {
        NSArray *path = [url pathComponents];
        DebugLog(@"path: %@", path);
        
        [self performSelector:@selector(feedInstructions:) withObject:path afterDelay:0];
        
        return NO;
    } else if ([scheme isEqualToString:@"bridge-callback"]) {
        NSString *func = [url host];// host part indicates function
        NSString *q = [url query];
        
        [[self bridge] push:[q dataUsingEncoding:NSUTF8StringEncoding]];
        [[self bridge] operate:@"hexifydata"];
        [[self bridge] push:func];
        [[self bridge] push:[NSNumber numberWithInt:1]];
        [[self bridge] operate:@"callback"];
        
        return NO;
    }
    
    return YES;
//    return NO;// always returns NO. Create a new UIWebView to show other web pages.
}

- (void)feedInstructions:(NSArray *)instructions {
    for (NSString *str in instructions) {
        unichar head = [str characterAtIndex:0];
        NSString *tail = [str substringFromIndex:1];
        DebugLog(@"-- begin %@", str);
        switch (head) {
            case '-':// operand
                [[self bridge] push:tail];
                break;
            case '@':// operator
                [[self bridge] operate:tail];
                break;
            default:
                break;
        }
        DebugLog(@"-- end %@", str);
    }
}

@end
