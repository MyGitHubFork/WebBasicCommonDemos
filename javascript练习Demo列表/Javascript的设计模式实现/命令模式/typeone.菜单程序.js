//命令模式最常见的应用场景是:有时候需要向某些对象发送请求,但是并不知道请求的接收 者是谁,也不知道被请求的操作是什么。此时希望用一种松耦合的方式来设计程序,使得请求发送者和请求接收者能够消除彼此之间的耦合关系。
var setCommand = function(button, func){
	button.onclick = function(){
		func();
	}
};
var MenuBar = {
	refresh:function(){
		console.log("刷新菜单界面");
	}
};
var RefreshMenuBarCommand = function(receiver){
	return function(){
		receiver.refresh();
	}
};

//初始化命令
var refreshMenuBarCommand = RefreshMenuBarCommand(MenuBar);
//发送命令
setCommand(button1,refreshMenuBarCommand);








