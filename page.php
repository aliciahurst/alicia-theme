<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package alicia-theme
 */

get_header(); ?>

<main class="site-main" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<header class="entry-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<?php if (locate_template('template-parts/content-' . $post->post_name . '.php') != '') {

			get_template_part( 'template-parts/content', $post->post_name );

		} else {

			get_template_part( 'template-parts/content', 'page' ); 

		}; ?>

	<?php endwhile; // end of the loop. ?> 

</main> <!-- #main -->

<?php get_footer(); ?>
