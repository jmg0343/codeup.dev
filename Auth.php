<?php

require_once "Log.php";
require_once "public/php/functions.php";
require_once "Input.php";


class Auth 
{
	// hashed version of password
	public static $password  = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


// Auth::attempt() will take in a $username and $password 
	// If the $username is guest and the $password matches the hashed password above then set the LOGGED_IN_USER session variable as before 
	// Use the Log class to log an info message: "User $username logged in." 
	// If either the username or password are incorrect then log an error: "User $username failed to log in!" 
	// You will need to use the PHP method password_verify() to check the password hash
	public static function attempt($username, $password) 
	{
		
		if($username == "guest" && password_verify($password, self::$password)) {
			$_SESSION["logged_in_user"] = $username;
			$_SESSION["user_is_logged_in"] = true;

			$logIn = new Log("cli");
			$logIn->info("User: $username logged in");
			header("Location: authorized.php");
			die();

		} else {
			$logInFail = new Log("cli");
			$logInFail->error("User: $username failed to log in!");
		}

	}

// Auth::check() will return a boolean whether or not a user is logged in.
	public static function check() {
		if(isset($_SESSION["user_is_logged_in"]) && $_SESSION["user_is_logged_in"] == true) {
			return true;
		} else {
			return false;
		}
	}
	
// Auth::user() will return the username of the currently logged in user.
	public static function user() {
		return Input::get($username);
		// return self::check() ? $_SESSION["logged_in_user"] : null;
	}

// Auth::logout() will end the session, just like we did in the sessions exercise.
	public static function logout() {
		 // clear $_SESSION array
        session_unset();

        // delete session data on the server
        session_destroy();

        // ensure client is sent a new session cookie
        session_regenerate_id();
	}

	// public static function redirect($url) {
	// 	header("Location: $url");
	// 	die();
	// }
	
}


