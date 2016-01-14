//
//  TestJSObject.h
//  UIWebview、OC与JS交互
//
//  Created by huangchengdu on 15/11/19.
//  Copyright © 2015年 huangchengdu. All rights reserved.
//

#import <Foundation/Foundation.h>
#import <JavaScriptCore/JavaScriptCore.h> 


//首先创建一个实现了JSExport协议的协议
@protocol TestJSObjectProtocol <JSExport>

//此处我们测试几种参数的情况
-(void)TestNOParameter;
-(void)TestOneParameter:(NSString *)message;
-(void)TestTowParameter:(NSString *)message1 SecondParameter:(NSString *)message2;

@end

@interface TestJSObject : NSObject<TestJSObjectProtocol>

@end
