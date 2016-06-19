//===========================Node类型===============================
var firstChild = someNode.childNodes[0];
var secondChild = someNode.childNodes.item(1);
var count = someNode.childNodes.length;

//把nodeList转换为数组
var arrayOfNodes = Array.prototype.slice.call(someNode.childNodes, 0);

if (someNode.nodeType == 1) {
    var value = someNode.nodeValue;
    var name = someNode.nodeName;
}

//兼容IE
function converToArray(nodes) {
    var array = null;
    try {
        array = Array.prototype.slice.call(nodes, 0); //非IE浏览器
    } catch (ex) {
        array = new Array();
        for (var i = 0, len = nodes.length; i < len; i++) {
            array.push(nodes[i]);
        }
    }
    return array;
}

//同胞节点
if (someNode.nextSibling === null) {
    console.log("这是节点的最后一个节点");
} else if (someNode.previousSibling === null) {
    console.log("第一个节点");
}


//节点操作
var returnedNode = someNode.appendChild(newNode);
console.log(returnedNode == newNode); //true

//插入最后
var returnedNode = someNode.insertBefore(newNode, null);
console.log(newNode == someNode.lastChild);

//节点替换
var returnedNode = someNode.replaceChild(newNode, someNode.firstChild);

//移除节点
var formerFirstChild = someNode.removeChild(someNode.firstChild);

//深复制  同时复制子节点  浅复制  不复制子节点

//===========================Document类型===============================
//获取html节点
var html =  document.documentElement;
console.log(html === document.childNodes[0]);
console.log(html === document.firstChild);

//文档标题
var originalTitle = document.title;
document.title = "New page title";


var url = document.URL;
var domain = document.domain;
var referrer = document.referrer;
console.log(url);
console.log(domain);
console.log(referrer);


//把内容动态写入html
<html>
	<head>
		<title>document.write() example</title>
	</head>
	<body>
	<script type="text/javascript">
		<p>当前时间是:</p>
		document.write("<strong>" + (new Date()).toString() + "</strong>");
		</script>
	</body>
</html>


//==============================Element类型===========================
//<div id="myDiv" class="bd" title="Body text" lang="en" dir="ltr"></div>;

console.log(div.id);
console.log(div.className);
console.log(div.title);
console.log(div.lang);
console.log(div.dir);

var div = document.getElementById("myDiv");
div.setAttribute("id", "someOtherId");
div.removeAttribute("class");
console.log(div.getAttribute("id"));
console.log(div.getAttribute("class"));
console.log(div.getAttribute("title"));
console.log(div.getAttribute("lang"));
console.log(div.getAttribute("dir"));

//创建元素
var div = document.createElement("div");
div.id = "myNewDiv";
div.className = "box";
document.body.appendChild(div);
//另一种方式创建元素
var div = document.createElement("<div id=\"myNewDiv\" class=\"box\"></div >");

//==============================Text类型===========================
//<div>Hello World!</div>
var textNode = div.firstChild;
var textNode = div.childNodes[0];
div.firstChild.nodeValue = "Some other message";

var element = document.createElement("div");
element.className = "message";
var textNode = document.createTextNode("<strong>Hello</strong> world!");
element.appendChild(textNode);
document.body.appendChild(element);

//textNode节点合并
var element = document.createElement("div");
element.className = "message";
var textNode = document.createTextNode("Hello world!");
element.appendChild(textNode);
var anotherTextNode = document.createTextNode("Yippee!");
element.appendChild(anotherTextNode);
document.body.appendChild(element);
console.log(element.childNodes.length);//2
element.normalize();//textnode合并
console.log(element.childNodes.length);//1
console.log(element.firstChild.nodeValue);//"Hello world!Yippee!"


//分割文本节点
var element = document.createElement("div");
element.className = "message";
var textNode = document.createTextNode("Hello world!");
element.appendChild(textNode);
document.body.appendChild(element);
var newNode = element.firstChild.splitText(5);
console.log(element.firstChild.nodeValue);//Hello
console.log(newNode.nodeValue);//world!
console.log(element.childNodes.length);//2

//==============================Comment类型===========================
//<div id="myDiv"><!--A comment --></div>
var div = document.getElementById("myDiv");
var comment = div.firstChild;
console.log(comment.data);// "A comment"

//==============================CDATASection类型===========================

//==============================DocumentFragment类型===========================
//批量添加节点
//<ul id="myList"></ul>
var fragment = document.createDocumentFragment();
var ul = document.getElementById("myList");
var li = null
for (var i = 0; i < 3; i++) {
    li = document.createElement("li");
    li.appendChild(document.createTextNode("Item" + (i + 1)));
    fragment.appendChild(li);
}
ul.appendChild(fragment);


//==============================Attr类型===========================
var attr = document.createAttribute("align");
vttr.value = "left";
element.setAttributeNode(attr);
console.log(element.attributes["align"].value);//left
console.log(element.getAttributeNode("align").value);//left
console.log(element.getAttribute("align"));//left



























