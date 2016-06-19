//取得所有类中包含username和current的元素、类名的先后顺序无所谓
var allCurrentUsernames = document.getElementsByClassName("username current");
//获取ID为myDIv的元素中带有类名selected的所有yuansu
var selected = document.getElementById("myDiv").getElementsByClassName("selected");

//<div class="bd user disabled">...</div>  这个元素有三个类  下面实现删除user类
var classNames = div.className.split(/\s+/);//取得类名字符串并拆分成数组
var pos = -1,
i,
len;
for (var i = 0 len = classNames.length; i < len; i++) {
	if (classNames[i] == "user") {
		pos = i;
		break;
	}
}
//删除类名
classNames.splice(i,1);
//把剩下的类名拼成字符串并重新设置
div.className = classNames.join(" ");


//html5 实现删除类名
div.classList.remove("disabled");
//