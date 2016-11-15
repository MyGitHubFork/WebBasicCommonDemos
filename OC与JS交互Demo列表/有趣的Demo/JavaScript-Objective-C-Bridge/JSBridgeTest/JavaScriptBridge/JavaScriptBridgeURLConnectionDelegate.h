//
//  JavaScriptBridgeURLConnectionHandler.h
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/27.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import <UIKit/UIKit.h>


@interface JavaScriptBridgeURLConnectionDelegate : NSObject {
    UIWebView *webView;
    NSUInteger connectionID;
}

@property(nonatomic, retain) UIWebView *webView;
@property NSUInteger connectionID;

- (id)initWithWebView:(UIWebView *)webView;

- (void)connection:(NSURLConnection *)connection didFailWithError:(NSError *)error;
- (void)connection:(NSURLConnection *)connection didReceiveData:(NSData *)data;
- (void)connection:(NSURLConnection *)connection didReceiveResponse:(NSURLResponse *)response;
- (void)connection:(NSURLConnection *)connection didSendBodyData:(NSInteger)bytesWritten totalBytesWritten:(NSInteger)totalBytesWritten totalBytesExpectedToWrite:(NSInteger)totalBytesExpectedToWrite;
- (void)connectionDidFinishLoading:(NSURLConnection *)connection;


@end
