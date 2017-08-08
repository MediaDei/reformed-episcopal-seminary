<?php


//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// default Media Dei scripts
function scripts_styles() {

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_enqueue_style('global-style');
    
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome-style');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery

}
add_action( 'wp_enqueue_scripts', 'scripts_styles');


?>