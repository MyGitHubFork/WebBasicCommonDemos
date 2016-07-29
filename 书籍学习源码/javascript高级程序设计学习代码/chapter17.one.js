//=============================错误类型===================================
  // //这个是基类类型的错误
  // Error
  // EvalError
  // RangeError
  // ReferenceError 
  // SyntaxError
  // TypeError
  // URIError

//EvalError
// new eval();
// eval = foo;

//RangeError
// var items1 = new Array(-20);
// var items2 = new Array(Number.MAX_VALUE);

//ReferenceError
// var obj = x;

//SyntaxError
// eval("a ++ b");

//TypeError
// var o = new 10;
// console.log("name" in true);

// try{
// 	someFunction();
// }catch(error){
// 	if (error instanceof TypeError) {
// 		console.log("TypeError");
// 		console.log(error.message);
// 	}else if(error instanceof ReferenceError){
// 		console.log("RefrenceError");
// 		console.log(error.message);
// 	}else{
// 		console.log(error.message);
// 	}
// }finally{
// 	console.log("不管有么有错，这个都回执行");
// }

// throw 12345;
// throw new SyntaxError("I don't like your syntax.");

//自定义error类型
// function CustomError(message){
// 	this.name = "CustomError";
// 	this.message = message;
// }
// CustomError.prototype = new Error();
// throw new CustomError("My Message");

function process(values){
	if (!(values instanceof Array)) {
		throw new Error("process() Argument must be a array");
	}
	values.sort();
	console.log("1111111");
	try{
		console.log("22222222");
	}catch(error){
		console.log(error.message);
		console.log("333333");
	}
	console.log("4444444");
	return -1;
}
process(sdfsd);
window.onerror = function(message, url, line){
	console.log(message);
	return false; //阻止浏览器的默认报错行为
}




















