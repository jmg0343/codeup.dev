<!-- - build a registration form, name it registration_form.php
    - first name and last name inputs
    - email input
    - username
    - password
    - password confirmation
    - sign me up for the newsletter option, make sure this is checked by default
-->

<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta setchar="utf-8">
		<title>Registration_Form</title>
	</head>
	<body>
		<h2>Registration Form</h2>
		<form method="POST" action="/registration_form.php">
			<p>
				<label for="first_name">First Name</label>
				<input id="first_name" name="first_name" type="text">
			</p>
			<p>
				<label for="last_name">Last Name</label>
				<input id="last_name" name="last_name" type="text">
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="text">
			</p>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
			</p>
			<p>
				<label for="password_confirm">Confirm Password</label>
				<input id="password_confirm" name="password_confirm" type="password">
			</p>
			<p>
				<label for="newsletter">Sign me up for the newsletter</label>
				<input id="newsletter" name="newsletter" type="checkbox" checked>
			</p>
			<button submit="submit">Submit</button>
		</form>
	</body>
</html>