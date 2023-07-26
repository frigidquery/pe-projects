<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Infomercials</title>
	<meta name="Infomercials" content="Buy Stuff">

	<meta property="og:image" content="https://peprojects.dev/alpha-7/joseph/images/blank.png">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Infomercials">
	<meta property="og:description" content="Buy Stuff">

	<link rel="stylesheet" href="css/styles.css">
</head>

<?php
	
	// router //
	$page = null;
	if (isset($_GET["page"]) ) {
		$page = $_GET["page"]; //url?page=string
	} else {
		$page = "home"; //default to home
	}


?>

<body>


<header class="site-header">
	<div class="inner-column">
		<h1>Infomercials That Amuse Me -<br> As Seen on TV</h1>

		<?php include("site-menu.php"); ?>

	</div>
</header>

<main class="page-content">

		<div class="inner-column">

			<?php
				if ($page == "home") {
					include("home.php");
				}

				if ($page == "list") {
					include("list.php");
				}

				if ($page == "details") {
					include("details.php");
				}
				if ($page == "create") {
					include("create.php");
				}
			?>

		</div>
	</section>
</main>


<footer class="site-footer">
	<div class="inner-column">
		<!-- footer -->
	</div>
</footer>
</body>

</html>