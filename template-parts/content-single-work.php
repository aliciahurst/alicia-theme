<?php
/**
 * The template used for single work pages
 *
 * @package alicia-theme
 */
?>

<section class="work-intro">
	<div class="work-image">
		<?php if( have_rows('initial_images') ): ?>
			<?php while( have_rows('initial_images') ): the_row(); 
			$name = get_sub_field('opening_image'); ?>
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>">
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
		<div class="work-aside">
			<nav class="portfolio-nav">
				<svg class="icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
				<svg class="icon-grid"><use xlink:href="#icon-grid"></use></svg>
				<svg class="icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
			</nav>
			<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php the_field( 'work_description' ); ?>

			<?php if( have_rows('work_roles') ): //what I did ?>
				<h2>Roles</h2>
				<ul>
					<?php while( have_rows('work_roles') ): the_row(); 
					$role = get_sub_field('single_role'); ?>
					<li><?php echo $role; ?></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if( get_field('client_url') ): // live link ?>
			<?php $url = get_field('client_url'); ?>
			<p class="outbound-link">
				<a href="<?php echo $url; ?>">Launch live website <svg class="icon-external-link"><use xlink:href="#icon-external-link"></use></svg></a>
			</p>
		<?php endif; ?>
		</div>
</section>

<?php if( have_rows('work_layouts') ): ?>
	<?php get_template_part( 'template-parts/content', 'layouts' ); ?>
<?php else: ?>
<?php endif; ?>