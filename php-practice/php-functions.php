<?php
// 2 basic php functions, demonstrate difference between echoing within the function and returning a value

//echo

function echoHello($name) {
	echo "Hello, " . $name . "!";
}

echoHello("Socrates");

echo "<br>";

//return

function returnHello($name) {
	return "Hello, " . $name . "!";
}

$plato = echoHello("Plato");
echo $plato;


?>