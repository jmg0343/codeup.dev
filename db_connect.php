<?php

// Get new instance of PDO object
$dbc = new PDO("mysql:host=" . DB_HOST . ";" . "dbname=" . DB_NAME, DB_USER, DB_PASS);

//	hard-coded host, name, username, and password
// $dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'codeup', 'quackerjack');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

