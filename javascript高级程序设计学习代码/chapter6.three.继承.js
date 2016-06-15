//=============================原型链=========================
// function SuperType() {
// 	this.property = true;
// }
// SuperType.prototype.getSuperValue = function(){
// 	return this.property;
// };
// function SubType(){
// 	this.subproperty = false;
// }
// //继承了 SuperType
// SubType.prototype = new SuperType();
// SubType.prototype.getSubValue = function(){
// 	return this.subproperty;
// };
// var instance = new SubType();
// console.log(instance.getSuperValue());
// console.log(instance instanceof Object);
// console.log(instance instanceof SuperType);
// console.log(instance instanceof SubType);
// console.log(Object.prototype.isPrototypeOf(instance));
// console.log(SuperType.prototype.isPrototypeOf(instance));
// console.log(SubType.prototype.isPrototypeOf(instance));

//=============================借用构造函数====================
// function SuperType(){
// 	this.colors = ["red", "blue", "green"];
// }
// function SubType(){
// 	SuperType.call(this);
// }
// var instance1 = new SubType();
// instance1.colors.push("black");
// console.log(instance1.colors);
// var instance2 = new SubType();
// console.log(instance2.colors);

// function SuperType(name){
// 	this.name = name;
// }
// function SubType(){
// 	SuperType.call(this,"Nicholas");
// 	this.age = 29;
// }
// var instance = new SubType();
// console.log(instance.name);
// console.log(instance.age);

//=============================组合继承====================
// function SuperType(name){
// 	this.name = name;
// 	this.colors = ["red", "blue", "green"];
// }
// SuperType.prototype.sayName = function(){
// 	console.log(this.name);
// };
// function SubType(name, age){
// 	SuperType.call(this, name);
// 	this.age = age;
// }
// SubType.prototype = new SuperType();
// SubType.prototype.constructor = SubType;
// SubType.prototype.sayAge = function(){
// 	console.log(this.age);
// };
// var instance1 = new SubType("Nicholas", 29);
// instance1.colors.push("black");
// console.log(instance1.colors);
// instance1.sayName();
// instance1.sayAge();

// var instance2 = new SubType("Greg", 27);
// console.log(instance2.colors);
// instance2.sayName();
// instance2.sayAge();


//=============================原型式继承====================
// var person = {
// 	name: "Nicholas",
// 	friends: ["Shelby", "Court", "Van"]
// };
// var anotherPerson = Object.create(person,{
// 	name:{
// 		value: "Greg"
// 	}
// });
// console.log(anotherPerson.name);

//=============================寄生式继承====================
// function object(o){
// 	function F(){}
// 	F.prototype = o;
// 	return new F();
// }
// function createAnother(original){
// 	var clone = object(original);
// 	clone.sayHi = function(){
// 		console.log("hi");
// 	}
// 	return clone;
// }
// var person = {
//     name: "Nicholas",
//     friends: ["Shelby", "Court", "Van"]
// };
// var anotherPerson1 = createAnother(person);
// anotherPerson1.friends.push("Van");
// console.log(anotherPerson1.friends);
// anotherPerson1.sayHi(); 
// var anotherPerson2 = createAnother(person);
// console.log(anotherPerson2.friends);
// anotherPerson2.sayHi(); 

//=============================寄生组合式继承====================
function object(o){
	function F(){}
	F.prototype = o;
	return new F();
}
function inheritPrototype(subType, superType){
	var prototype = object(superType.prototype);
	prototype.constructor = subType;
	subType.prototype =prototype;
}
function SuperType(name){
    this.name = name;
    this.colors = ["red", "blue", "green"];
}
SuperType.prototype.sayName = function(){
    console.log(this.name);
};
function SubType(name, age){
    SuperType.call(this, name);
    this.age = age;
}
inheritPrototype(SubType, SuperType);
SubType.prototype.sayAge = function(){
    console.log(this.age);
   };











































