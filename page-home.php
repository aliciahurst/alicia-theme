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

						<?php get_template_part( 'content', 'cta' ); ?>

						<div class="latest">
							<div class="wrapper">
								<div class="latest-work">
									<header>
											<h2>Latest Work</h2>
											<p><a href="/work">See More</a></p>
									</header>
										<div class="work-item">
											<?php $args = array( 'numberposts' => 1, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
												<a href=" <?php the_permalink(); ?>">
													<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
													<h1><span><?php the_title(); ?></span></h1>
												</a>
										</div>
							<?php endforeach; ?>
								</div>

								<div class="latest-blog">
									<header>
										<h2>Latest Blog Post</h2>
										<p><a href="/blog">See More</a></p>
									</header>
										<?php $args = array( 'numberposts' => 1 ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
											<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1> 
											<?php the_excerpt(); ?> 
											<p class="read-link"><a href="<?php the_permalink(); ?>">Continue reading</a></p>
									<?php endforeach; ?>
								</div>					
							</div>
						</div>

					</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
