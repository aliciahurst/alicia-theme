<?php
/**
 * The template for displaying all single Work posts.
 *
 * @package alicia-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header class="entry-header wrapper">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<div class="work-info">
						<h3>Overview</h3>
						<?php the_field('work_description'); ?>
					</div>
					<div class="work-roles">
							<?php if( have_rows('work_roles') ): ?>
								<h3>Key Roles</h3>
									<ul>
									<?php while( have_rows('work_roles') ): the_row(); 
										// vars
										$role = get_sub_field('new_role');
										?>
										<li><?php echo $role; ?></li>
									<?php endwhile; ?>
									</ul>
							<?php endif; ?>

						<?php if( get_field('client_url') ): ?>
									<?php $url = get_field('client_url'); ?>
										<a href="$url">Launch live website</a>
							<?php endif; ?>
					</div>
				</header><!-- .entry-header -->

				<div class="entry-content wrapper">
					<?php if( have_rows('work_images') ): ?>
					<?php while( have_rows('work_images') ): the_row(); 
										// vars
										$name = get_sub_field('image_name');
										$size = get_sub_field('image_size');
										?>
										<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>" class="<?php echo $size; ?>">
									<?php endwhile; ?>
							<?php endif; ?>
				</div><!-- .entry-content -->

				<div class="entry-nav wrapper">
					<p><a href="/work"><svg class="icon-portfolio"><use xlink:href="#icon-portfolio"></use></svg> Back to portfolio</a></p>
					<p><?php previous_post_link( '%link', 'Next project <svg class="icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>'); ?></p>
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
