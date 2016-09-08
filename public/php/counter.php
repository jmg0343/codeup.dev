<?php
// variable created to set counter
// if button is clicked, counter moves up or down, else it is set to 0
	$counter = isset($_GET["counter"]) ? $_GET["counter"] : 0;
// variable created that points to URL 
	$url = "/php/counter.php";

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

		<!-- UP button created that will increment counter and place new count in query
			 references $url within PHP tags
			 concatenates $url with ?(this starts the query), counter(this creates a key called counter), =(the key must equal a value) 
			 inside PHP tags, $counter+1 increments the counter variable(this is the value that is now assigned to the counter key we just created)

			 This literally writes in our entire URL and query string -->
		<button><a href="<?= $url; ?>?counter=<?= ($counter + 1); ?>">UP</a></button>
		<br>
		<br>
		<!-- The counter div just keeps track of where we are in the count by referencing the $counter variable -->
		<div>COUNTER: <?= $counter ?></div>
		<br>
		<!-- This is the same step that we did with the UP button, except now we decrement -->
		<button><a href="<?= $url; ?>?counter=<?= ($counter - 1); ?>">DOWN</a></button>
	</div>
	<footer>

		<!-- POWERED BY THE ONE AND ONLY ROLY POLY -->
		<div id="rolyPoly">Powered by Roley Poley</div>
	</footer>

</body>
</html>



<!-- 
	- In your HTML, you will need two links. One that says up and another that says down.
	- Add a heading that shows a number representing the current counter value. This value will start at zero. When up is clicked, the counter value should increase; when down is clicked, it should decrease.
	- The up and down links will send GET requests back to the counter page itself.
	- Create a function that will access the $_GET superglobal variable. It should determine what the new counter value is and return it.
	- Use the extract() function to change the return value of the pageController() into variables for your HTML. 
-->