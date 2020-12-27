<?php

function add_theme_scripts(){
    wp_enqueue_style('bootstrap-css',get_theme_file_uri('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'),NULL,'1.0', true);
    wp_enqueue_script('theme-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_script('jquery',get_theme_file_uri('//code.jquery.com/jquery-3.2.1.slim.min.js'), NULL, '1.0', true);
    wp_enqueue_script('popper',get_theme_file_uri('//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q'), NULL, '1.0', true);
    wp_enqueue_script('bootstrap-js',get_theme_file_uri('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl'),NULL, '1.0', true);
    wp_enqueue_style( 'font awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'new_font',' //fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i ');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function theme_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'theme_features');
?>
