<?php

function pageController(){
// empty array created to store array that will be extracted
	$data = [];
// variable created to set counter
// if button is clicked, counter moves up or down, else it is set to 0
	$data["counter"] = isset($_GET["counter"]) ? $_GET["counter"] : 0;
// key created that points to URL 
	$data["url"] = "/php/counter.php";
// key created to increment
	$data["up"] = $data["counter"] + 1;
// key created to decrement
	$data["down"] = $data["counter"] - 1;
	return $data;
}
// extracts keys within data array and converts them to variables
extract(pageController());

?>

<!DOCTYPE>
<html>
<head>
	<title>GET Requests</title>
	<style type="text/css">
		.container {
			height: 100px;
			width: 100px;
			text-align: center;
			margin-left: auto;
			margin-right: auto;
			margin-top: 300px;
		}

		button {
			font-size: 20px;
			background-color: black;
		}

		a:visited {
			color: green;
		}

		#rolyPoly {
			height: 200px;
			width: 200px;
			margin-right: auto;
			margin-left: auto;
			margin-top: 200px;
			text-align: center;
		}

	</style>
</head>
<body>
	<div class="container">


		<button><a href="<?= $url; ?>?counter=<?= $up; ?>">UP</a></button>
		<br>
		<br>
		<div>COUNTER: <?= $counter ?></div>
		<br>
		<button><a href="<?= $url; ?>?counter=<?= $down; ?>">DOWN</a></button>
	</div>
	<footer>

		<!-- POWERED BY THE ONE AND ONLY ROLY POLY -->
		<div id="rolyPoly">Powered by Roly Poly</div>
	</footer>

</body>
</html>