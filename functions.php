<?php

function wpdocs_theme_name_scripts() {
  // wp_enqueue_style('RebootCSS', get_stylesheet_directory_uri() . '/css/reboot.css', false , null);
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css', false , null);
  
  // ----------------------------------------------------------------------------------------------------------------------------------
  wp_enqueue_style('styleCSS', get_stylesheet_directory_uri() . '/css/style.css');
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );

  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true );
  wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'magnifice', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name-1', get_template_directory_uri() . '/js/aos.js', array(), '1.0.0', true );
  wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

  wp_enqueue_style('styleanimate', get_stylesheet_directory_uri(). '/css/animate.css');
  wp_enqueue_style('stylepopup', get_stylesheet_directory_uri(). '/css/magnific-popup.css');
  
  wp_enqueue_style('styledate', get_stylesheet_directory_uri(). '/css/bootstrap-datepicker.css');
  wp_enqueue_style('styleflaticon', get_stylesheet_directory_uri(). '/css/flaticon.css');
  wp_enqueue_style('styletime', get_stylesheet_directory_uri(). '/css/jquery.timepicker.css');
  
  wp_enqueue_style('styleIcomon', get_stylesheet_directory_uri(). '/css/icomoon.css');
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

?>