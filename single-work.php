<?php
/**
 * The template for displaying single pages.
 *
 * @package alicia-theme
 */

get_header(); ?>

<main class="site-main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<?php get_template_part( 'template-parts/content', 'single-work' ) ; ?>

	<?php endwhile; // end of the loop. ?> 

</main> <!-- #main -->

<?php get_footer(); ?>
