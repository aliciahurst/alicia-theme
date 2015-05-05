<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>

	<header class="entry-header">
		<h1 class="page-title">Design & Development by Alicia</h1>

			<?php 
				$rows = get_field('home_quotes' ); // get all the rows
				$rand_row = $rows[ array_rand( $rows ) ]; // get a random row
				$rand_row_quote = $rand_row['single_quote' ]; // get the sub field value
				$rand_row_author = $rand_row['single_author' ]; // get the sub field value
			?>

		<h2><?php echo $rand_row_quote; ?></h2>
		<h3><?php echo $rand_row_author; ?></h3>
	</header><!-- .entry-header -->

	<section class="services">
		<h2>How I Can Help</h2>
	</section>

	<section class="latest-work">
		<div class="accordion">
			<ul> <?php $args = array( 'numberposts' => 5, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
				<li>
			      <div style="backgrond-image:url('/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg')">
			        <a href="<?php the_permalink(); ?>">
			          <h2><span><?php the_title(); ?></span></h2>
			        </a>
			      </div>
			    </li>
			<?php endforeach; ?>
			<?php wp_reset_query(); ?>
</ul>
		</div>
	</section>

	<section class="bio">
	<!-- Photo of me needs to go somewhere, maybe background image? -->
		<h2><?php the_field('home_bio-title'); ?></h2>
		<div class="bio-text">
			<?php the_field('home_bio'); ?>
		</div>
	</section>

	<section class="home-cta">
		<p>Want to work together? Contact me!</p>
	</section>

	<section class="hire-me">
		<h2>I’m also available for full-time, remote creative positions!</h2>
		<p>Keywords: web design, front-end development, project management, product management, SaaS/web/mobile applications</p>
		<a href="mailto:hire@aliciahurst.com">Talk to me about it!</a>
	</section>