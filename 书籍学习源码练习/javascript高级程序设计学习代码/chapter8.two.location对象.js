//解析URL
function getQueryStringArgs() {
    //取得查询字符串并去掉开头的问号
    var qs = (location.search.length > 0 ? location.search.substring(1) : ""),
        //保存数据的对象
        args = {},
        //取得每一项
        items = qs.length ? qs.split("&") : [],
        item = null,
        name = null,
        value = null,
        i = 0,
        len = items.length;
    for (i = 0; i < len; i++) {
        item = items[i].split("=");
        name = decodeURIComponent(item[0]);
        value = decodeURIComponent(item[1]);
        if (name.length) {
            args[name] = value;
        }
    }
    return args;
}
getQueryStringArgs();

//在URL等于https://www.baidu.com/index.php?q=javascript&num=10测试
var args = getQueryStringArgs();
alert(args["q"]); //"javascript"
alert(args["num"]); //"10"


//下面三个方法功能一样
location.assign("http://www.baidu.com");
window.location = "http://www.baidu.com";
location.href = "http://www.baidu.com";


//假设初始URL为http://www.wrox.com/WileyCDA/
//将URL修改为http://www.wrox.com/WileyCDA/#section1
location.hash = "#section1";
//将URL修改为"http://www.wrox.com/WileyCDA/?q=javascript"
location.search = "?q=javascript";
//将URL修改为"http://www.yahoo.com/WileyCDA/"
location.hostname = "www.yahoo.com";
//将URL修改为“http://www.yahoo.com/mydir/"
location.pathname = "mydir";
