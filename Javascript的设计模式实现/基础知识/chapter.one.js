//=====================私有变量========================
var myObject = (function(){
	var __name = "sven";
	return {
		getName:function(){
			return __name;
		}
	};
})();
console.log(myObject.getName());


var obj1 = new Object();
var obj2 = {};
console.log(Object.getPrototypeOf(obj1) == Object.prototype);
console.log(Object.getPrototypeOf(obj2) == Object.prototype);


function Person(name){
	this.name = name;
}
Person.prototype.getName = function(){
	return this.name;
}
var a = new Person("sven");
console.log(a.name);
console.log(a.getName());
console.log(Object.getPrototypeOf(a) == Person.prototype);


var a = new Object();
console.log(a.__proto__ == Object.prototype);


//ES6
class Animal{
	constructor(name){
		this.name = name;
	}
	getName(){
		return this.name;
	}
}
class Dog extends Animal{
	constructor(name){
		super(name);
	}
	speak(){
		return "woof";
	}
}
var dog = new Dog("Scamp");
console.log(dog.getName() + " says " + dog.speak());












