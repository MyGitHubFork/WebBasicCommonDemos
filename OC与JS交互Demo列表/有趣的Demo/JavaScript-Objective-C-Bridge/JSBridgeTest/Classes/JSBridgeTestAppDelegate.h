//
//  JSBridgeTestAppDelegate.h
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/25.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface JSBridgeTestAppDelegate : NSObject <UIApplicationDelegate> {
    
    UIWindow *window;
    UINavigationController *navigationController;
}

@property (nonatomic, retain) IBOutlet UIWindow *window;
@property (nonatomic, retain) IBOutlet UINavigationController *navigationController;

@end

