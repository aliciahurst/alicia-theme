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
				<header class="entry-header">
					<div class="work-info">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php the_field('work_description'); ?>
					</div>
					<div class="work-roles">
							<?php if( have_rows('work_roles') ): ?>
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
										<a href="$url"><?php the_title(); ?></a>
							<?php endif; ?>
					</div>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php if( have_rows('work_images') ): ?>
					<?php while( have_rows('work_images') ): the_row(); 
										// vars
										$name = get_sub_field('image_name');
										$size = get_sub_field('image_size');
										?>
										<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>.jpg" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>" class="$size">
									<?php endwhile; ?>
							<?php endif; ?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php alicia_theme_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php the_post_navigation(); ?>


		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
