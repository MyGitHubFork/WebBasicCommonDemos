//
//  ViewController.m
//  html5测试
//
//  Created by huangchengdu on 15/12/30.
//  Copyright © 2015年 huangchengdu. All rights reserved.
//

#import "ViewController.h"

@interface ViewController ()<UIWebViewDelegate>

@property(nonatomic,strong)UIWebView *myWebView;

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.myWebView=[[UIWebView alloc]init];
    [self.myWebView setScalesPageToFit:NO];
    [self.myWebView setUserInteractionEnabled:NO];
    [self.myWebView setBackgroundColor:[UIColor whiteColor]];
    self.myWebView.delegate = self;
    self.myWebView.opaque = NO;
    [self.view addSubview:self.myWebView];
    self.myWebView.frame = self.view.bounds;
    
    
    NSString *filePath = [[NSBundle mainBundle]pathForResource:@"index1" ofType:@"html"];
    
    NSString *htmlString = [NSString stringWithContentsOfFile:filePath encoding:NSUTF8StringEncoding error:nil];
    
    [self.myWebView loadHTMLString:htmlString baseURL:[NSURL URLWithString:filePath]];
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
