"use strict";

var myNameIs = 'joey'; // TODO: Fill in your name here.

// TODO:m
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.


function sayHello(name) {
	var message = "Hello " + name;
	console.log(message);

}

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

sayHello(myNameIs)


// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.


function isOdd(number) {
	var evenOrOdd = (number % 2 == 0) ? "even" : "odd";
	console.log("number is " + number + " and is " + evenOrOdd);
}


// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
isOdd(random);
