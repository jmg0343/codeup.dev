"use strict";

var navbarLinkElements = document.getElementsByTagName("a");


var delay = 2000;
var timeoutID = setTimeout(function () {
	for (var i = 0; i<navbarLinkElements.length; i++) {
		var link = "http://espn.com";
		navbarLinkElements[i].setAttribute("href", link);
		// console.log(navbarLinkElements[i]);
		// navbarLinkElements[i].style.fontFamily = "fantasy";
	}
}, delay);
