//高阶函数
var appendDiv = function(callback) {
    for (var i = 0; i < 100; i++) {
        var div = document.createElement("div");
        div.innerHTML = i;
        document.body.appendChild(div);
        if (typeof callback === "function") {
            callback(div);
        }
    }
};
appendDiv(function(node) {
    node.style.display = "none";
});

[1, 4, 3].sort(function(a, b) {
    return b - a;
});

//函数作为返回值
var isType = function(type) {
    return function(obj) {
        return Object.prototype.toString.call(obj) === "[Object" + type + "]";
    }
};
var isString = isType("String");
var isArray = isType("Array");
console.log(isArray([1, 2, 3]));

//单列
var getSingle = function(fn) {
    var ret;
    return function() {
        return ret || (ret = fn.apply(this, arguments));
    };
};
var getScript = getSingle(function() {
    return document.createElement("script");
});
var script1 = getScript();
var script2 = getScript();
console.log(script1 === script2);


//高阶函数实现AOP
Function.prototype.before = function(beforefn) {
    var __self = this; // 保存原函数的引用
    return function() { // 返回包含了原函数和新函数的"代理"函数
        beforefn.apply(this, arguments);
        return __self.apply(this, arguments);
        Function.prototype.after = function(afterfn) {
            var __self = this;
            return function() {
                // 执行新函数,修正 this // 执行原函数
            }
        };
        var ret = __self.apply(this, arguments);
        afterfn.apply(this, arguments);
        return ret;
    }
};
var func = function() {
    console.log(2);
};
func = func.before(function() {
    console.log(1);
}).after(function() {
    console.log(3);
});
func();







