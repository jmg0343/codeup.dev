"use strict";

var bottles = 99;

do {
	if (bottles > 0) {
		console.log(bottles + " bottles of beer on the wall");
		bottles--;
	}

} while (bottles > 1);
console.log("1 bottle of beer on the wall");
console.log("Message about no more beer");