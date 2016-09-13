<?php
// inputHas($key): returns true or false based on whether the key is available.
	function inputHas($key) {
		// check if $_REQUEST[$key] isset
		// checks to see if $_REQUEST has a key/value set
		// return true if the $key is set on $_REQUEST
		return isset($_REQUEST[$key]);
	}

// inputGet($key): returns the value specified by the key, or null if the key is not set.
	function inputGet($key) {
		// if inputHas($key)
		// return the value specified by the key
		// or return null if the key is not set.
		if (inputHas($key)) {
			return $_REQUEST[$key];
		} else {
			return null;
		}

	}

// escape($input): returns the input as a safely escaped string.
	function escape($input) {
		return htmlspecialchars(strip_tags($input));
	}



// 				Now, go back to the ping/pong and user login lessons from PHP with HTML and require the functions file you created. 
// 				Use the input wrapper functions you created in place of accessing $_GET or $_POST directly. 
// 				Also, use the escape function anywhere you need to echo user input.