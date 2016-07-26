<!--- build a login form, call it login_form.php
    - username or email input with placeholder
    - password input type
    - remember me check box-->

<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta setchar="utf-8">
		<title>Login_Form</title>
	</head>
	<body>
		<h2>Login Form</h2>
		<form method="POST" action="/login_form.php">
			<label for="username_email">Username or Email:</label>
			<input id="username_email" name="username_email" type="text" placeholder="Enter Username/Email">
			<p>
			<label for="password">Password:</label>
			<input id="password" name="password" type="password">
			</p>
			<p>
			<label for="remember_me">Remember Me</label>
			<input type="checkbox" id="remember_me" name="remember_me">
			</p>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>