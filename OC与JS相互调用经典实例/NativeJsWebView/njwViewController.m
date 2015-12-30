//
//  njwViewController.m
//  NativeJsWebView
//
//  Created by Peter Traeg on 5/27/13.
//  Copyright (c) 2013 Peter Traeg. All rights reserved.
//

#import "njwViewController.h"

@interface njwViewController ()

@end

@implementation njwViewController

- (void)viewDidLoad
{
    [super viewDidLoad];
	// Do any additional setup after loading the view, typically from a nib.
    self.fNameTextField.delegate = self;
    self.lNameTextField.delegate = self;
    self.webView.delegate = self;
    NSError *error;
    NSString *htmlFile = [[NSBundle mainBundle] pathForResource:@"webviewContent" ofType:@"html"];

    NSString *htmlContent = [[NSString alloc] initWithContentsOfFile:htmlFile encoding:NSUTF8StringEncoding error:&error];
    [self.webView loadHTMLString:htmlContent
                         baseURL:[NSURL fileURLWithPath:[[NSBundle mainBundle] bundlePath]]];
}

- (void)didReceiveMemoryWarning
{
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

- (void)updateNativeNameValuesWithFirstName:(NSString *)fName LastName:(NSString *)lName {
    self.fNameTextField.text = fName;
    self.lNameTextField.text = lName;
}

- (BOOL)webView:(UIWebView *)webView shouldStartLoadWithRequest:(NSURLRequest *)request navigationType:(UIWebViewNavigationType)navigationType {
    
    
    NSString *requestURLString = [[request URL] absoluteString];
    
    if ([requestURLString hasPrefix:@"js-call:"]) {
        
        NSArray *components = [requestURLString componentsSeparatedByString:@":"];
        
        NSString *commandName = (NSString*)[components objectAtIndex:1];
        NSString *argsAsString = [(NSString*)[components objectAtIndex:2]
                                  stringByReplacingPercentEscapesUsingEncoding:NSUTF8StringEncoding];
        
        NSError *error = nil;
        NSData *argsData = [argsAsString dataUsingEncoding:NSUTF8StringEncoding];
        NSDictionary *args = (NSDictionary*)[NSJSONSerialization JSONObjectWithData:argsData options:kNilOptions error:&error];
        
        NSLog(@"Command: %@ - %@", commandName, [args description]);

        if ([commandName isEqualToString:@"updateNames"]) {
            [self updateNativeNameValuesWithFirstName:[args objectForKey:@"fname"]
                                             LastName:[args objectForKey:@"lname"]];
        }

        return NO;
        
    } else {
        
        return YES;
    }
}

- (BOOL)textFieldShouldReturn:(UITextField *)textField {
    if (textField == self.fNameTextField) {
        [self.lNameTextField becomeFirstResponder];
    } else {
        [self didTapUpdateWebView:nil];
        [self.lNameTextField resignFirstResponder];
    }
    return NO;
}

- (IBAction)didTapUpdateWebView:(id)sender {
    NSDictionary *namesDict = @{@"fname": self.fNameTextField.text, @"lname": self.lNameTextField.text};
    NSError *error;
    NSData *namesData = [NSJSONSerialization dataWithJSONObject:namesDict options:0 error:&error];
    NSString *namesJSON = [ [NSString alloc] initWithData:namesData
                                                 encoding:NSUTF8StringEncoding] ;
    NSString *jsCommand = [NSString stringWithFormat:@"setNames(%@)", namesJSON];
    [self.webView stringByEvaluatingJavaScriptFromString:jsCommand];
}
@end
