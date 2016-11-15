import './main.scss';
import $ from 'jquery';
import 'imports?jQuery=jquery!./plugin.js';
$(document).ready(function() {
    let app = document.createElement('div');
    app.innerHTML = '<h1>Hello World</h1>';
    document.body.appendChild(app);
    $('h1').greenify(); });
