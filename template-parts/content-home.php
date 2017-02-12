<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alicia-theme
 */
?>
<!-- <section class="top_image home-about">
	<div class="bio-photos">
		<div class="bio-headshot"></div>
		<div class="bio-setup"></div>
	</div>
</section> -->

<div class="home-container">	

	<section class="work-intro">
		<h1><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/logonamehome.png"></h1>
		<h3>Product Manager</h3>

		<?php if( have_rows('social_media', 'option') ): ?>
			<ul>
				<li> <a href="mailto:aliciamhurst@gmail.com" class="animated"><svg class="icon-mail"><use xlink:href="#icon-mail"></use></svg></a> </li>
				<?php while( have_rows('social_media', 'option') ): the_row(); 
				$network = get_sub_field('social_media_network');
				$account = get_sub_field('social_media_account');
				?>
				<li> <a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>" class="animated"><svg class="icon-<?php echo $network; ?>"><use xlink:href="#icon-<?php echo $network; ?>"></use></svg></a> </li>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>	
</section>

<section class="layout-text">
	<!-- <h3>Past Work</h3>
	<p>Product management, web design, front-en</p> -->
	
</section>

<?php $args = array( 'numberposts' => 7, 'post_type' => 'work' ); $lastposts = get_posts( $args ); foreach($lastposts as $post) : setup_postdata($post); ?> 

<section class="home-images">
	<div class="home-thumb">
		<a href="<?php the_permalink(); ?>" class="home-img">
			<img src="/wordpress/wp-content/themes/alicia-theme/assets/img/min/<?php echo $post->post_name;?>-thumb.jpg">
		</a>
	</div>
	<div class="home-caption">	
			<h3><a href="<?php the_permalink(); ?>">
				<span><?php the_title(); ?></span></a></h3>
				<?php if( have_rows('work_roles') ): //what I did ?>
					<?php while( have_rows('work_roles') ): the_row(); 
					$role = get_sub_field('single_role');
							 ?>
						<span class="work-role"><?php echo $role; ?></span>
				<?php endwhile; ?>
		<?php endif; ?>
		</div>

	</section>
<?php endforeach; ?>
<?php wp_reset_query(); ?>

</section>

</div>
