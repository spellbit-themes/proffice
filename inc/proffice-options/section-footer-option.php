<?php

// Footer Options
$wp_customize->add_section('section_footer_option',array(
	'title' => esc_html__('Footer Options','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_general'
));


//Footer Copyright text
$wp_customize->add_setting( 'footer_copyright_text' , array(
	'default' => 'All right reserved by <a href="'.esc_html( wp_get_theme()->get( "ThemeURI" ) ).'">Spellbit</a>',
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
