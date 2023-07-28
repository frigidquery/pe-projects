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


			if ( isset($_POST ["submitted"]) ) {

				if ( isset($_POST["product"]) ) {
					$product = $_POST["product"];

					if ( strlen($product) > 0) {
						$hasProd = true;
					} else {
						$prodError = "Please add a product.";
					}
				}

				if ( isset($_POST["productType"]) ) {
					$productType = $_POST["productType"];

					if ( strlen($productType) > 0) {
						$hasType = true;
					} else {
						$typeError = "Please add a product type.";
					}

					if ($productType != "kitchen" Or "bathroom" Or "grooming" Or "electronics" ) {
						$validType = "Please enter a valid product type.";
						echo $validType;
					}
				}		

				if ( isset($_POST["price"]) ) {
					$price = $_POST["price"];

					if ( $price > 0) {
						$hasPrice = true;
					}
				}

				if ( isset($_POST["spokesperson"]) ) {
					$spokesperson  = $_POST["spokesperson"];

					if ( strlen($spokesperson) > 0) {
						$hasSpoke = true;
					}
				}

				if ( isset($_POST["funnyScale"]) ) {
					$funnyScale = $_POST["funnyScale"];

					if ( $funnyScale > 0) {
						$hasFun = true;
					}
				}

				if ($hasProd && $hasType && $hasPrice && $hasSpoke && $hasFun) {
					echo "HAS ALL THE STUFF";
				}

			}

			// need to check for duplicate product inputs and return message that product is already in database
			// need to define maybe 5 product types and tell use product must be in one of those categories




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
	</div>
</section>
