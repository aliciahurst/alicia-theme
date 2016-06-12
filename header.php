<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package alicia-theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="/wordpress/wp-content/themes/alicia-theme/assets/img/min/favicon.ico">
	<script src="//use.typekit.net/nht0rlx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400|700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class($post->post_name); ?>>
<?php get_template_part('template-parts/content', 'analytics'); ?>
	<div id="page" class="hfeed site main animsition">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alicia-theme' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
				<div class="site-name">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span>Alicia Hurst</span></a></h1>
						
					</div>
					<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav> -->
				</div>
	</header><!-- #masthead -->