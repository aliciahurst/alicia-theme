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

		<div class="footer-contact">
			<h3>Get in Touch</h3>
			<p><a href="/contact" class="btn-white"><span>Contact Me</span></a></p>
		</div>

		<div class="footer-center">
			<p class="top"><a href="#top"><svg class="icon-double-up"><use xlink:href="#icon-double-up"></use></svg></a></p>
			<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="/"><strong>Alicia Hurst</strong></a>, <br/> all rights reserved.</p>
		</div>

		<nav id="social-navigation-footer" class="social-navigation" role="navigation">
			<?php if( have_rows('social_media', 'option') ): ?>
				<h3>Keep in Touch</h3>
				<ul>
					<?php while( have_rows('social_media', 'option') ): the_row(); 
					$network = get_sub_field('social_media_network');
					$account = get_sub_field('social_media_account');
					?>
					<li> <a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><svg class="icon-<?php echo $network; ?>"><use xlink:href="#icon-<?php echo $network; ?>"></use></svg></a> </li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>	
	</nav> 

</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/content', 'scripts'); ?>
</body>
</html>
