<?php
/**
* The template used for single work pages
*
* @package alicia-theme
*/
?>



<?php if( have_rows('initial_images') ): ?>
	<?php while( have_rows('initial_images') ): the_row(); 
	$name = get_sub_field('opening_image'); ?>
	<!-- <section style="background:url('/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>'); background-size: contain;" class="top_image">
	<?php the_title( '<h1 class="page-title name-scroll">', '</h1>' ); ?>
	</section> -->
	<section class="top_image">
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>">
		<?php the_title( '<h1 class="page-title name-scroll">', '</h1>' ); ?>
	</section>
<?php endwhile; ?>
<?php endif; ?>

<div class="work-content">
<div class="ex">
<a href="/"><svg class="icon-close"><use xlink:href="#icon-close"></use></svg></a>
</div>
	<section class="work-intro">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if( have_rows('work_roles') ): //what I did ?>
				<!-- <h3>Contribution</h3> -->
				<ul>
					<?php while( have_rows('work_roles') ): the_row(); 
					$role = get_sub_field('single_role');
					$svg = get_sub_field('role_svg'); ?>
					<li>
						<svg class="icon-<?php echo $svg; ?>"><use xlink:href="#icon-<?php echo $svg; ?>"></use></svg>
						<span class="work-role"><?php echo $role; ?></span>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php the_field( 'work_description' ); ?>
				<!-- <?php if( get_field('client_url') ): // live link ?>
					<?php $url = get_field('client_url'); ?>
					<p class="outbound-link">
						<a href="<?php echo $url; ?>"><span>Launch live site</span><svg class="icon-external-link"><use xlink:href="#icon-external-link"></use></svg></a>
					</p>
				<?php endif; ?> -->
			<!-- <div class="down-arrow">
				<svg class="icon-chevron-down"><use xlink:href="#icon-chevron-down"></use></svg>
			</div> -->
			
	</section>

	<?php if( have_rows('work_layouts') ): ?>
		<?php get_template_part( 'template-parts/content', 'layouts' ); ?>
	<?php else: ?>
	<?php endif; ?>

	<nav class="another">
	<?php
			$pagelist = get_posts('sort_column=menu_order&sort_order=asc&post_type=work');
			$pages = array();
			foreach ($pagelist as $page) {
				$pages[] += $page->ID;
			}
			$current = array_search(get_the_ID(), $pages);
			$prevID = $pages[$current-1];
			$nextID = $pages[$current+1];
			$firstID = $pages[0];
			$lastID = end($pages);
			?>

			<?php if (!empty($prevID)) { ?>
		<a href="<?php echo get_permalink($prevID); ?>"
			title="<?php echo get_the_title($prevID); ?>">
		<?php }
		if (empty($prevID)) { ?>
		<a href="<?php echo get_permalink($lastID); ?>"
			title="<?php echo get_the_title($lastID); ?>">
			<?php } ?>
		to the next project &rarr;</a>

	</nav>

</div>