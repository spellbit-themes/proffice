<?php

// brand section
$wp_customize->add_section('section_brand',array(
	'title' => esc_html__('Brand Logo','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//brand section switch
$wp_customize->add_setting( 'brand_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'brand_switch',
		array(
			'label'   => esc_html__( 'Do you need brand logo section', 'proffice' ),
			'section' => 'section_brand',
			'settings'=> 'brand_switch',
			'type'    => 'radio',
			'choices' => array(
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice')
			)
		)
	)
);