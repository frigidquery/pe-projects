<?php

	$cody = [
		"id" => 336,
		"name" => "Mr. Codey",
		"favoriteFood" => "pizza",
		"age" => 12,
		"adopted" => false,
	];

	$lima= [
		"id" => 436,
		"name" => "limabean",
		"favoriteFood" => "tacos",
		"age" => 4,
		"adopted" => true,
	];

	$reads = [
		"id" => 536,
		"name" => "Miss Reads",
		"favoriteFood" => "caviar",
		"age" => 7,
		"adopted" => false,
	];

	$monsters = [$cody, $lima, $reads];

	foreach ($monsters as $monster) {
		echo "<li>" . $monster["favoriteFood"] . "</li>";
		echo $monster["age"];
	}

	// loops through each monster and echo everything about them on the page

	foreach ($monsters as $monster) {

		// could do this and assign name key to a variable as it loops
		$name = $monster["name"];
		echo "<li>" . $name . "</li>";

		// could do this an access the key directly without assigning to a variable

		echo "<li> ID: </li>";
		echo $monster["id"];
		echo "<li> Favorite Food: </li>";
		echo $monster["favoriteFood"];
		echo "<li> Age: </li>";
		echo $monster["age"];
		echo "<li> Adopted: </li>";
		echo $monster["adopted"];
	}


?>