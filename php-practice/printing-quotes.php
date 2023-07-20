<style>
html {
	background-color: salmon;
	font-family: courier;
	color: navy;
}

inner-column {
	max-width: 700px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}

.inputs {
	display: flex;
	flex-direction: column;
	gap: 10px;

}

button {
	margin-top: 10px;
}

a {
	text-decoration: none;
}

.inputs {
	width: 300px;
}

</style>


<?php
/*

printing quotes pseudocode
-prompt user for quote, store as variable
-prompt use for author, store as variable
-create a variables for quote and author that surround the quote with "" marks
-create single output that displays inputs and input with quotes

*/

//initialize
$quote = null;
$who = null;
$output = null;


//inputs

// if form is submitted
if (isset($_POST["submitted"])){
	// create variables from POST
	$quote = $_POST["quote"];
	$who = $_POST["who"];
	// wrap text within variables in quotes, use escape character to do so
	$quoteQuotes = "\"$quote\"";
	$whoQuotes = "\"$who\"";

	// store entire ouput in variable

	$output = 	
	"<p>What is the quote? $quote</p>
	<p>Who said it? $who</p>
	<p>$who says, $quoteQuotes";

}
?>

<inner-column>
	<form method="POST">
		<a href="?"><h2>Enter a quote without quotation marks and I will magically wrap it in quotation marks</h2></a>

		<div class="inputs">
			<label>What is the quote?</label>
			<input type="text" name="quote" required>

			<label>Who said it?</label>
			<input type="text" name="who" required>
		</div>

		<button type="submit" name="submitted">
		Press for marks
		</button>
	</form>

	<p><?=$output?></p>
</inner-column>
