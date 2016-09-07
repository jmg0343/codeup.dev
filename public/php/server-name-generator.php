<?php 
	$adjectives = ["dope", "feral", "fake", "aweful", "rabid", "slow", "terrible", "witty", "hilarious", "happy"];
	$nouns = ["person", "mime", "rapper", "mixtape", "phone", "goat", "monkeys", "monster", "fox", "music"];
	
	function randomElement($array1, $array2) {
		$randomAdj = $array1[mt_rand(0, count($array1) - 1)];
		$randomNoun = $array2[mt_rand(0, count($array2) - 1)];

		return "$randomAdj $randomNoun";
	}

	$serverName = randomElement($adjectives, $nouns);
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Server-Name-Generator</title>
		<style type="text/css">
			body {
				background: black;
			}

			h1 {
				font-weight: 100;
				color: blue;
				text-align: center;
				font-size: 150px;
			}

			#random {
				height: 500px;
				width: 500px;
				margin: auto;
				margin-top: 200px;
			}

		</style>
	</head>
	<body>
		<div id="random">
			<h1><?php echo $serverName; ?></h1>
		</div>
	</body>
</html>



<!-- Create two arrays.
One containing at least 10 adjectives.
Another containing at least 10 nouns.
Create a function that will return a random element from an array.
Create a function that returns the string value of our new server name made by combining a random adjective with a random noun.
Each time you refresh the page a different result should be displayed.
Make sure you have fun with it. Add CSS to make it fancy. -->