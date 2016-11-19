<?php
	require_once "functions.php";
	require_once "../../Auth.php";

	session_start();
// if $_SESSION is NOT set AND user is not logged in, redirect user to login page
	if(!isset($_SESSION["user_is_logged_in"]) && $_SESSION["user_is_logged_in"] == false) {
			header("Location: login.php");
			die();
		} 
?>


<!DOCTYPE>
<html>
<head>
	<title>AUTHORIZED</title>
</head>
<body>
	<h1>Authorized</h1>
	<form method ="POST">
		<a href="logout.php">logout</a>
		<a href="login.php">login</a>
	</form>
</body>
</html>