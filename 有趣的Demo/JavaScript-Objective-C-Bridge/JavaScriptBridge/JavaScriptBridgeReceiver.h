//
//  JavaScriptBridgeReceiver.h
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/25.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "JavaScriptBridge.h"

@interface JavaScriptBridgeReceiver : NSObject<UIWebViewDelegate> {
    JavaScriptBridge *bridge;
}

@property(nonatomic, retain) JavaScriptBridge *bridge;

- (void)feedInstructions:(NSArray *)instructions;

@end
