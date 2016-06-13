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
