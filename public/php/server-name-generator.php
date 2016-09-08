<?php 
// funtion randomizes elements within 2 arrays and returns a random combination
	function randomElement($array1, $array2) {
		$randomAdj = $array1[mt_rand(0, count($array1) - 1)];
		$randomNoun = $array2[mt_rand(0, count($array2) - 1)];

		return "$randomAdj $randomNoun";
	}

// protects variables by wrapping them in a function that acts as an iffe
	function pageController() {
// two arrays created that will later be used in the previoiusly defined function
		$adjectives = ["dope", "feral", "fake", "aweful", "rabid", "slow", "terrible", "witty", "hilarious", "happy"];
		$nouns = ["person", "mime", "rapper", "mixtape", "phone", "goat", "monkeys", "monster", "fox", "music"];
		
// variable created that calls randomElement function
		$serverName = randomElement($adjectives, $nouns);
// empty array created that will contain the output of the randomElement function
		$data = [];
// key named "dataExtracted" is created and placed inside empty $data array
// "dataExtracted" key will contain $serverName(returned output of randomElement function) as value
		$data["dataExtracted"] = $serverName;
// returns $data, which is now an array containing the desired output
		return $data;
	}
// extract takes array keys returned from the pageController and converts the into variables that can be called in HTML
	extract(pageController());
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
			<h1><?= $dataExtracted; ?></h1>
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