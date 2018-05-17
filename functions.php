<?php
/**
 * aulageektheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aulageektheme
 */

if ( ! function_exists( 'aulageek_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aulageek_setup() { // añadir los soportes que desee dentro de esta funcion.
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aulageektheme, use a find and replace
		 * to change 'aulageek' to the name of your theme in all the template files.
		 */
		

	}//Fin de la function aulageek_setup
endif;////////////////fin del If 
add_action( 'after_setup_theme', 'aulageek_setup' );// añade la funcion aulageek_setup


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 * Estableciendo ancho contenido del sitio.
 */
function aulageek_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aulageek_content_width', 900 );
}
add_action( 'after_setup_theme', 'aulageek_content_width', 0 ); 




/**
 * Enqueue scripts and styles.
 */
function aulageek_scripts() {
	wp_enqueue_style( 'aulageek-style', get_stylesheet_uri() );
	wp_enqueue_style( 'materializecss', get_template_directory_uri() . '/css/materialize.css', array(), '1.1', 'all');
	wp_enqueue_script( 'materializejs', get_template_directory_uri() . '/js/materialize.js', array ( ), 1.1, true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( ), 1.1, true);
	//

	//wp_enqueue_script( 'aulageek-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'aulageek-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// Habilitar comentarios anidados solo cuando este activo en la pagina que se carga.
        // https://peterwilson.cc/including-wordpress-comment-reply-js/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aulageek_scripts' );



