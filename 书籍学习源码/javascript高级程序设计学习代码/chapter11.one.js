//=========================DOM扩展============================
//querySelector
//取得body元素
var body = document.querySelector("body");
//取得ID为"myDiv"的元素
var myDiv = document.querySelector("#myDiv");
//取得类为selected的第一个元素
var selected = document.querySelector(".selected");
//取得类为button的第一个图像元素
var img = document.body.querySelector("img.button");

//querySelectorAll();
//获取某div种的所有em元素
var ems = document.getElementById("myDiv").querySelectorAll("em");
//取得类为selected的所有元素
var selecteds = document.querySelectorAll(".selected");
//取得p元素中的所有strong元素
var strongs = document.querySelectorAll("p strong");


