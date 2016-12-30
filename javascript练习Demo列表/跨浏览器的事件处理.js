/*
* @Author: huangchengdu
* @Date:   2016-12-29 14:38:20
* @Last Modified by:   huangchengdu
* @Last Modified time: 2016-12-29 14:49:02
*/

var EventUtil = {
	addHandler:function(element,type,handler) {
		if (element.addEventListener) {
			element.addEventListener(type,handler,false);
		}else if(element.attachEvent){
			element.attachEvent("on" + type, handler);
		}else{
			element["on" + type] = handler;
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
	removeHandler:function(element,type,handler){
		if (element.removeEventListener) {
			element.removeEventListener(type,handler,false);
		}else if(element.detachEvent){
			element.detachEvent("on" + type, handler);
		}else{
			element["on" + type] = null;
		}
	},
	stopPropagation:function(event){
		if (event.stopPropagation) {
			event.stopPropagation();
		}else{
			event.cancelBubble = true;
		}
	}
};

export default = EventUtil;