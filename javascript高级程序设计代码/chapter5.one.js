// var person = new Object();
// person.name = "Nicholas";
// person.age = 29;

// var person = {
// 	name:"Nicholas",
// 	age:29
// };

// var person = {};
// person.name = "Nicholas";
// person.age = 29;
// console.log(person["name"]);
// console.log(person.age);
// var propertyName = "name";
// console.log(person[propertyName]);


// var colors = new Array();
// var colors = new Array(20);
// var colors = new Array("red", "blue", "green");
// var colors = Array(3);
// var names = Array("Greg");
// var colors = ["red", "blue", "green"];

// var colors = ["red", "blue", "green"];
// colors.length = 2;
// console.log(colors[2]);

// var colors =["red", "blue", "green"];
// colors.length = 4;
// console.log(colors[3]);

// var colors = ["red", "blue", "green"];
// colors[99] = "black";
// console.log(colors.length);
// if (colors instanceof Array) {
// 	console.log("是数组");
// }
// if (Array.isArray(colors)) {
// 	console.log("也是数组");
// }

// var colors = ["red", "blue", "green"];
// console.log(colors.toString());
// console.log(colors.valueOf());
// console.log(colors);

// var person1 = {
// 	toLocaleString:function(){
// 		return "Nikolaos";
// 	},
// 	toString:function(){
// 		return "Nicholas";
// 	}
// };
// var person2 = {
// 	toLocaleString:function(){
// 		return "Grigorios";
// 	},
// 	toString:function(){
// 		return "Greg";
// 	}
// };
// var person = [person1, person2];
// console.log(person);
// console.log(person.toString());
// console.log(person.toLocaleString());

// var colors = ["red", "green", "blue"];
// console.log(colors.join(","));
// console.log(colors.join("||"));

// var colors = new Array();
// var count = colors.push("red","green");
// console.log(count);
// count = colors.push("black");
// console.log(count);
// var item = colors.pop();
// console.log(item);
// console.log(colors.length);
// colors[3] = "brown";
// item = colors.pop();
// console.log(item);


// var colors = new Array();
// var count = colors.unshift("red", "green");
// console.log(count);
// count = colors.unshift("black");
// console.log(count);
// var item = colors.pop();
// console.log(item);
// console.log(colors.length);


// var values = [1, 2, 3, 4, 5];
// values.reverse();
// console.log(values);
// values = [0, 1, 5, 10, 15];
// values.sort();
// console.log(values);
// function compare(value1, value2){
// 	if (value1 < value2) {
// 		return -1;
// 	}else if(value1 > value2){
// 		return 1;
// 	}else{
// 		return 0;
// 	}
// }
// values.sort(compare);
// console.log(values);


// var colors = ["red", "green", "blue"];
// var colors2 = colors.concat("yellow", ["black", "brown"]);
// console.log(colors);
// console.log(colors2);

// var colors = ["red", "green", "blue", "yellow", "purple"];
// var colors2 = colors.slice(1);
// var colors3 = colors.slice(1,4);
// console.log(colors);
// console.log(colors2);
// console.log(colors3);


// var colors = ["red", "green", "blue"];
// var removed = colors.splice(0, 1);
// console.log(colors);
// console.log(removed);
// removed =colors.splice(1, 0, "yellow", "orange");
// console.log(colors);
// console.log(removed);
// removed = colors.splice(1, 1, "red", "purple");
// console.log(colors);
// console.log(removed);


// var numbers = [1,2,3,4,5,4,3,2,1];
// console.log(numbers.indexOf(4));
// console.log(numbers.lastIndexOf(4));
// console.log(numbers.indexOf(4,4));
// console.log(numbers.lastIndexOf(4,4));
// var person = {name: "Nicholas"};
// var people = [{name: "Nicholas"}];
// var morePeople = [person];
// console.log(people.indexOf(person));
// console.log(morePeople.indexOf(person));


// var numbers = [1,2,3,4,5,4,3,2,1];
// var everyResult = numbers.every(function(item, index, array){
// 	return (item > 2);
// });
// console.log(everyResult);
// var someResult = numbers.some(function(item, index, array){
// 	return (item > 2);
// });
// console.log(someResult);
// var filterResult = numbers.filter(function(item, index, array){
// 	return (item > 2);
// });
// console.log(filterResult);
// var mapResult = numbers.map(function(item, index, array){
// 	return item	* 2;
// });
// console.log(mapResult);


// var values = [1,2,3,4,5];
// var sum = values.reduce(function(prev,cur,index,array){
// 	return prev + cur;
// });
// console.log(sum);
// sum = values.reduceRight(function(prev, cur, index,array){
// 	return prev + cur;
// });
// console.log(sum);


