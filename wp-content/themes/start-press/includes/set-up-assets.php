<?php
// Add scripts and stylesheets
function start_press_scripts() {
  wp_enqueue_style( 'start-press-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.6' );
  wp_enqueue_style( 'start-press-animate', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style( 'start-press-font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style( 'start-press-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'start-press-theme', get_template_directory_uri() . '/css/theme.css');


  wp_enqueue_script( 'start-press-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.3.6', true);
  wp_enqueue_script( 'start-press-html5shiv', get_template_directory_uri() . '/js/html5shiv.js');
  wp_enqueue_script( 'start-press-respond', get_template_directory_uri() . '/js/respond.js');
 wp_enqueue_script( 'start-press-wow', get_template_directory_uri() . '/js/wow.js');
 wp_enqueue_script( 'start-press-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), true);

}

add_action( 'wp_enqueue_scripts', 'start_press_scripts' );

// Add Google Fonts
function start_press_google_fonts() {
        wp_register_style('OpenSans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
        wp_enqueue_style( 'OpenSans');
    }

add_action('wp_print_styles', 'start_press_google_fonts');
