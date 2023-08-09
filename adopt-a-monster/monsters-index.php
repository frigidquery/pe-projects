<?php include ("monsters-data.php");

// different ways to dispaly data from associative array

// echo $monsterdata[0]["id"];

// print_r($monsterdata[0]);

// var_dump($monsterdata[0]);

foreach ($monsterdata as $monster) {
	echo $monster["name"];
}
