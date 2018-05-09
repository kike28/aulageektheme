<?php

/* 
Las funciones principales para añadir CSS al sistema de dependencias de 
WordPress son wp_register_style() y wp_enqueue_style(). La primera 
registra el archivo de la hoja de estilos, la segunda lo pone en cola para ser añadido.

***********************************************************************************

Añadir JavaScript en un theme de WordPress es prácticamente igual que añadir CSS. 
Se utilizan funciones análogas, wp_register_script() y wp_enqueue_script(), y se 
utilizan en los mismos actions.
<head>
    <meta charset=%s>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href=%s/css/materialize.css  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href=%s  media="screen,projection"/>
    <title>%s</title>
    
</head>
*/




/**
 * Enqueue scripts and styles.
 */

function aulageektheme_scripts() {
	wp_enqueue_style( 'aulageektheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'aulageektheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'aulageektheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aulageektheme_scripts' );





/*

function aulageektheme_scripts() {
	wp_enqueue_style( 'aulageektheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'aulageektheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'aulageektheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aulageektheme_scripts' );
?>


