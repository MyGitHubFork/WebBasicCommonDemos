<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<script type="text/javascript" src="my.js"></script> 
<script type="text/javascript">
  function change1(val,obj){
  if(val=="over"){
  obj.style.color="red";
  obj.style.cursor="pointer";

  }else if(val=="out"){
          obj.style.color="black";
  }
}
    //相应点击新的聊天窗口
   function openChatRoom(obj){
    //打开小新窗口
//因为open 是get方式提交，到服务器后就会变乱码 所以需要编码
        window.open("chatRoom.php?username="+encodeURI(obj.innerText),"_blank");

   }
</script>

</head>


<h1>好友列表</h1>
<ul>
   <li onmouseover="change1('over',this)" onmouseout="change1('out',this)" onclick="openChatRoom(this)">宋江</li>
   <li onmouseover="change1('over',this)" onmouseout="change1('out',this)"  onclick="openChatRoom(this)">张飞</li>
   <li onmouseover="change1('over',this)" onmouseout="change1('out',this)"  onclick="openChatRoom(this)" >小倩</li>
</ul>

</html>