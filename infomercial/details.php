<?php include("infomercial-data.php"); ?>

<?php

	if (isset($_GET["id"]) ) {
		$id = $_GET["id"];
	}

		foreach ($info_data as $item) {
			// $price = "$" . number_format($item["price"], 2, ".", ",");
			// $product = $item->{$id}->product;
			// $image = $item["image"];
			if ($id == $item["id"] ) {
				$detail = $item;
		}
	}
?>


<?php if ( isset($detail) ) { ?>

<h2><?=$detail["product"]?></h2>

<picture>
	<img src= "<?=$detail["image"]?>">
</picture>

<p>Here's some details about this zany product. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dicta aperiam vel quae ab earum minima natus asperiores vitae consect.</p>

<?php } else { ?>

	<h2>No item found.</h2>

<?php } ?>