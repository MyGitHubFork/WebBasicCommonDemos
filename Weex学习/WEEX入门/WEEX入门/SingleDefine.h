//
//  SingleDefine.h
//  Ticket
//
//  Created by huangchengdu on 17/2/22.
//  Copyright © 2017年 Arron Zhang. All rights reserved.
//

#ifndef SingleDefine_h
#define SingleDefine_h


//.h文件   ##表示拼接字符
#define SingletonH(methodName) +(instancetype)shared##methodName;
//.m文件
#define SingletonM(methodName)\
\
static id _instance = nil;\
+(instancetype)sharedSingleton{\
return [[self alloc] init];\
}\
+(instancetype)allocWithZone:(struct _NSZone *)zone{\
static dispatch_once_t onceToken;\
dispatch_once(&onceToken, ^{\
_instance = [super allocWithZone:zone];\
});\
return _instance;\
}\
- (instancetype)init{\
static dispatch_once_t onceToken;\
dispatch_once(&onceToken, ^{\
_instance = [super init];\
});\
return _instance;\
}\
- (id)copyWithZone:(NSZone *)zone{\
return  _instance;\
}\
+ (id)copyWithZone:(struct _NSZone *)zone{\
return  _instance;\
}

#endif /* SingleDefine_h */
