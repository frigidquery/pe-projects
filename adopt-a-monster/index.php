<style>

* {
	box-sizing: border-box;
}

img {
	display: block;
	width: 100%;
	height: auto;
	max-width: 200px;
	border-radius: 50%;
	overflow: hidden;
}

.inner-column {
	max-width: 700px;
	padding: 15px;
	margin-left: auto;
	margin-right: auto;
/*	border: 3px solid blue;*/
	display: block;
}

top {
	display: flex;
	gap: 20px;
	align-items: center;
/*	border: 3px solid green;*/
}

card {
	display: block;
	background-color: ;
}

</style>

<?php

$sluggo = [
	"id" => "666",
	"name" => "Sluggo",
	"favFood" => "Gigglesnort Soup",
	"age" => "2000",
	"bio" => "The epitome of laziness, Sluggo enjoys napping and providing yawns instead of entertainment. Snore-fest guaranteed!",
	"adopted" => true,
	"portrait" => "https://peprojects.dev/alpha-7/joseph/adopt-a-monster/images/sluggo.jpg",
	"background" => "background-color: #fac70c;"
];

$grumpy = [
	"id" => "777",
	"name" => "Grumpy",
	"favFood" => "Chuckleberry Pie",
	"age" => "7",
	"bio" => "With a perpetual frown and a knack for complaining, Grumpy will make your day feel even gloomier.",
	"adopted" => false,
	"portrait" => "https://peprojects.dev/alpha-7/joseph/adopt-a-monster/images/grumpy.jpg",
	"background" => "background-color: #018a2e;"
];

$trippy = [
	"id" => "888",
	"name" => "Trippy",
	"favFood" => "Snickerdoodle Surprise",
	"age" => "37",
	"bio" => "Prepare your eardrums for a torturous musical experience as Trippy loves to belt out off-key tunes with enthusiasm.",
	"adopted" => true,
	"portrait" => "https://peprojects.dev/alpha-7/joseph/adopt-a-monster/images/trippy.jpg",
	"background" => "background-color: #0950b8;"
];

$clumsy = [
	"id" => "999",
	"name" => "Clumsy",
	"favFood" => "Silly Spaghetti Slurp",
	"age" => "212",
	"bio" => "Watch in awe as Clumsy manages to trip over their own feet and turn simple tasks into epic disasters.",
	"adopted" => false,
	"portrait" => "https://peprojects.dev/alpha-7/joseph/adopt-a-monster/images/clumsy.jpg",
	"background" => "background-color: #ff170d;"
];

$blinky = [
	"id" => "1010",
	"name" => "Blinky",
	"favFood" => "Quirky Quack Burger",
	"age" => "111",
	"bio" => "They bring dullness to a whole new level, leaving audiences longing for excitement and wondering why they bothered.",
	"adopted" => true,
	"portrait" => "https://peprojects.dev/alpha-7/joseph/adopt-a-monster/images/blinky.jpg",
	"background" => "background-color: #381a56"
];

$puppets = [$sluggo, $grumpy, $trippy, $clumsy, $blinky];


	foreach ($puppets as $pup) {
		$story = "Hi! My name is " . $pup["name"] . " and I'm " . $pup["age"] . " years old. My favorite food is " . $pup["favFood"] . ".";
		$portrait = $pup["portrait"];
		$status = $pup["adopted"];
		$background = $pup["background"];

		// if statement changes adoption message
		if ($status == 1) {
			$status = "I'm Taken!";
		}	else {
			$status = "Adopt Me!";
		}

		echo
		"<card id=" . $pup["id"] . ">" .
			"<intro>" .
				"<div style='" . $background . "' class='inner-column'>" .
					
					"<top>" .
						"<picture><img src='" . $portrait .  "'width=200px></picture>" .
						"<text>" .
							"<h2>" . $status . "</h2>" .
							"<h3>" . $story . "</h3>" .
						"</text>	
					</top>
					
				</div>
			</intro>" . 
			
			"<bio>" .
				"<div style='" . $background . "' class='inner-column'>" .
					"<p>" . $pup["bio"] . "</p>" .
				"</div>
			</bio>
		</card>";

	}

?>