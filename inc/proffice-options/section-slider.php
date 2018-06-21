<?php

// Slider section
$wp_customize->add_section('section_slider',array(
	'title' => esc_html__('Slider','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//Slider section switch
$wp_customize->add_setting( 'slider_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'slider_switch',
		array(
			'label'          => esc_html__( 'Do you need slider section', 'proffice' ),
			'section'        => 'section_slider',
			'settings'       => 'slider_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice')
			)
		)
	)
);