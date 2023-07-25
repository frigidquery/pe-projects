<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Infomercials</title>
	<meta name="Sprocket Heaven" content="Buy Stuff">

	<meta property="og:image" content="https://peprojects.dev/alpha-7/joseph/images/blank.png">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Infomercials">
	<meta property="og:description" content="Buy Stuff">

	<link rel="stylesheet" href="css/styles.css">
</head>

<?php

	$page = null;

	if (isset($_GET["page"]) ) {
		$page = $_GET["page"];
	} else {
		$page = "home";
	}


?>

<body>


<header class="site-header">
	<div class="inner-column">
		<h1>Excellent Products - As Seen on TV</h1>

		<?php include("site-menu.php"); ?>

	</div>
</header>

<main class="page-content">

	<section class="home">
		<div class="inner-column">

			<p><?=$page?> page.</p>

			<?php
				if ($page == "home") {
					include("home.php");
				}
			?>

		</div>
	</section>

	<section class="list">
		<div class="inner-column">

			<?php
				if ($page == "list") {
					include("list.php");
				}
			?>

		</div>
	</section>
</main>


<footer class="site-footer">
	<div class="inner-column">
		footer
	</div>
</footer>
</body>

</html>