<?php

/*=============================================
FUNCIÓN PARA AGREGAR ARCHIVOS EXTERNOS CSS Y JAVASCRIPT A LA PLANTILLA
https://developer.wordpress.org/themes/basics/including-css-javascript/
=============================================*/
function gamerev_archivos() {

	/*=============================================
	ARCHIVOS DE CSS
	=============================================*/
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(), '1.1', 'all');
	//wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400', array(), '1.1', 'all');
	wp_enqueue_style( 'jdSlider', get_template_directory_uri() . '/css/plugins/jquery.jdSlider.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css', array(), '1.1', 'all' );

	/*=============================================
	ARCHIVOS DE JS
	=============================================*/
	wp_enqueue_script( 'jqueryLib', 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js', array(), 1.1, false );
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.1.js', array(), 1.1, false );
	wp_enqueue_script( 'fontAwesome', 'https://kit.fontawesome.com/bbc93a7497.js', array(), 1.1, false );
	wp_enqueue_script( 'popperJs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), 1.1, false );
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', array(), 1.1, false );
	wp_enqueue_script( 'jdSlider', get_template_directory_uri() . '/js/plugins/jquery.jdSlider-latest.js', array(), 1.1, false );
	wp_enqueue_script( 'pagination', get_template_directory_uri() . '/js/plugins/pagination.min.js', array(), 1.1, false );
	wp_enqueue_script( 'superscrollorama', get_template_directory_uri() . '/js/plugins/jquery.superscrollorama.js', array(), 1.1, false );
	wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/plugins/TweenMax.min.js', array(), 1.1, false );
	wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/js/plugins/scrollUP.js', array(), 1.1, false );
	wp_enqueue_script( 'jqueryEasing', get_template_directory_uri() . '/js/plugins/jquery.easing.js', array(), 1.1, false );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), 1.1, true );

}

add_action( 'wp_enqueue_scripts', 'gamerev_archivos' );

/*=============================================
FUNCIONES PARA AGREGAR AL ADMINISTRADOR
https://developer.wordpress.org/themes/basics/theme-functions/
=============================================*/

function gamerev_setup() {

	/*=============================================
	FUNCIÓN PARA AGREGAR MENÚ
	=============================================*/
	register_nav_menus( array(
		'header-menu'   => __( 'Header Menu', 'gamerev' )
	) );

}

add_action( 'wp_enqueue_scripts', 'gamerev_setup' );

?>