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

var person1 = {
	toLocaleString:function(){
		return "Nikolaos";
	},
	toString:function(){
		return "Nicholas";
	}
};
var person2 = {
	toLocaleString:function(){
		return "Grigorios";
	},
	toString:function(){
		return "Greg";
	}
};
var person = [person1, person2];
console.log(person);
console.log(person.toString());
console.log(person.toLocaleString());

























