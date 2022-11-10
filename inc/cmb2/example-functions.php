<?php

if(!function_exists('madinova_medical_service')){
	function madinova_medical_service( ){
		$madinovaMetaBox= new_cmb2_box(array(
		   'title'=>'add fields',
		   'id'   =>'mMetabox',
		   'object_types'=>array('medical_service_')
		));
	   
		$madinovaMetaBox->add_field(array(
		   'name'=>'price',
		   'type'=>'text_money',
		   'id'=>'price'
	   )); 
		$madinovaMetaBox->add_field(array(
		   'name'=>'Feature',
		   'type'=>'text',
		   'id'=>'feature',
		   "repeatable" => true,
	   )); 
	   }
	 
}
add_filter('cmb2_meta_boxes','madinova_medical_service');



if(!function_exists('mn_medical_service')){
	function mn_medical_service( ){
		$madinovaMetaBox= new_cmb2_box(array(
		   'title'=>'add fields',
		   'id'   =>'m_s_icon',
		   'object_types'=>array('medical_service')
		));
	   
		$madinovaMetaBox->add_field(array(
		   'name'=>'Icon',
		   'type'=>'text',
		   'id'=>'icon'
	   )); 
 
	   }
	 
}
add_filter('cmb2_meta_boxes','mn_medical_service');
//  ================================about us============================
//  ================================        ============================




function MADINOVA_about_us_details( ){
	$cmb_group = new_cmb2_box( array(
		'id'           => 'yourprefix_group_metabox',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'about_us' ),
	) );
 
	$group_field_id = $cmb_group->add_field( array(
		'id'          => 'yourprefix_group_demo',
		'type'        => 'group',
		'description' => esc_html__( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ), 
			'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'       => true,
		 
		),
	) );
   
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Add Icon', 'madinova' ),
		'id'         => 'about_con',
		'type'		=>'text',
		'icon_url'        => 'dashicons-palmtree'
		 
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'What type service', 'madinova' ),
		'id'         => 'about_service',
		'type'		=>'text',
		 
		 
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Service Name', 'madinova' ),
		'id'         => 'about_service_name',
		'type'		=>'text',
		 
		 
	) );
   
   }
   add_filter('cmb2_meta_boxes','MADINOVA_about_us_details');


  // ============================team===============================

  
function madinova_team( ){
	$cmb_group = new_cmb2_box( array(
		'id'           => 'team_team',
		'title'        => esc_html__( 'Repeating Field Group', 'cmb2' ),
		'object_types' => array( 'team' ),
	) );
 
	$group_field_id = $cmb_group->add_field( array(
		'id'          => 'team_',
		'type'        => 'group',
		'description' => esc_html__( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Entry {#}', 'cmb2' ), 
			'add_button'     => esc_html__( 'Add Another Entry', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Entry', 'cmb2' ),
			'sortable'       => true,
		 
		),
	) );
   
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Social Icon class', 'madinova' ),
		'id'         => 'team_icon',
		'type'		=>'text',
	 
		 
	) );
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Social URL', 'madinova' ),
		'id'         => 'team_icon_url',
		'type'		=>'text',
		 
		 
	) );

   
   }
   add_filter('cmb2_meta_boxes','madinova_team');

  // ===========================================TESTIMONIAL========================================

   
function madinova_testimonial() {

	$cmb_about_page = new_cmb2_box( array(
		'id'           => 'testimonial',
		'title'        => esc_html__( 'Testimonial Field', 'cmb2' ),
		'object_types' => array( 'testimonial' ),  
 
		) );
	$cmb_about_page->add_field( array(
		'name' => esc_html__( 'Patient Name', 'cmb2' ),
		'id'   => 'patient_name',
		'type' => 'text',
	) );
	$cmb_about_page->add_field( array(
		'name' => esc_html__( 'Profession', 'cmb2' ),
		'id'   => 'patient_profession',
		'type' => 'text',
	) );

}
add_filter('cmb2_meta_boxes','madinova_testimonial');
 