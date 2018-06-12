<?php

// Service section
$wp_customize->add_section('section_service',array(
	'title' => 'Services',
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//service section switch
$wp_customize->add_setting( 'service_switch' , array(
	'default' => 'yes',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'service_switch',
		array(
			'label'          => __( 'Do you need service section', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'service_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => __( 'Yes' ),
				'no'  => __( 'No' )
			)
		)
	)
);

//Section title
$wp_customize->add_setting( 'section_service_title' , array(
	'default' => 'Our Services',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_service_title',
		array(
			'label'          => __( 'Section Title', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'section_service_title',
			'type'           => 'text',
		)
	)
);
//Section subtitle
$wp_customize->add_setting( 'section_service_subtitle' , array(
	'default' => 'What We Do',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_service_subtitle',
		array(
			'label'          => __( 'Section Subtitle', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'section_service_subtitle',
			'type'           => 'text',
		)
	)
);