//
//  POCWeexPage.m
//  Ticket
//
//  Created by huangchengdu on 17/2/21.
//  Copyright © 2017年 Arron Zhang. All rights reserved.
//

#import "POCWeexPage.h"
#import <WeexSDK/WeexSDK.h>
#import <WXDevtool/TBWXDevTool/WXDevTool.h>
#import "POCWeexManager.h"
#import "WXJSBridgeModule.h"

#define SCREEN_WIDTH  [[UIScreen mainScreen] bounds].size.width
#define SCREEN_HEIGHT [[UIScreen mainScreen] bounds].size.height

@interface POCWeexPage ()
@property (nonatomic, strong) WXSDKInstance *instance;
//@property (nonatomic, strong) UIView *weexView;
@end

@implementation POCWeexPage
@synthesize url = _url;
@synthesize debugModel =_debugModel;
@synthesize debugUrl = _debugUrl;
@synthesize params = _params;
@synthesize options = _options;
@synthesize weexView = _weexView;


- (void)viewDidLoad {
    [super viewDidLoad];
    if (self.debugModel) {
        [WXDevTool setDebug:YES];
        [WXDevTool launchDevToolDebugWithUrl:self.debugUrl];
        [[NSNotificationCenter defaultCenter] addObserver:self selector:@selector(notificationRefreshInstance:) name:@"RefreshInstance" object:nil];

    }else{
        [WXDevTool setDebug:NO];
        [[NSNotificationCenter defaultCenter] removeObserver:self name:@"RefreshInstance" object:nil];
    }
    [self render];
}


- (void)viewDidAppear:(BOOL)animated
{
    [super viewDidAppear:animated];
    [_instance fireGlobalEvent:WX_APPLICATION_DID_BECOME_ACTIVE params:nil];
    [self updateInstanceState:WeexInstanceAppear];
}

//TODO get height
- (void)viewDidLayoutSubviews
{
    [super viewDidLayoutSubviews];
}

- (void)viewWillDisappear:(BOOL)animated
{
    [super viewWillDisappear:animated];
    [_instance fireGlobalEvent:WX_APPLICATION_WILL_RESIGN_ACTIVE params:nil];
}

- (void)viewDidDisappear:(BOOL)animated
{
    [super viewDidDisappear:animated];
    [self updateInstanceState:WeexInstanceDisappear];
}

-(void)sendMessageToWeexJSContext:(NSDictionary *)message callback:(POCCallback)callback{
    if (message[@"callbackId"]) {
        WXModuleCallback block =  (WXModuleCallback)[[POCWeexManager shareInstance] weexCallbackFunc:message[@"callbackId"]];
        if (block) {
            block(message);
        }
    }
    else{
        NSMutableDictionary *params = [message mutableCopy];
        if (callback) {
            NSString *callbackId =  [[POCWeexManager shareInstance] setPocCallbackFunc:callback];
            if (callbackId) {
                [params setObject:callbackId forKey:@"requestId"];
            }
        }
         //[_instance fireGlobalEvent:@"onPOCJSContextMessage" params:params];
        [_instance fireModuleEvent:[WXJSBridgeModule class] eventName:@"onPOCJSContextMessage" params:params];
        //[[WXSDKManager bridgeMgr] fireEvent:_instance.instanceId ref:WX_SDK_ROOT_REF type:@"onPOCJSContextMessage" params:params domChanges:nil];
        
    }
}


- (void)updateInstanceState:(WXState)state
{
    if (_instance && _instance.state != state) {
        _instance.state = state;
        if (state == WeexInstanceAppear) {
            [[WXSDKManager bridgeMgr] fireEvent:_instance.instanceId ref:WX_SDK_ROOT_REF type:@"viewappear" params:nil domChanges:nil];
        }
        else if (state == WeexInstanceDisappear) {
            [[WXSDKManager bridgeMgr] fireEvent:_instance.instanceId ref:WX_SDK_ROOT_REF type:@"viewdisappear" params:nil domChanges:nil];
        }
    }
    
}

#pragma mark - notification
- (void)notificationRefreshInstance:(NSNotification *)notification {
    [self render];
}

- (void)render
{
    _instance = nil;
    _instance = [[WXSDKInstance alloc] init];
    _instance.viewController = self;
    if (true) {
        _instance.frame = CGRectMake(0, 0,SCREEN_WIDTH, SCREEN_HEIGHT - 64);
    }else{
        _instance.frame = CGRectMake(0, 0,SCREEN_WIDTH, SCREEN_HEIGHT);
    }
    __weak typeof(self) weakSelf = self;
    _instance.onCreate = ^(UIView *view) {
        [weakSelf.weexView removeFromSuperview];
        weakSelf.weexView = nil;
        weakSelf.weexView = view;
        [weakSelf.view addSubview:weakSelf.weexView];
    };
    _instance.onFailed = ^(NSError *error) {
        // [weakSelf.bridge triggerEvent:weakSelf name:@"renderFailed" data:nil];
    };
    
    _instance.renderFinish = ^(UIView *view) {
        //[weakSelf.bridge triggerEvent:weakSelf name:@"renderFinish" data:nil];
    };
    _instance.updateFinish = ^(UIView *view) {
        //[weakSelf.bridge triggerEvent:weakSelf name:@"renderUpdateFinish" data:nil];
    };
    [_instance renderWithURL:[NSURL URLWithString:self.url] options:@{@"bundleUrl":self.url,@"params":self.params?self.params:@{},@"options":self.options?self.options:@{}} data:nil];
}

- (void)dealloc
{
    [_instance destroyInstance];
    [[NSNotificationCenter defaultCenter] removeObserver:self name:@"RefreshInstance" object:nil];
}

@end
