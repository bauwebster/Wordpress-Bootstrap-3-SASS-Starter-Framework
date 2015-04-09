<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bautheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php wp_head(); ?>
<!--[if gte IE 9]>
	<style type="text/css">
		.gradient {
			filter: none;
		}
	</style>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bautheme' ); ?></a>

	<div id="header-wrapper">

	<nav id="site-main-navigation" class="navbar navbar-default" role="navigation">
	  <div class="container">
	    <div class="navbar-header">
		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"aria-controls="menu" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Site Logo</a>
	    </div>
	    <div id="main-nav" class="collapse navbar-collapse">
	     <?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'menu_class' => 'nav navbar-nav'
				) ); ?>
	      <form class="navbar-form navbar-right" role="search">
	        <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
			      </span>
			    </div><!-- // input-group -->
	      </form>
	    </div><!-- // .navbar-collapse -->
	  </div><!-- // .container -->
	</nav><!-- // #site-main-navigation -->

	<header id="site-header" role="banner">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</header><!-- #masthead -->

	</div><!-- // #header-wrapper -->

	<div id="site-content">
