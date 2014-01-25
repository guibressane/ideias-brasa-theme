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

<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery-1.4.3.min.js"></script>  
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.preloader.js"></script>  
<script type="text/javascript">
$(function(){
	
	$(".thumb-projetos").preloader();
	
	});
</script>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/preloader.css" type="text/css" />  

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- FONTES GOOGLE -->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body class="body-interno">

		<div class="image-header-bg"><?php if ( get_header_image() ) : ?>

			<div class="title-description">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>

		<img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
		<?php endif; ?>
					
		</div>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead-interno" class="site-header" role="banner">
   
		<nav role="navigation" class="site-navigation main-navigation-interno">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation-interno -->
        
        <div id="direita-interno">
               
        <?php
		//Pega o CPT
		$post_type_obj = get_post_type_object('ideias');
		//Pega o Título do CPT
		$title_projetos = apply_filters('post_type_archive_title', $post_type_obj->labels->name );
		?>
        
        <h1 class="entry-title capriola"><?php echo $title_projetos; ?></h1>
        </div><!-- #direita-interno -->
        
	</header><!-- #masthead-interno .site-header -->

	<div id="main" class="site-main">
