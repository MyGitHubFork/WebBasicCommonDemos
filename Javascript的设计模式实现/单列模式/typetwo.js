var Singleton = function(name) {
    this.name = name;
};
Singleton.prototype.getName = function() {
    return this.name;
};
Singleton.getInstance = (function() {
    var instance = null;
    return function(name) {
        if (!instance) {
            instance = new Singleton(name);
        }
        return instance;
    };
})();

var a = Singleton.getInstance('sven1');
var b = Singleton.getInstance('sven2');
console.log(a === b);
