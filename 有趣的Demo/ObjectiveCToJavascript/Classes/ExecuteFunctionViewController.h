//
//  ExecuteFunctionViewController.h
//  ObjCJS
//
//  Created by Steve Smith on 1/14/11.
//

#import <UIKit/UIKit.h>


@interface ExecuteFunctionViewController : UIViewController {
	UIButton *executeFunction;
	IBOutlet UITextView *textView;
	IBOutlet UITextField *diameterField;
	IBOutlet UIWebView *webView;
}

- (IBAction)executeJavaScript:(id)sender;

@end
