/*
 * @Author: huangchengdu
 * @Date:   2016-11-15 15:45:19
 * @Last Modified by:   huangchengdu
 * @Last Modified time: 2016-11-15 16:52:05
 */

//var sub = require('./sub');
import generateText from './sub';

//require('./main.css');

require('./main.scss');

var $ = require('jquery');
var moment = require('moment');

// var app = document.createElement('div');
// app.innerHTML = '<h1>Hello World test</h1>';
// app.appendChild(sub());
// document.body.appendChild(app);

// $('body').append('<p>look at me! now is ' + moment().format() + '</p>');


//================下面是es6语法
let app = document.createElement('div');
const myPromise = Promise.resolve(42);
myPromise.then((number) => { 
	$('body').append('<p>promise result is ' + number + ' now is ' + moment().format() + '</p>'); 
});
app.innerHTML = '<h1>Hello World it</h1>';
document.body.appendChild(app);
app.appendChild(generateText());
