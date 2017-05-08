//
//  POCWeexPage.h
//  Ticket
//
//  Created by huangchengdu on 17/2/21.
//  Copyright © 2017年 Arron Zhang. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "POCWeexManager.h"

@protocol POCWeexPageExport <NSObject>
@property (nonatomic, copy) NSString *url;
//初始化参数
@property(nonatomic,copy)NSDictionary *options;
//页面需要参数
@property(nonatomic,copy)NSDictionary *params;
@property(nonatomic,copy)NSString *debugUrl;
@property(nonatomic,assign)BOOL debugModel;

@property (nonatomic, strong) UIView *weexView;

POCExport(
          - (void)sendMessageToWeexJSContext:(NSDictionary *)params callback:(POCCallback)callback);

@end

@interface POCWeexPage : UIViewController<POCWeexPageExport>

@end
