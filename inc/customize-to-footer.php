<?php 

	// Footer section
	$wp_customize->add_section('general_section_id',array(
		'title' => 'Footer Section',
		'priority' => 11,
		'panel' => 'general_section_panel_id'
	));
	
	
	/**
	* sb_proffice_kirki_id is found in kirki-config.php
	* Please don't change it
	* 
	* all fields goes below
	*/
	Kirki::add_field( 'sb_proffice_kirki_id', array(
		'type'     => 'editor',
		'settings' => 'footer_copy_info',
		'label'    => __( 'Copyright Info', 'sb_proffice' ),
		'section'  => 'general_section_id',
		'default'  => esc_attr__( 'All right reserved ©spellbit', 'sb_proffice' ),
		'priority' => 10,
	) );


	Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Socail Website', 'sb_proffice' ),
	'section'     => 'general_section_id',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Social Profile', 'sb_proffice' ),
	),
	'button_label' => esc_attr__('Add Services', 'sb_proffice' ),
	'settings'     => 'footer_social_profiles',
	'fields' => array(
		'social_profile_link' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Social Website Link', 'sb_proffice' ),
			'description' => esc_attr__( 'Please write social website link here such as http://facebook.com', 'sb_proffice' ),
			'default'     => 'http://facebook.com'
		),	
		'social_profile_icon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Icon Name', 'sb_proffice' ),
			'description' => esc_attr__( 'write a beautiful icon name here from http://font-awesome.com', 'sb_proffice' ),
			'default'     => 'facebook',
		),
	)
) );




