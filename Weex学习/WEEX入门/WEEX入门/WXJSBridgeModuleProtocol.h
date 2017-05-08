//
//  WXJSBridgeModuleProtocol.h
//  WeexDemo
//
//  Created by Bob on 17/3/8.
//  Copyright © 2017年 taobao. All rights reserved.
//

#import <Foundation/Foundation.h>
#import <WeexSDK/WXModuleProtocol.h>

@protocol WXJSBridgeModuleProtocol <WXModuleProtocol>

- (void)sendMessageToPOCJSContext:(NSDictionary *)message callback:(WXModuleCallback)callback;


@end
