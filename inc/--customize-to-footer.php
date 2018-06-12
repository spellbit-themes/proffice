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
	'label'       => esc_attr__( 'Social Icon', 'sb_proffice' ),
	'section'     => 'general_section_id',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Social Icon', 'sb_proffice' ),
	),
	'button_label' => esc_attr__('Add Icon', 'sb_proffice' ),
	'settings'     => 'footer_social_profiles',
	'fields' => array(
		'social_profile_icon' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Icon Name', 'sb_proffice' ),
			'description' => esc_attr__( 'put fontawesome icon class name here from https://fontawesome.com/v4.7.0/icons/ [exclude: fa fa-]', 'sb_proffice' ),
			'default'     => 'facebook',
		),
		'social_profile_link' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Url', 'sb_proffice' ),
			'description' => esc_attr__( 'Please put your social profile url here such as http://facebook.com/myprofile', 'sb_proffice' ),
			'default'     => 'http://facebook.com/myprofile'
		),
	)
) );




