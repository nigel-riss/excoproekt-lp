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

/***/ "./src/js/modules/BranchCard.js":
/*!**************************************!*\
  !*** ./src/js/modules/BranchCard.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar BranchCard =\n/*#__PURE__*/\nfunction () {\n  function BranchCard() {\n    _classCallCheck(this, BranchCard);\n\n    this.addEventsListeners();\n  }\n\n  _createClass(BranchCard, [{\n    key: \"addEventsListeners\",\n    value: function addEventsListeners() {\n      var _this = this;\n\n      document.addEventListener('click', function (evt) {\n        var hasSomeParentOfClass = function hasSomeParentOfClass(element, className) {\n          if (!element || !element.classList) return false;\n\n          if (element.classList.contains(className)) {\n            return element;\n          }\n\n          return element.parentNode && hasSomeParentOfClass(element.parentNode, className);\n        };\n\n        var branchCardSpoilerButton = hasSomeParentOfClass(evt.target, 'branch-card__open-spoiler');\n\n        if (branchCardSpoilerButton) {\n          _this.switchBranchCardSpoiler(branchCardSpoilerButton.parentNode.parentNode);\n        }\n      });\n    }\n  }, {\n    key: \"switchBranchCardSpoiler\",\n    value: function switchBranchCardSpoiler(branchCardElement) {\n      branchCardElement.classList.toggle('branch-card--open');\n    }\n  }]);\n\n  return BranchCard;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (BranchCard);\n\n//# sourceURL=webpack:///./src/js/modules/BranchCard.js?");

/***/ }),

/***/ "./src/js/modules/MobileMenu.js":
/*!**************************************!*\
  !*** ./src/js/modules/MobileMenu.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar MobileMenu =\n/*#__PURE__*/\nfunction () {\n  function MobileMenu() {\n    _classCallCheck(this, MobileMenu);\n\n    this.headerTop = document.querySelector('.header__top');\n\n    if (this.headerTop) {\n      this.menuButton = this.headerTop.querySelector('.menu-button');\n      this.mainNav = this.headerTop.querySelector('.header__nav');\n      this.resetDOM();\n      this.addEventListeners();\n    }\n  }\n\n  _createClass(MobileMenu, [{\n    key: \"addEventListeners\",\n    value: function addEventListeners() {\n      var _this = this;\n\n      this.menuButton.addEventListener('click', function () {\n        _this.toggleMenu();\n      });\n    }\n  }, {\n    key: \"resetDOM\",\n    value: function resetDOM() {\n      this.menuButton.classList.remove('menu-button--close');\n      this.mainNav.classList.add('header__nav--closed');\n    }\n  }, {\n    key: \"toggleMenu\",\n    value: function toggleMenu() {\n      this.menuButton.classList.toggle('menu-button--close');\n      this.mainNav.classList.toggle('header__nav--closed');\n    }\n  }]);\n\n  return MobileMenu;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (MobileMenu);\n\n//# sourceURL=webpack:///./src/js/modules/MobileMenu.js?");

/***/ }),

/***/ "./src/js/modules/PriceTable.js":
/*!**************************************!*\
  !*** ./src/js/modules/PriceTable.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError(\"Cannot call a class as a function\"); } }\n\nfunction _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if (\"value\" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }\n\nfunction _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }\n\nvar PriceTable =\n/*#__PURE__*/\nfunction () {\n  function PriceTable() {\n    _classCallCheck(this, PriceTable);\n\n    this.addEventsListers();\n  }\n  /**\r\n   * Add click listener to toggle spoilers\r\n   */\n\n\n  _createClass(PriceTable, [{\n    key: \"addEventsListers\",\n    value: function addEventsListers() {\n      var _this = this;\n\n      document.addEventListener('click', function (evt) {\n        var hasSomeParentOfClass = function hasSomeParentOfClass(element, className) {\n          if (!element || !element.classList) return false;\n\n          if (element.classList.contains(className)) {\n            return element;\n          }\n\n          return element.parentNode && hasSomeParentOfClass(element.parentNode, className);\n        };\n\n        var priceListRow = hasSomeParentOfClass(evt.target, 'price-table__row');\n\n        if (priceListRow) {\n          _this.switchPriceListRow(priceListRow);\n        }\n      });\n    }\n    /**\r\n     * Switch price-list__row state (open/closed)\r\n     * @param {HTMLElement} rowElement price-list__row to toggle\r\n     */\n\n  }, {\n    key: \"switchPriceListRow\",\n    value: function switchPriceListRow(rowElement) {\n      this.collapseAllRows(rowElement);\n      rowElement.classList.toggle('price-table__row--open');\n    }\n  }, {\n    key: \"collapseAllRows\",\n    value: function collapseAllRows(currentRow) {\n      var priceListRows = document.querySelectorAll('.price-table__row');\n      var _iteratorNormalCompletion = true;\n      var _didIteratorError = false;\n      var _iteratorError = undefined;\n\n      try {\n        for (var _iterator = priceListRows[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {\n          var row = _step.value;\n          if (row != currentRow) row.classList.remove('price-table__row--open');\n        }\n      } catch (err) {\n        _didIteratorError = true;\n        _iteratorError = err;\n      } finally {\n        try {\n          if (!_iteratorNormalCompletion && _iterator[\"return\"] != null) {\n            _iterator[\"return\"]();\n          }\n        } finally {\n          if (_didIteratorError) {\n            throw _iteratorError;\n          }\n        }\n      }\n    }\n  }]);\n\n  return PriceTable;\n}();\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (PriceTable);\n\n//# sourceURL=webpack:///./src/js/modules/PriceTable.js?");

/***/ }),

/***/ "./src/js/scripts.js":
/*!***************************!*\
  !*** ./src/js/scripts.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/MobileMenu */ \"./src/js/modules/MobileMenu.js\");\n/* harmony import */ var _modules_PriceTable__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/PriceTable */ \"./src/js/modules/PriceTable.js\");\n/* harmony import */ var _modules_BranchCard__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/BranchCard */ \"./src/js/modules/BranchCard.js\");\n\n\n\nvar mobileMenu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_0__[\"default\"]();\nvar priceTable = new _modules_PriceTable__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\nvar branchCard = new _modules_BranchCard__WEBPACK_IMPORTED_MODULE_2__[\"default\"]();\n\n//# sourceURL=webpack:///./src/js/scripts.js?");

/***/ })

/******/ });