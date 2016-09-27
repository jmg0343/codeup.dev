<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "parks_db");
define("DB_USER", "parks_user");
define("DB_PASS", "quackerjack");

require_once "../../db_connect.php";

function insertPark($dbc)
{
	$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (?, ?, ?, ?, ?)';

	$stmt = $dbc->prepare($query);

	$stmt->execute(array($_GET['name'], $_GET['location'], $_GET['date_established'], $_GET['area_in_acres'], $_GET['description']));
};

function getTable($dbc){
		// ternary statement reads GET request				
	$offset = (isset($_GET['page'])) ? (int)$_GET['page'] : 0;
	// GET request NOT empty? if true, set it to offset => value. If false, set it to 0
	$limit = 4;

//	$stmt variable created to contain instance of PDOStatement representing the results of query
	$stmt = $dbc->query("SELECT * FROM national_parks");	// query() method iterates through national_parks and retrieves metadata
	$query = 'SELECT * FROM national_parks LIMIT :limit OFFSET :offset';
	$stm = $dbc->prepare($query);

	$stm->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stm->bindValue(':offset', $offset, PDO::PARAM_INT);
	$stm->execute();

//	return statement returns parks key parkCount key
	return [
	//	retrieves info from national_parks and limits to 4 per page 
		'parks' => $stm->fetchAll(PDO::FETCH_ASSOC),	// concats the offset amount
	//	parkCount key will count total number of parks in table
		'parkCount' => $stmt->rowCount()
	];
}

function pageController($dbc){		
	if(isset($_GET['name'])){
		insertPark($dbc);
	}
	return getTable($dbc);
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
				<th>Description</th>
			</tr>
			<!-- foreach statement iterates through parks variable created from key in pageController extraction -->
			 <?php foreach ($parks as $park): ?>
	        	<tr>
	        		<td><?= $park['name']; ?></td>
	        		<td><?= $park['location']; ?></td>
	        		<td><?= $park['date_established']; ?></td>
	        		<td><?= $park['area_in_acres']; ?></td>
	        		<td><?= $park['description']; ?></td>
	        	</tr>
	    	<?php endforeach; ?>
		</table>
		<?php 
			$page = 1;
		//	for loop tied to $offset and will determine the first park on each page 
		 	for($i = 0; $i <= $parkCount; $i += 4):		// for loop sets parameters between 0 - length of national_park array
		 ?>
		<!-- offset key is created here. anchor tag placed within for-loop so as to create one for every 4 parks -->
			<a href="national_parks.php?page=<?=$i?>"> 
				<div class="btn btn-primary"> 
					<?=$page++?>
				</div>
			</a> 	
		<?php endfor; ?>

		<form method="GET">
			Park Name:<br>
			<input id="name" pattern="([a-zA-Z])\w+" type="text" name="name" required><br>
			Location:<br>
			<input id="location" type="text" name="location" required><br>
			Date Established:<br>
			<input id="date_established" type="date" name="date_established" required><br>
			Area In Acres:<br>
			<input id="area_in_acres" type="number" name="area_in_acres" required><br>
			Description:<br>
			<input id="description" type="text" name="description" required><br>
			<input type="submit" name="submit">
		</form>
	</div>
</body>
</html>