<style>

	h1 {
		color: blue;
	}

	body {
		background-color: darksalmon;
	}

	p {
		font-family: sans-serif;
	}

</style>

<h1>Let's do some gosh dang PHP</h1>

<?php

	$fruit1 = "apples";
	$fruit2 = "mangoes";

	if ($fruit1 == "apples") {
		echo "YUMMY!";
	} elseif ($fruit2 == "mangoes") {
		echo "YUCKY";
	}	else {
		echo "No thanks!";
	}

	
	$first = "Elvis";
	$last = "Presley";

	$currentYear = 2023;
	$deathYear = 1977;

	$yearsAgo = $currentYear - $deathYear;

	$dead = false;

	if ($dead == false) {
		$favoriteFood = "Jelly Donuts";
	}

	$dead = true;

	if ($dead == true) {
		$available = "cannot";
	}


?>

<p>My name is <?=$first?> <?=$last?> and I allegedly died <?=$yearsAgo?> years ago in 1977.</p>

<p>Since I'm definitely not dead, I love to eat <?=$favoriteFood?>.</p>

<p>Ok I lied, I'm certainly dead and <?=$available?> perform for you. *WINK*</p>
















