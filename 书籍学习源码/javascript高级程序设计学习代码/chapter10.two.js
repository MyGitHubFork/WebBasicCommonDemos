//===========================DOM操作技术==============================
//动态脚本
//<script type="text/javascript" src="client.js"></script>

function loadScript(url){
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = url;
	document.body.appendChild(script);
}
loadScript("client.js");


var script = document.createElement("script");
script.type = "text/javascript";
script.text = "function sayHi(){console.log(\"hi\")}"
document.body.appendChild(script);


//动态样式
//<link rel="stylesheet" type="text/css" href="styles.css">
var link = document.createElement("link");
link.rel = "stylesheet";
link.type = "text/css";
link.href = "style.css";
var head = document.getElementsByTagName("head")[0];
head.appendChild(link);

// <style type="text/css">
// 	body{
// 		background-color:red;
// 	}
// </style>

var style = document.createElement("style");
style.type = "text/css";
try{//非IE
	style.appendChild(document.createTextNode("body{background-color:red}"));
}catch(ex){
	style.styleShett.cssText = "body{background-color:red}";
}
var head = document.getElementsByTagName("head")[0];
head.appendChild(style);


//使用NodeList
var divs = document.getElementsByTagName("div"),i,div;
for (var i = 0 len=divs.length; i < len; i++) {
	div = document.createElement("div");
	document.body.appendChild(div);
}




































