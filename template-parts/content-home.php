<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>
<section class="top_image home-about">
	<div class="bio-photos">
		<div class="bio-headshot"></div>
		<div class="bio-setup"></div>
	</div>
</section>

<div class="work-content">	

	<section class="work-intro">
		<h1><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/logonamehome.png"></h1>
		<h3>Product Manager at <a href="http://powertofly.com">PowerToFly</a></h3>

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

	<h5>currently <strong>unavailable</strong> for freelance projects</h5>
</section>

<section class="layout-text">
	<h3>Past Work</h3>
	<p>Web Design & Front-End Development</p>
	<?php $args = array( 'numberposts' => 7, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 
</section>
<section class="display_images">
	<a href="<?php the_permalink(); ?>" class="ims">
		<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
	</a>

	<div class="block_caption">	
		<p>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?></a>
			</p>
		</div>

	</section>
<?php endforeach; ?>
<?php wp_reset_query(); ?>

</section>

</div>
