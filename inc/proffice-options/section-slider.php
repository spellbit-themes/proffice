<?php

// Slider section
$wp_customize->add_section('section_slider',array(
	'title' => 'Slider',
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//Slider section switch
$wp_customize->add_setting( 'slider_switch' , array(
	'default' => 'yes',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'slider_switch',
		array(
			'label'          => __( 'Do you need slider section', 'proffice' ),
			'section'        => 'section_slider',
			'settings'       => 'slider_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => __( 'Yes' ),
				'no'  => __( 'No' )
			)
		)
	)
);