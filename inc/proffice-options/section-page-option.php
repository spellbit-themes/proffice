<?php

// Page Options
$wp_customize->add_section('section_page_option',array(
	'title' => 'Page Options',
	'priority' => 10,
	'panel' => 'proffice_panel_general'
));


//Page banner switch
$wp_customize->add_setting( 'page_banner_switch' , array(
	'default' => 'yes',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'page_banner_switch',
		array(
			'label'          => __( 'Do you need page banner', 'proffice' ),
			'section'        => 'section_page_option',
			'settings'       => 'page_banner_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => __( 'Yes' ),
				'no'  => __( 'No' )
			)
		)
	)
);

//Page banner bg
$wp_customize->add_setting( 'page_banner_bg' , array(
	'default' => get_template_directory_uri().'/assets/images/slider/page-banner.jpg',
) );

$wp_customize->add_control(
	new WP_Customize_Upload_Control(
		$wp_customize,
		'page_banner_bg',
		array(
			'label'      => __( 'Page Banner Image', 'proffice' ),
			'section'    => 'section_page_option',
			'settings'   => 'page_banner_bg',

		) )
);