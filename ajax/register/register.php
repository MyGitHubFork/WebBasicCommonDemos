<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
   
    
    <title>用户注册</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->
<script type="text/javascript">

	//定义一个http_request
	var http_request;
	//发送请求到服务器[用户名]
	function sendRequest(){
	
			//得到用户输入的用户名
			//
			var u = document.getElementById("username").value;
			//var u = "123";

			//window.alert(u);
			
			//创建ajax引擎,ajax根据用户使用的浏览器不同，会创建不同的ajax引擎
			
			if(window.ActiveXObject){
				
				//window.alert("ie");
				//说明用户是ie浏览器
				http_request=new ActiveXObject("Microsoft.XMLHTTP");
			}else{
				
				//window.alert("no ie");
				//别的浏览器
				http_request=new XMLHttpRequest();
			}
			
			
			//如果ajax引擎创建ok
			if(http_request){
				
				//window.alert("ajax引擎创建ok");
				//请求一个servlet去验证用户是否存在.
				var url="UserCheck.php?username="+u;
				
				//打开url,准备发送,,true表示同步处理
				http_request.open("get",url,true);
				
				//指定一个函数[回调函数]，处理从服务器返回的结果.
				http_request.onreadystatechange=chuli;
				
				//发送请求
				
				http_request.send();
				
			}
		
		
		
	}
	
	//处理函数
	function chuli(){
		
		//成功返回
		if(http_request.readyState==4){
			
			if(http_request.status==200){
				
				//从ajax引擎中取出结果
				var res=http_request.responseText;
				window.alert("服务器返回了:"+res);
				
				if(res=="err"){
					//提示该用户名不可用
					 document.getElementById("myres").value="该用户不可用吧";
				}else{
					
					document.getElementById("myres").value="恭喜，你可使用该用户名吧";
				}
			}
			
		}
	}




</script>
  </head>
  
  <body>
    <form action="???" method="post">
    用户名字:<input type="text" name="username1" id="username"><input type="button" onclick="sendRequest()" value="验证用户名">
    <input style="border-width: 0" type="text" id="myres">
    <br/>
    用户密码:<input type="password" name="password"><br>
    电子邮件:<input type="text" name="email"><br/>
    <input type="submit" value="用户注册">
    </form>
     <form action="???" method="post">
    用户名字:<input type="text" name="username2" >
   
    <br/>
    用户密码:<input type="password" name="password"><br>
    电子邮件:<input type="text" name="email"><br/>
    <input type="submit" value="用户注册">
    </form>
  </body>
</html>
