<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix';


//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme Options',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
 
  )
) );
 //
///logo
//
CSF::createSection( $prefix, array(
  'title'  => 'LOGO',
  'icon'   => 'fas fa-rocket',
  'fields' => array(
      array(
        'id'=>'logo',
        'title'=>'Logo',
        'type'=>'fieldset',
        'fields'=>array(
          array(
            'id'=>'logo_icon',
           'type'=>'icon',
           'title'=>__('Logo Icon','madinova')
           ),
      
           array(
            'id'=>'logo_text',
           'type'=>'text',
           'title'=>__('Text','madinova')
           ),
           array(
            'id'=>'logo_url',
           'type'=>'text',
           'title'=>__('Logo URL','madinova')
           ),
        ),
      ),
  )
  ));
  //
  ///Header hero
  //
  CSF::createSection( $prefix, array(
    'title'  => 'Header Hero',
    'icon'   => 'fas fa-rocket',
    'fields' => array(
 
            array(
             'id'=>'hero_title',
             'type'=>'text',
             'title'=>__('Title','madinova')
             ),
             array(
              'id'=>'hero_description',
             'type'=>'text',
             'title'=>__('Description','madinova')
             ),
             array(
              'id'=>'hero_feacher',
              'type'  => 'upload',
             'title'=>__('Feacher Image','madinova')
             ),
             array(
              'id'    => 'hero_background',
              'type'  => 'background',
              'title'=>__('Background Image','madinova')
            ),
          //button 1
            array(
              'id'         => 'button',
              'type'       => 'fieldset',
              'title'      => 'Button',
              'fields' => array(
            
                array(
                  'id'     => 'button_1',
                  'type'   => 'fieldset',
                  'title'=>__('Button One','madinova'),
                  'fields' => array(
                    array(
                      'id'      => 'btn_1',
                      'type'    => 'text',
                      'title'=>__('Button One','madinova'),
                    ),
         
                    array(
                      'id'      => 'btn_1_url',
                      'type'    => 'text',
                      'title'=>__('Button One URL','madinova'),
                    ),
                  ),
               
                ),
                        //button 2
                array(
                  'id'     => 'button_2',
                   'type'   => 'fieldset',
                    'title'=>__('Button Two','madinova'),
                    'fields' => array(
                     array(
                      'id'      => 'btn_2',
                       'type'    => 'text',
                       'title'=>__('Button Two','madinova'),
                       ),
                 
                     array(
                      'id'      => 'btn_2_url',
                       'type'    => 'text',
                       'title'=>__('Button Two URL','madinova'),
                         ),
                     ),
                       
                 ),
        
              )
            ),


        ),
    
    ));
  //
  ///About Us
  //
  CSF::createSection( $prefix, array(
    'id'    => 'about_us',
    'title' => 'About Us',
    'icon'  => 'fas fa-plus-circle',
    'fields'      => array(
      array(
        'id'         => 'about_us_',
        'type'       => 'fieldset',
        'title'      => 'About Us',
        'fields' => array( 
        
            array(
              'id'=>'aboutus',
              'title'=>'Image,Title and discription',
              'type'=>'fieldset',
              'fields'=>array(
                array(
                  'id'      => 'about_image',
                  'type'  => 'upload',
                  'title'=>__('Feacher Image','madinova')
                ),
            
                array(
                  'id'      => 'about_title',
                  'type'    => 'text',
                  'title'   => 'Title',
                ),
                array(
                  'id'      => 'about_description',
                  'type'    => 'text',
                  'title'   => 'Description',
                ),
              )
            ),

            array(
              'id'    => 'about_service',
              'type'  => 'group',
              'title' => __('About Service','madinova'),
              'button'=>'call and email',
              'fields'=>array(
                 array(
                  'id'=>'add_about_icon',
                 'type'=>'text',
                 'title'=>__(' Icon Class','madinova')
                 ),
                 array(
                  'id'=>'aboutdesignation',
                 'type'=>'text',
                 'title'=>__('What Type Service','madinova')
                 ),
                 array(
                  'id'=>'about_designation',
                 'type'=>'text',
                 'title'=>__('Designation','madinova')
                 )
              )
            ),

         ),
      ),
  
    
  
     
      
   
    )
  ) ); 
  
 //
///header top
//
CSF::createSection( $prefix, array(
  'id'    => 'header_top',
  'title' => 'Header Area',
  'icon'  => 'fas fa-plus-circle',
  'fields'      => array(
    array(
      'id'         => 'header_left_',
      'type'       => 'fieldset',
      'title'      => 'Header Left',
      'fields' => array( 
        array(
          'id'=>'phone',
          'title'=>'Phone',
          'type'=>'fieldset',
          'fields'=>array(
            array(
              'id'      => 'phone_icon',
              'type'    => 'icon',
              'title'=>__('Phone Icon','madinova')
            ),
            array(
              'id'      => 'cell-url',
              'type'    => 'text',
              'title'   => 'Site URL',
            ),
          )
        ),
        array(
          'id'=>'message',
          'title'=>'Message',
          'type'=>'fieldset',
          'fields'=>array(
            array(
              'id'      => 'message_icon',
              'type'    => 'icon',
              'title'=>__('Message Icon','madinova')
            ),
            array(
              'id'      => 'message-email',
              'type'    => 'text',
              'title'   => 'Email',
            ),
          )
        ),
       ),
    ),

    array(
      'id'    => 'header_right',
      'type'  => 'group',
      'title' => __('Header Right','madinova'),
      'button'=>'call and email',
      'fields'=>array(
         array(
          'id'=>'add_cell_icon',
         'type'=>'icon',
         'title'=>__(' Icon','madinova')
         ),

         array(
          'id'=>'add_url',
         'type'=>'text',
         'title'=>__('Add URL','madinova')
         )
      )
    ),

   
    
 
  )
) ); 

 


 
//
///footer area
//

CSF::createSection( $prefix, array(
  'id'    => 'footer_area',
  'title' => 'Footer area',
  'icon'  => 'fas fa-plus-circle',
  'fields'      => array(

    array(
      'id'         => 'footer_copyright',
      'type'       => 'fieldset',
      'title'      => 'Site Title',
      'fields' => array(
              //for site name
        array(
          'id'     => 'opt_footer_copyright',
          'type'   => 'fieldset',
          'title'  => 'Site Title',
          'fields' => array(
            array(
              'id'      => 'opt-sitename',
              'type'    => 'text',
              'title'   => 'Site Name',
            ),
 
            array(
              'id'      => 'opt-url',
              'type'    => 'text',
              'title'   => 'Site URL',
            ),
          ),
          'default' => array(
            'opt-sitename'    => 'Medinova',
            
            'opt-url'         => '#',
          )
        ),
                //for developer team
        array(
          'id'     => 'opt_footer_team',
          'type'   => 'fieldset',
          'title'  => 'Developer Team',
          'fields' => array(
            array(
              'id'      => 'opt-devteamname',
              'type'    => 'text',
              'title'   => 'Developer Team Name',
            ),
            array(
              'id'      => 'team-url',
              'type'    => 'text',
              'title'   => 'Developer Team Site URL',
            ),
          ),
          'default' => array(
            'opt-devteamname'    => 'Team Medinova',
            'opt-devteamurl'     => '#',
          )
        ),

      )
    ),

  )
) );

 
 

 

 
 
 

 

 

 

 
  

 
 
