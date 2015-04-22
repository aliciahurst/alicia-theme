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
<script src="https://fontastic.s3.amazonaws.com/hWzFcuyKpTpmn2DL4SVLTT/icons.js"></script>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display|Roboto:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class($post->post_name); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'alicia-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
				<div class="site-name">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> <span class="spacer">/</span></h1>
					<h2 class="site-description">Web Designer &amp; Developer</h2>
				</div>
				<div class="site-logo">
					<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wordpress/wp-content/themes/alicia-theme/assets/img/svg-min/ah.min.svg" width="80px"></a></h1>
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'alicia-theme' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
