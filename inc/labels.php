<?php
if(!function_exists('medinova_service_custom_post_type')){
    function medinova_service_custom_post_type() {
        $labels=array(
            'name'          => __('Medical Service', 'madinova'),
            'singular_name' => __('Service', 'madinova'),
            'add_new'       => __( 'Add New Service', 'madinova' ),
            'add_new_item'  => __( 'Add New Service', 'madinova' ),
            'not_found'     => __( 'Not Service Found', 'madinova' )
        );

        register_post_type('medical_service',
            array(
                    'labels'              => $labels,
                    'public'              => true,
                    'supports'            => array( 'title','editor','thumbnail'),
                    'menu_position'       => 6,
                    'menu_icon'           => 'dashicons-portfolio'
            )
        );
    }
}
add_action('init', 'medinova_service_custom_post_type');


if(!function_exists('medinova_service_custom')){
    function medinova_service_custom() {
        $labels=array(
            'name'          => __('Medical Service Price', 'madinova'),
            'singular_name' => __('Service', 'madinova'),
            'add_new'       => __( 'Add New Service', 'madinova' ),
            'add_new_item'  => __( 'Add New Service', 'madinova' ),
            'not_found'     => __( 'Not Service Found', 'madinova' )
        );

        register_post_type('medical_service_',
            array(
                    'labels'              => $labels,
                    'public'              => true,
                    'supports'            => array( 'title','editor','thumbnail'),
                    'menu_position'       => 11,
                    'menu_icon'           => 'dashicons-portfolio'
            )
        );
    }
}
add_action('init', 'medinova_service_custom');




// ===================================team=============================
if(!function_exists('medinova_team')){
    function medinova_team() {
        $labels=array(
            'name'          => __('Team', 'madinova'),
            'singular_name' => __('team', 'madinova'),
            'add_new'       => __( 'Add New doctor', 'madinova' ),
            'add_new_item'  => __( 'Add New doctor', 'madinova' ),
            'not_found'     => __( 'Not doctor Found', 'madinova' )
        );

        register_post_type('team',
            array(
                    'labels'              => $labels,
                    'public'              => true,
                    'supports'            => array( 'title','editor','thumbnail'),
                    'menu_position'       => 11,
                    'menu_icon'           => 'dashicons-portfolio'
            )
        );
    }
}
add_action('init', 'medinova_team');


//===============================TESTIMONIAL=====================================
 
if(!function_exists('medinova_testimonial')){
    function medinova_testimonial() {
        $labels=array(
            'name'          => __('Testimonial', 'madinova'),
            'singular_name' => __('testimonial', 'madinova'),
            'add_new'       => __( 'Add New patient', 'madinova' ),
            'add_new_item'  => __( 'Add New patient', 'madinova' ),
            'not_found'     => __( 'Not patient Found', 'madinova' )
        );

        register_post_type('testimonial',
            array(
                    'labels'              => $labels,
                    'public'              => true,
                    'supports'            => array('editor','thumbnail'),
                    //'menu_position'       => 12,
                    'menu_icon'           => 'dashicons-portfolio'
            )
        );
    }
}
add_action('init', 'medinova_testimonial');
 

 
// ==================================================Hero==================================================


 


?>