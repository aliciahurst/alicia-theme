<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>
<section class="home-top">
	<div class="home-title">
		<h1> Design + Development</h1>
		<h3>By Me, Alicia</h3>
	</div>

	<div class="rslides_container">
		<ul id="home-slider" class="rslides">
			<?php while ( have_rows('home_quotes') ) : the_row();
			$quote = get_sub_field('single_quote' );
			$author = get_sub_field('single_author' );
			?>
			<li>
			<h3>&times;</h3>
			<h2><?php echo $quote; ?></h2> 
				<h4><?php echo $author; ?></h4>
				<h3>&times;</h3>
			</li>
		<?php endwhile; ?>
	</ul>
</div>
</section>

<section class="home-services">
	<h2>How I Can Help</h2>
	<div class="services-container">
		<?php while ( have_rows('services') ) : the_row(); ?>
			<?php if( get_row_layout() == 'service_section' ): ?>
				<div class="services-div wow fadeInUp" data-wow-delay="0.5s">
					<h3> <?php if( get_sub_field('service_svg') ): ?>
						<?php $svg = get_sub_field('service_svg'); ?>
						<svg class="icon-<?php echo $svg ?>"><use xlink:href="#icon-<?php echo $svg ?>"></use></svg>
					<?php endif; ?>
					<?php the_sub_field('service_section_title'); ?></h3>
					<ul>
						<?php while( have_rows('services_list') ): the_row(); ?>
							<li><?php echo get_sub_field('service_item'); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		<?php endwhile ; ?>
	</div>
</section>

<section class="home-contact">
		<div class="wow slideInLeft" data-wow-offset="30">
			<h3>Want to work together?</h3>
			<p>I'm currently accepting inquiries for new projects.</p>
			<p><a href="/contact" class="btn">Let's talk!</a></p>
		</div>
		<div class="wow slideInRight" data-wow-offset="30">
			<h3>Want to hire me?</h3>
			<p>I’m also available for <strong>full-time, remote</strong> creative positions!</p>
			<p><strong>Keywords:</strong> web design, front-end development, ux/ui, project management, product management, SaaS/web/mobile applications</p>
			<p><a href="mailto:hi@aliciahurst.com">Get in touch &rarr;</a></p>
		</div>
</section>

<section id="about" class="home-about">	
	<div class="bio-text">
		<h2><?php the_field('home_bio-title'); ?></h2>
		<?php the_field('home_bio'); ?>
	</div>
	<div class="bio-photos">
		<div class="bio-headshot"></div>
		<div class="bio-setup"></div>
	</div>
</section>

<section class="home-work">
	<h2>Latest Work</h2>
		<?php $args = array( 'numberposts' => 2, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
		<div>
		<a href="<?php the_permalink(); ?>">
				<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
						<h3><span><?php the_title(); ?></span></h3>
					</a>
				</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
		<p><a href="/work" class="btn">View All Work</a></p>
</section>
