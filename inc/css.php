<?php
 
 if(!function_exists('mnova_jscss')){
    function mnova_jscss(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        // <!-- Google Fonts CDN Link --> 
        wp_enqueue_style( 'fontlink', '//fonts.gstatic.com' );
       wp_enqueue_style( 'fontlink2', '//fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap' );
       // <!-- ICON CDN Link --> 
       wp_enqueue_style( 'iconcdn', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' );
       wp_enqueue_style( 'iconcdn2', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );
     // <!-- Library Link --> 
        wp_enqueue_style( 'library1', get_template_directory_uri() .'/lib/owlcarousel/assets/owl.carousel.min.css', array(), null, 'all');
        wp_enqueue_style( 'library2', get_template_directory_uri() .'/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array(), null, 'all');
  // <!-- Customized Bootstrap Stylesheet -->
        wp_enqueue_style( 'bscss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'all');

        // <!-- Template Stylesheet -->               
        wp_enqueue_style( 'tempcss', get_template_directory_uri() . '/css/style.css', array(), null, 'all');
        // <!-- /.footer-->
        wp_enqueue_script( 'jquery1', '//code.jquery.com/jquery-3.4.1.min.js' );
      wp_enqueue_script( 'jquery2', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js' );
    // <!-- Library Files -->
        wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/lib/easing/easing.min.js', null, null, true);
        wp_enqueue_script( 'waypointjs', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', null, null, true);
        wp_enqueue_script( 'owljs', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', null, null, true);
        wp_enqueue_script( 'tempusdominusjs', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', null, null, true);
        wp_enqueue_script( 'tempusdominusjs2', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', null, null, true);
        wp_enqueue_script( 'tempusdominusjs3', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', null, null, true);
        // <!-- Main JS -->
        wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/js/main.js', null, null, true);
   }
}
 add_action( 'wp_enqueue_scripts', 'mnova_jscss' );
 
 
?>     

 

 