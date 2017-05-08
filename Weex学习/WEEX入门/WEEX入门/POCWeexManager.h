//
//  POCWeexManager.h
//  Ticket
//
//  Created by Bob on 17/3/9.
//  Copyright © 2017年 Arron Zhang. All rights reserved.
//

#import <Foundation/Foundation.h>
#import <WeexSDK/WeexSDK.h>

#define _POC_CONCAT2(A1, A2, A3, A4, A5, A6, A7, A8, A9, A10, ...) A1##_0_##A2##_0_##A3##_0_##A4##_0_##A5##_0_##A6##_0_##A7##_0_##A8##_0_##A9
#define _POC_CONCAT(...) _POC_CONCAT2(__VA_ARGS__, _, _, _, _, _, _, _, _, _, _)

#define POCExport(Selector, ...) @optional Selector _POC_CONCAT(__POC_EXPORT__, __VA_ARGS__):(id)argument; @required Selector
//#define POCConvertOne(Selector, ...) @optional _POC_CONCAT(Selector, __POC_EXPORT__, __VA_ARGS__); @required Selector

@class POCBridge;

typedef void (^POCCallback)(NSError *error, NSArray *args);

@protocol POCWeexManagerExport <NSObject>

POCExport(
+(void)initWeexSDK:(NSDictionary *)params);

+(void)resetWeexManagerEnv;

@end

@interface POCWeexManager : NSObject<POCWeexManagerExport>

+(id)shareInstance;
- (void)initBridgeEnvironment;

- (NSString *)setWeexCallbackFunc:(id)func;
- (NSString *)setPocCallbackFunc:(id)func;
- (WXModuleCallback)weexCallbackFunc:(NSString *)callbackId;
- (POCCallback)pocCallbackFunc:(NSString *)callbackId;
@end
