<?php

	$fruitArray = ["apple", "banana", "cherry", "date", "elderberry", "strawberry"];

	// echo array, words all mashed together

	foreach ($fruitArray as $fruit) {
		echo $fruit . " ";
	}

	// echo array, shows up in unordered list 

	foreach ($fruitArray as $fruit) {
		echo "<li>" . $fruit . "</li>";
	}

	// echo array, shows up in numbered list

	echo "<ol>";

	foreach ($fruitArray as $fruit) {
		echo "<li>" . $fruit . "</li>";
	}	

	echo "</ol>";

	echo "I have a " . $fruitArray[3] . " with an " . $fruitArray[4] . ".";

	// monster array for jerry

	$jerry = [
		"id" => 336,
		"name" => "Jerry",
		"favoriteFood" => "pizza",
		"age" => 12,
		"adopted" => false,
	];


?>

<br>

<!-- for each loop in HTML -->

<?php foreach ($fruitArray as $fruit) { ?>
	<li><?=$fruit?></li>
<?php } ?>

<p>I have a <?=$fruitArray[3]?> with an <?=$fruitArray[4]?>.</p>

<p id=<?=$jerry["id"]?>><?=$jerry["name"]?>'s favorite food is <?=$jerry["favoriteFood"]?>. <?=$jerry["name"]?> is <?=$jerry["age"]?> years old.</p>











