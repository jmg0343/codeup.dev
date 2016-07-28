"use strict";

var luckyNumber = Math.floor(Math.random()* 6);

var number0 = 60;
var number1 = number0 - (60 * .1);
var number2 = number0 - (60 * .25);
var number3 = number0 - (60 * .35);
var number4 = number0 - (60 * .5);

switch (luckyNumber) {
	case 0:
		console.log(number0.toFixed(2) + " No discount");
		break;
	case 1:
		console.log(number1.toFixed(2) + ", 10% discount");
		break;
	case 2:
		console.log(number2.toFixed(2) + ", 25% discount");
		break;
	case 3:
		console.log(number3.toFixed(2) + ", 35% discount");
		break;
	case 4:
		console.log(number4.toFixed(2) + ", 50% discount");
		break;
	default:
		console.log("You get it for free!!")
		break;
}


var monthNumber = Math.floor((Math.random()* 12) +1);

switch (monthNumber) {
	case 1:
		console.log("January");
		break;
	case 2:
		console.log("February");
		break;
	case 3:
		console.log("March");
		break;
	case 4:
		console.log("April");
		break;
	case 5:
		console.log("May");
		break;
	case 6:
		console.log("June");
		break;
	case 7:
		console.log("July");
		break;
	case 8:
		console.log("August");
		break;
	case 9:
		console.log("September");
		break;
	case 10:
		console.log("October");
		break;
	case 11:
		console.log("November");
		break;
	case 12:
		console.log("December");
		break;
	default:
		console.log("Invalid Number");
}