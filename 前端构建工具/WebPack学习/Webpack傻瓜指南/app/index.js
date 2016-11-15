/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:45:19
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 16:44:57
 */

var sub = require('./sub');
//require('./main.css');
require('./main.scss');

var $ = require('jquery');
var moment = require('moment');

var app = document.createElement('div');
app.innerHTML = '<h1>Hello World test</h1>';
app.appendChild(sub());
document.body.appendChild(app);

$('body').append('<p>look at me! now is ' + moment().format() + '</p>');

