<?php





  if(!function_exists("madinova_sidebar")){

    function madinova_sidebar(){
        
        
        register_sidebar(
          array(
            'name'          =>__('Footer 1','madinova'), 
            'id'            =>'footer-one',
            'description'   =>__('Widgetized Area On The Left Side','madinova'),
            'bafore_widget' =>'<section id="%1$s" class="widget col-lg-3 col-md-6 bg-dark text-light">',
            'after_widget'  =>'</section>',
            'before_title'  =>'<h2 class="widget-title">',
            'after-title'   =>'</h4>'
          )
          );
        register_sidebar(
          array(
            'name'          =>__('Footer 2','madinova'),
            'id'            =>'footer-two',
            'description'   =>__('Widgetized Area On The Right Side','madinova'),
            'bafore_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'',
            'after-title'   =>''
          )
          );
        register_sidebar(
          array(
            'name'          =>__('Footer 3','madinova'),
            'id'            =>'footer-three',
            'description'   =>__('Widgetized Area On The Right Side','madinova'),
            'bafore_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'',
            'after-title'   =>''
          )
          );
        register_sidebar(
          array(
            'name'          =>__('Footer 4','madinova'),
            'id'            =>'footer-four',
            'description'   =>__('Widgetized Area On The Right Side','madinova'),
            'bafore_widget' =>'<section id="%1$s" class="widget %2$s">',
            'after_widget'  =>'</section>',
            'before_title'  =>'',
            'after-title'   =>''
          )
          );
      }

  }
  add_action("widgets_init","madinova_sidebar");
?>






















 