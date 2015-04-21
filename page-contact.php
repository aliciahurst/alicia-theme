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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part( 'content', 'entry-header' ); ?>

						<div class="contact-form">
							<div class="wrapper">
								<div class="wrapper-min">
								<h1>New Project Inquiries</h1>
								<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
								</div>
							</div>
						</div>

					</article><!-- #post-## -->
				
				<?php get_template_part( 'content', 'cta' ); ?>
				
			</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