// var now = new Date();
// //GMT时间2000年1月1日 午夜零时
// var y2k = new Date(Date.UTC(2000, 0));
// //GMT时间2005年5月5日 下午5：55：55
// var allFives = new Date(Date.UTC(2005,4,5,17,55,55));
// //本地时间2000年 1月1日 午夜零时
// y2k = new Date(2000,0);
// //本地时间2005年5月5日 下午5：55：55
// allFives = new Date(2005, 4, 5, 17, 55, 55);
// //现在
// var start = Date.now();
// var date1 = new Date(2007, 0, 1);
// var date2 = new Date(2007, 1, 1);
// console.log(date1 < date2);

// //匹配字符串中的所有at的实例
// var pattern1 = /at/g;
// //匹配第一个bat或者cat，不区分大小写
// var pattern2 = /[bc]at/i;
// //匹配所有以at结尾的3哥字符的组合，不区分大小写
// var pattern3 = /.at/gi;
// //匹配第一个bat或者cat，不区分大小写
// var pattern1 = /[bc]at/i;
// //匹配第一个[bc]at，不区分大小写。
// var pattern2 = /\[bc\]at/i;
// //匹配所有以at结尾的3个字符的组合，不区分大小写。
// var patter3 = /.at/gi;
// //匹配所有的“.at”,不区分大小写
// var pattern4 = /\.at/gi;
// var pattern2 = new RegExp("[bc]at", "i");

// var pattern1 = /\[bc\]at/i;
// console.log(pattern1.global);
// console.log(pattern1.ignoreCase);
// console.log(pattern1.multiline);
// console.log(pattern1.lastIndex);
// console.log(pattern1.source);
// var pattern2 = new RegExp("\\[bc\\]at", "i");
// console.log(pattern2.global);
// console.log(pattern2.ignoreCase);
// console.log(pattern2.multiline);
// console.log(pattern2.lastIndex);
// console.log(pattern2.source);

// var text = "cat, bat, sat, fat";
// var pattern1 = /.at/;
// var matches = pattern1.exec(text);
// console.log(matches.index);
// console.log(matches[0]);
// console.log(matches.lastIndex);

// var text = "000-00-0000";
// var pattern = /\d{3}-\d{2}-\d{4}/;
// if (pattern.test(text)) {
// 	console.log("The pattern was matched.");
// }

// var text = "this has been a short summer";
// var pattern = /(.)hort/g;
// if (pattern.test(text)) {
//     console.log(RegExp.input);
//     console.log(RegExp.leftContext);
//     console.log(RegExp.rightContext);
//     console.log(RegExp.lastMatch);
//     console.log(RegExp.lastParen);
//     console.log(RegExp.multiline);
// }

// function sum(num1, num2){
// 	return num1 + num2;
// }
// console.log(sum(10,10));
// var anotherSum = sum;
// console.log(anotherSum(10,10));
// sum = null;
// console.log(anotherSum(10,10));

// function callSomeFunction(someFuction, someArgument) {
// 	return someFuction(someArgument);
// }
// function add10(num) {
// 	return num + 10;
// }
// var result1 = callSomeFunction(add10, 10);
// console.log(result1);
// function getGreeting(name) {
// 	return "hello" + name;
// }
// var result2 = callSomeFunction(getGreeting, "Nicholas");
// console.log(result2);

// function createComparisonFunciton(propertyName){
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
// 	}
// }
// var data = [{name:"Zachary", age:28}, {name:"Nicholas", age:29}];
// data.sort(createComparisonFunciton("name"));
// console.log(data[0].name);
// data.sort(createComparisonFunciton("age"));
// console.log(data[0].name);

// function factorial(num){
// 	if (num <= 1) {
// 		return 1;
// 	}else {
// 		return num * arguments.callee(num - 1);
// 	}
// }
// var trueFactorial = factorial;
// factorial = function(){
// 	return 0;
// }
// console.log(trueFactorial(5));
// console.log(factorial(5));

// function outer(){
// 	inner();
// }
// function inner(){
// 	console.log(arguments.callee.caller);
// }
// outer();
// function sayName(name){
// 	console.log("name");
// }
// function sum(num1,num2){
// 	return num1 + num2;
// }
// function sayHi(){
// 	console.log("hi");
// }
// console.log(sayName.length);
// console.log(sum.length);
// console.log(sayHi.length);

// function sum(num1,num2){
// 	return num1 + num2;
// }
// function callSum1(num1, num2){
// 	return sum.apply(this, arguments);
// }
// function callSum2(num1, num2){
// 	return sum.call(this, [num1, num2]);
// }
// console.log(callSum1(10, 10));
// console.log(callSum2(10, 10));

window.color = "red";
var o = {color:"blue"};
function sayColor(){
	console.log(this.color);
}
sayColor();
sayColor.call(this);
sayColor.call(window);
sayColor.call(o);
var objectSayColor = sayColor.bind(o);
objectSayColor();










