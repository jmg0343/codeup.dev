



<?php
	$favoriteThings = ["Beer", "Wu-Tang-Clan", "Rap Music", "Flava-Flav", "Tom Brady"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>

	<style type="text/css">

		tr:nth-child(2n + 2) {
			background: lightgray;
		}

		td {
			text-align: center;
			font-weight: 900;
			font-size: 20px;
		}

		th {
			text-decoration: underline;
			font-size: 50px;
		}

		#favoriteTable {
			height: 500px;
			width: 800px;
			margin: auto;
		}
	</style>

</head>
<body>

	<table id="favoriteTable">
		<tr>
			<th>My Favorite Things</th>
		</tr>	
		<?php foreach ($favoriteThings as $favoriteThing): ?>
        	<tr><td><?= $favoriteThing; ?></td></tr>
    	<?php endforeach; ?>
	</table>

</body>
</html>
