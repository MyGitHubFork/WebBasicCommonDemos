/*
* @Author: huangchengdu
* @Date:   2016-11-15 18:09:39
* @Last Modified by:   huangchengdu
* @Last Modified time: 2016-11-15 18:09:52
*/

import './main.scss';
import $ from 'jquery';
import 'imports?jQuery=jquery!./plugin.js';

$(document).ready(function() {
  let app  = document.createElement('div');
  app.innerHTML = '<h1>Hello World</h1>';
  document.body.appendChild(app);
  $('h1').greenify();
});
