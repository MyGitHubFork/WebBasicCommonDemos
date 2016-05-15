<?php
	//服务器端
//这两句话很重要，第一句话告诉浏览器返回的数据格式 xml  json
header("Content-Type:text/html;charset=utf-8");
//告诉浏览器不要缓存数据
header("Cache-Control: no-cache");

//
$cities=$_POST['city'];
// $temp="";
// for ($i=0; $i < count($cities); $i++) { 
// 	$temp.=$cities[$i];
// }


// $info="";
// if ($province=="zhejiang") {
// 	$info="<province><city>杭州</city><city>温州</city><city>宁波</city></province>";
// }else if($province=="jiangsu"){
// 	$info="<province><city>南京</city><city>徐州</city><city>苏州</city></province>";
// }

//产生随机生成 三个 500到两千的数字
$res='[';
for ($i=0; $i<count($cities); $i++) { 
	if ($i==count($cities)-1) {
		$res.='{"cityname":"'.$cities[$i].'" ,"price":"'.rand(500,1500).'"}]';
	}else{
		$res.='{"cityname":"'.$cities[$i].'" ,"price":"'.rand(500,1500).'"},';
	}
}
//如何在调试过程中，看到接收到的数据？
file_put_contents("/Library/WebServer/Documents/ajax/mylog.txt",$res."\r", FILE_APPEND);
echo $res;
?>