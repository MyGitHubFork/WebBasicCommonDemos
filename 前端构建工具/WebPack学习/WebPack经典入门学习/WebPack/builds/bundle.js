/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

	import './styles.scss';

	if (document.querySelectorAll('a').length) {
	    !/* require.ensure */(() => {
	        const Button = __webpack_require__(1);
	        const button = new Button('google.com');

	        button.render('a');
	    }(__webpack_require__));
	}

	if (document.querySelectorAll('h1').length) {
	    !/* require.ensure */(() => {
	        const Header = __webpack_require__(2);

	        new Header().render('h1');
	    }(__webpack_require__));
	}

/***/ },
/* 1 */
/***/ function(module, exports) {

	import $ from 'jquery';
	import template from './Button.html';
	import Mustache from 'mustache';
	import './Button.scss';

	export default class Button {
	    constructor(link) {
	        this.link = link;
	    }

	    onClick(event) {
	        event.preventDefault();
	        alert(this.link);
	    }

	    render(node) {
	        const text = $(node).text();

	        // Render our button
	        $(node).html(Mustache.render(template, {
	            text
	        }));

	        // Attach our listeners
	        $('.button').click(this.onClick.bind(this));
	    }
	}

/***/ },
/* 2 */
/***/ function(module, exports) {

	import $ from 'jquery';
	import Mustache from 'mustache';
	import template from './Header.html';
	import './Header.scss';

	export default class Header {
	    render(node) {
	        const text = $(node).text();

	        $(node).html(Mustache.render(template, { text }));
	    }
	}

/***/ }
/******/ ]);