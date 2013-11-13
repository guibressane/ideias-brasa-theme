<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body class="body-interno">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead-interno" class="site-header" role="banner">
    
    	<div id="logo-interno">
        	<a class="a-logo-interno" href="<?php bloginfo( 'home' ); ?>"></a>
        </div><!-- #logo-interno -->
        
        <div id="direita-interno">
        
		<nav role="navigation" class="site-navigation main-navigation-interno">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation-interno -->
        
        <h1 class="entry-title capriola"><?php the_title(); ?></h1>
        </div><!-- #direita-interno -->
        
	</header><!-- #masthead-interno .site-header -->

	<div id="main" class="site-main">
