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

						<div class="entry-content">
							<div class="wrapper">
								<?php the_content(); ?>			

						<h2>Networks</h2>
						<ul>
						<?php while( have_rows('social_media', 'option') ): the_row(); 

							// vars
							$network = get_sub_field('social_media_network');
							$account = get_sub_field('social_media_account');

							?>
							<li><a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><?php echo $network; ?></a></li>
						<?php endwhile; ?>
						</ul>

						</div>
					</div>

						<div class="contact-form">
							<div class="wrapper">
								<div class="wrapper-min">
								<h2>New Project Inquiries</h2>
								<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
								</div>
							</div>
						</div>

					</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
