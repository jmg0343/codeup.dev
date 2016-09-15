<?php
// Create a log_test.php file in your exercises directory. At the top of log_test.php, be sure to require_once 'Log.php';. 
	require_once 'Log.php';

// Create an instance of the Log class
	$newFile = new Log('cli');
// Set the $filename property in the class; use the format log-YYYY-MM-DD.log.
	//$newFile->filename = date("Y-m-d");
// inserts error message
	$newFile->error("username or password is incorrect");
// inserts success message
	$newFile->info("user logged in successfully");


// Update log_test.php; pass the prefix 'cli' to the class and do not manually set the $filename property. Test from the command line.

// For future thought: $handle and $filename are both exposed to anybody using our class. 
// What do you think would happen if somebody closed $handle before we were finished with it? Or assigned an array to $filename? 
// How do you think we will be able to address this in the future?