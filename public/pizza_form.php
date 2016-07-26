<!-- - build an order form for a pizza, name it pizza_form.php. Use inputs you think are best!
    - quantity
    - crust style
    - size
    - toppings
    - delivery info including name, phone, address, credit card info, additional instructions
    - BONUS: show toppings with images -->
<?php
    var_dump($_GET);
    var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pizza Form</title>
	</head>
	<body>
		<h2>Create Your Pizza</h2>
		<form method="POST" action="/pizza_form.php">
			<p>
				<label for="quantity">How many pizzas?</label>
				<input id="quantity" name="quantity" type="number" min="0">
			</p>
			<p>
				<label for="crust">Crust Style</label>
				<select id="crust" name="crust">
					<option>Thin Crust</option>
					<option>Pan</option>
					<option>Hand Tossed</option>
					<option>Chicago Style</option>
				</select>
			</p>
			<p>
				<label for="size">Size</label>
				<select id="size" name="size">
					<option>Small</option>
					<option>Medium</option>
					<option>Large</option>
				</select>
			</p>

		</form>
	</body>
</html>