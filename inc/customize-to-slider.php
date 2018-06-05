<?php 

// Slider section
	$wp_customize->add_section('slider_section_id',array(
		'title' => 'Slider',
		'priority' => 10,
		'panel' => 'proffice_option_panel'
	));


	/**
	* sb_proffice_kirki_id is found in kirki-config.php
	* Please don't change it
	* 
	* all fields goes below
	*/
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'switch',
	'settings' => 'enable_slide_section',
	'label'    => __( 'Enable or Diable Slide Section', 'sb_proffice' ),
	'section'  => 'slider_section_id',
	'default'  => '1',
	'priority' => 10,
	
) );



Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Manage Slider', 'sb_proffice' ),
	'section'     => 'slider_section_id',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Slide', 'sb_proffice' ),
	),
	'button_label' => esc_attr__('Add Slide', 'sb_proffice' ),
	'settings'     => 'sb_proffice_slides',
	'fields' => array(
		'slide_bg' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Slide Background Image', 'sb_proffice' ),
			'description' => esc_attr__( 'Upload your slide image from here', 'sb_proffice' ),
			'default'     => '',
			'choices'     => array(
				'save_as' => 'id'
			)
		),
		'slide_title' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Title', 'sb_proffice' ),
			'description' => esc_attr__( 'Title Here', 'sb_proffice' ),
			'default'     => 'WE BUILD UP YOUR BUSINESS'
		),
		'slide_desc' => array(
			'type'        => 'textarea',
			'label'       => esc_attr__( 'Description', 'sb_proffice' ),
			'description' => esc_attr__( 'Write something about your service here', 'sb_proffice' ),
			'default'     => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',
		),		
		'left_btn_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Left Button Text', 'sb_proffice' ),
			'description' => esc_attr__( 'Please provide Left Button Text here', 'sb_proffice' ),
			'default'     => 'Learn More',
		),		
		'left_btn_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Left Button Url', 'sb_proffice' ),
			'description' => esc_attr__( 'Please provide Left Button Url here', 'sb_proffice' ),
			'default'     => '#',
		),
		'right_btn_text' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Right Button Text', 'sb_proffice' ),
			'description' => esc_attr__( 'Please provide Right Button Text here', 'sb_proffice' ),
			'default'     => 'Our Services',
		),		
		'right_btn_url' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Right Button Url', 'sb_proffice' ),
			'description' => esc_attr__( 'Please provide Right Button Url here', 'sb_proffice' ),
			'default'     => '#',
		),
	)
) );
