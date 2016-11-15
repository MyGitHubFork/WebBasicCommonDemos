
//观察者模式,它定义对象间的一种一对多的依赖关系,当一个对象的状 态发生改变时,所有依赖于它的对象都将得到通知。
var salesOffices = {};
salesOffices.clientList = [];//缓存列表、存放订阅者的回调函数
salesOffices.listen = function(key,fn){
	if (!this.clientList[key]) {//如果还没有订阅过此类消息，给该类消息创建一个缓存列表
		this.clientList[key] =[];
	}
	this.clientList[key].push(fn);
};
salesOffices.trigger = function(){
	var key = Array.prototype.shift.call(arguments),fns = this.clientList[key];//取出消息类型，取出消息对应的回调函数
	if (!fns || fns.length === 0) {
		return false;
	}
	for (var i = 0, fn; fn = fns[i++];) {
		fn.apply(this, arguments);
	}
};
salesOffices.listen("squareMeter88", function(price){//小明订阅了88平米的房子的价格
	console.log("价格=" + price);
});
salesOffices.listen("squareMeter110", function(price){//小红订阅了110平米的房子的价格
	console.log("价格=" + price);
});

salesOffices.trigger( 'squareMeter88', 2000000 ); // 发布 88 平方米房子的价格
salesOffices.trigger( 'squareMeter110', 3000000 ); // 发布 110 平方米房子的价格