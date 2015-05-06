<?php
/**
 * 
 * @package alicia-theme
 */
?>

<section class="contact-content">
	<?php the_content(); ?>
</section>

<section class="contact-form">
	<h2>New Project Inquiries</h2>
	<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
</section>