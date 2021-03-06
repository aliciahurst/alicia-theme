<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package alicia-theme
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="work-item thumbnail">
				<a href="<?php the_permalink(); ?>">
					<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
					<h1><span><?php the_title(); ?></span></h1>
				</a>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<div class="work-item thumbnail last">
		<a href="/contact">
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/your-site-here.jpg">

			<span class="btn">Let's Talk &rarr;</span>
		</a>
	</div>
</main><!-- #main -->

<?php get_footer(); ?>