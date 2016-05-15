//
//  JavaScriptBridge.h
//  Untitled
//
//  Created by Toru Hisai on 3/25/11.
//  Copyright 2011 Avatar Reality Inc. All rights reserved.
//

#import <Foundation/Foundation.h>


@interface JavaScriptBridge : NSObject {
	NSMutableArray *stack;
    UIWebView *webView;
    UIViewController *viewController;
}

@property(nonatomic, retain) NSMutableArray *stack;
@property(nonatomic, retain) UIWebView *webView;
@property(nonatomic, retain) UIViewController *viewController;

- (void)push:(id)operand;
- (id)pop;
- (int)stackDepth;
- (void)operate:(NSString*)op;
- (void)error:(NSString*)mesg;
- (void)eval:(NSString*)expr;

- (void)op_callback;

- (void)op_num;
- (void)op_int;
- (void)op_str;
- (void)op_hexstr;
- (void)op_hexifydata;
- (void)op_base64data;

- (void)op_hmac_sha1;
- (void)op_http_get;
- (void)op_http_post;
- (void)op_http_send;
- (void)op_store_twitter_credential;
- (void)op_twitter_credential;
- (void)op_open_url_in_new_browser;
- (void)op_close_browser;
- (void)op_close_browser;

- (void)op_create_instance;


@end

