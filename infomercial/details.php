<?php include("infomercial-data.php"); ?>

<?php
	if (isset($_GET["id"]) ) {
		foreach ($info_data as $item) {

			$price = "$" . number_format($item["price"], 2, ".", ",");
			$product = $item["product"];


		}
		?>
<!-- 		<li class="product">
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
	}
	?> -->



<h2><?=$product?></h2>

<picture>
	<img src="https://placekitten.com/300/200" alt="">
</picture>

<p>Here's some details about this zany product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta aperiam vel quae ab earum minima natus asperiores vitae consect.</p>