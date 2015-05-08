<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>

<section class="home-top">
	<div class="wrapper">
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
</section><!-- .entry-header -->

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
		<h2 class="work-h2">Latest Work</h2>
</section>

<section class="bio">	
	<div class="wrapper">
		<div class="bio-text">
			<h2><?php the_field('home_bio-title'); ?></h2>
			<?php the_field('home_bio'); ?>
		</div>
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/headshot.jpg">
		</div>
	</div>
</section>

<section class="services">
	<div class="wrapper">
		<h2>How I Can Help</h2>
		<?php while ( have_rows('services') ) : the_row(); ?>
			<?php if( get_row_layout() == 'service_section' ): ?>
				<div>
					<h3><?php the_sub_field('service_section_title'); ?></h3>
					<ul>
						<?php while( have_rows('services_list') ): the_row(); ?>
							<li><?php echo get_sub_field('service_item'); ?></li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		<?php endwhile ; ?>
	</div>
				<p>Want to work together? Contact me!</p>
</section>

<section class="hire-me">
	<div class="wrapper">
		<h2>I’m also available for full-time, remote creative positions!</h2>
		<p>Keywords: web design, front-end development, project management, product management, SaaS/web/mobile applications</p>
		<p><a href="mailto:hire@aliciahurst.com">Talk to me about it!</a></p>
	</div>
</section>