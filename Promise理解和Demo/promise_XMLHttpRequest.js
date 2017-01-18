/*
* @Author: huangchengdu
* @Date:   2017-01-16 16:21:53
* @Last Modified by:   huangchengdu
* @Last Modified time: 2017-01-16 17:38:20
*/

function getURL(url) {
	return new Promise(function (resolve,reject) {
		var req = new XMLHttpRequest();
		req.open('GET',url,true);
		req.onload = function() {
			if (req.status === 200) {
				resolve(req.responseText);
			}else{
				reject(new Error(req.statusText));
			}
		};
		req.onerror = function () {
			reject(new Error(req.statusText));
		};
		req.send();
	});
}

var url = "http://httpbin.org/get";
getURL(url).then(function onFulfilled(value) {
	console.log(value);
}).catch(function onRejected(error) {
	console.log(error);
});
