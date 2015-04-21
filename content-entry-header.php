<?php
/**
 * The template used for the entry header on some pages
 *
 * @package alicia-theme
 */
?>

<header class="entry-header">
	<?php if (is_page('Contact')): ?>
		<h1 class="entry-title">Get in touch</h1>
	<?php else : ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php endif; ?>

	<div class="entry-left">
		<?php if (is_page('Contact')): ?>
			<?php the_content(); ?>
		<?php else : ?>
			<h3>Overview</h3>
			<?php the_field('work_description'); ?>
		<?php endif; ?>
	</div>

	<div class="entry-right">
		<?php if (is_page('Contact')): ?>
			<h3>Networks</h3>
		<?php else : ?>
			<h3>Key Roles</h3>
		<?php endif; ?>

		<ul>
			<?php if (is_page('Contact')): ?>
				<?php if( have_rows('social_media', 'option') ): ?>
				<?php while( have_rows('social_media', 'option') ): the_row(); 
					$network = get_sub_field('social_media_network');
					$account = get_sub_field('social_media_account');
					?>
					<li><a href="http://<?php echo $network; ?>.com/<?php echo $account; ?>"><?php echo $network; ?></a></li>
				<?php endwhile; ?>
				<?php endif; ?>
			<?php else : ?>
				<?php if( have_rows('work_roles') ): ?>
						<?php while( have_rows('work_roles') ): the_row(); 
							$role = get_sub_field('new_role'); ?>
								<li><?php echo $role; ?></li>
						<?php endwhile; ?>
				<?php endif; ?>
		<?php endif; ?>
		</ul>
		
		<?php if( get_field('client_url') ): ?>
			<?php $url = get_field('client_url'); ?>
				<p class="outbound-link">
					<a href="<?php echo $url; ?>">Launch live website <svg class="icon-external-link"><use xlink:href="#icon-external-link"></use></svg></a>
				</p>
		<?php endif; ?>
	</div>

</header><!-- .entry-header -->

