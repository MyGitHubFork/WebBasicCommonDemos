//window对象同事扮演者ECMAScript中Global对象的角色，因此所有的全局作用域中声明的变量、函数、都回成为变成window对象的属性和方法。
// var age = 29;
// function sayAge(){
// 	alert(this.age);
// }
// alert(window.age);
// sayAge();
// window.sayAge();

var age = 29;
window.color = "red";
//删除失败
delete window.age;
//删除成功
delete window.color;
console.log(window.age);
console.log(window.color);


window.open("http://www.baidu.com", "topFrame");
var wroxWin = window.open("http://www.baidu.com", "wroxWindow", "height=400,width=400,top=10,left=10,resizable=yes");
wroxWin.close();
console.log(wroxWin.opener == window);//true

var blocked = false;
try{
	var wroxWin = window.open("http://www.wrox.com","_blank");
	if (wroxWin == null) {
		blocked = true;
	}
}catch(ex){
	blocked = true;
}
if (blocked) {
	console.log("弹框失败");
}

//超时调用
setTimeout("alert('Hello world')", 1000);

var timeoutId = setTimeout(function(){
	console.log("Hello world!");
},1000);
//取消
clearTimeout(timeoutId);


//间隔执行
setInterval("alert('Hello world!')",10000);
var intervalId = setInterval(function(){
	alert("hello world");
},10000);
//取消
clearInterval(intervalId);


if (confirm("Are you sure?")) {
	alert("确定");
}else{
	alert("取消");
}

var result = prompt("What is your name?","");
if (result !== null) {
	alert("Welcome, "+ result);
}






















