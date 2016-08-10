"use strict";


//__________________________________ DISPLAY FUNCTIONALITY _____________________________________________________________

(function(){
var opInput = document.getElementsByClassName("operatorButton");	// variabled created to call operator buttons
var input = document.getElementsByClassName("calcButton");	// variable created to call number buttons
var leftDisplayInput = document.getElementById("leftOperand");	// variable created to assign input into the left display bar
var operatorInput = document.getElementById("operator");		// variable created to assign input into the operator display bar
var rightDisplayInput = document.getElementById("rightOperand");	//variable created to assign input into the right display bar
var solutionDisplay = document.getElementById("resultDisplay");

var midListener = function (event) {	// function created to allow operator inputs into the middle display bar
	var midInput = this.innerText;		// text inside operator buttons will be called through midInput variable	
	operatorInput.innerText = midInput;	// text inside middle display bar will be replaced with midInput 
}

var listener = function (event) {		// function created to allow input from user 
	if (operatorInput.innerText === "") {	// if operator display box is empty
		var leftValue = leftDisplayInput.innerText;		// variable created to point to and call text inside left display bar...(value already held inside left display bar, whether empty or previously entered number)
		var leftInput = this.innerText;					// variable created to point to value held inside button...(current value being entered into left display bar)
		leftValue = leftValue + leftInput;				// concatenates(sp?) values inside left display bar...(concatenation of leftValue and leftInput)
		document.getElementById("leftOperand").innerText = leftValue;	// returns concatenated value inside the left display bar

	} else  {							// otherwise... moves to else statement which performs above function for the right display bar
		var rightValue = rightDisplayInput.innerText;		
		var rightInput = this.innerText;
		rightValue = rightValue + rightInput;	
		document.getElementById("rightOperand").innerText = rightValue;

	}

}



//__________________________________ EVENT LISTENERS _____________________________________________________________

opInput[0].addEventListener("click", midListener);	// separated operators from rest of input array
opInput[1].addEventListener("click", midListener);	// this prevents them from appearing in the left display box
opInput[2].addEventListener("click", midListener);	// isolation of operators also allows for them to be shown in the operator box
opInput[3].addEventListener("click", midListener);	

input[0].addEventListener("click", listener);	// adds event listener to the input variable
input[1].addEventListener("click", listener);	// event listener will point to and call specific string from within the array that is called by "getElements" property
input[2].addEventListener("click", listener);	
// input[3] is operator	
input[4].addEventListener("click", listener);
input[5].addEventListener("click", listener);
input[6].addEventListener("click", listener);
// input[7] is operator
input[8].addEventListener("click", listener);
input[9].addEventListener("click", listener);
input[10].addEventListener("click", listener);
// input[11].addEventListener("click", listener); is operator
// input[12].addEventListener("click", listener); is clear button
input[13].addEventListener("click", listener);
// input[14].addEventListener("click", listener); is equals button
// input[15] is operator



//__________________________________ MATH FUNCTIONS _____________________________________________________________

var result; // created result variable to store math solutions

document.getElementById("equals").addEventListener("click", equals); // calls equals button and adds click event listener
function equals (element) {			// created function to call operator and perform switch statement based on innerText
	var operator = document.getElementById("operator").innerText;		// operator variable created to call the text inside operator display
	var leftValue = document.getElementById("leftOperand").innerText;	// leftValue and rightValue variables created to call the innerText of correlating display boxes
	var rightValue = document.getElementById("rightOperand").innerText;		// right and left value variables recreated despite having been previously assigned due to scope of functions
	switch (operator) {				// switch statement created based on operator value
		case "+": 
		result = parseFloat(leftValue) + parseFloat(rightValue);
		break;
		case "-": 
		result = parseFloat(leftValue) - parseFloat(rightValue);
		break;
		case "*": 
		result = parseFloat(leftValue) * parseFloat(rightValue);
		break;
		case "/": 
		result = parseFloat(leftValue) / parseFloat(rightValue);
		break;
	}	
	document.getElementById("leftOperand").innerText = result;		// assigns the result to the leftOperand display box
	document.getElementById("operator").innerText = "";				// clears the operator display box
	document.getElementById("rightOperand").innerText = "";			// clears the rightOperand display box
}																// operator and leftOperand display boxes cleared to allow calculations to continue after solution


})();


//__________________________________ CLEAR BUTTON _____________________________________________________________

var clear = document.getElementById("clear");		// variable created to call clear button
function clearDisplay (element) {					// function created that will clear the display bars
	
	leftOperand.innerText = "";						// operator and operand display boxes set to empty string
	rightOperand.innerText = "";
	operator.innerText = "";
}

clear.addEventListener('click', clearDisplay);		// added avent listener to initiate clearDisplay function when clear button is clicked





