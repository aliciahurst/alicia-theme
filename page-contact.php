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
							</div>
						</div>

						<nav id="social-navigation-footer" class="social-navigation" role="navigation">
						<h2>Keep in Touch</h2>
						<ul>
						<?php while( have_rows('social_media', 'option') ): the_row(); 

							// vars
							$network = get_sub_field('social_media_network');
							$account = get_sub_field('social_media_account');

							?>
							<li><a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><svg class="icon-<?php echo $network; ?>"><use xlink:href="#icon-<?php echo $network; ?>"></use></svg></a></li>
						<?php endwhile; ?>
						</ul>
					</nav>

						<div class="contact-form">
							<div class="wrapper">
								<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
							</div>
						</div>

					</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
