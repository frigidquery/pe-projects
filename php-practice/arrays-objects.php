<?php

$month = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];

$job1 = [
	"title" => "Circus Clown",
	"company" => "Ringling Brothers",
	"location" => "Big Top Tent",
	"start" => "2015",
	"stop" => "Present",
];

$clownDuties = ["Expert Nose Honking", "Banana Peel Mastery", "Balloon Sculpting Wizardry"];

$job2 = [
	"title" => "Ice Cream Scooper",
	"company" => "Ben and Jerry's",
	"location" => "Vermont",
	"start" => "2013",
	"stop" => "2015",
];

?>

<style>

	.inner-column {
	max-width: 700px;
	padding: 15px;
	margin-left: auto;
	margin-right: auto;
}

	.job-header {
		display: flex;
		gap: 300px;
	}

body {
	background: lightblue;
}



</style>

<div class="inner-column">

	<h2>Professional Experience</h2>

	<div class="job-header">

			<div class="comp-title">

			<h3><?=$job1["company"]?></h3>
			<h3><?=$job1["title"]?></h3>

			</div>

			<div class = "loc-dates">

			<h3><?=$job1["location"]?></h3>
			<h3><?=$month[3]?> <?=$job1["start"]?> - <?=$job1["stop"]?></h3>

			</div>	

	</div>

	<div class="summary">
		<h2>Summary</h2>
		<!-- should be a list -->
		<p><?=$clownDuties[0]?></p>
		<p><?=$clownDuties[1]?></p>
		<p><?=$clownDuties[2]?></p>

	<div class="job-header">

			<div class="comp-title">

			<h3><?=$job2["company"]?></h3>
			<h3><?=$job2["title"]?></h3>

			</div>

			<div class = "loc-dates">

			<h3><?=$job2["location"]?></h3>
			<h3><?=$month[5]?> <?=$job2["start"]?> - <?=$job2["stop"]?></h3>

		</div>	

	</div>

		<div class="summary">
		<h2>Summary</h2>
		<!-- should be a list -->
		<p>Jedi-like Scooping Skills</p>
		<p>Sprinkle Superstar</p>
		<p>Cone Juggling Extraordinaire</p>

</div>








