<?php
    require_once "SqlHelper.class.php";
class MessageService{
//存储消息
function addMessage($sender,$getter,$con) {
//创建SQL语句
$sql="insert into messages (sender,getter,content,sendTime) values('$sender','$getter','$con',now())";
file_put_contents("/Library/WebServer/Documents/ajax/mylog.txt",$sql."\r", FILE_APPEND);
$sqlHelper=new SqlHelper();
 return $sqlHelper->execute_dml($sql);
}
}