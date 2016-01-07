//
//  NSStringAdditions.h
//  JSBridgeTest
//
//  Created by Toru Hisai on 11/03/27.
//  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
//

// copied from http://stackoverflow.com/questions/392464/any-base64-library-on-iphone-sdk

#import <Foundation/NSString.h>

@interface NSString (NSStringAdditions)

+ (NSString *) base64StringFromData:(NSData *)data length:(int)length;

@end
