<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>
<!-- <section class="home-top">
	<div class="home-title">
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/design.png"> <h2>&plus;</h2><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/development.png">
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
	<h2>What I Do</h2>
	<div class="services-container">
		<?php while ( have_rows('services') ) : the_row(); ?>
			<?php if( get_row_layout() == 'service_section' ): ?>
				<div class="services-div fadeInUp">
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
		<div>
			<h3>Projects</h3>
			<p>I'm accepting inquiries for new, freelance front-end development projects, preferably those that are team-based.</p>
			<p><a href="/contact" class="btn">Let's talk!</a></p>
		</div>
		<div>
			<h3>Hire Me</h3>
			<p>I’m available for a <strong>full-time, remote</strong> position as Product Manager or Front-End Developer on a web/SaaS applications team.</p>
			<p><a href="http://linkedin.com/in/aliciahurst" class="no-line">Find me on LinkedIn</a> or <a href="mailto:hi@aliciahurst.com">Get in touch &rarr;</a></p>
		</div>
</section> -->

<section id="about" class="home-about">	
	<div class="bio-text">
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/logoname.png">
		<h2>Product Manager at <a href="http://powertofly.com">PowerToFly</a></h2>
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
		<div class="down-arrow">
			<svg class="icon-chevron-down"><use xlink:href="#icon-chevron-down"></use></svg>
		</div>
	</div>
	<div class="bio-photos">
		<div class="bio-headshot"></div>
		<div class="bio-setup"></div>
	</div>
</section>

<section id="work" class="home-work">
	<h2>Past Work</h2>
		<?php $args = array( 'numberposts' => 6, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
		<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
				<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
						<h3><span><?php the_title(); ?></span></h3>
					</a>
				</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>
</section>
