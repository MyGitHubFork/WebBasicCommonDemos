//创建ajax引擎
function getXmlHttpObject() {
    var xmlHttpRequest;
    //不同浏览器获取xmlhttprequest对象的方法不一样
    if (window.ActiveXobject) {
        xmlHttpRequest = new ActiveXobject("Microsoft.XMLHTTP");
    } else {
        xmlHttpRequest = new XMLHttpRequest();
    }
    return xmlHttpRequest;
}

function $(id) {
    return document.getElementById(id);
}
