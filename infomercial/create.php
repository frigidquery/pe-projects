	<div class="inner-column">
		<form method = "POST">

			<a href="?page=create"><h1>Add an infomercial</h1></a>

			<div class="input-boxes">
				<label>What is the product?</label>
				<input type="text" name="product" required>

				<label>What type of item is it?</label>
				<input type="text" name="type" required>

				<label>How much does it cost? (it can be approximate)</label>
				<input type="number" name="cost" required>

				<label>Who is the spokesperson? (it can be unknown)</label>
				<input type="text" name="item2Quant" required>

				<label>How funny is it on a scale of 1 to 5 yuk yuks?</label>
				<input type="number" name="item3Cost" step = "1" min = "1" max = "5">
			</div>

			<button type="submit" name="submitted">
			Add it to the site!
			</button>
		</form>
	</div>