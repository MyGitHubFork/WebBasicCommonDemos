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