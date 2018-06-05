<?php 

// section
$wp_customize->add_section('home_section_id',array(
	'title' => 'Homepage Layout Order',
	'priority' => 10,
	'panel' => 'home_section_panel_id'
));


/**
* sb_proffice_kirki_id is found in kirki-config.php
* Please don't change it
* 
* all fields goes below
*/


Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'        => 'sortable',
	'settings'    => 'homepage_layout_settings',
	'label'       => __( 'Re-Arrage Homepage Layout', 'sb_proffice' ),
	'section'     => 'home_section_id',
	'default'     => array(
		'sb-slider',
		'sb-services',
		'sb-blog',
		'sb-brands'
	),
	'choices'     => array(
		'sb-slider' => esc_attr__( 'Slider', 'sb_proffice' ),
		'sb-services' => esc_attr__( 'Services', 'sb_proffice' ),
		'sb-blog' => esc_attr__( 'Blog', 'sb_proffice' ),
		'sb-brands' => esc_attr__( 'Brands', 'sb_proffice' ),
	),
	'priority'    => 10,
) );

