<?php
session_start();

function loginCheck ($username, $password) {
	if(!empty($_POST)) {												// POST will only be truly empty when page is first loaded and no POST request sent
		if($username == "guest" && $password == "password") {
			// $_SESSION["username"] = $_POST["username"];
			$_SESSION["logged_in_user"] = $username;
			$_SESSION["user_is_logged_in"] = true;
		} else {
			echo "<script>alert('Chiggity Check YoSelf Before You Wreck YoSelf');</script>";
		}
	} 
	if(isset($_SESSION["user_is_logged_in"]) && $_SESSION["user_is_logged_in"] == true) {
		header("Location: authorized.php");
		die();
	}
}



	
// function loginCheck($username, $password) {
// 	$redirectTo = "authorized.php";							// variable created that points to authorization page
// 	if($username == "guest" && $password == "password") {	// if username and password match....
// 		header("Location: $redirectTo");					// send to url specified in $redirect variable
//		die();												// ALWAYS DIE AFTER HEADER
// 	} elseif ($username == " " || $password == " ") {		// if username or password is empty, do nothing
// 	} else {
// 		echo "<script>alert('Chiggity Check YoSelf Before You Wreck YoSelf');</script>";	// if username or password is incorrect, inserts js alert
// 	}
// }
function pageController() {
	$data =[];
	$data["username"] = isset($_POST['username']) ? $_POST["username"] : " ";		// if username is set, get it's value, otherwise, empty string
	$data["password"] = isset($_POST['password']) ? $_POST["password"] : " "; 		// if password is set, get it's value, otherwise, empty string
	$data["checkLogin"] = loginCheck($data["username"], $data["password"]);			// call the loginCheck function
	return $data;
}
extract(pageController());
?>

<!DOCTYPE>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		.container {
			height: 200px;
			width: 200px;
			margin-top: 300px;
			margin-right: auto;
			margin-left: auto;
		}
		
	</style>
</head>
<body>

	<div class="container">
		<form method="POST">			
			Username:<br>
			<input type="text" name="username"><br>
			Password:<br>
			<input type="password" name="password"><br>
			<input type="submit">
	</div>

</body>
</html>
