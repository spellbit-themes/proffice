<?php 

/**
* service section
*
*/

$wp_customize->add_section('service_section_id',array(
	'title' => 'Services',
	'priority' => 10,
	'panel' => 'proffice_option_panel'
));


/**
* sb_proffice_kirki_id is found in kirki-config.php
* Please don't change it
* 
* all fields goes below
*/
// Enable or Disable service section
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'switch',
	'settings' => 'enable_service_section',
	'label'    => __( 'Enable or Diable Service Section', 'sb_proffice' ),
	'section'  => 'service_section_id',
	'default'  => '1',
	'priority' => 10,
	
) );



// title
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'text',
	'settings' => 'services_area_title',
	'label'    => __( 'Section Title', 'sb_proffice' ),
	'section'  => 'service_section_id',
	'default'  => esc_attr__( 'Our Services', 'sb_proffice' ),
	'priority' => 10,
) );

// sub-title
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'text',
	'settings' => 'services_area_sub_title',
	'label'    => __( 'Section Sub-Title', 'sb_proffice' ),
	'section'  => 'service_section_id',
	'default'  => esc_attr__( 'WordPress', 'sb_proffice' ),
	'priority' => 10,
) );




Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Manage Services', 'sb_proffice' ),
	'section'     => 'service_section_id',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Service', 'sb_proffice' ),
	),
	'button_label' => esc_attr__('Add Service', 'sb_proffice' ),
	'settings'     => 'sb_proffice_services',
	'fields' => array(
		'service_title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Title', 'sb_proffice' ),
			'description' => esc_attr__( 'Title Here', 'sb_proffice' ),
			'default'     => 'Web Design'
		),
		'service_desc' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Description', 'sb_proffice' ),
			'description' => esc_attr__( 'Write something about your service here', 'sb_proffice' ),
			'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.',
		),		
		'service_icon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Icon Name', 'sb_proffice' ),
			'description' => esc_attr__( 'write a beautiful icon name here from http://font-awesome.com', 'sb_proffice' ),
			'default'     => 'desktop',
		),
	)
) );
