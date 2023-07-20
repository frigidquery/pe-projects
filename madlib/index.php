<?php

$first = "Elvis";
$last = "Presley";

$fullName = $first . " " . $last;

echo $fullName;

echo "string1";

echo 12 + 25;

echo "dinosaur" . 125;

echo "I went to the park and bought " . 666 . " " . "ice cream cones.";

$fruit1 = "banana";
$fruit2 = "apple";

$homepage = "https://www.google.com";

?>

<p><?php echo $fullName; ?></p>

<p><?=$fullName?></p>

<?php echo "string2";?>

<!-- this one doesnt need echo for some reason -->

<?= "string3"?> 

<?php echo 13 + 26; ?>

<?= 14 + 27?>

<?php echo "dinosaur" . 125; ?>

<?= "dinosaur" . 125 ?>

<?php echo "I went to the park and bought " . 666 . " " . "ice cream cones."; ?>

<?= "I went to the park and bought " . 666 . " " . "ice cream cones."; ?>

<p>My favorite fruit is either <?=$fruit1?> or <?=$fruit2?> </p>

<p>Visit my <a href=<?="$homepage"?>>HOMEPAGE</a>

<?php

$noun1 = "hat";
$pnoun1 = "fingers";
$pverb1 = "bicycle";
$pverb2 = "puke";
$pob = "stomachs";
$ad1 = "blue";
$pnoun2 = "birds";
$ad2 = "scary";



?>

<p>Today, every student has a computer small enough to fit into their <?=$noun1?>. You can solve any math problem by simply pushing the computer’s little <?=$pnoun1?>.

Computers can add, multiply, divide, and <?=$pverb1?>. They can also <?=$pverb2?> better than a human.

Some computers have their own <?=$pob?>. Other’s have a <?=$ad1?> screen that shows all kinds of <?=$pnoun2?> and <?=$ad2?> figures.</p>

