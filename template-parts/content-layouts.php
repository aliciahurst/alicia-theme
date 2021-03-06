  <?php while ( have_rows('work_layouts') ) : the_row(); ?>

  	<?php if( get_row_layout() == 'text_only' ): ?>

  		<section class="layout-text">
          <?php the_sub_field('paragraph_text'); ?>
      </section>

    <?php elseif( get_row_layout() == 'lone_image' ): ?>

      <section class="layout-lone-image">
        <div class="wrapper">
          <img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php the_sub_field('the_lone_image'); ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>">
        </div>
      </section>

    <?php elseif( get_row_layout() == 'two_up' ): ?>

      <section class="layout-two">
        <?php while( have_rows('two_images') ): the_row(); $imageurl = get_sub_field('two_image_single'); ?>
          <img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>">
        <?php endwhile; ?>
      </section>

    <?php elseif( get_row_layout() == 'work_layout_images' ): ?>
      <?php 
      $displayType = get_sub_field('display_type'); 
      ?>
      <?php if( have_rows('image_urls') ): ?>

       <section class="<?php echo $displayType ?>">

        <?php if ($displayType == 'display_slider') : ?>
          <div class="rslides_container">
           <ul class="rslides" id="slider">
            <?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
             <li><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>" alt="<?php the_title(); ?> | <?php bloginfo( 'name' ); ?>"></li>
           <?php endwhile; ?>
         </ul>
       </div>
       
     <?php elseif ($displayType == 'display_before') : ?>
       <div class="twentytwenty-container">
        <?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
         <img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>" alt="<?php the_title(); ?> before and after | <?php bloginfo( 'name' ); ?>">
       <?php endwhile; ?>
     </div>

   <?php else : //if it's display_images ?>
    <?php while( have_rows('image_urls') ): the_row(); $imageurl = get_sub_field('work_single-image'); ?>
      <img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $imageurl; ?>">
    <?php endwhile; ?>

  <?php endif; ?>
  <div class="block_caption">
  <?php if( get_sub_field('block_caption') ): ?>
    <?php the_sub_field( 'block_caption' ); ?>
    </div>
<?php endif; ?>

</section>
<?php endif; ?>
<?php else : //other work layouts would go here ?>
<?php endif; //end if work layouts ?>

<?php endwhile; //end while work layout has rows ?>