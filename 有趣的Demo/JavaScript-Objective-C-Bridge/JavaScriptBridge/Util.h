/*
 *  Util.h
 *  JSBridgeTest
 *
 *  Created by Toru Hisai on 11/04/15.
 *  Copyright 2011 Kronecker's Delta Studio. All rights reserved.
 *
 */

#ifdef DEBUG_MODE
#define DebugLog( s, ... ) NSLog( @"<%s : (%d)> %@",__func__, __LINE__, [NSString stringWithFormat:(s), ##__VA_ARGS__] )
#else
#define DebugLog( s, ... ) 
#endif

#define ErrorLog( s, ... ) NSLog( @"<ERROR: %s : (%d)> %@",__func__, __LINE__, [NSString stringWithFormat:(s), ##__VA_ARGS__] )
