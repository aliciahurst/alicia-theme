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
			
				<?php get_template_part( 'content', 'entry-header' ); ?>

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
					<p><a href="/work"><svg class="icon-portfolio"><use xlink:href="#icon-portfolio"></use></svg><span>Back to portfolio</span></a></p>
					<p><?php previous_post_link( '%link', '<span>Next project</span> <svg class="icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>'); ?></p>
				</div>

				<?php get_template_part( 'content', 'cta' ); ?>

			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
