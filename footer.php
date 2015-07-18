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
	
	<div class="footer-container">

		<div class="footer-center">
			<p class="top"><a href="#top"><svg class="icon-double-up"><use xlink:href="#icon-double-up"></use></svg></a></p>
			

			<nav id="social-navigation-footer" class="social-navigation" role="navigation">
				<?php if( have_rows('social_media', 'option') ): ?>
					<ul>
						<li> <a href="mailto:alicia@aliciahurst.com" class="animated"><svg class="icon-mail"><use xlink:href="#icon-mail"></use></svg></a> </li>
						<?php while( have_rows('social_media', 'option') ): the_row(); 
						$network = get_sub_field('social_media_network');
						$account = get_sub_field('social_media_account');
						?>
						<li> <a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>" class="animated"><svg class="icon-<?php echo $network; ?>"><use xlink:href="#icon-<?php echo $network; ?>"></use></svg></a> </li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>	
		</nav> 
		
		<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="/"><strong>Alicia Hurst</strong></a>, <br/> all rights reserved.</p>
	</div>
</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/content', 'scripts'); ?>
</body>
</html>
