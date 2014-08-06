<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.png">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner" itemscope="" itemtype="http://schema.org/WPHeader">
		<div class="header-main container">
			<h1 class="site-title text-hide">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
					<?php bloginfo( 'name' ); ?>
					<img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			</h1>
			<div class="icon-header">
				 <span id="toogle-menu"><strong>Menú</strong> <i class="icon-menu2"></i></span>
				 <i id="toggle-search" class="icon-search"></i>
			</div>
			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>

			<div id="search-container" class="search-box-wrapper">
				<i class="icon-search"></i>
				<div class="search-box">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
<div id="page" class="hfeed site container">
	<div id="main" class="site-main">
