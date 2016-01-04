//
//  RootViewController.m
//  SocketIO-Demo
//
//  Created by Jakey on 14/12/25.
//  Copyright (c) 2014年 www.skyfox.org. All rights reserved.
//

#import "RootViewController.h"
#import <JavaScriptCore/JavaScriptCore.h>
@interface RootViewController ()

@end

@implementation RootViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view from its nib.
    
}
- (NSString *)loadJsFile:(NSString*)fileName
{
    NSString *path = [[NSBundle mainBundle] pathForResource:fileName ofType:@"js"];
    NSString *jsScript = [NSString stringWithContentsOfFile:path encoding:NSUTF8StringEncoding error:nil];
    return jsScript;
}

- (IBAction)JSCallOC:(id)sender {
    JSCallOCViewController *jsCallOC = [[JSCallOCViewController alloc]init];
    [self.navigationController pushViewController:jsCallOC animated:YES];
}

- (IBAction)OCCallJS:(id)sender {
    OCCallJSViewController *ocCallJS = [[OCCallJSViewController alloc]init];
    [self.navigationController pushViewController:ocCallJS animated:YES];
}

- (IBAction)HighchartsWeb:(id)sender {
    HighchartsWebViewController *highchartsWeb =[[HighchartsWebViewController alloc]init];
    [self.navigationController pushViewController:highchartsWeb animated:YES];
}
@end
