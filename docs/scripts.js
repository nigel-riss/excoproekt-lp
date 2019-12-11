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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/scripts.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/modules/Map.js":
/*!*******************************!*\
  !*** ./src/js/modules/Map.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nclass Map {\r\n  constructor() {\r\n    ymaps.ready(() => {\r\n      this.addMap();\r\n    });\r\n  }\r\n\r\n  addMap() {\r\n    this.map = new ymaps.Map(document.querySelector('.contacts__map'), {\r\n      center: [54.71460023478118, 20.50844839216279],\r\n      zoom: 16,\r\n      controls: [],\r\n    });\r\n\r\n    this.map.behaviors.disable([\r\n      'drag',\r\n      'multiTouch',\r\n    ]);\r\n\r\n    const marker = new ymaps.Placemark([54.71460023478118, 20.50844839216279]);\r\n    this.map.geoObjects.add(marker);\r\n\r\n    // const logoMarker = new ymaps.Placemark(\r\n    //   [54.72320, 20.50786], \r\n    //   {},\r\n    //   {\r\n    //     // Опции.\r\n    //     // Необходимо указать данный тип макета.\r\n    //     iconLayout: 'default#image',\r\n    //     // Своё изображение иконки метки.\r\n    //     iconImageHref: 'img/icons/map-marker.svg',\r\n    //     // Размеры метки.\r\n    //     iconImageSize: [72, 72],\r\n    //     // Смещение левого верхнего угла иконки относительно\r\n    //     // её \"ножки\" (точки привязки).\r\n    //     iconImageOffset: [-36, -72]\r\n    // });\r\n\r\n    // this.map.geoObjects.add(logoMarker);\r\n  }\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (Map);\r\n\n\n//# sourceURL=webpack:///./src/js/modules/Map.js?");

/***/ }),

/***/ "./src/js/modules/MobileMenu.js":
/*!**************************************!*\
  !*** ./src/js/modules/MobileMenu.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nclass MobileMenu {\r\n  constructor() {\r\n    this.headerTop = document.querySelector('.header__top');\r\n    this.menuButton = document.querySelector('.menu-button');\r\n    this.mainNav = document.querySelector('.main-nav');\r\n\r\n    if (this.headerTop) {\r\n      this.resetDOM();\r\n      this.addEvents();\r\n    }\r\n  };\r\n\r\n  addEvents() {\r\n    this.menuButton.addEventListener('click', () => {\r\n      this.switchMenu();\r\n    });\r\n  };\r\n\r\n  resetDOM() {\r\n    this.headerTop.classList.remove('header__top--green');\r\n    this.mainNav.classList.add('main-nav--hidden');\r\n    this.menuButton.classList.remove('menu-button--close');\r\n  };\r\n\r\n  switchMenu() {\r\n    this.headerTop.classList.toggle('header__top--green');\r\n    this.mainNav.classList.toggle('main-nav--hidden');\r\n    this.menuButton.classList.toggle('menu-button--close');\r\n  };\r\n}\r\n\r\n/* harmony default export */ __webpack_exports__[\"default\"] = (MobileMenu);\r\n\n\n//# sourceURL=webpack:///./src/js/modules/MobileMenu.js?");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/MobileMenu */ \"./src/js/modules/MobileMenu.js\");\n/* harmony import */ var _modules_Map__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/Map */ \"./src/js/modules/Map.js\");\n\r\n// import Spoiler from './modules/Spoiler';\r\n\r\n\r\nconst menu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\r\n// const spoiler = new Spoiler();\r\nconst map = new _modules_Map__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\r\n\n\n//# sourceURL=webpack:///./src/js/scripts.js?");

/***/ })

/******/ });