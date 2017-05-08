//
//  WXJSBridgeModule.m
//  WeexDemo
//
//  Created by Bob on 17/3/8.
//  Copyright © 2017年 taobao. All rights reserved.
//

#import "WXJSBridgeModule.h"
#import "POCWeexPage.h"
#import "AppDelegate.h"
#import "POCWeexManager.h"

@implementation WXJSBridgeModule

@synthesize weexInstance;

WX_EXPORT_METHOD(@selector(sendMessageToPOCJSContext:callback:))
- (void)sendMessageToPOCJSContext:(NSDictionary *)message callback:(WXModuleCallback)callback;
{
    POCWeexPage *vc = (POCWeexPage *)self.weexInstance.viewController;
    if (message[@"callbackId"]) {
       POCCallback block =  (POCCallback)[[POCWeexManager shareInstance] pocCallbackFunc:message[@"callbackId"]];
        if (block) {
            block(NULL,@[message]);
        }
    }
    else{
        NSMutableDictionary *params = [message mutableCopy];
        if (callback) {
            NSString *callbackId =  [[POCWeexManager shareInstance] setWeexCallbackFunc:callback];
            if (callbackId) {
                [params setObject:callbackId forKey:@"requestId"];
            }
        }
       //[vc.bridge triggerEvent:vc name:@"receiveWeexBridgeMessage" data:params];
    }
}




@end
