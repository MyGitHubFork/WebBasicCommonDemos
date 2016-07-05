//
//  RootViewController.h
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/25.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "JavaScriptBridgeReceiver.h"

@interface RootViewController : UITableViewController {
    UIWebView *webView;
    JavaScriptBridgeReceiver *receiver;
}

@property(nonatomic, retain) UIWebView *webView;
@property(nonatomic, retain) JavaScriptBridgeReceiver *receiver;

@end
