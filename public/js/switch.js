"use strict";

// var luckyNumber = Math.floor(Math.random()* 6);

// var number0 = 60;
// var number1 = number0 - (60 * .1);
// var number2 = number0 - (60 * .25);
// var number3 = number0 - (60 * .35);
// var number4 = number0 - (60 * .5);

// switch (luckyNumber) {
// 	case 0:
// 		console.log(number0.toFixed(2) + " No discount");
// 		break;
// 	case 1:
// 		console.log("lucky number: 1\n" + number1.toFixed(2) + "\n10% discount");
// 		break;
// 	case 2:
// 		console.log("lucky number: 2\n" + number2.toFixed(2) + "\n25% discount");
// 		break;
// 	case 3:
// 		console.log("lucky number: 3\n" + number3.toFixed(2) + "\n35% discount");
// 		break;
// 	case 4:
// 		console.log("lucky numner: 4\n" + number4.toFixed(2) + "\n50% discount");
// 		break;
// 	default:
// 		console.log("You get it for free!!")
// 		break;
// }

var luckyNumber = Math.floor(Math.random()* 6);

var priceBeforeDiscount = 60;
var discountPercentage;
var finalPrice;

switch (luckyNumber) {
	case 1:
		discountPercentage = .1;
		break;
	case 2:
		discountPercentage = .25;
		break;
	case 3:
		discountPercentage = .35;
		break;
	case 4:
		discountPercentage = .5;
		break;
	case 5:
		discountPercentage = 1;
		break;
}

finalPrice = (1 - discountPercentage) * priceBeforeDiscount;

console.log("Price before discount: $" + priceBeforeDiscount);
console.log("luckyNumber: " + luckyNumber);
console.log("Discount: " + (discountPercentage * 100) + "%");
console.log("You will pay: $" + finalPrice.toFixed(2));



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