//
//  ExecuteFunctionViewController.m
//  ObjCJS
//
//  Created by Steve Smith on 1/14/11.
//

#import "ExecuteFunctionViewController.h"


@implementation ExecuteFunctionViewController

- (IBAction)executeJavaScript:(id)sender {
	
	NSInteger diameter = [[diameterField text] intValue];
	NSString *function = [[NSString alloc] initWithFormat: @"area(%i)", diameter];
	NSString *result = [webView stringByEvaluatingJavaScriptFromString:function];
	[textView setText:result];
	NSLog(@"Area is: %@", result);
	[function release];
}
	
- (void) viewDidLoad {
	[webView loadRequest:[NSURLRequest requestWithURL:[NSURL fileURLWithPath:[[NSBundle mainBundle] pathForResource:@"Calc" ofType:@"html"]isDirectory:NO]]];
	//[webView loadHTMLString:@"<script src=\"calc.js\"></script>" baseURL:[NSURL fileURLWithPath:[[NSBundle mainBundle] resourcePath]]];
}
// The designated initializer.  Override if you create the controller programmatically and want to perform customization that is not appropriate for viewDidLoad.
/*
- (id)initWithNibName:(NSString *)nibNameOrNil bundle:(NSBundle *)nibBundleOrNil {
    self = [super initWithNibName:nibNameOrNil bundle:nibBundleOrNil];
    if (self) {
        // Custom initialization.
    }
    return self;
}
*/

/*
// Implement viewDidLoad to do additional setup after loading the view, typically from a nib.
- (void)viewDidLoad {
    [super viewDidLoad];
}
*/

/*
// Override to allow orientations other than the default portrait orientation.
- (BOOL)shouldAutorotateToInterfaceOrientation:(UIInterfaceOrientation)interfaceOrientation {
    // Return YES for supported orientations.
    return (interfaceOrientation == UIInterfaceOrientationPortrait);
}
*/

- (void)didReceiveMemoryWarning {
    // Releases the view if it doesn't have a superview.
    [super didReceiveMemoryWarning];
    
    // Release any cached data, images, etc. that aren't in use.
}

- (void)viewDidUnload {
    [super viewDidUnload];
    // Release any retained subviews of the main view.
    // e.g. self.myOutlet = nil;
}


- (void)dealloc {
    [super dealloc];
}


@end
