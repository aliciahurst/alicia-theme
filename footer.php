<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package alicia-theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'alicia-theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'alicia-theme' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'alicia-theme' ), 'alicia-theme', '<a href="http://aliciahurst.com" rel="designer">Alicia Hurst</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
