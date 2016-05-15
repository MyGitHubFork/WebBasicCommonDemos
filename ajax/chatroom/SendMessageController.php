<?php
require_once "MessageService.class.php";
$getter=$_POST['getter'];
$sender=$_POST['sender'];
$con=$_POST['con'];


file_put_contents("/Library/WebServer/Documents/ajax/mylog.txt",$getter."---".$sender."---".$con."\r", FILE_APPEND);

$messageService=new MessageService();
$res=$messageService->addMessage($sender,$getter,$con);
if($res==1) {
//success
}else{
echo "err";
}
?> 