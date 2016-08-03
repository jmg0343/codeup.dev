(function(){
    "use strict";

    // TODO: Create person object
    // var person = todo;
    var person = {};			// creates person object
    // TODO: Create firstName and lastName properties in your person object; assign your name to them
    person.firstName = "Joey";		// creates first name property
    person.lastName = "Garcia";		// creates last name property
    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties
    person.hello = function () {	// creates function named hello that sends a welcome alert when called
    	alert("Hello " + this.firstName + " " + this.lastName);		// this.firstName/lastName prints those variables for this particular object
    };
    // Say hello from the person object.
    // person.sayHello();
    person.hello();		//calls hello function
})();
