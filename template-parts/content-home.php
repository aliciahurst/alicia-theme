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
		<h3>By Alicia</h3>
	</div>

	<div class="rslides_container">
		<ul id="home-slider" class="rslides">
			<?php while ( have_rows('home_quotes') ) : the_row();
			$quote = get_sub_field('single_quote' );
			$author = get_sub_field('single_author' );
			?>
			<li>
				<h2><?php echo $quote; ?></h2>
				<h4><?php echo $author; ?></h4>
			</li>
		<?php endwhile; ?>
	</ul>
</div>
</section>

<section class="home-services">
	<h2>How I Can Help</h2>
	<?php while ( have_rows('services') ) : the_row(); ?>
		<?php if( get_row_layout() == 'service_section' ): ?>
			<div class="services-div">
			<?php if( get_sub_field('service_svg') ): ?>
		<?php $svg = get_sub_field('service_svg'); ?>
		<svg class="icon-<?php echo $svg ?>"><use xlink:href="#icon-<?php echo $svg ?>"></use></svg>
<?php endif; ?>
				<h3><?php the_sub_field('service_section_title'); ?></h3>
				<ul>
					<?php while( have_rows('services_list') ): the_row(); ?>
						<li><?php echo get_sub_field('service_item'); ?></li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
	<?php endwhile ; ?>
</section>

<section class="home-contact">
	<div>
		<h3>Want to work together?</h3>
		<p><a href="/contact">Let's talk!</a></p>
	</div>
	<div>
	<h3>Want to hire me?</h3>
	<p>I’m also available for <strong>full-time, remote</strong> creative positions!</p>
		<p><strong>Keywords:</strong> web design, front-end development, project management, product management, SaaS/web/mobile applications</p>
		<p><a href="mailto:hire@aliciahurst.com">Get in touch</a></p>
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

<section class="work-h2">
	<h2>Latest Work</h2>
</section>

<section class="home-work">
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
