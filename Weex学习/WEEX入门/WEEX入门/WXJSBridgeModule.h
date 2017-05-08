//
//  WXJSBridgeModule.h
//  WeexDemo
//
//  Created by Bob on 17/3/8.
//  Copyright © 2017年 taobao. All rights reserved.
//

#import <Foundation/Foundation.h>
#import "WXJSBridgeModuleProtocol.h"
#import <WeexSDK/WXModuleProtocol.h>

@interface WXJSBridgeModule : NSObject <WXJSBridgeModuleProtocol,WXModuleProtocol>

@end
