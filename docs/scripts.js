!function(e){var n={};function t(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:r})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(t.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(r,o,function(n){return e[n]}.bind(null,o));return r},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=0)}([function(e,n,t){"use strict";function r(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}t.r(n);var o=function(){function e(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e),this.menuButton=document.querySelector(".menu-button"),this.mainNav=document.querySelector(".main-nav"),this.resetDOM(),this.addEvents()}var n,t,o;return n=e,(t=[{key:"addEvents",value:function(){var e=this;this.menuButton.addEventListener("click",(function(){e.switchMenu()}))}},{key:"resetDOM",value:function(){this.mainNav.classList.add("main-nav--hidden"),this.menuButton.classList.remove("menu-button--close")}},{key:"switchMenu",value:function(){this.mainNav.classList.toggle("main-nav--hidden"),this.menuButton.classList.toggle("menu-button--close")}}])&&r(n.prototype,t),o&&r(n,o),e}();function a(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var u=function(){function e(){var n=this;!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e),ymaps.ready((function(){n.addMap()}))}var n,t,r;return n=e,(t=[{key:"addMap",value:function(){this.map=new ymaps.Map(document.querySelector("#map"),{center:[54.71460023478118,20.50844839216279],zoom:16,controls:[]});var e=new ymaps.Placemark([54.71460023478118,20.50844839216279]);this.map.geoObjects.add(e)}}])&&a(n.prototype,t),r&&a(n,r),e}();new o,new u}]);