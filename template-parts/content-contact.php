<?php
/**
 * 
 * @package alicia-theme
 */
?>

<section class="contact-content">
		<?php the_content(); ?>
		<h2>Networks</h2>
		<?php if( have_rows('social_media', 'option') ): ?>
			<ul>
				<?php while( have_rows('social_media', 'option') ): the_row(); 
				$network = get_sub_field('social_media_network');
				$account = get_sub_field('social_media_account');
				?>
				<li> <a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><?php echo $network; ?></a> </li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>
</section>

<section class="contact-form">
		<h2>New Project Inquiries</h2>
		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false]'); ?>
</section>