<head>
	<link href='https://fonts.googleapis.com/css?family=Creepster' rel='stylesheet'>

	<style>

		body {
			background-color: #85E21F;
		}

		p, label {
			font-family: "Creepster";
			font-size: 32px;
			color: #881EE4;
		}

		label {
			font-size: 25px;
		}

		.boxes {
			display:	flex;
			flex-direction: column;
			gap: 10px;
			width: 400px;
		}

		button {
			margin-top: 10px;
		}
	</style>
</head>

<?php

$diff = 0;
$year = date("Y");
$retire = 0;
$output = null;

// this if statement stop the form from erroring out if submitted with values blank.

 // if use submits form
if (isset($_POST["submitted"])){
	// if current age is less than retirement age
	if ($_POST["age"] < $_POST["rage"]){
		// subtract retirement age from age
		$diff = $_POST["rage"] - $_POST["age"];
		$retire = $diff + $year;
		$output = "<p>You have $diff years left until you can retire.</p>
		 <p>It's " . $year . ", so you can retire in " . $retire . ".</p>";
	}	else {
			$output = "<p>You can't retire in the past. Try again.</p>";

	}


}

?>

<form method="POST">

	<a href="?"><p>What year will you retire?</p></a>

	<div class="boxes">
		<label>What is your current age?</label>
		<input type="number" name="age" value="0" min="1" step="0.1" required>

		<label>At what age would you like to retire?</label>
		<input type="number" name="rage" value="0" min="1" required>
	</div>

	<button type="submit" name="submitted">
		Submit
	</button>

	<div>
		<?php echo $output;?>
	</div>

</form>








