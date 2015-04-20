<?php
/**
 * @package alicia-theme
 */
?>

<div class="work-item">
		<a href=" <?php the_permalink(); ?>"><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg"></a>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
</div>