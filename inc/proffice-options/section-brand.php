<?php

// brand section
$wp_customize->add_section('section_brand',array(
	'title' => 'Brand Logo',
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//brand section switch
$wp_customize->add_setting( 'brand_switch' , array(
	'default' => 'yes',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'brand_switch',
		array(
			'label'          => __( 'Do you need brand logo section', 'proffice' ),
			'section'        => 'section_brand',
			'settings'       => 'brand_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => __( 'Yes' ),
				'no'  => __( 'No' )
			)
		)
	)
);