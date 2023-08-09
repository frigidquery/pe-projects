<?php

function monsterGenerator($id, $name, $favFood) {


$monster = [
	"id" => $id,
	"name" => $name,
	"favFood" => $favFood,
];
return $monster;

}

$sluggo = monsterGenerator(666, "Sluggo", "Gigglesnort Soup");
echo $sluggo["name"];



?>