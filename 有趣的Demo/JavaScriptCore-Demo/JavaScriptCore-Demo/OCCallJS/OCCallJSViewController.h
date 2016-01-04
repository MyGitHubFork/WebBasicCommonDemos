//
//  OCCallJSViewController.h
//  JavaScriptCore-Demo
//
//  Created by Jakey on 14/12/26.
//  Copyright (c) 2014年 www.skyfox.org. All rights reserved.
//

#import <UIKit/UIKit.h>
#import <JavaScriptCore/JavaScriptCore.h>

@interface OCCallJSViewController : UIViewController
- (IBAction)sendToJS:(id)sender;
@property (weak, nonatomic) IBOutlet UILabel *showLable;
@property (weak, nonatomic) IBOutlet UITextField *textField;
@property (strong, nonatomic) JSContext *context;
@end
