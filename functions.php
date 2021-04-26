<?php

function ofensiva_styles(){

    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'material', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style( 'ofsv_style', get_stylesheet_directory_uri().'/assets/css/style.css' );
    wp_enqueue_style( 'styles', get_stylesheet_uri() );
    wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.js' );

}
add_action('wp_enqueue_scripts','ofensiva_styles');

// IMAGENES WP
if(function_exists('add_theme_support')){
    add_theme_support( 'post-thumbnails' );
}
// TAMAÑO DE EXTRACTO
// function mytheme_custom_excerpt_length( $length ) {
//     return 20;
// }
add_filter( 'excerpt_length', function( $length ) { return 10; } );

/**
 * Register widget area.
 *
 */
function ofsv_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ofsv_widgets_init' );
