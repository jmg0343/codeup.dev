"use strict";

var allCones = Math.floor(Math.random() * 50) + 50;

console.log("I have " + allCones + " to sell.");
do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if (allCones >= cones) {
		console.log(cones + " sold, " + (allCones - cones) + " left.");
		allCones = allCones - cones;
	}
	else if (allCones < cones) {
		console.log("I cannot sell you " + cones + " cones.");
	} 
} while (allCones > 0);
	console.log("Finally sold them all!");


