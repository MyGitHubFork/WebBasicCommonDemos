//===================for-of循环=============================
var myArray = ['huang','cheng','du'];
for(var value of myArray){
	console.log(value);
}

for (var chr of "huangchengdu") {
	console.log(chr);
}
//新建一个map
var map = new Map();
var key1 = {
	toString: function() {
		return 2
	}
};
var key2 = 2;
map.set(key1, "huang");
map.set(key2, "chengdu");
for (var [key, value] of map) {
	console.log(key + " " + value);
}

//遍历对象的属性
object1 = {
	name: "huang",
	age: 27
};
for (var key of Object.keys(object1)) {
	console.log(key + ":" + object1[key]);
}

//因为jQuery对象与数组想死，为jQuery对象添加数组的迭代器方法
jQuery.prototype[Symbol.iterator] = Array.prototype[Symbol.iterator];