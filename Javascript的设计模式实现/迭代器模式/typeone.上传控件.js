//迭代器模式是指提供一种方法顺序访问一个聚合对象中的各个元素,而又不需要暴露该对象的内部表示。
var getActiveUploadObj = function(){//IE插件上传
	try{
		return new ActiveXObject("TXFTNActiveX.FTNUpload");
	}catch(e){
		return false;
	}
};
var getFlashUploadObj = function(){//Flash上传
	if (supportFlash()) {
		var str = '<input type="application/x-shockwave-flash"></object>';
		return $(str).appendTo($('body'));
	}
	return false;
};
var getFormUploadObj = function(){//表单上传
	var str = '<input name="file" type="file" class="ui-file">';
	return $(str).appendTo($('body'));
};

//迭代器
var iteratorUploadObj = function(){
	for (var i = 0,fn; fn = arguments[i++];) {
		var uploadObj = fn;
		if (uploadObj() !== false) {
			return uploadObj;
		}
	}
};
//迭代返回正确的上传对象
var uploadObj = iteratorUploadObj(getActiveUploadObj,getFlashUploadObj,getFormUploadObj);





