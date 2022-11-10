<?php
if(!function_exists('madinova')){
    function madinova(){
        add_theme_support( 'post-thumbnails', array( 'post', 'movie','medical_service_','page','media','about_us','team','testimonial' ) );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
     	load_theme_textdomain( 'madinova', get_template_directory() . '/languages' );

         register_nav_menus(
            array(
              'main-menu' => __( 'primary Menu' ),
              //'extra-menu' => __( 'Extra Menu' )
             )
           );

    }
}
add_action( 'after_setup_theme', 'madinova' );



?>