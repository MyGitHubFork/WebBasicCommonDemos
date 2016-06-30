//let的作用基本与var相同，区别是let声明的变量只在所在代码块里面有用。
{
	let a = 10;
	var b = 1;
}
//alert(a);//检测不到a
alert(b);

//let在for循环里面的使用,下面代码中，变量i是let声明的，当前的i只在本轮循环有效，所以每一次循环的i其实都是一个新的变量，所以最后输出的是6。这里是关于for循环let块级作用域的实现原理http://www.spotty.com.cn/archives/9/
var a = [];
for (let i = 0; i < 10; i++) {
	a[i] = function() {
		console.log(i);
	};
}
a[6](); //6

//let不像var那样变量提升。let实际上为javascript新增了块级作用域。
function f1() {
	let n = 5;
	if (true) {
		let n = 10;
	}
	console.log(n); //5
}
f1();

//块级作用域用于取代立即执行的匿名函数
(function() {
	var tmp = 1;
}()); {
	let tmp = 1;
}

//在块级作用域中声明的函数相当于let变量、在作用域外不能访问。
function f() {
	console.log('I am outside!');
}
(function() {
	if (false) {
		// 重复声明一次函数f
		function f() {
			console.log('I am inside!');
		}
	}
	f(); //es6中访问外面那个f函数，es5访问内部声明的函数。
}());


//==============const命令============================
//const声明一个只读的常量、一旦声明、常量的值就不能改变。声明的时候必须初始化，只声明不初始化会报错。const和let一样，只在声明的作用域可用。块级作用域也不能提升作用域。const常量不能重复申明
const PI = 3.1415;
PI = 3; //出错
const foo; //报错
if (true) {
	const MAX = 5;
}
MAX; //错误
if (true) {
	console.log(MAX); //出错
	const MAX = 5;
}
var message = "hello";
let age = 25;
//下面两行都报错
const message = "goodbye!";
const age = 30;

//对于复合类型的变量，变量名不指向数据，而是指向数据所在的地址。const命令只是保证变量名指向的地址不变，并不保证该地址的数据不变，所以将一个对象声明为常量必须非常小心。如果真的想将对象冻结，应该使用Object.freeze方法。
const foo = Object.freeze({
	name: "huang",
	age: 123
});
console.log(foo.name);
foo.name = "cheng"; //严格报错、常规模式不起作用

//在浏览器环境中、全局对象是window对象，在node.js环境下全局对象是global。但是在node.js的模块环境中，全局变量必须显式声明为global对象的属性。为了保持兼容性，var命令和function命令声明的全局变量，依旧是全局对象的属性；另一方面规定，let命令、const命令、class命令声明的全局变量，不属于全局对象的属性。也就是说，从ES6开始，全局变量将逐步与全局对象的属性脱钩。
var a = 1;
console.log(window.a);
let b = 1;
console.log(window.b); //报错