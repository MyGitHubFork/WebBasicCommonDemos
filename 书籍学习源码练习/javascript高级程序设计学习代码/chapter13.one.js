//======================================事件处理================================
var btn = document.getElementById("myBtn");
var handler = function(){
	console.log("hello world");
};
btn.addEventListener("click",handler,false);
//移除事件处理
btn.removeEventListener("click", handler, false);


//IE事件处理程序
var btn = document.getElementById("myBtn");
var handler = function(){
	console.log("closed");
};
btn.attachEvent("onclick", handler);
//删除事件处理
btn.detachEvent("onclick", handler);


//跨浏览器事件处理工具
var EventUtil = {
	addHandler:function(element, type, handler){
		if (element.addEventListener) {//DOM2 非ID
			element.addEventListener(type,handler,false);
		}else if (element.attachEvent) {//IE
			element.attachEvent("on" + type, handler);
		}else{//DOM0
			element["on" + type] = handler;
		}
	},
	removeHandler:function(element, type, handler){
		if (element.removeEventListener) {
			element.removeEventListener(type, handler, false);
		}else if (element.detachEvent) {
			element.detachEvent("on" + type, handler);
		}else{
			element["on" + type] = null;
		}
	}
};
var btn = document.getElementById("myBtn");
var handler = function(){
	console.log("closed");
};
EventUtil.addHandler(btn, "click", handler);
EventUtil.removeHandler(btn, "click", handler);


//========================================事件对象================================
var btn = document.getElementById("myBtn");
var handler = function(event){
	switch(event.type){
		case "click":
			console.log("clicked");
			break;
		case "mouseover":
			event.target.style.backgroundColor = "red";
			break;
		case "mouseout":
			event.target.style.backgroundColor = "";
			break;
	}
};
btn.onclick = handler;
btn.onmouseover = handler;
btn.onmouseout = handler;

//组织特定事件的默认行为
var link = document.getElementById("myLink");
link.onclick = function(event){
	event.preventDefault();
}

//立即停止事件的传播
var btn = document.getElementById("myBtn");
btn.onclick = function(event){
	event.stopPropagation(); //停止事件传播
}
document.body.onclick = function(event){
	console.log("Body clicked"); //因为事件已经停止传播了，所以不会再冒泡到body了
};


//IE中的事件对象
var btn = document.getElementById("myBtn");
btn.onclick = function(){
	var event = window.event;
	console.log(event.type);
};


//跨浏览器事件对象
var EventUtil = {
	addHandler:function(element, type, handler){
		if (element.addEventListener) {//DOM2 非ID
			element.addEventListener(type,handler,false);
		}else if (element.attachEvent) {//IE
			element.attachEvent("on" + type, handler);
		}else{//DOM0
			element["on" + type] = handler;
		}
	},
	removeHandler:function(element, type, handler){
		if (element.removeEventListener) {
			element.removeEventListener(type, handler, false);
		}else if (element.detachEvent) {
			element.detachEvent("on" + type, handler);
		}else{
			element["on" + type] = null;
		}
	},
	getEvent:function(event){
		return event?event:window.event;
	},
	getTarget:function(event){
		return event.target || event.srcElement;
	},
	preventDefault:function(event){
		if (event.preventDefault) {
			event.preventDefault();
		}else{
			event.returnValue = false;
		}
	},
	stopPropagation:function(event){
		if (event.stopPropagation) {
			event.stopPropagation();
		}else {
			event.cancelBubble = true;
		}
	},
	getRelatedTarget:function(event){
		if (event.relatedTarget) {
			return event.relatedTarget;
		}else if(event.toElement){
			return event.toElement;
		}else if(event.fromElement){
			return event.fromElement;
		}else{
			rturn null;
		}
	},
	getCharCode:function(event){
		if (typeof event.charCode == "number") {
			return event.charCode;
		}else {
			return event.keyCode;
		}
	}
};
btn.onclick = function(event){
	event = EventUtil.getEvent(event);
};
btn.onclick = function(event){
	event = EventUtil.getEvent(event);
	EventUtil.stopPropagation(event);
}

//==========================================事件类型======================================
//UI事件 load事件
EventUtil.addHandler(window, "load", function(){
	var script = document.createElement("script");
	EventUtil.addHandler(script, "load", function(event){
		console.log("Loaded");
	});
	script.src = "example.js";
	document.body.appendChild(script);
});
//UI事件 unload事件
EventUtil.addHandler(window, "unload", function(event){
	console.log("Unloaded");
});

//焦点事件 相关元素
var div = document.getElementById("myDiv");
EventUtil.addHandler(div, "mouseout", function(event){
	event = EventUtil.getEvent(event);
	var target = EventUtil.getTarget(event);
	var relatedTarget = EventUtil.getRelatedTarget(event);
	console.log("鼠标离开" + target.tagName + "到" + relatedTarget.tagName);
});

//键盘与文本事件
var textbox = document.getElementById("myText");
EventUtil.addHandler(textbox, "keyup", function(event){
	event = EventUtil.getEvent(event);
	console.log(event.keyCode);
});

//textInput事件
var textbox = document.getElementById("myText");
EventUtil.addHandler(textbox, "textInput", function(event){
	event = EventUtil.getEvent(event);
	console.log(event.data);
});


//html5事件
EventUtil.addHandler(window, "beforeunload", function(event){
	event = EventUtil.getEvent(event);
	var message = "I'm really going to miss you if you go.";
	event.returnValue = message;
	return message;
});
//DOMContentLoaded事件，这个在dom加载完成以后就激发
EventUtil.addHandler(document, "DOMContentLoaded", function(event){
	console.log("Content Loaded");
});


//hashchange事件 url改变
EventUtil.addHandler(window, "hashchange", function(event){
	console.log("老url" + event.oldURL + "新URL" + event.newURL);
});
















