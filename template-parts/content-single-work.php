<?php
/**
 * The template used for single work pages
 *
 * @package alicia-theme
 */
?>

<section class="work-intro layout-images display_images">
	<div class="work-image">
		<?php if( have_rows('initial_images') ): ?>
			<?php while( have_rows('initial_images') ): the_row(); 
			$name = get_sub_field('opening_image'); ?>
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>">
		<?php endwhile; ?>
	</div>
<?php endif; ?>
<aside>
	<nav class="portfolio-nav">
		<svg class="icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
		<svg class="icon-grid"><use xlink:href="#icon-grid"></use></svg>
		<svg class="icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
	</nav>
	<div class="intro-content">
	<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php the_field( 'work_description' ); ?>

	<?php if( get_field('client_url') ): // live link ?>
		<?php $url = get_field('client_url'); ?>
		<p class="outbound-link">
			<a href="<?php echo $url; ?>"><span>Launch live site</span><svg class="icon-external-link"><use xlink:href="#icon-external-link"></use></svg></a>
		</p>
	<?php endif; ?>
	</div>
</aside>
</section>
<section class="down-arrow">
<svg class="icon-chevron-down"><use xlink:href="#icon-chevron-down"></use></svg>
</section>
<section class="contribution">
	<?php if( have_rows('work_roles') ): //what I did ?>
		<h3>Contribution</h3>
		<ul>
			<?php while( have_rows('work_roles') ): the_row(); 
			$role = get_sub_field('single_role');
			$svg = get_sub_field('role_svg'); ?>
			<li>
			<svg class="icon-<?php echo $svg; ?>"><use xlink:href="#icon-<?php echo $svg; ?>"></use></svg>
				<p><?php echo $role; ?></p>
			</li>
		<?php endwhile; ?>
	</ul>
<?php endif; ?>
</section>

<?php if( have_rows('work_layouts') ): ?>
	<?php get_template_part( 'template-parts/content', 'layouts' ); ?>
<?php else: ?>
<?php endif; ?>