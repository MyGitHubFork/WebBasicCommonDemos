//
//  JavaScriptContext.m
//  JS_OjbC_Interaction_Demo
//
//  Created by caolongyao on 15/12/10.
//  Copyright © 2015年 iOSLittleSquad. All rights reserved.
//

#import "JavaScriptContext.h"
#import "ViewController.h"


@interface JavaScriptContext () <JavaScriptExport>

@property (nonatomic, weak) ViewController *webViewController;

@end

@implementation JavaScriptContext

#pragma mark - life cycle

- (instancetype)initWithWebViewController:(ViewController *)webViewController {
    self = [super init];
    if (self) {
        self.webViewController = webViewController;
    }
    return self;
}

#pragma mark - JavaScriptExport

- (BOOL)appGetFlag {
    return (arc4random() % 2 > 0);
}

- (void)appLogDate {
    dispatch_async(dispatch_get_main_queue(), ^{
    self.webViewController.logLabel.text = [NSString stringWithFormat:@"%s:\n %@", __func__, [NSDate date]];
    });
}

- (void)appLogMessage:(NSString *)message {
    dispatch_async(dispatch_get_main_queue(), ^{
    self.webViewController.logLabel.text = [NSString stringWithFormat:@"%s:\n %@", __func__, message];
    });
}

- (void)appLogJSON:(NSDictionary *)json {
    dispatch_async(dispatch_get_main_queue(), ^{
    self.webViewController.logLabel.text = [NSString stringWithFormat:@"%s:\n %@", __func__, json];
    });
}

- (void)appLogMessage:(NSString *)message andJSON:(NSDictionary *)json {
    dispatch_async(dispatch_get_main_queue(), ^{
    self.webViewController.logLabel.text = [NSString stringWithFormat:@"%s: \n msg:%@ \n JSON:%@", __func__, message, json];
    });
}

@end
