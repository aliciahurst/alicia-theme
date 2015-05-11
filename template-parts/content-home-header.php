<section class="home-top">
	<div class="wrapper">
		<div class="rslides_container">
			<ul id="home-slider" class="rslides">
				<?php while ( have_rows('home_quotes') ) : the_row();
				$quote = get_sub_field('single_quote' );
				$author = get_sub_field('single_author' );
				?>
				<li>
					<h2><?php echo $quote; ?></h2>
					<h4><?php echo $author; ?></h4>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
</section>