<?php
/**
 * @package alicia-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<p> <span>Posted <span class="post_date date updated"><?php the_date(); ?></span> &nbsp; // </span>
			<span>Tagged</span> <?php the_tags( '',', ' ); ?></p>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
