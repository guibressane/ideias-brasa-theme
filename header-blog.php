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

<body class="body-blog">
<div id="blog" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="blog-header" role="banner">
    
    	<div id="logo-blog">
        	<a class="a-logo-blog" href="<?php bloginfo( 'home' ); ?>/blog"></a>
        </div><!-- #logo-blog -->
        
	</header><!-- #blog-header -->

	<div id="main" class="site-main">
    
    <div id="menu-cats">
    
        <ul>
   <?php     
        if ( is_single() && is_category ) {
	add_filter('wp_list_categories', 'add_slug_class_wp_list_categories');
	function add_slug_class_wp_list_categories($list) {
	
	$cats = get_categories('hide_empty=0');
		foreach($cats as $cat) {

		$categories = get_the_category( $post_id );
			foreach( $categories as $category) {
				$catname = $category->slug;
			}
			
		$find = 'cat-item-' . $cat->term_id . '"';
		$replace = 'cat-item-' . $cat->slug . ' cat-item-' . $cat->term_id . '"';
		$list = str_replace( $find, $replace, $list );
		
		$find = 'cat-item-' . $cat->term_id . ' ';
		$replace = 'cat-item-' . $cat->slug . ' cat-item-' . $cat->term_id . ' ';
		$list = str_replace( $find, $replace, $list );
	
		$find = 'cat-item-' .$catname;
		$replace = 'cat-item-' .$catname. ' current-cat ';
		$list = str_replace( $find, $replace, $list );	
		}
	
	return $list;
	}
}?>
            <?php
			$args_cat=array(
			'title_li'=>'',
			'hide_empty'=> 0,
			'order'=>'DESC',
			);
			wp_list_categories( $args_cat );
			?>
                <?php
				//AKTUELLE Post-KATEGORIE-ID ermitteln
				foreach((get_the_category()) as $category)
				{
				$postcat=$category->cat_ID;
				$catname=$category->cat_name;
				//echo $postcat;
				}
    ?>
        </ul>
        <p class="menu-cats-titulo">Categorias: </p>
    </div><!-- #menu-cats -->