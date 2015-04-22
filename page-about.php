<?php
/**
 * The template for displaying the about page
 *
 * @package alicia-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
								<?php the_content(); ?>
						</div>
						<div class="behind-laptop">
							<div class="wrapper">
							<h2 class="large">Behind the Laptop</h2>
								<div class="slider">
									<?php if( have_rows('about_fact') ): ?>
									<?php while( have_rows('about_fact') ): the_row(); 
										$title = get_sub_field('fact_title');
										$image = get_sub_field('fact_image');
										$info = get_sub_field('fact_info');
										?>
										<div class="fact wrapper-min">
											<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $image; ?>">
											<h3><?php echo $title; ?></h3>
											<p><?php echo $info; ?></p>
										</div>
										<?php endwhile; ?>
									<?php endif; ?>
									</div>
							</div>
						</div>

						<div class="entry-footer footer-cta about-cta">
							<div class="wrapper">
								<h3>A Note Especially For</h3>
								<h2 class="large">Companies & Recruiters</h2>
								<p>I’m also available for full-time, <strong>remote-only</strong> creative positions.</p>
								<h3>Web, Mobile, and SaaS applications</h3>
								<p class="read-link"><a href="mailto:alicia@aliciahurst.com">Email Me</a></p>
							</div>
						</div>

						<?php get_template_part( 'content', 'cta' ); ?>


					</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
