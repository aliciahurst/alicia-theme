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
				<div class="copyright">
					<p>Alicia Hurst</p>
					<p>Web Design &amp; Development</p>
					<p><a href="mailto:alicia@aliciahurst.com">alicia@aliciahurst.com</a></p>
					<p>&copy; <?php echo date('Y'); ?> Alicia Hurst LLC. All rights reserved.</p>
				</div>
				
				<nav id="footer-navigation" class="secondary-navigation" role="navigation">
					<ul>
						<li><a href="/terms">Terms &amp; Privacy</a></li>
						<li><a href="/credits">Credits</a></li>
					</ul>
				</nav>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
