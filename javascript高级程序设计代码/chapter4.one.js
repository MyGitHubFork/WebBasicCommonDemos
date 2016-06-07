
// function addSomeNumber(num){
// 	return num + 100;
// }
// function addSomeNumber(num){
// 	return num + 200;
// }
// console.log(addSomeNumber(100));

// var s = "Nicholas";
// var b = true;
// var i = 22;
// var u;
// var n = null;
// var o = new Object();
// console.log(typeof s);
// console.log(typeof b);
// console.log(typeof i);
// console.log(typeof u);
// console.log(typeof n);
// console.log(typeof o);
// console.log(o instanceof Object);

// var color = "blue";
// function changeColor(){
// 	var anotherColor = "red";
// 	function swapColors(){
// 		var tempColor = anotherColor;
// 		anotherColor = color;
// 		color = tempColor;
// 	}
// 	swapColors();//在父执行环境下，所以可以方位他父环境的变量
// }
// changeColor();
// console.log(color);

// function buildUrl(){
// 	var qs = "?debug=true";
// 	with(location){
// 		var url = href + qs;
// 	}
// 	return url;
// }
// console.log(buildUrl());
// for (var i = 10; i < 10; i++){
// 	;
// }
// alert(i);

var color = "blue";
function getColor(){
	var color = "red";
	return color;
}
console.log(getColor());

