//
//  njwViewController.h
//  NativeJsWebView
//
//  Created by Peter Traeg on 5/27/13.
//  Copyright (c) 2013 Peter Traeg. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface njwViewController : UIViewController<UIWebViewDelegate, UITextFieldDelegate>
@property (weak, nonatomic) IBOutlet UITextField *fNameTextField;
@property (weak, nonatomic) IBOutlet UITextField *lNameTextField;
@property (weak, nonatomic) IBOutlet UIWebView *webView;
- (IBAction)didTapUpdateWebView:(id)sender;

@end
