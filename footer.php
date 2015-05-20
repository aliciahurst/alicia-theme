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
	
	<!--<a href="#top" class="to-top"><span>up</span></a>-->

	

	<div class="footer-container">

		<p class="copyright"><span class="copy-date"> &copy; <?php echo date('Y'); ?></span> <a href="/"><strong>Alicia Hurst</strong></a>, all rights reserved <a href="https://github.com/aliciahurst/alicia-theme#readme"><span class="copy-heart">&#10084;</span> site credits</a></p>

		<p class="contact-button"><a href="/contact" class="btn"><span>Contact Me</span></a></p>	
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
<?php get_template_part('template-parts/content', 'scripts'); ?>
</body>
</html>
