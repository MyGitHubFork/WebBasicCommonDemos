//
//  ViewController.m
//  JS_OjbC_Interaction_Demo
//
//  Created by caolongyao on 15/12/12.
//  Copyright © 2015年 iOSLittleSquad. All rights reserved.
//

#import "ViewController.h"
#import <JavaScriptCore/JavaScriptCore.h>
#import "JavaScriptContext.h"


@interface ViewController ()
@property (weak, nonatomic) IBOutlet UIWebView *webView;

@property (weak, nonatomic) IBOutlet UITextView *logLabel;

@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view, typically from a nib.
    
    JavaScriptContext *context = [[JavaScriptContext alloc] initWithWebViewController:self];
    JSContext *js = [self.webView valueForKeyPath:@"documentView.webView.mainFrame.javaScriptContext"];
    js[@"app"] = context;
    [self.webView loadHTMLString:[NSString stringWithContentsOfFile:[[NSBundle mainBundle] pathForResource:@"Test" ofType:@"html"] encoding:NSUTF8StringEncoding error:nil] baseURL:nil];

}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

@end
