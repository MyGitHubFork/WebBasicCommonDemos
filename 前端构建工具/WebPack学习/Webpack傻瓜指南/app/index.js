/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:45:19
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 15:47:33
 */

var sub = require('./sub');
var app = document.createElement('div');
app.innerHTML = '<h1>Hello World</h1>';
app.appendChild(sub());
document.body.appendChild(app);
