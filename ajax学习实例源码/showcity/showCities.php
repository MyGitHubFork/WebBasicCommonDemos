<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta  http-equiv="content-type" content="text/html;charset=utf-8" />
	<title></title>
	<script type="text/javascript">
		//创建ajax引擎
		function getXmlHttpObject(){
			var xmlHttpRequest;
			//不同浏览器获取xmlhttprequest对象的方法不一样
			if (window.ActiveXobject) {
				xmlHttpRequest = new ActiveXobject("Microsoft.XMLHTTP");
			}else{
				xmlHttpRequest = new XMLHttpRequest();
			}
			return xmlHttpRequest;
		}

		var myXmlHttpRequest = "";

		function getCities() {
			myXmlHttpRequest = getXmlHttpObject();
			if (myXmlHttpRequest) {
				//window.alert("成功");
				var url = "/ajax/showCitiesPro.php";//post
				var data = "province=" + $('sheng').value;

				myXmlHttpRequest.open("post",url,true);//异步
				//还有一句话，这句话必须.
				myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				//指定回调函数
				myXmlHttpRequest.onreadystatechange = chuli;
				//发送
				myXmlHttpRequest.send(data);

			}
		}

		function chuli(){
			if (myXmlHttpRequest.readyState == 4) {
				if (myXmlHttpRequest.status == 200) {
					//取出服务器回送数据
					var cities = myXmlHttpRequest.responseXML.getElementsByTagName("city");
					//window.alert(cities.length);
					$('city').length = 0;
					var myoption = document.createElement("option");
						myoption.innerText = "--城市--";
						$('city').appendChild(myoption);
					//遍历并取出城市
					for (var i = 0; i < cities.length; i++) {
						var city_name = cities[i].childNodes[0].nodeValue;
						//window.alert(city_name);
						//创建新的元素option
						var myoption = document.createElement("option");
						myoption.value = city_name;
						myoption.innerText = city_name;
						$('city').appendChild(myoption);

					}
				}
			}
		}

		function $(id){
			return document.getElementById(id);
		}
	</script>
</head>
<body>
	<select id="sheng" onchange="getCities();">
		<option value="">---省---</option>
		<option value="zhejiang">浙江</option>
		<option value="jiangsu">江苏</option>
	</select>
	<select id="city" onchange="sendRequest();">
		<option value="">--城市--</option>
	</select>
	<select id="county" onchange="sendRequest();">
		<option value="">--县城--</option>
	</select>
</body>
</html>