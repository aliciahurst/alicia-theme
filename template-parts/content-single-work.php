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
	<section style="background:url('/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $name; ?>'); background-size: contain;" class="top_image">
	</section>
<?php endwhile; ?>
<?php endif; ?>

<div class="work-content">
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

</div>