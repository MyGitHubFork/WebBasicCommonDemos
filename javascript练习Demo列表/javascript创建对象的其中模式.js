/*
* @Author: huangchengdu
* @Date:   2016-11-17 11:02:45
* @Last Modified by:   huangchengdu
* @Last Modified time: 2016-11-17 11:22:55
*/

//============工厂模式===============
function createPerson(name,age,job) {
	var o = new Object();
	o.name = name;
	o.age = age;
	o.job = job;
	o.sayName = function(){
		alert(this.name);
	}
	return o;
}
var person1 = createPerson("wei",25,"software");
var person1 = createPerson("bu",25,"software");

//===============构造函数模式=============
function Person(name,age,job){
	this.name = name;
	this.age = age;
	this.job = job;
	this.sayName = function(){
		alert(this.name);
	}
}
var person1 = new Person("wei",25,"software");
var person2 = new Person("bu",25,"software");
console.log(person1 instanceof Object);

