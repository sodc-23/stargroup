/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/airplane.js":
/*!**********************************!*\
  !*** ./resources/js/airplane.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var airplane = function airplane() {
  var path = "M0 0c0 0 10.8 84.9 134 167 0 0 75.5 41.4 18 165 0 0-30.5 65 21 152 0 0 51.5 73.9 17 194l0.4 3.2c0 0 16.3 61.8-49.2 169.1 0 0-27.3 45.1-9.2 94.5 5.2 14.1 14.4 26.8 26.5 37 21.5 18.1 69.6 63.1 88.1 117.5 5.4 15.8 6.7 32.3 4.4 48.2 -4.2 28.7-22.3 54.1-48.8 70.4 -33 20.3-97.3 76.1-84.1 196.8 1.7 15.3 13.9 54.8 26.5 65.6 40.2 34.5 129.5 120.8 118.1 197.7 -4.3 74.7-72.3 100.4-72.3 100.4 -38.1 15.6-75.3 16-80.8 35.8",
      firstWalkerObj = $('.line > .walker')[0];
  localStorage.removeItem('quantityDisplayedWorks');
  var newAnimatedWalker;
  var scrollAnimateAirplane = {};
  var yCoord;
  var lastScrollTop = 0;

  if ($('.second-section').offset()) {
    scrollAnimateAirplane.topWrapperWhereAnimation = $('.second-section').offset().top - 500;
  }

  scrollAnimateAirplane.getCoord = function (type) {
    yCoord = $(window).scrollTop();

    if (!newAnimatedWalker) {
      generateWalker(firstWalkerObj).start();
    }

    var percent = ((yCoord - scrollAnimateAirplane.topWrapperWhereAnimation) / ($('.second-section').height() + $('.projects-section').height()) * 100).toFixed(1);

    if (percent >= 0 && percent <= 100) {
      newAnimatedWalker.pathAnimator.setProgress(percent);
      window.airplaneIsFinishedPath = false;
    }

    if (percent >= 100) {
      window.airplaneIsFinishedPath = true;
    }

    lastScrollTop = yCoord;
  };

  $(window).on('scroll', function (e) {
    scrollAnimateAirplane.getCoord('scroll');
  });
  $(window).on('load', function (e) {
    scrollAnimateAirplane.getCoord('load');
  });

  function AnimateWalker(walker) {
    this.pathAnimator = new PathAnimator(path);
    this.walker = walker;
    this.reverse = true;
    this.speed = 50000;
    this.easing = '';
    this.startOffset = 0;
    this.color = '#86d1f3';
  }

  AnimateWalker.prototype = {
    start: function start() {
      this.startOffset = this.reverse || this.speed < 0 ? 100 : 0;
      this.pathAnimator.context = this;
      this.pathAnimator.start(null, this.step, this.reverse, this.startOffset, this.finish, this.easing);
    },
    step: function step(point, angle) {
      this.walker.style.cssText = "top:" + point.y + "px;" + "left:" + point.x + "px;" + "transform:rotate(" + angle + "deg);" + "-webkit-transform:rotate(" + angle + "deg);" + "color:" + this.color;
    },
    finish: function finish() {}
  };

  function generateWalker(walkerObj) {
    newAnimatedWalker = new AnimateWalker(walkerObj);
    return newAnimatedWalker;
  }

  return scrollAnimateAirplane;
};

airplane();

/***/ }),

/***/ "./resources/js/editImgAndAnimateCircle.js":
/*!*************************************************!*\
  !*** ./resources/js/editImgAndAnimateCircle.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var timeOutId;

var editImgAndAnimateCircle = function editImgAndAnimateCircle() {
  var editImgAndAnimateCircle = {};
  var counter = 0;
  editImgAndAnimateCircle.imgs = {};
  editImgAndAnimateCircle.texts = {};
  editImgAndAnimateCircle.texts.$list = $('.second-section .losung div:not(.we-can)');
  editImgAndAnimateCircle.imgs.phone = 'phone.png';
  editImgAndAnimateCircle.imgs.pc = 'pc.png';
  editImgAndAnimateCircle.imgs.controlSystem = 'control-system.png';

  editImgAndAnimateCircle.stringToArray = function (str, option) {
    return str.split(option);
  };

  editImgAndAnimateCircle.arrayToString = function (arr, option) {
    return arr.join(option);
  };

  editImgAndAnimateCircle.changeImages = function () {
    var $img = $('.circle_img-devices');
    editImgAndAnimateCircle.texts.$list.removeClass('active');
    editImgAndAnimateCircle.texts.$list.eq(counter).addClass('active');
    $img.fadeOut();
    $($img.eq(counter)).fadeIn();
    counter++;

    if (counter == 3) {
      counter = 0;
    }
  };

  editImgAndAnimateCircle.init = function () {
    editImgAndAnimateCircle.changeImages();
    timeOutId = setInterval(editImgAndAnimateCircle.changeImages, 2500);
  };

  return editImgAndAnimateCircle;
};

$(window).load(function () {
  editImgAndAnimateCircle().init();
});

/***/ }),

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var script = '';

/***/ }),

/***/ "./resources/sass/admin.scss":
/*!***********************************!*\
  !*** ./resources/sass/admin.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************************************************************!*\
  !*** multi ./resources/js/airplane.js ./resources/js/editImgAndAnimateCircle.js ./resources/js/script.js ./resources/sass/app.scss ./resources/sass/admin.scss ***!
  \*****************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /app/resources/js/airplane.js */"./resources/js/airplane.js");
__webpack_require__(/*! /app/resources/js/editImgAndAnimateCircle.js */"./resources/js/editImgAndAnimateCircle.js");
__webpack_require__(/*! /app/resources/js/script.js */"./resources/js/script.js");
__webpack_require__(/*! /app/resources/sass/app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! /app/resources/sass/admin.scss */"./resources/sass/admin.scss");


/***/ })

/******/ });