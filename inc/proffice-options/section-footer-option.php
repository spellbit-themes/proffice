<?php

// Footer Options
$wp_customize->add_section('section_footer_option',array(
	'title' => esc_html__('Footer Options','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_general'
));


//Footer Copyright text
$wp_customize->add_setting( 'footer_copyright_text' , array(
	'default' => 'All right reserved by '.get_bloginfo('name'),
	'sanitize_callback' => 'wp_filter_nohtml_kses',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_copyright_text',
		array(
			'label'          => esc_html__( 'Copyright Info', 'proffice' ),
			'section'        => 'section_footer_option',
			'settings'       => 'footer_copyright_text',
			'type'           => 'textarea',
		)
	)
);

//Footer social switch
$wp_customize->add_setting( 'social_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'social_switch',
		array(
			'label'          => __( 'Do you need social icon in footer', 'proffice' ),
			'section'        => 'section_footer_option',
			'settings'       => 'social_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice'),
			)
		)
	)
);