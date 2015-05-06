  <?php while ( have_rows('work_layouts') ) : the_row(); ?>

  	<?php if( get_row_layout() == 'text_only' ): ?>

  		<section class="layout-text">
  			<?php the_sub_field('paragraph_text'); ?>
  		</section>

  	<?php elseif( get_row_layout() == 'work_layout_images' ): ?>
  		<?php 
  		$displayType = get_sub_field('display_type'); 
  		?>
  		<?php if( have_rows('image_urls') ): ?>
  			
  			<section class="<?php echo $displayType ?>">

  				<?php if ($displayType == 'display_slider') : ?>
  					<ul class="rslides">
  						<?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
  							<li><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>"></li>
  						<?php endwhile; ?>
  					</ul>

  				<?php elseif ($displayType == 'display_before') : ?>
  					<div class="twentytwenty-container">
  						<?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
  							<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>" alt="<?php the_title(); ?> before and after | <?php bloginfo( 'name' ); ?>">
  						<?php endwhile; ?>
  					</div>

  				<?php else : //if it's display_images ?>
  					<?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
  						<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>">
  					<?php endwhile; ?>
  				<?php endif; ?>

  				<?php if( get_sub_field( 'block_caption' ) ): ?>
  					<div class="stickem">
  						<?php the_sub_field( 'block_caption' ); ?>
  					</div>
  				<?php endif; ?>

  			</section>


  		<?php endif; ?>

  	<?php else : //ther work layouts would go here ?>
  	<?php endif; //end if work layouts ?>

  <?php endwhile; //end while work layout has rows ?>