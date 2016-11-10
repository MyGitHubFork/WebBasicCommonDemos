var synchronousFile = function(id){
	console.log("开始同步文件，id为" + id);
};

var proxySynchronousFile = (function(){
	var cache = [],timer;//保存一段时间内要同步的id和定时器
	return function(id){
		cache.push(id);
		if (timer) {
			return;
		}
		timer = setTimeout(function(){
			synchronousFile(cache.join(","));//两秒后向本体发送需要同步的ID的集合
			clearTimeout(timer);//清空定时器
			timer = null;
			cache.length = 0;//清空ID集合
		},2000);
	}
})();

var checkbox = document.getElementByTagName("input");
for(var i = 0,c; c = checkbox[i++];){
	c.onclick = function(){
		if (this.checked === true) {
			proxySynchronousFile(this.id);
		}
	}
};











