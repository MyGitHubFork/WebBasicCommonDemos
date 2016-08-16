var CreateDiv = (function() {
    var instance;
    var CreateDiv = function(html) {
        if (instance) { //如果已经初始化了，就直接返回初始化的对象
            return instance;
        }
        this.html = html;
        this.init();
        return instance = this;
    };
    CreateDiv.prototype.init = function() {
        var div = document.createElement("div");
        div.innerHTML = this.html;
        document.body.appendChild(div);
    };
    return CreateDiv;
})();

var a = new CreateDiv('sven1');
var b = new CreateDiv('sven2');
console.log(a === b);
