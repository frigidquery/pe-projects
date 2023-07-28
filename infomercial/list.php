<section class = "list">
	<div class = "inner-column">

		<?php include("infomercial-data.php");
		 ?>

		<h1>The Infomercials</h1>

			<?php foreach ($info_data as $item) { ?>
				<?php
					$price = "$" . number_format($item["price"], 2, ".", ",");
				?>
				<div class="product">
					<product-card>
						<div class="product-image">
							<img src= "<?=$item["image"]?>">
						</div>

						<div class="product-stats">
							<h3 class="product"><?=$item["product"]?></h3>
							<p class="productType">Product type: <?=$item["productType"]?></p>
							<p class="price">Price: <?=$price?></p>
							<p class="spokesperson">Spokesperson: <?=$item["spokesperson"]?></p>
							<p class="funnyScale">Funny Scale: <?=$item["funnyScale"]?></p>
							<a href="?page=details&id=<?=$item["id"]?>"><p>Read more about <?=$item["product"]?></p></a>
						</div>
					</product-card>
				</div>
			<?php } ?>
	</div>
</section>












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