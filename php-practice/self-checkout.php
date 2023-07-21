<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Self-Checkout</title>
	<style>

		* {
			font-family: courier;
			background-color: gold;
		}

		.inner-column {
			max-width: 700px;
			margin-left: auto;
			margin-right: auto;
	}

		.input-boxes{
			display: flex;
			flex-direction: column;
			gap: 5px;
		}

		label {
			font-weight: bold;
			color: red;
		}

		.output {
			border: 3px solid red;
		}
	
	</style>

<?php

if (isset($_POST["submitted"])){
	$item1Cost = $_POST["item1Cost"];
	$item1Quant = $_POST["item1Quant"];
	$item2Cost = $_POST["item2Cost"];
	$item2Quant = $_POST["item2Quant"];
	$item3Cost = $_POST["item3Cost"];
	$item3Quant = $_POST["item3Quant"];

	$sub = ($item1Cost * $item1Quant) + ($item2Cost * $item2Quant) + ($item3Cost * $item3Quant);
	$tax = $sub * .055;
	$total = $sub + $tax;

	$output = 

	"<h3>Item 1</h3>

	<p>Price:"
		."$".$item1Cost.
	"</p>

	<p>Quantity:"
		.$item1Quant.
	"</p>

	<h3>Item 2</h3>

	<p>Price:"
		."$".$item2Cost.
	"</p>

	<p>Quantity:"
		.$item2Quant.
	"</p>

	<h3>Item 3</h3>

	<p>Price:"
		."$".$item3Cost.
	"</p>

	<p>Quantity:"
		.$item3Quant.
	"</p>

	<h3>Subtotal:</h3>
		<p>$".$sub.
	"</p>


	<h3>Tax:</h3>
		<p>$".$tax.
	"</p>

	<h3>Total:</h3>
		<p>$".$total.
	"</p>";
}

?>

</head>
<body>
	<div class="inner-column">
		<form method = "POST">

			<a href="?"><h1>Self Checkout</h1></a>

			<p>This is a self checkout for 3 and only 3 items. It doesn't even care what type of items you buy. Go ahead, pick out 3 of the most embarrassing personal hygiene products. No judgement!</p> 

			<p>Yes it is strange but go to Walmart if you don't like it. Just input the price and content of your 3 items and subtotal/tax/total will be displayed. There will be no paper receipts as we love the environment so very much.</p>

			<div class="input-boxes">
				<label>How much is item 1?</label>
				<input type="number" name="item1Cost" required>

				<label>How many are you buying?</label>
				<input type="number" name="item1Quant" required>

				<label>How much is item 2?</label>
				<input type="number" name="item2Cost" required>

				<label>How many are you buying?</label>
				<input type="number" name="item2Quant" required>

				<label>How much is item 3?</label>
				<input type="number" name="item3Cost" required>

				<label>How many are you buying?</label>
				<input type="number" name="item3Quant" required>
			</div>

			<button type="submit" name="submitted">
			Calculate
			</button>
		</form>
		<div class="output">
			<?php echo $output?>
		</div>
	</div>
	
</body>
</html>