<?php
/**
 * The template used for displaying call to action in the footer of main
 *
 * @package alicia-theme
 */
?>

<footer class="entry-footer footer-cta">
	<div class="wrapper">
		<?php if (is_page('Contact')): ?>
			<h2>That's a wrap</h2>
			<p>Talk to you soon!</p>
		<?php else : ?>
			<h2>How can I help with your project?</h2>
			<p><a href="/contact">Get Started</a></p>
		<?php endif; ?>
	</div>
</footer>