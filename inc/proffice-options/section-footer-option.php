<?php

// Footer Options
$wp_customize->add_section('section_footer_option',array(
	'title' => 'Footer Options',
	'priority' => 10,
	'panel' => 'proffice_panel_general'
));


//Footer Copyright text
$wp_customize->add_setting( 'footer_copyright_text' , array(
	'default' => '&copy; All right reserved by <a href="http://www.spellbit.com">Spellbit</a>',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'footer_copyright_text',
		array(
			'label'          => __( 'Copyright Info', 'proffice' ),
			'section'        => 'section_footer_option',
			'settings'       => 'footer_copyright_text',
			'type'           => 'textarea',
		)
	)
);
