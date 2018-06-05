<?php 

// brands section
$wp_customize->add_section('brands_section_id',array(
	'title' => 'Brands Logo',
	'priority' => 10,
	'panel' => 'proffice_option_panel'
));

/**
* sb_proffice_kirki_id is found in kirki-config.php
* Please don't change it
* 
* all fields goes below
*/
// Enable or Disable brands section
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'switch',
	'settings' => 'enable_brand_section',
	'label'    => __( 'Enable or Diable Brand Section', 'sb_proffice' ),
	'section'  => 'brands_section_id',
	'default'  => '1',
	'priority' => 10,
	
) );


Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Manage Brands Logo', 'sb_proffice' ),
	'section'     => 'brands_section_id',
	'priority'    => 10,
	'row_label' => array(
		'type' => 'text',
		'value' => esc_attr__('Brands Logo', 'sb_proffice' ),
	),
	'button_label' => esc_attr__('Add Brand Logo', 'sb_proffice' ),
	'settings'     => 'sb_proffice_brands',
	'fields' => array(
		'brand_logo' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'Brand Logo', 'sb_proffice' ),
			'description' => esc_attr__( 'Upload your brands logo here', 'sb_proffice' ),
			'default'     => '',
			'choices'     => array(
				'save_as' => 'id'
			),
		)
	)
) );

