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











