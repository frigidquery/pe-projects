<?php include("infomercial-data.php"); ?>

<h2>Infomercials</h2>

<ul>
	<?php foreach ($info_data as $item) { ?>
		<?php
			$price = "$" . number_format($item["price"], 2, ".", ",");
		?>
		<li class="product">
			<product-card>
				<h3 class="product">Product: <?=$item["product"]?></h3>
				<h3 class="product-type">Product type: <?=$item["product-type"]?></h3>
				<h3 class="price">Price: <?=$price?></h3>
				<h3 class="spokesperson">Spokesperson: <?=$item["spokesperson"]?></h3>
				<h3 class="funny-scale">Funny Scale: <?=$item["funny-scale"]?></h3>
				<a href="?page=details&id=<?=$item["id"]?>">Read more about <?=$item["product"]?></a>
			</product-card>
		</li>
	<?php } ?>
</ul>

<!-- Commented out manual list items, because instead of that we can use a foreach loop and infomericial-data.php to automate the list items -->

<!-- <ul>
	<li class="product">
		<product-card>
			<h3 class="name">George Foreman Grill</h3>
			<h3 class="type">kitchen</h2>
			<h3 class="spokesperson">George Foreman</h3>
			<h3 class="funny-scale">2 out of 5 yuk yuks</h3>
			<a href="?page=details">Check it out!</a>
		</product-card>
	</li>

	<li class="product">
		<product-card>
			<h3 class="name">Flowbee</h3>
			<h3 class="type">grooming</h3>
			<h3 class="spokesperson">unknown</h3>
			<h3 class="funny-scale">3 out of 5 yuk yuks</h3>
			<a href="?page=details">Check it out!</a>
		</product-card>
	</li>

	<li class="product">
		<product-card>
			<h3 class="name">Sweatin' to the Oldies</h3>
			<h3 class="type">exercise</h3>
			<h3 class="spokesperson">Richard Simmons</h3>
			<h3 class="funny-scale">4 out of 5 yuk yuks</h3>
			<a href="?page=details">Check it out!</a>
		</product-card>
	</li>
</ul> -->