<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package alicia-theme
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrapper">
		<p class="copyright">
			&copy; <?php echo date('Y'); ?> 
			<a href="/"><strong>Alicia Hurst</strong></a>. 
			All rights reserved.
			<span class="footer-links"><a href="/terms">Terms &amp; Privacy</a> <span class="sep"> | </span> <a href="/credits">Credits</a></span>
		</p>			
<?php if( have_rows('social_media', 'option') ): ?>
	<nav id="social-navigation-footer" class="social-navigation" role="navigation">
		<ul>
		<?php while( have_rows('social_media', 'option') ): the_row(); 
			$network = get_sub_field('social_media_network');
			$account = get_sub_field('social_media_account');
			?>
	<li> <a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><svg class="icon-<?php echo $network; ?>"><use xlink:href="#icon-<?php echo $network; ?>"></use></svg></a> </li>
		<?php endwhile; ?>
</ul>
	</nav> <?php endif; ?>	
</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
