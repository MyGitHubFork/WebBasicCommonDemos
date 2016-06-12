//========================创建对象============================

//========================工厂模式============================
// function createPerson(name,age,job) {
// 	var o = new Object();
// 	o.age = age;
// 	o.name = name;
// 	o.job = job;
// 	o.sayName = function(){
// 		console.log(this.name);
// 	}
// 	return o;
// }
// var person1 = createPerson("Nicholas", 29, "Software Engineer");
// var person2 = createPerson("Greg", 27, "Doctor");

//========================构造函数模式============================
// function Person(name, age, job){
// 	this.name = name;
// 	this.age = age;
// 	this.job = job;
// 	this.sayName = function(){
// 		console.log(this.name);
// 	};
// }
// var person1 = new Person("Nicholas", 29, "software Engineer");
// var person2 = new Person("Greg", 27, "Doctor");
// console.log(person1.constructor == Person);
// console.log(person2.constructor == Person);
// console.log(person1 instanceof Object);
// //当成普通函数调用
// Person("Greg", 27, "Doctor");
// window.sayName();
// //在另一个对象的作用域中调用
// var o = new Object();
// Person.call(o, "Kristen", 25, "Nurse");
// o.sayName();
//========================原型模式============================
// function Person(){

// }
// Person.prototype.name = "Nicholas";
// Person.prototype.age = 29;
// Person.prototype.job = "Software Engineer";
// Person.prototype.sayName = function(){
// 	console.log(this.name);
// };
// var person1 = new Person();
// console.log(person1.sayName());
// var person2 = new Person();
// console.log(person2.sayName());
// console.log(person1.sayName == person2.sayName);
// console.log(Person.prototype.isPrototypeOf(person1));
// console.log(Object.getPrototypeOf(person1) == Person.prototype);
// console.log(Object.getPrototypeOf(person1).name);

// function Person(){

// }
// Person.prototype.name = "Nicholas";
// Person.prototype.age = 29;
// Person.prototype.job = "Software Engineer";
// Person.prototype.sayName = function(){
// 	console.log(this.name);
// };
// var person1 = new Person();
// var person2 = new Person();
// person1.name = "Greg";
// console.log(person1.name);
// console.log(person2.name);
// console.log(person1.hasOwnProperty("name"));
// delete person1.name;
// console.log(person1.name);
// console.log(person1.hasOwnProperty("name"));

// //用于判断一个属性是否属于对象的原型
// function hasPrototypeProperty(object, name){
// 	return !object.hasOwnProperty(name) && (name in object);
// }
// function Person(){
// }
// Person.prototype.name = "Nicholas";
// Person.prototype.age = 29;
// Person.prototype.job = "Software Engineer";
// Person.prototype.sayName = function(){
// 	console.log(this.name);
// };
// var person = new Person();
// console.log(hasPrototypeProperty(person, "name"));
// person.name = "Greg";
// console.log(hasPrototypeProperty(person, "name"));

// function Person(){
// }
// Person.prototype.name = "Nicholas";
// Person.prototype.age = 29;
// Person.prototype.job = "Software Engineer";
// Person.prototype.sayName = function(){
// 	console.log(this.name);
// };
// var keys = Object.keys(Person.prototype);
// console.log(keys);
// var p1 = new Person();
// p1.name = "Rob";
// p1.age =31;
// var p1keys = Object.keys(p1);
// console.log(p1keys);

// function Person(){
// }
// Person.prototype ={
// 	name: "Nicholas",
// 	age: 29,
// 	job: "software Engineer",
// 	sayName:function(){
// 		console.log(this.name);
// 	}
// };
// //重设构造函数，只适用于ECMAScript 5兼容的浏览器
// Object.defineProperty(Person.prototype, "constructor", {
// 	enumerable:false,
// 	value: Person
// });

// function Person(){}
// var friend = new Person();
// Person.prototype = {
// 	constructor: Person,
// 	name: "Nicholas",
// 	age: 29,
// 	job: "Software Engineer",
// 	sayName:function(){
// 		console.log(this.name);
// 	}
// };
// //下面这句话会发生错误，实例指向原来的原型，重写原型并不会改变实例的最初指向。
// friend.sayName();

//========================组合使用构造函数模式和原型模式============================
// function Person(name, age, job){
// 	this.name = name;
// 	this.age = age;
// 	this.job = job;
// 	this.friends = ["Shelby", "Court"];
// }
// Person.prototype = {
// 	consturctor: person,
// 	sayName:function(){
// 		console.log(this.name);
// 	}
// }
// var person1 = new Person("Nicholas", 29, "Software Engineer");
// var person2 = new Person("Greg", 27, "Doctor");
// person1.friends.push("Van");
// console.log(person1.friends);
// console.log(person2.friends);
// console.log(person1.friends === person2.friends);
// console.log(person1.sayName === person2.sayName);

//========================动态原型模式============================
// function Person(name, age, job){
// 	this.name = name;
// 	this.age = age;
// 	this.job = job;
// 	if (typeof this.sayName != "function") {
// 		Person.prototype.sayName = function(){
// 			console.log(this.name);
// 		};
// 	}
// }
// var friend = new Person("Nicholas", 29, "Software Engineer");
// friend.sayName();

//========================寄生构造函数模式(不建议使用)============================
function SpecialArray(){
	var values = new Array();
	values.push.apply(values,arguments);
	values.toPipedString = function(){
		return this.join("|");
	}
	return values;
}
var colors = new SpecialArray("red", "blue", "green");
console.log(colors.toPipedString());

//========================稳妥构造函数模式============================

























