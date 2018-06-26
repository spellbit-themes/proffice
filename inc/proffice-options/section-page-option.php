<?php

// Page Options
$wp_customize->add_section('section_page_option',array(
	'title' => esc_html__('Page Options','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_general'
));


//Page banner switch
$wp_customize->add_setting( 'page_banner_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
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
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice')
			)
		)
	)
);

function proffice_image_sanitization( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}