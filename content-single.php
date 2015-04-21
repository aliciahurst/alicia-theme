<?php
/**
 * @package alicia-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php get_template_part( 'content', 'entry-header' ); ?>
	
	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
