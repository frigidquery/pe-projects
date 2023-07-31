<section class = "create">
	<div class = "inner-column">

		<?php

		$product = "";
		$productType = "";
		$price = "";
		$spokesperson = "";
		$funnyScale = "";

		$hasProd = false;
		$prodError = false;
		$hasType = false;
		$typeError = false;
		$hasPrice = false;
		$hasSpoke = false;
		$hasFun = false;

		//this must be null, setting to "" causes error when pushing values to array
		$infoArray = null;


			if ( isset($_POST ["submitted"]) ) {

				if ( isset($_POST["product"]) ) {
					$product = $_POST["product"];

					if ( strlen($product) > 0) {
						$hasProd = true;

						$infoArray["product"] = $product;

						// 3 ways to see array since echo won't work
						// var_dump($infoArray);
						// print_r($infoArray);
						// print json_encode($infoArray);
					} 

						else {
						$prodError = "Please add a product.";
					}
				}

				if ( isset($_POST["productType"]) ) {
					$productType = $_POST["productType"];

					if ( strlen($productType) > 0) {
						$hasType = true;

					 	// this allows you to append the existing associative array with a key value pair, rather than write over
						$infoArray["productType"] = $productType;

					}

						else {
						$typeError = "Please add a product type.";
					}

				}		

				if ( isset($_POST["price"]) ) {
					$price = $_POST["price"];

					if ( $price > 0) {
						$hasPrice = true;

						$infoArray["price"] = $price;
					}
				}

				if ( isset($_POST["spokesperson"]) ) {
					$spokesperson  = $_POST["spokesperson"];

					if ( strlen($spokesperson) > 0) {
						$hasSpoke = true;

						$infoArray["spokesperson"] = $spokesperson;
					}
				}

				if ( isset($_POST["funnyScale"]) ) {
					$funnyScale = $_POST["funnyScale"];

					if ( $funnyScale > 0) {
						$hasFun = true;

						$infoArray["funnyScale"] = $funnyScale;
					}
				}

				if ($hasProd && $hasType && $hasPrice && $hasSpoke && $hasFun) {
					$id = mt_rand(100, 10000);
					$infoArray["id"] = $id;
					// encode $infoArray to json
					$infoJson = json_encode($infoArray);
				}
			}
		?>	

		<form method = "POST">

			<a href="?page=create"><h1>Add an infomercial</h1></a>

			<div class="input-boxes">
				<label>What is the product?</label>
				<input type="text" name="product" value="<?=$product?>">
				<?php if ($prodError) { ?>
					<p class = "error"><?=$prodError?></p>
				<?php } ?>
	 
				<label>What type of item is it?</label>
				<input type="text" name="productType" value="<?=$productType?>">
				<?php if ($typeError) { ?>
					<p class = "error"><?=$typeError?></p>
				<?php } ?>

				<label>How much does it cost? (it can be approximate)</label>
				<input type="number" name="price" required value="<?=$price?>">

				<label>Who is the spokesperson? (it can be unknown)</label>
				<input type="text" name="spokesperson" required value="<?=$spokesperson?>">

				<label>How funny is it on a scale of 1 to 5 yuk yuks?</label>
				<input type="number" name="funnyScale" step = "1" min = "1" max = "5" value="<?=$funnyScale?>">
			</div>

			<button type="submit" name="submitted">
			Add it to the site!
			</button>
		</form>

						 <!-- write to json file (with error handling) -->
				<p class="json-msg"><?php 

				if ( isset($_POST ["submitted"]) ) {

				if (file_put_contents("info.json", $infoJson))
					echo "JSON file created successfully";
				else
					echo "Error creating JSON file";
			}
				?></p>
	</div>
</section>
