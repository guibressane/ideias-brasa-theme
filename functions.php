<?php
/**
 * celestial-theme functions and definitions
 *
 * @package celestial-theme
 * @since celestial-theme 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since celestial-theme 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 960; /* pixels */

if ( ! function_exists( 'celestial_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since celestial-theme 1.0
 */
function celestial_theme_setup() {


	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on celestial-theme, use a find and replace
	 * to change 'celestial_theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'celestial_theme', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'celestial_theme' ),
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'celestial_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );

}
endif; // celestial_theme_setup
add_action( 'after_setup_theme', 'celestial_theme_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since celestial-theme 1.0
 */
function celestial_theme_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'celestial_theme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'celestial_theme_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function celestial_theme_scripts() {
	wp_enqueue_style( 'celestial_theme-style', get_stylesheet_uri() );
	/**
	* Adiciona o CSS extra
	*/
	wp_enqueue_style( 'estilo', get_bloginfo('stylesheet_directory') . '/estilo.css' );
	wp_enqueue_style( 'paginacao', get_bloginfo('stylesheet_directory') . '/css/pagenavi.css' );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'celestial_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/* Redefine the header image width and height ********************************************/
define( 'HEADER_IMAGE_WIDTH', apply_filters( 'twentytwelve_header_image_width', 999999 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'twentytwelve_header_image_height', 700 ) );


/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
* Adiciona um tamanho de imagem
*
*/
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumbprojetos', 360, 999999, true );
	add_image_size( 'projetos', 360, 999999 );
	add_image_size( 'thumbcadapostmenor', 170, 999999, true );
	add_image_size( 'thumbcadapostmaior', 590, 999999, true );
}

/**
* Adiciona limite aos excerpts
*
*/
function limit_words($string, $word_limit) {

	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character

	$words = explode(' ', $string);

	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character

	return implode(' ', array_slice($words, 0, $word_limit));

}

/**
* Adiciona o CPT Projetos
*
*/
require_once (get_stylesheet_directory() . '/custom-ideias.php');

// Aqui eu defino o slug do CPT
define('ideias', 'ideias');
 
function projetos_right_now() {
    // Count number of voting polls
    $num_projetos = wp_count_posts('ideias');
 
    // i18n format published voting polls count
    $num = number_format_i18n($num_projetos->publish);
 
    // i18n format label noun for plural or singular
    $text = _n( 'Ideia Publicada', 'Ideias Publicadas', intval($num_projetos->publish));
 
    // Add links to poll list only if user has 'edit_posts'
    // capability, else add just text with no links
    if (current_user_can('edit_posts')) {
        $num = '<a href="edit.php?post_type='.ideias.'">'.$num.'</a>';
        $text = '<a href="edit.php?post_type='.ideias.'">'.$text.'</a>';
    }
 
    // Echo table row start, table cells and table row end
    echo '<tr>';
    echo '<td class="first b b-posts">'.$num.'</td>';
    echo '<td class="t posts">'.$text .'</td>';
    echo '</tr>';
}
add_action('right_now_content_table_end', 'ideias_right_now');


