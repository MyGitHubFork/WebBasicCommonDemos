//检测所有浏览器中的插件
//非IE
function hasPlugin(name){
	name = name.toLowerCase();
	for(var i = 0; i < navigator.plugins.length; i++){
		if (navigator.plugins[i].name.toLowerCase().indexOf(name) > -1) {
			return true;
		}
	}
	return false;
}
alert(hasPlugin("Flash"));
alert(hasPlugin("QuickTime"));

//IE
function hasIEPlugin(name){
	try{
		new ActiveXObject(name);
		return true;
	}catch{
		return false;
	}
}
alert(hasIEPlugin("ShockwaveFlash.ShockwaveFlash"));
alert(hasIEPlugin("QuickTime.QuickTime"));

//针对特定插件的检测方法 Flash
function hasFlash(){
	var result = hasPlugin("Flash");
	if (!result) {
		result = hasIEPlugin("ShowckwaveFlash.ShockwaveFlash");
	}
	return result;
}
alert(hasFlash());