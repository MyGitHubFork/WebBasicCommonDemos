<?php
session_start();
?>

<html>
<head>
  <?php
//这里取出session保存的登陆者信息
  //session_start();
  $loginuser=$_SESSION['loginuser'];

     //接收window.open传递的用户名
  $username=$_GET['username'];
 //使用php方法消去名字后面的空格
  $username=trim($username);

 
  ?> 
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <script type="text/javascript" src="my.js"></script>
  <script type="text/javascript">
   window.resizeTo(500,700);

   function sendMessage(){ //用ajax 技术来实现了
  //1.创建一个XmlHttpRequest对象
  var myXmlHttpRequest=getXmlHttpObject();
  if(myXmlHttpRequest){
    var url="SendMessageController.php";
  //js中如何使用php的数据!!1如何这这里获得发送人是谁  只有在登陆的时候才知道发送人

  var data="con="+$("con").value+"&getter=<?php echo $username; ?>&sender=<?php echo $loginuser; ?>"; 
  window.alert(data);

  //要发的内容
  //2 
  myXmlHttpRequest.open("post",url,true);
          myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");//这是post方式必须加的
  //指定函数
  myXmlHttpRequest.onreadystatechange=function (){
    if(myXmlHttpRequest.readyState==4){
     if(myXmlHttpRequest.status==200){
                                        //这里是要得到的信息
                                      }
                                    }
      };
      myXmlHttpRequest.send(data);
    }
  }
  </script>

</head>
<center>
  <h1>聊天室(<font color="red"><?php echo $loginuser;?></font>正在和<font color="red"><?php echo $username;?></font>聊天)</h1>
  <textarea cols="50" rows="20"></textarea></br/>
  <input type="text" style="width:300px" id="con"/>
  <input type="button" value="发送信息" onclick="sendMessage()"/>
</center>
</html>