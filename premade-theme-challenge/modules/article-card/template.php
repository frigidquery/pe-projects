
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<title-text>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>
		</title-text>

		<title-button>
		<a class='button' href='#'>WATCH</a>
		</title-button>
	</text-content>

</article>

<article class='article-card2'>
<!-- 	<picture>
		<img src='images/<?=$thumbnail?>' alt='$todo'>
	</picture> -->

	<text-content>
		<title-text>
			<h1 class='title strong-voice'><?=$heading?></h1>

			<p class='teaser'><?=$description?></p>
		</title-text>

		<title-button>
			<a class='button' href='#'>WATCH</a>
		</title-button>
	</text-content>

</article>
