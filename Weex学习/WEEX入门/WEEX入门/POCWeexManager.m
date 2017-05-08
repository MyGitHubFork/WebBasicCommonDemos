//
//  POCWeexManager.m
//  Ticket
//
//  Created by Bob on 17/3/9.
//  Copyright © 2017年 Arron Zhang. All rights reserved.
//

#import "POCWeexManager.h"
#import <WeexSDK/WeexSDK.h>
//#import <WXDevTool.h>
#import <WXDevtool/TBWXDevTool/WXDevTool.h>
#import "WXJSBridgeModule.h"
#import "WXImgLoaderDefaultImpl.h"

@implementation POCWeexManager
{
    NSMutableDictionary *_weexCallbackDict;
    NSUInteger _weexCallbackId;
    NSMutableDictionary *_pocCallbackDict;
    NSUInteger _pocCallbackId;
    
}

static POCWeexManager* _instance = nil;
+(id) shareInstance
{
    static dispatch_once_t onceToken ;
    dispatch_once(&onceToken, ^{
        _instance = [[[POCWeexManager class] alloc] init];
    }) ;
    return _instance ;
}


- (id)init
{
    self = [super init];
    if (self) {
        
        [self initBridgeEnvironment];
        
    }
    return  self;
}


- (void)initBridgeEnvironment
{
    _weexCallbackDict = [[NSMutableDictionary alloc] init];
    _weexCallbackId = 0;
    _pocCallbackDict = [[NSMutableDictionary alloc] init];
    _pocCallbackId = 0;
    
}

//- (void)clear{
//    _weexCallbackDict = [[NSMutableDictionary alloc] init];
//    _weexCallbackId = 0;
//    _pocCallbackDict = [[NSMutableDictionary alloc] init];
//    _pocCallbackId = 0;
//}


- (NSString *)setWeexCallbackFunc:(id)func
{
    NSString *callbackId = [NSString stringWithFormat:@"%ld",_weexCallbackId];
    if (callbackId && func) {
        [_weexCallbackDict setObject:func forKey:callbackId];
    }
    return callbackId;
    
}
- (NSString *)setPocCallbackFunc:(id)func
{
    NSString *callbackId = [NSString stringWithFormat:@"%ld",_pocCallbackId];
    if (callbackId && func) {
        [_pocCallbackDict setObject:func forKey:callbackId];
    }
    return  callbackId;
}
- (WXModuleCallback)weexCallbackFunc:(NSString *)callbackId
{
    id func = [_weexCallbackDict objectForKey:callbackId];
    if (func) {
        [_weexCallbackDict removeObjectForKey:callbackId];
    }
    return func;
}
- (POCCallback)pocCallbackFunc:(NSString *)callbackId
{
    id func = [_pocCallbackDict objectForKey:callbackId];
    if (func) {
        [_pocCallbackDict removeObjectForKey:callbackId];
    }
    return func;
}




+(void)initWeexSDK:(NSDictionary *)params{
    
    [WXAppConfiguration setAppGroup:params[@"AppGroup"]];
    [WXAppConfiguration setAppName:params[@"AppName"]];
    [WXAppConfiguration setAppVersion:params[@"AppVersion"]];
    //
    [WXSDKEngine initSDKEnvironment];
    //set log
    //    [WXLog setLogLevel:WXLogLevelError];
    [WXSDKEngine registerHandler:[WXImgLoaderDefaultImpl new] withProtocol:@protocol(WXImgLoaderProtocol)];
    [WXSDKEngine registerModule:@"weexJSBridge" withClass:[WXJSBridgeModule class]];
}

+ (void)resetWeexManagerEnv
{
    [[POCWeexManager shareInstance] initBridgeEnvironment];
}


@end
