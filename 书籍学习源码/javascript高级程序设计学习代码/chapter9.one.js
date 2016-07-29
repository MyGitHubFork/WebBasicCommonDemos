//确定浏览器是否支持Netscape风格的插件
var hasNSPlugins = !!(navigator.plugins && navigator.plugins.length);
//确定浏览器是否具有DOM1级规定的能力
var hasDOM1 = !!(document.getElementById && document.createElement && document.getElementsByTagName);
