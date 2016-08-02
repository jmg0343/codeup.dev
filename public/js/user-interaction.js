"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided

// var input = prompt("please enter your name")
// console.log(input);
do {
	var input = prompt("Please enter your name");
		if (input !== "") {
			alert("welcome " + input);
		}
} while (input == "");

	







// TODO: Show an alert message that welcomes the user based on their input.
// alert("welcome " input)

// alert("welcome " + input);

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var pizza = confirm ("Do you like pizza?");
	if (pizza === true) {
		alert("yeeeeaaaaahhhh Boooooiiiiiiii!!!!");
	} else {
		alert("Kindly see yourself off of my web page");
	}

