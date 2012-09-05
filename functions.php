<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images"); 

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main' => 'Main Nav'
		)
	);
}


/*****Sidebars!******/

if ( function_exists( 'register_sidebar' ) ) {

	register_sidebar( array (
		'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'dir' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

//require_once('includes/cpt/business-manager/business-manager.php');
//require_once('theme-options.php');
//require_once('director-widgets.php');
//add_action( 'widgets_init', create_function( '', 'register_widget( "director_featured_business" );' ) );
require_once 'includes/awesome_menu/awesome_menu.php';
//require_once 'includes/nivo_slider/nivo_slider.php';





?>