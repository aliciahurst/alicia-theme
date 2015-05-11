<?php
/**
 * 
 * @package alicia-theme
 */
?>

<section class="contact-content">
	<div class="wrapper-min">
	<?php the_content(); ?>
	</div>
</section>

<section class="contact-form">
	<div class="wrapper">
	<h2>New Project Inquiries</h2>
	<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
	</div>
</section>