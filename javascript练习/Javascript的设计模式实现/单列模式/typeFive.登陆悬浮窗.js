//创建单列
var getSingle = function(fn){
	var result;
	return function(){
		return result||(result = fn.apply(this,arguments));
	}
};
//一个登陆悬浮窗对象
var createLoginLayer = function(){
	var div = document.createElement("div");
	div.innerHTML = "我是登陆悬浮窗";
	div.style.display = "none";
	document.body.append(div);
	return div;
};
//登陆悬浮窗的单列
var createSingleLoginLayer = getSingle(createLoginLayer);
document.getElementById('loginBtn').onclick = function(){
	var loginLayer = createSingleLoginLayer();
	loginLayer.style.display = "block";
};

createSingleLoginLayer();