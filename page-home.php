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

						<div class="latest">
							<div class="wrapper">
								<div class="latest-blog">
									<h2>Latest Blog Post</h2>
									<a href="/blog">See More</a>
									<?php $args = array( 'numberposts' => 1 ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
									<?php the_excerpt(); ?> 
									<a href="<?php the_permalink(); ?>">Continue reading</a>
								<?php endforeach; ?>

								</div>
								<div class="latest-work">
										<h2>Latest Work</h2>
									<a href="/work">See More</a>
									<?php $args = array( 'numberposts' => 1, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
										<img src="/wordpress/wp-content/themes/alicia-theme/asets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
								<?php endforeach; ?>
								</div>
							</div>
						</div>

						<footer class="entry-footer footer-go">
							<div class="wrapper">
								<h2>How can I help with your project?</h2>
								<p><a href="/contact">Get Started</a></p>
							</div>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
