//
//  ViewController.m
//  UIWebview、OC与JS交互
//
//  Created by huangchengdu on 15/11/19.
//  Copyright © 2015年 huangchengdu. All rights reserved.
//

#warning 参考博客地址：http://blog.csdn.net/lwjok2007/article/details/47058795

#import "ViewController.h"
#import <JavaScriptCore/JavaScriptCore.h>
#import "TestJSObject.h"
@interface ViewController ()<UIWebViewDelegate>
{
    UIWebView *myWebView;
}
@end

@implementation ViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    myWebView=[[UIWebView alloc]initWithFrame:CGRectMake(0, 22, [UIScreen mainScreen].bounds.size.width, [UIScreen mainScreen].bounds.size.height-22)];
    myWebView.delegate=self;
    //添加webview到当前viewcontroller的view上
    [self.view addSubview:myWebView];
    
    //网址
    NSString *httpStr=@"http://mp.weixin.qq.com/s?__biz=MzI2MDEwMzAzNA==&mid=402884795&idx=1&sn=a08c769bccee818148272c2e92c1baa1#rd";
    NSURL *httpUrl=[NSURL URLWithString:httpStr];
    NSURLRequest *httpRequest=[NSURLRequest requestWithURL:httpUrl];
    [myWebView loadRequest:httpRequest];

}

////当网页视图被指示载入内容而得到通知。应当返回YES，这样会进行加载。通过导航类型参数可以得到请求发起的原因，可以是以下任意值：
//UIWebViewNavigationTypeLinkClicked
//UIWebViewNavigationTypeFormSubmitted
//UIWebViewNavigationTypeBackForward
//UIWebViewNavigationTypeReload
//UIWebViewNavigationTypeFormResubmitted
//UIWebViewNavigationTypeOther
-(BOOL)webView:(UIWebView *)webView shouldStartLoadWithRequest:(NSURLRequest *)request navigationType:(UIWebViewNavigationType)navigationType
{
    
    if (navigationType == UIWebViewNavigationTypeLinkClicked) {
        NSLog(@"链接点击了");
    }else if (navigationType == UIWebViewNavigationTypeFormSubmitted) {
        NSLog(@"链接点击了");
    }else if (navigationType == UIWebViewNavigationTypeFormResubmitted) {
        NSLog(@"链接点击了");
    }else if (navigationType == UIWebViewNavigationTypeOther) {
        NSLog(@"链接点击了");
    }
    
    //网页加载之前会调用此方法
    NSString *urlString = [[request mainDocumentURL] absoluteString];
    NSLog(@"%@",urlString);
    urlString = [urlString stringByRemovingPercentEncoding];
    NSLog(@"%@",urlString);
    //retrun YES 表示正常加载网页 返回NO 将停止网页加载
    return YES;
}

-(void)webViewDidStartLoad:(UIWebView *)webView
{
    //开始加载网页调用此方法
}

-(void)webViewDidFinishLoad:(UIWebView *)webView
{
    //网页加载完成调用此方法
    //================================================================
    //首先创建JSContext 对象（此处通过当前webView的键获取到jscontext）
//    JSContext *context=[webView valueForKeyPath:@"documentView.webView.mainFrame.javaScriptContext"];
//    NSString *alertJS=@"alert('test js OC')"; //准备执行的js代码
//    [context evaluateScript:alertJS];//通过oc方法调用js的alert
    //=================================================================
    //iOS调用js
    //首先创建JSContext 对象（此处通过当前webView的键获取到jscontext）
    JSContext *context=[webView valueForKeyPath:@"documentView.webView.mainFrame.javaScriptContext"];
    
    //js调用iOS
    //第一种情况
    //其中test1就是js的方法名称，赋给是一个block 里面是iOS代码
    //此方法最终将打印出所有接收到的参数，js参数是不固定的 我们测试一下就知道
    context[@"test1"] = ^() {
        NSArray *args = [JSContext currentArguments];
        for (id obj in args) {
            NSLog(@"%@",obj);
        }
    };
    //此处我们没有写后台（但是前面我们已经知道iOS是可以调用js的，我们模拟一下）
    //首先准备一下js代码，来调用js的函数test1 然后执行
    //一个参数
    NSString *jsFunctStr=@"test1('参数1')";
    [context evaluateScript:jsFunctStr];
    
    //二个参数
    NSString *jsFunctStr1=@"test1('参数a','参数b')";
    [context evaluateScript:jsFunctStr1];
    
    //======================================================
    //js 中是通过一个对象来调用方法的。
    //首先创建JSContext 对象（此处通过当前webView的键获取到jscontext）
//    JSContext *context=[webView valueForKeyPath:@"documentView.webView.mainFrame.javaScriptContext"];
//    
//    //第二种情况，js是通过对象调用的，我们假设js里面有一个对象 testobject 在调用方法
//    //首先创建我们新建类的对象，将他赋值给js的对象
//    
//    TestJSObject *testJO=[TestJSObject new];
//    context[@"testobject"]=testJO;
//    
//    //同样我们也用刚才的方式模拟一下js调用方法
//    NSString *jsStr1=@"testobject.TestNOParameter()";
//    [context evaluateScript:jsStr1];
//    NSString *jsStr2=@"testobject.TestOneParameter('参数1')";
//    [context evaluateScript:jsStr2];
//    NSString *jsStr3=@"testobject.TestTowParameterSecondParameter('参数A','参数B')";
//    [context evaluateScript:jsStr3];
}

-(void)webView:(UIWebView *)webView didFailLoadWithError:(NSError *)error
{
    //网页加载失败 调用此方法
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}


@end
