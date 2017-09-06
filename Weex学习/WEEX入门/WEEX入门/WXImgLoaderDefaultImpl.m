//
//  WXImgLoaderDefaultImpl.m
//  HackerNews
//
//  Created by Hanks on 16/12/8.
//  Copyright © 2016年 Weex. All rights reserved.
//

#import "WXImgLoaderDefaultImpl.h"


#define MIN_IMAGE_WIDTH 36
#define MIN_IMAGE_HEIGHT 36


#if OS_OBJECT_USE_OBJC
#undef  WXDispatchQueueRelease
#undef  WXDispatchQueueSetterSementics
#define WXDispatchQueueRelease(q)
#define WXDispatchQueueSetterSementics strong
#else
#undef  WXDispatchQueueRelease
#undef  WXDispatchQueueSetterSementics
#define WXDispatchQueueRelease(q) (dispatch_release(q))
#define WXDispatchQueueSetterSementics assign
#endif

@interface WXImgLoaderDefaultImpl()

@property (WXDispatchQueueSetterSementics, nonatomic) dispatch_queue_t ioQueue;

@end

@implementation WXImgLoaderDefaultImpl

#pragma mark -
#pragma mark WXImgLoaderProtocol

- (id<WXImageOperationProtocol>)downloadImageWithURL:(NSString *)url imageFrame:(CGRect)imageFrame userInfo:(NSDictionary *)userInfo completed:(void(^)(UIImage *image,  NSError *error, BOOL finished))completedBlock
{
    if ([url hasPrefix:@"//"]) {
        url = [@"http:" stringByAppendingString:url];
    }    
    return nil;
//    (id<WXImageOperationProtocol>)[[YYWebImageManager sharedManager] requestImageWithURL:[NSURL URLWithString:url] options:YYWebImageOptionShowNetworkActivity progress:nil transform:nil completion:^(UIImage * _Nullable image, NSURL * _Nonnull url, YYWebImageFromType from, YYWebImageStage stage, NSError * _Nullable error) {
//        if (completedBlock) {
//           completedBlock(image,error,stage);
//        }
//    }];
    
}

@end
