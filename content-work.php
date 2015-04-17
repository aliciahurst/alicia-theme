<?php
/**
 * @package alicia-theme
 */
?>

<div class="work-item">
		<img src="/wordpress/wp-content/themes/alicia-theme/asets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</div>