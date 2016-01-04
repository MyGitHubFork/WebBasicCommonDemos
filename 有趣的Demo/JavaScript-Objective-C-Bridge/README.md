JavaScript-Objective-C Bridge
=============================

The JavaScript-Objective-C bridge lets you call Objective-C functions from JavaScript code loaded in a UIWebView instance.

Note that this project is currently VERY VERY ALPHA state. Please don't use it:)

Demo Video
-----------

[See on YouTube](http://www.youtube.com/watch?v=sbs7L4WUhU4)

Low Level API
-------------

Pass operands and operators through the `location.href` property.
The path part of the specifined URL is used to represent a sequence of instruction.
JavaScript-Objective-C bridge bridge works as a stack machine.

For example:

    location.href = "bridge:///-123/-456/@add/-hoge/-1/@callback"

In this example, list of instructions is represented as `-123/-456/@add/-hoge/-1/@callback`.
A path component beginning with `-` means a operand, and a path component beginning with `@` means operator.

Operators are defined as methods of the `JavaScriptBridge` class.  See the source code for more detail.


How It Works
-------------------

JavaScript code sends a list of instructions to the delegate object through the `location.href` property.
Each instruction is packed in a path part in a URL.
This list of instructions is processed by a stack machine implemented in the delegate object.

Objective-C code sends message via `stringByEvaluatingJavaScriptFromString:` method on UIWebView class.


License (BSD License)
-------

Copyright (c) 2011, Toru Hisai
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
* Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


Author
---------

Toru Hisai [@torus](http://twitter.com/torus)
