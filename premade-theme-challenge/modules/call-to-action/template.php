<?php
	include ('data/article2.php');
?>

<call-to-action>
	<h2 class='heading attention-voice'>FREE THIS WEEK</h2>

	<p class='story'>Here's a sample of some shows you might enjoy before subscribing.</p>

	<!-- <a class='button' href='#'>Call to Action</a> -->

	<article-grid>
		<ul class='article-list2'>

			<?php foreach ($article2 as $article666) { ?>
				<li class='article'>
						<article class='article-card2'>
							<?php
								$heading2 = $article666['heading'];
								$description2 = $article666['description'];
								$thumbnail2 = $article666['thumbnail'];
							?>
						 	<picture>
								<img src='images/<?=$thumbnail2?>' alt='$todo'>
							</picture> 

							<text-content>
								<title-text>
									<h1 class='title strong-voice'><?=$heading2?></h1>

									<p class='teaser'><?=$description2?></p>
								</title-text>

								<title-button>
									<a class='play-button' href='#'>Play Now</a>
								</title-button>
							</text-content>

						</article>
				</li>
			<?php } ?>

		</ul>
	</article-grid>

</call-to-action>
