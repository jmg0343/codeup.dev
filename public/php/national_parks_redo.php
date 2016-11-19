<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "quackerjack");

require_once "../../db_connect.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area In Acres</th>
			</tr>
		</table>
	</div>
</body>
</html>