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
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
    
    	<div id="logo-home">
        	<a class="a-logo-home" href="<?php bloginfo( 'home' ); ?>"></a>
        </div><!-- #logo-home -->
        
        <div id="direita-home">
        <?php
        $tituloapres = get_option ('mo_tituloapresentacao');
		$textoapres = get_option ('mo_textoapresentacao');
		?>
        <h1><?php echo $tituloapres; ?></h1>
        <p><?php echo $textoapres; ?></p>
        
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
        </div><!-- #direita-home -->
        
	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main">
