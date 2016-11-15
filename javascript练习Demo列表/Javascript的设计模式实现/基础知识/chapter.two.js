window.name = "globalName";
var myObject = {
    name: "sven",
    getName:function() {
        return this.name;
    }
};
var getName = myObject.getName;
console.log(getName());


var MyClass = = function(){
	this.name = "sven";
	return {
		name: "anne"
	}
};
var obj = new MyClass();
console.log(obj.name);


var obj1 = {
	name : "sven",
	getName:function(){
		return this.name;
	}
};
var obj2 = {
	name: "anne"
};
console.log(obj1.getName());
console.log(obj1.getName.call(obj2));


document.getElementById = (function(func){
	return function(){
		return func.apply(document,arguments);
	}
})(document.getElementById);
var getId = document.getElementById;
var div = getId("div1");
console.log(div.id);


//bind函数自己实现
Function.prototype.bind = function(context){
	var self = this;
	return function(){
		return self.apply(context, arguments);
	}
};
var obj = {
	name: "sven"
};
var func = function(){
	console.log(this.name);
}.bind(obj);
func();


var A = function(name){
	this.name = name;
};
var B = function(){
	A.apply(this, arguments);
};
B.prototype.getName = function(){
	return this.name;
}
var b = new B("sven");
console.log(b.getName());
















