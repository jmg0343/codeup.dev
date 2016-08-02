(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    var names = ["Matthew", "Mark", "Luke", "John"];
    console.log(names);

     console.log("\n\n");

    // TODO: Create a log statement that will log the number of elements in the names array.
    console.log(names.length);

    console.log("\n\n");

    // TODO: Create log statements that will print each of the names array elements individually.
    for (var i = 0; i < names.length; i ++) {
    	console.log(names[i]);
    }
console.log("\n\n");
    console.log(names[0]);
    console.log(names[1]);
    console.log(names[2]);
    console.log(names[3]);

console.log("\n\n");

// var namesInReverse = names.reverse();
// console.log(namesInReverse);

console.log("\n\n");

for (var i = names.length -1; i >= 0; i -= 1) {
	console.log(names[i]);
}

console.log("\n\n");

names.forEach(function (element, index, array) {
	console.log("The name at index " + index + " is: " + element);
});

})();
