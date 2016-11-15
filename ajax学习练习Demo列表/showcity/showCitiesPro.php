<?php
	//服务器端
//这两句话很重要，第一句话告诉浏览器返回的数据格式 xml  json
header("Content-Type:text/xml;charset=utf-8");
//告诉浏览器不要缓存数据
header("Cache-Control: no-cache");

//接收用户选择的省的名字
$province=$_POST['province'];

//如何在调试过程中，看到接收到的数据？
file_put_contents("/Library/WebServer/Documents/ajax/mylog.txt",$province."\r", FILE_APPEND);

$info="";
if ($province=="zhejiang") {
	$info="<province><city>杭州</city><city>温州</city><city>宁波</city></province>";
}else if($province=="jiangsu"){
	$info="<province><city>南京</city><city>徐州</city><city>苏州</city></province>";
}


echo $info;
?>