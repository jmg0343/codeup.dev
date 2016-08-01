"use strict";


//  Exercise 1 ------------------------------------------------------------------------------

function grades (grade1, grade2, grade3) {
	var average = (grade1 + grade2 + grade3) / 3;
	var finalAverage = (average > 80) ? "You're Awesome! " + average : "You need to practice more. " + average;
	return finalAverage;
}




var grade_one = 70;

var grade_two = 80;

var grade_three = 95;

var average = (grade_one + grade_two + grade_three) / 3;

if (average > 80) {
	console.log("You're awesome.");
} else {
	console.log("You need to practice more.");
}



//Exercise 2 --------------------------------------------------------------------------------------

function salesInfo(name, amountSpent) {
	var customerName = name + " spent: $";
	var total = (amountSpent > 200) ? amountSpent - (amountSpent * .35) : amountSpent;
	var discountMessage = (amountSpent > 200) ? ". Discount was applied. Final payment: $" + total : " No discount applied. Final payment: $" + total;
	return customerName + amountSpent + discountMessage;
}



// Code below prints out message with name
// function customer (name) {
// 	var customerName = name + " spent: ";
// 	return customerName;
// }

// // Code below gives total price based on amount spent
// function discountPrice (amountSpent) {
// 	var total = (amountSpent > 200) ? amountSpent - (amountSpent * .35) : amountSpent;
// 	return total;
// }





// discount on more than 200

var discount = .35;

var cameronSpent = 180;

var ryanSpent = 250; 

var georgeSpent = 320;

var applyDiscount = 200;

if (cameronSpent <= applyDiscount) {
	console.log("Cameron spent" + " $" + cameronSpent + ", no discount applied. Final payment: " + "$" + cameronSpent);
} else {
	console.log("Cameron spent" + " $" + cameronSpent + ", discount was applied. Final payment: " + "$" + (cameronSpent - (cameronSpent * discount)));
}

if (ryanSpent <= applyDiscount) {
	console.log("Ryan spent" + " $" + ryanSpent + ", no discount applied. Final payment: " + "$" + ryanSpent);
} else {
	console.log("Ryan spent" + " $" + ryanSpent + ", discount was applied. Final payment: " + "$" + (ryanSpent - (ryanSpent * discount)));
}

if (georgeSpent <= applyDiscount) {
	console.log("George spent" + " $" + georgeSpent + ", no discount applied. Final payment: " + "$" + georgeSpent);
} else {
	console.log("George spent" + " $" + georgeSpent + ", discount was applied. Final payment: " + "$" + (georgeSpent - (georgeSpent * discount)));
}



// Exercise 3 -----------------------------------------------------------------------

function decision () {
 	var flipACoin = Math.floor(Math.random()* 2);
 	var choice = (flipACoin == 0) ? "Buy a house" : "Buy a car";
 	return choice;
}



var flipACoin = Math.floor(Math.random()* 2);

	if (flipACoin == 0) {
		console.log("Buy a house");
	} else {
		console.log("Buy a car");
	}

 
// flipACoin = (flipACoin === 1) ? "Buy a house" : "Buy a car";




