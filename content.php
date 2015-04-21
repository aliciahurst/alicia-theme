<?php
/**
 * @package alicia-theme
 */
?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="wrapper">
			<header class="entry-header">
				<h2 class="post_date date updated"><?php the_date(); ?></h2>
				<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'alicia-theme' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				?>

				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'alicia-theme' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</div>
	
	</article><!-- #post-## -->
