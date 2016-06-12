<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>

<section id="about" class="home-about">	
	<div class="bio-text">
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/logoname.png">
		<h3>Product Manager at <a href="http://powertofly.com">PowerToFly</a></h3>
		<p class="unavailable">currently <strong>unavailable</strong> for freelance projects</p>
		<nav id="social-navigation-footer" class="social-navigation" role="navigation">
				<?php if( have_rows('social_media', 'option') ): ?>
					<ul>
						<li> <a href="mailto:hi@aliciahurst.com" class="animated"><svg class="icon-mail"><use xlink:href="#icon-mail"></use></svg></a> </li>
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
	<p>Web Design & Front-End Development</p>
		<?php $args = array( 'numberposts' => 7, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
		<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
				<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
						<h3><span><?php the_title(); ?></span></h3>
					</a>
				</div>
		<?php endforeach; ?>
		<?php wp_reset_query(); ?>

</section>
<section class="bottom-unavailable">
	<p>Please note I am currently <strong>unavailable</strong> for any freelance projects.</p>
</section>

