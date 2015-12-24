function test(val){
	window.alert("xxd你好"+val);
	return 50;
}

function abc(num1)
{
	if(num1>3)
	{
		abc(--num1);
	}
	document.writeln(num1);
}

//编写一个函数可以接受任意多个参数，并计算它们的和。
function abc2(){
     //在js中，有一个变量arguments,可以访问所有传入的值
     //window.alert(arguments.length);
     //js函数天然支持可变个数。js不支持函数的重载
     for(var i =0; i<arguments.length;i++)
     {
         window.alert(arguments[i]);
     }
}