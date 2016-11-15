//JavaScript 版本的策略模式

//策略类
var strategies = {
	"S":function(salary){
		return salary * 4;
	},
	"A":function(salary){
		return salary * 3;
	},
	"B":function(salary){
		return salary * 2;
	}
};
//上下环境类
var calculateBonus = function(level, salary){
	return strategies[level](salary);
};
console.log(calculateBonus("S", 2000));
console.log(calculateBonus("A", 1000));