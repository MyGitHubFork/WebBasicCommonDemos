//策略模式：定义一系列的算法,把它们一个个封装起来,并且使它们可以相互替换1。

//传统面向对象语言的策略模式

//不同的策略类
var performanceS = function(){};
performanceS.prototype.calculate = function(salary){
	return salary * 4;
};
var performanceA = function(){};
performanceA.prototype.calculate = function(salary){
	return salary * 3;
};
var performanceB = function(){};
performanceB.prototype.calculate = function(salary){
	return salary * 2;
};
//上下文环境类
var Bonus = function(){
	this.salary = null;
	this.strategy = null;
};
Bonus.prototype.setSalary = function(salary){
	this.salary = salary;
};
Bonus.prototype.setStrategy = function(strategy){
	this.strategy = strategy;
};
Bonus.prototype.getBonus = function(){
	return this.strategy.calculate(this.salary);
};

var bonus = new Bonus();
bonus.setSalary(10000);
bonus.setStrategy(new performanceS());
console.log(bonus.getBonus());
bonus.setStrategy(new performanceA());
console.log(bonus.getBonus());