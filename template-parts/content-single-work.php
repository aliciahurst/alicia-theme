<?php
/**
* The template used for single work pages
*
* @package alicia-theme
*/
?>

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

<section class="work-intro top_image">
	<div class="aside">

		<nav class="portfolio-nav">
			<ul>
		<li class="nav-1">
			<?php if (!empty($prevID)) { ?>
		<a href="<?php echo get_permalink($prevID); ?>"
			title="<?php echo get_the_title($prevID); ?>">
		<?php }
		if (empty($prevID)) { ?>
		<a href="<?php echo get_permalink($lastID); ?>"
			title="<?php echo get_the_title($lastID); ?>">
			<?php } ?>
		<svg class="icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg></a></li>

		<li class="nav-2"><a href="/#work"><svg class="icon-grid"><use xlink:href="#icon-grid"></use></svg></a></li>
		
		<li class="nav-3">
			<?php if (!empty($nextID)) { ?>
		<a href="<?php echo get_permalink($nextID); ?>"
			title="<?php echo get_the_title($nextID); ?>">
		<?php }
		if (empty($nextID)) { ?>
		<a href="<?php echo get_permalink($firstID); ?>"
			title="<?php echo get_the_title($firstID); ?>">
			<?php } ?>
		<svg class="icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg></a></li>
			</ul>
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
		<div class="down-arrow">
			<svg class="icon-chevron-down"><use xlink:href="#icon-chevron-down"></use></svg>
		</div>
	</div>
	<?php if( have_rows('initial_images') ): ?>
		<?php while( have_rows('initial_images') ): the_row(); 
		$name = get_sub_field('opening_image'); ?>
		<div style="background:url('/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>');" class="work-image img-bg">

			<!-- <img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>">-->
		<?php endwhile; ?>
	<?php endif; ?>
</div>
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

<section class="work-navigation">
	<h2>More Work</h2>

	<div>
		<?php if (!empty($prevID)) { ?>
		<a href="<?php echo get_permalink($prevID); ?>"
			title="<?php echo get_the_title($prevID); ?>">
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php $slug = get_the_title($prevID); echo sanitize_title($slug); ?>-thumb.jpg">
			<h3><span><?php echo get_the_title($prevID); ?></span></h3></a>
			<?php } if (empty($prevID)) { ?>
			<a href="<?php echo get_permalink($lastID); ?>"
				title="<?php echo get_the_title($lastID); ?>">
				<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php $slug = get_the_title($lastID); echo sanitize_title($slug); ?>-thumb.jpg">
				<h3><span><?php echo get_the_title($lastID); ?></span></h3></a>
				<?php } ?>
			</div>
			<div>
				<?php if (!empty($nextID)) { ?>
				<a href="<?php echo get_permalink($nextID); ?>" 
					title="<?php echo get_the_title($nextID); ?>"><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php $slug = get_the_title($nextID); echo sanitize_title($slug); ?>-thumb.jpg">
					<h3><span><?php echo get_the_title($nextID); ?></h3></span></a>
					<?php } if (empty($nextID)) { ?>
					<a href="<?php echo get_permalink($firstID); ?>" title="<?php echo get_the_title($firstID); ?>">
						<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php 
						$slug = get_the_title($firstID); echo sanitize_title($slug); ?>-thumb.jpg">
						<h3><span><?php echo get_the_title($firstID); ?></span></h3></a>
					<?php } ?>
						</div>
					<p><a href="/#work" class="btn">View All Work</a></p>
				</section>