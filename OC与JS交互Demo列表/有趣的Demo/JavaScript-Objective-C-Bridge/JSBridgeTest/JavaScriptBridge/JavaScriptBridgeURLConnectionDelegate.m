//
//  JavaScriptBridgeURLConnectionHandler.m
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/27.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import "JavaScriptBridgeURLConnectionDelegate.h"
#import "Util.h"

@implementation JavaScriptBridgeURLConnectionDelegate

@synthesize webView, connectionID;

- (id)initWithWebView:(UIWebView *)webView_ {
    static NSUInteger connid = 0;
    
    self = [super init];
    if (self) {
        [self setWebView:webView_];
        [self setConnectionID:connid++];
    }
    return self;
}

- (void)connection:(NSURLConnection *)connection didFailWithError:(NSError *)error {
    NSString *err = [NSString stringWithFormat:@"%@", error];
    DebugLog(@"didFailWithError: %@", err);
    [[self webView] stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"connectionDidFailWithError(%d, \"%@\")", [self connectionID], err]];
}

- (void)connection:(NSURLConnection *)connection didReceiveData:(NSData *)data {
    NSMutableString *str = [[NSMutableString alloc] init];
    const unsigned char *bytes = [data bytes];
    NSUInteger len = [data length];
    
    for (NSUInteger i = 0; i < len; i ++) {
        unsigned char ch = bytes[i];
        [str appendFormat:@"%02x", ch];
    }

    [[self webView] stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"connectionDidReceiveData(%d, __hex(\"%@\"))", [self connectionID], str]];
}

- (void)connection:(NSURLConnection *)connection didReceiveResponse:(NSURLResponse *)response {
    [[self webView] stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"connectionDidReceiveResponse(%d)", [self connectionID]]];
}

- (void)connection:(NSURLConnection *)connection didSendBodyData:(NSInteger)bytesWritten totalBytesWritten:(NSInteger)totalBytesWritten totalBytesExpectedToWrite:(NSInteger)totalBytesExpectedToWrite {
    [[self webView] stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"connectionDidSendBodyData(%d)", [self connectionID]]];
}

- (void)connectionDidFinishLoading:(NSURLConnection *)connection {
    [[self webView] stringByEvaluatingJavaScriptFromString:[NSString stringWithFormat:@"connectionDidFinishLoading(%d)", [self connectionID]]];
}

- (void)dealloc {
    [self setWebView:nil];
    [super dealloc];
}

@end
