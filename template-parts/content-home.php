<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>

<section class="services">
	<div class="wrapper">
		<h2>How I Can Help</h2>
		<?php while ( have_rows('services') ) : the_row(); ?>
			<?php if( get_row_layout() == 'service_section' ): ?>
				<div class="services-div">
					<h3><?php the_sub_field('service_section_title'); ?></h3>
					<ul>
						<?php while( have_rows('services_list') ): the_row(); ?>
							<li><?php echo get_sub_field('service_item'); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		<?php endwhile ; ?>
		<div class="contact-me">
		<h3>Want to work together?</h3>
		<p><a href="/contact">Let's talk!</a></p>
		</div>
		<aside class="note-wrap">
			<h3>I’m also available for <strong>full-time, remote</strong> creative positions!</h3>
			<p><strong>Keywords:</strong> web design, front-end development, project management, product management, SaaS/web/mobile applications</p>
			<p><a href="mailto:hire@aliciahurst.com">Get in touch</a></p>
		</aside>
	</div>
</section>

<section class="photos">
	<div>
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/working.jpg">
	</div>
	<div>
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/headshot2.jpg">
	</div>
	<div>
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/smiling.jpg">
	</div>
</section>

<section id="about" class="bio">	
	<div class="wrapper">
		<div class="bio-text wrapper-min">
			<h2><?php the_field('home_bio-title'); ?></h2>
			<?php the_field('home_bio'); ?>
		</div>
	</div>
</section>

<section class="work-h2">
<h2>Latest Work</h2>
</section>

<section class="latest-work">
	<div class="accordion">
		<ul> <?php $args = array( 'numberposts' => 5, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
			<li>
				<div style="background-image:url('/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg')" class="accordion-div">
					<a href="<?php the_permalink(); ?>">
						<h2><span><?php the_title(); ?></span></h2>
					</a>
				</div>
			</li>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
	</ul>
</div>
</section>
