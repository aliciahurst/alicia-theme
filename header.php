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
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	<script src="//use.typekit.net/nht0rlx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class($post->post_name); ?>>
	<div id="page" class="hfeed site main">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alicia-theme' ); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<div class="header-container">
				<div class="site-name">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span>Alicia</span> <span>Hurst</span></a></h1>
						
					</div>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<!-- Any idea why the li's aren't indented in the output? -->
					</nav>
				</div>
	</header><!-- #masthead -->