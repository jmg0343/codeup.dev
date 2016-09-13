<?php
	require_once "functions.php";
	function pageController() {
		$count = [];
		// $count["count"] = (isset($_GET["count"])) ? $_GET["count"] : 0;
		$count["count"] = inputGet("count");

		return $count;
	}

	extract(pageController());
?>

<!DOCTYPE>
<html>
<head>
	<title>PING</title>
</head>
<body>
	<h1>PING</h1>
	<h1>COUNTER: <?= $count; ?></h1>
	<a href="pong.php?count=<?= $count +1;?>&hit">HIT</a>
	<br>
	<a href="ping.php?miss">MISS</a>
</body>
</html>
