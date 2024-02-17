<?php
/**
 * brightlytheme functions and definitions
 *
 * @package brightlytheme
 */

if ( ! function_exists( 'brightlytheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function brightlytheme_setup() {

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

	}
endif;
add_action( 'after_setup_theme', 'brightlytheme_setup' );

/**
 * Enqueue scripts and styles.
 */




function brightlytheme_scripts() {

	wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, null, true );
    wp_enqueue_script('jQuery');
    
	wp_enqueue_script( 'brightlytheme-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_register_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, null, true );
    wp_enqueue_script('bootstrap');

  wp_register_script( 'matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', null, null, true );
    wp_enqueue_script('matchHeight');

    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );

    wp_enqueue_style( 'brightlytheme-style', get_stylesheet_uri() );

	  wp_enqueue_style( 'brightlytheme-style', get_template_directory_uri().'css/normallize.css' );
	
	  wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'roboto-font', 'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' );

    wp_enqueue_style( 'josefin-font', 'https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap' );
}

add_action( 'wp_enqueue_scripts', 'brightlytheme_scripts' );

/*
* Relative image path. 
*/
if( !defined(THEME_IMG_PATH)){
   define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets' );
  }
/*
* Custom Menu 
*/
function brightlytheme_menus() {
  register_nav_menus(
    array(
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'brightlytheme_menus' );
