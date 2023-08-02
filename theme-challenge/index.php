<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Theme Challenge</title>
	<meta name="Theme Challenge" content="Welcome to my theme challenge">

	<meta property="og:image" content="">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Theme Challenge">
	<meta property="og:description" content="Welcome to my theme challenge">

	<link rel="stylesheet" href="css/styles.css">
</head>

<body>


<header class="site-header">
	<div class="inner-column">

		<?php include("modules/header/template.php"); ?>

	</div>
</header>

<main class="page-content">

	<section class="welcome">
		<div class="inner-column">

			<?php include("modules/welcome/template.php"); ?>

		</div>
	</section>

	<section class="action-call">
		<div class="inner-column">

			<?php include("modules/action/template.php"); ?>
				
		</div>
	</section>

	<section class="latest-articles">
		<div class="inner-column">

			<?php include("modules/articles-intro/template.php"); ?>

		</div>
	</section>

	<section class="action-call">
		<div class="inner-column">

			<?php include("modules/action/template.php"); ?>
				
		</div>
	</section>	

</main>


<footer class="site-footer">
	<div class="inner-column">

		<?php include("modules/footer/template.php"); ?>

	</div>
</footer>
</body>

</html>