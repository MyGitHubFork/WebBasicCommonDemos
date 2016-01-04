//
//  HighchartsWebViewController.m
//  JavaScriptCore-Demo
//
//  Created by Jakey on 14/12/26.
//  Copyright (c) 2014年 www.skyfox.org. All rights reserved.
//

#import "HighchartsWebViewController.h"

@interface HighchartsWebViewController ()

@end

@implementation HighchartsWebViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
    
    NSString *path = [[[NSBundle mainBundle] bundlePath]  stringByAppendingPathComponent:@"HighchartsView.html"];
    NSURLRequest *request = [NSURLRequest requestWithURL:[NSURL fileURLWithPath:path]];
    
    [self.webView loadRequest:request];
}

#pragma mark - UIWebViewDelegate
- (void)webViewDidFinishLoad:(UIWebView *)webView
{
    // 以 html title 设置 导航栏 title
    self.title = [webView stringByEvaluatingJavaScriptFromString:@"document.title"];

    // 禁用 页面元素选择
    //[webView stringByEvaluatingJavaScriptFromString:@"document.documentElement.style.webkitUserSelect='none';"];
    
    // 禁用 长按弹出ActionSheet
    //[webView stringByEvaluatingJavaScriptFromString:@"document.documentElement.style.webkitTouchCallout='none';"];
    
    
    // 关联 JSContext
    self.context = [webView valueForKeyPath:@"documentView.webView.mainFrame.javaScriptContext"];
    
    // 打印异常
    self.context.exceptionHandler =
    ^(JSContext *context, JSValue *exceptionValue)
    {
        context.exception = exceptionValue;
        NSLog(@"%@", exceptionValue);
    };
    
    
    // 装载数据
    [self loadChartsData];
}

#pragma mark - Load Charts Data

- (void)loadChartsData
{
    // 装载数据
    NSArray *the1024Data = @[@33, @41, @32, @51, @42, @103, @136];
    NSDictionary *the1024Dict = @{@"name": @"1024", @"data": the1024Data};
    
    NSArray *theCCAVData = @[@8, @11, @21, @13, @20, @52, @43];
    NSDictionary *theCCAVDict = @{@"name": @"CCAV", @"data": theCCAVData};
    
    NSArray *seriesArray = @[the1024Dict, theCCAVDict];
    
    [self.context[@"drawChart"] callWithArguments:@[seriesArray]];
}

@end
