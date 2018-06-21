<?php

// Service section
$wp_customize->add_section('section_service',array(
	'title' => esc_html__('Services','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//service section switch
$wp_customize->add_setting( 'service_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'service_switch',
		array(
			'label'          => esc_html__( 'Do you need service section', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'service_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice')
			)
		)
	)
);

//Section title
$wp_customize->add_setting( 'section_service_title' , array(
	'default' => esc_html__('Our Services','proffice'),
	'sanitize_callback' => 'wp_filter_nohtml_kses'

) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_service_title',
		array(
			'label'          => esc_html__( 'Section Title', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'section_service_title',
			'type'           => 'text',
		)
	)
);
//Section subtitle
$wp_customize->add_setting( 'section_service_subtitle' , array(
	'default' => esc_html__('What we do','proffice'),
	'sanitize_callback' => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_service_subtitle',
		array(
			'label'          => esc_html__( 'Section Subtitle', 'proffice' ),
			'section'        => 'section_service',
			'settings'       => 'section_service_subtitle',
			'type'           => 'text',
		)
	)
);