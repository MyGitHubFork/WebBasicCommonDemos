<?php
	header("Content-Type: text/html;charset=utf-8");

	$username=$_GET['username'];
	if($username == "shunping"){
		echo "err";
	}else{
		echo "ok";
	}
?>