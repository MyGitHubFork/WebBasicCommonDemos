//
//  XYWYJavaScriptContext.h
//  JS_OjbC_Interaction_Demo
//
//  Created by caolongyao on 15/12/10.
//  Copyright © 2015年 iOSLittleSquad. All rights reserved.
//

#import <UIKit/UIKit.h>
#import <JavaScriptCore/JavaScriptCore.h>

@class ViewController;

@protocol JavaScriptExport <JSExport>

/*!
 *  @brief  获取bool值.
 *
 */
- (BOOL)appGetFlag;

/*!
 *  @brief  打印日期.
 */
- (void)appLogDate;


/*!
 *  @brief  传递消息.
 */
JSExportAs(appLogMessage, - (void)appLogMessage:(NSString *)message);

/*!
 *  @brief  传递JSON。
 *
 *
 */
JSExportAs(appLogJSON, - (void)appLogJSON:(NSDictionary *)json);

/*!
 *  @brief  传递多个参数。
 *
 */
JSExportAs(appLogMessageAndJSON, - (void)appLogMessage:(NSString *)message andJSON:(NSDictionary *)json);

@end


@interface JavaScriptContext : NSObject

- (instancetype)initWithWebViewController:(ViewController *)webViewController;

@end
