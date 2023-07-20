<?php include ("monsters-data.php");

// echo $monsterdata[0]["id"];

// print_r($monsterdata[0]);

// var_dump($monsterdata[0]);

foreach ($monsterdata as $monster) {
	echo $monster["name"];
}
