<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "quackerjack");

require_once "../../db_connect.php";

function pageController($dbc){		
//	ternary statement reads GET request				
	$offset = (!empty($_GET)) ? $_GET["offset"] : 0;		// GET request NOT empty? if true, set it to offset => value. If false, set it to 0

//	$stmt variable created to contain instance of PDOStatement representing the results of query
	$stmt = $dbc->query("SELECT * FROM national_parks");	// query() method iterates through national_parks and retrieves metadata

//	return statement returns parks key parkCount key
	return [
	//	retrieves info from national_parks and limits to 4 per page 
		'parks' => $dbc->query('SELECT * FROM national_parks LIMIT 4 OFFSET ' . $offset)->fetchAll(PDO::FETCH_ASSOC),	// concats the offset amount
	//	parkCount key will count total number of parks in table
		'parkCount' => $stmt->rowCount()
	];
};

extract(pageController($dbc));	// extracts pageController and passes $dbc from db_connect.php into it

?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container"> 
		<table class="table-striped table table-bordered">
			<tr>
				<th>Name</th>
				<th>Location</th>
				<th>Date Established</th>
				<th>Area In Acres</th>
			</tr>
			<!-- foreach statement iterates through parks variable created from key in pageController extraction -->
			 <?php foreach ($parks as $park): ?>
	        	<tr>
	        		<td><?= $park['name']; ?></td>
	        		<td><?= $park['location']; ?></td>
	        		<td><?= $park['date_established']; ?></td>
	        		<td><?= $park['area_in_acres']; ?></td>
	        	</tr>
	    	<?php endforeach; ?>
		</table>
		<?php 
			$page = 1;
		//	for loop tied to $offset and will determine the first park on each page 
		 	for($i = 0; $i <= $parkCount; $i += 4):		// for loop sets parameters between 0 - length of national_park array
		 ?>
		<!-- offset key is created here. anchor tag placed within for-loop so as to create one for every 4 parks -->
			<a href="national_parks.php?offset=<?=$i?>"> 
				<div class="btn btn-primary"> 
					<?=$page++?>
				</div>
			</a> 	
		<?php endfor; ?>
	</div>
</body>
</html>


