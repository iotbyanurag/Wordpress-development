<?php

function add_theme_scripts(){
    wp_enqueue_script('theme-js', get_theme_file_uri('js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style( 'font awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'new_font',' //fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i ');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>
