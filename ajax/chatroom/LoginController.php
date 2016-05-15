<?php

//接收用户多的名字和密码
$loginUser=$_POST['username'];
$pwd=$_POST['passwd'];

//判断是否合法
if($pwd=="123"){
 //把用户的名字保存下来,通过session来保存这次会话的登陆用户
 session_start();
 $_SESSION['loginuser']=$loginUser;
//跳转到好友列表
header("Location:friendList.php");

}
else{//不合法
header("Location:login.php");
}
?>