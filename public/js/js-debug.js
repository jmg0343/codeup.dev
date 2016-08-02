'use strict';

function sayHello (name) {
    var message = 'hello ' + name;
    return message;
}

console.log(sayHello('zach'));

// expect to see 'hello zach' in the console

// ----------------------------------------------------------------------------
console.log("\n\n");
function sayHelloToEveryoneExceptZach (name) {
    if (name === 'zach') {
        return 'goodbye';
    } else {
        return 'hello ' + name;
    }
}

console.log(sayHelloToEveryoneExceptZach('Ryan'));

// expect to see 'hello Ryan' in the console

// ----------------------------------------------------------------------------
console.log("\n\n");
// returns a random number between 1 and 100
function getRandomNumber () {
    return Math.floor(Math.random() * 100) + 1;
}

// returns true if number is odd, otherwise false
function isOdd (number) {
    return number % 2 == 1;
}


function printRand () {
    var rand = getRandomNumber();
    if (isOdd(rand)) {
        return rand + ' is odd';
    } else {
        return rand + ' is not odd';
    }
}  
    console.log(printRand());

// expect to see '4 is not odd'

// ----------------------------------------------------------------------------
console.log("\n\n");
for (var i = 1; i <= 10; i += 1) {
    console.log(i);
}

// expect to see 1 through 10

// ----------------------------------------------------------------------------
console.log("\n\n");
for (var j = 10; j >= 1; j--) {
    console.log(j);
}

// expect to see 10 through 1

// ----------------------------------------------------------------------------
console.log("\n\n");
function sum(x, y) {
    var x = 3;
    var y = 5;
    return x + y;
}
console.log(sum());
// expect to see 8

