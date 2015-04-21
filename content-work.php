<?php
/**
 * @package alicia-theme
 */
?>

<div class="work-item">
		<a href=" <?php the_permalink(); ?>">
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
			<h1><span><?php the_title(); ?></span></h1>
		</a>
</div>