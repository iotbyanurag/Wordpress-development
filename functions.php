
<?php
// function add_theme_scripts(){
//     wp_enqueue_style('bootstrap-css',get_theme_file_uri('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'));
//     wp_enqueue_script('theme-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, '1.0', true);
//     wp_enqueue_script('jquery',get_theme_file_uri('//code.jquery.com/jquery-3.2.1.slim.min.js'));
//     wp_enqueue_script('popper',get_theme_file_uri('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'));
//     wp_enqueue_script('bootstrap-js',get_theme_file_uri('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'));
//     wp_enqueue_style( 'font awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
//     wp_enqueue_style( 'new_font',' //fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i ');
//     wp_enqueue_style( 'style', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
// add_action('wp_body_open', 'custom_content_after_body_open_tag');


// function theme_features(){
//     add_theme_support('title-tag');
// }

// add_action('after_setup_theme', 'theme_features');




function wpdocs_theme_name_scripts() {

  // wp_enqueue_style('bootstrap-css',get_theme_file_uri('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'));
  
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );
  
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.0.0', true );
  wp_enqueue_script( 'stellar', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'magnifice', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name-1', get_template_directory_uri() . '/js/aos.js', array(), '1.0.0', true );
  wp_enqueue_script( 'animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );


  wp_enqueue_style('styleCSS', get_stylesheet_directory_uri(). '/css/style.css');
  wp_enqueue_style('styleboot', get_stylesheet_directory_uri(). '/css/open-iconic-bootstrap.min.css');

  wp_enqueue_style('stylecarousel', get_stylesheet_directory_uri(). '/css/owl.carousel.min.css');
  wp_enqueue_style('styleanimate', get_stylesheet_directory_uri(). '/css/animate.css');
  wp_enqueue_style('stylepopup', get_stylesheet_directory_uri(). '/css/magnific-popup.css');
  wp_enqueue_style('styleaos', get_stylesheet_directory_uri(). '/css/aos.css');
  wp_enqueue_style('styledate', get_stylesheet_directory_uri(). '/css/bootstrap-datepicker.css');
  wp_enqueue_style('styleflaticon', get_stylesheet_directory_uri(). '/css/flaticon.css');
  wp_enqueue_style('styletime', get_stylesheet_directory_uri(). '/css/jquery.timepicker.css');
  
  wp_enqueue_style('styleIcomon', get_stylesheet_directory_uri(). '/css/icomoon.css');
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

?>
