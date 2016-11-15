//================================递归======================
// function factorial(num){
// 	if (num <= 1) {
// 		return 1;
// 	}else{
// 		return num * arguments.callee(num - 1);
// 	}
// }
// var factorial = (function f(num){
// 	if (num <= 1) {
// 		return 1;
// 	}else{
// 		return num * f(num - 1);
// 	}
// });

//================================闭包======================
// function createComparisonFunction(propertyName){
// 	return function(object1, object2){
// 		var value1 = object1[propertyName];
// 		var value2 = object2[propertyName];
// 		if (value1 < value2) {
// 			return -1;
// 		}else if(value1 > value2){
// 			return 1;
// 		}else{
// 			return 0;
// 		}
// 	};
// }
// //创建函数
// var compareNames = createComparisonFunction("name");
// //调用函数
// var result = compareNames({name:"Nicholas"}, {name:"Greg"});
// //解除对匿名函数的引用
// compareNames = null;

// function createFunctions() {
//     var result = new Array();
//     for (var i = 0; i < 10; i++) {
//         result[i] = function(num) {
//             return function() {
//                 return num;
//             };
//         }(i);
//     }
//     return result;
// }

// var name = "The Window";
// var object = {
// 	name: "My Object",
// 	getNameFunc:function(){
// 		var that = this;
// 		return function(){
// 			return that.name;
// 		};
// 	}
// };
// console.log(object.getNameFunc()());

//IE9之前
// function assignHandler(){
// 	var element = document.getElementById("someElement");
// 	var id = element.id;
// 	//闭包会引用element
// 	element.onclick = function(){
// 		console.log(id);
// 	}
// 	element = null;
// }

//================================模仿块级作用域======================
(function(){
	var now = new Date();
	if (now.getMonth() == 0 && now.getDate() == 1) {
		console.log("Happy new year!");
	}
})();

//================================私有变量======================
//我们把有权访问私有变量和私有函数的公有方法称为特权方法
// function MyObject(){
// 	var privateVariable = 10;
// 	function privateFunction(){
// 		return false;
// 	}
// 	//特权方法
// 	this.publicMethod = function(){
// 		privateVariable++;
// 		return privateFunction();
// 	};
// }






















