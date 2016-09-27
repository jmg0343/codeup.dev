<?php

	define("DB_HOST", "127.0.0.1");
	define("DB_NAME", "parks_db");
	define("DB_USER", "parks_user");
	define("DB_PASS", "quackerjack");

	require_once "db_connect.php";

	echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

	$dbc->exec("DROP TABLE IF EXISTS national_parks");
	$query = "CREATE TABLE national_parks(
				id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		    	name VARCHAR(50) NOT NULL,
		    	location VARCHAR(50) NOT NULL,
		    	date_established DATE NOT NULL,
		    	area_in_acres DOUBLE NOT NULL,
		    	description TEXT,
		   		PRIMARY KEY (id)
			)";

	$dbc->exec($query);