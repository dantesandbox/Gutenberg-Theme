<?php

require('inc/customizer.php');


// Unregister Default Nav Menus
function avenger_unregister_menus() {
  unregister_nav_menu( 'expanded' );
  unregister_nav_menu( 'primary' );
  unregister_nav_menu( 'mobile' );
  unregister_nav_menu( 'footer' );
  unregister_nav_menu( 'social' );
}

add_action('init', 'avenger_unregister_menus');

// Register Nav Menus

function register_avenger_menu() {
  register_nav_menu('primary-menu',__( 'Primary' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}

add_action( 'after_setup_theme', 'register_avenger_menu' );


// Enqueue Styles and Scripts
if(!is_admin()){
  function avenger_enqueue_scripts() {
     wp_enqueue_script('jquery');
     wp_enqueue_style( 'hamburger_css', get_stylesheet_directory_uri() . '/assets/css/hamburgers.min.css?v='.time(), array(), false, 'all'  );
     wp_enqueue_style( 'font-awesome-5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', false, 'all');
     wp_enqueue_script( 'tween-lite', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js', array(), true );
     wp_enqueue_script( 'timeline-lite', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js', array(), true );
     wp_enqueue_style( 'skywalker-main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', false, 'all');
     wp_enqueue_script( 'skywalker-main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), true );
  }
}


// Call Fonts and Styles into backend.
function skywalker_admin_scripts(){
  if(is_admin()){
    add_theme_support( 'editor-styles' );
    add_editor_style( 'https://use.typekit.net/rtd1rvn.css' );
    wp_enqueue_script( 'skywalker-admin-js', get_stylesheet_directory_uri() . '/assets/js/admin.js', array(), true);
  }
}

add_action('wp_enqueue_scripts', 'avenger_enqueue_scripts');
add_action('customize_controls_enqueue_scripts', 'skywalker_admin_scripts' );


// Shorten Excerpt Length

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '';
}

add_filter('excerpt_more', 'new_excerpt_more');



?>
