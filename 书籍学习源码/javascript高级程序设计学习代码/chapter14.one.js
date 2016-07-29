//html的form元素，对应于javascript的HTMLFormElement元素。
var form = document.getElementById("form1");
var firstForm = document.forms[0];
var myForm = document.forms["form2"];

//提交表单
<input type="submit" value="Submit Form">
<button type="submit">Submit Form<\/button>
<input type="image" src="graphic.gif">

//阻止表单提交
var form = document.getElementById("myForm");
EventUtil.addHandler(form, "submit", function(event){
	event = EventUtil.getEvent(event);
	EventUtil.preventDefault(event);//阻止订单的提交
});

var form = document.getElementById("myForm");
//提交表单
form.submit();

var form = document.getElementById("myForm");
EventUtil.addHandler(form, "reset", function(event){
	event = EventUtil.getEvent(event);
	//组织表单重置
	EventUtil.preventDefault(event);
});

var form = document.getElementById("myForm");
//重置表单
form.reset();

//表单字段
var form = document.getElementById("form1");
//获取表单中的第一个字段
var field1 = form.elements[0];
//取得名为textbox1的字段
var field2 = form.elements["textbox1"];
//表单中包含的字段数量
var fieldCount = form.elements.length;


//共有的表单字段属性
var form = document.getElementById("myForm");
var field = form.elements[0];
//改变value属性
field.value = "Another value";
//检查form属性的值
alert(field.form === form);//true
//把焦点设置到当前字段
field.focus();
//禁用当前字段
field.disabled = true;
//修改type属性
field.type = "checkbox";

//自动设置焦点
<input type="text" autofocus>

//共有的表单字段事件
var textbox = document.forms[0].elements[0];
EventUtil.addHandler(textbox, "focus", function(event){
	event = EventUtil.getEvent(event);
	var target = EventUtil.getTarget(event);
	if (target.style.backgroundColor != "red") {
		target.style.backgroundColor = "yellow";
	}
});


//==================================文本框脚本========================
//输入单行
<input type="text" size="25" maxlength="50" value="initial value">
//输入多行
<textarea rows="25" cols="5">initial value<\/textarea>
//文本框获得焦点时选择其所有文本
var textbox = document.forms[0-].elements["textbox1"];
EventUtil.addHandler(textbox, "focus", function(event){
	event = EventUtil.getEvent(event);
	var target = EventUtil.getTarget(event);
	target.select();
});


//select事件
var textbox = document.forms[0-].elements["textbox1"];
EventUtil.addHandler(textbox, "select", function(event){
	alert("Text selected" + textbox.value);
});


//选择部分脚本
var textbox = document.forms[0-].elements["textbox1"];
textbox.value = "Hello world!";
//选择所有文本
textbox.setSelectionRange(0, textbox.value.length);
//选择前三个字符
textbox.setSelectionRange(0, 3);
//选择第四到第六个字符
textbox.setSelectionRange(4,7);































