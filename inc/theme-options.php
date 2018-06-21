<?php

function proffice_theme_options( $wp_customize ) {

	/**
	 * Proffice Panel for general options
	 */
	$wp_customize->add_panel( 'proffice_panel_general', array(
		'priority'    => 10,
		'capability'     => 'edit_theme_options',
		'title'       => __( 'Proffice General Settings', 'proffice' ),
	) );
	/**
	 * Proffice Panel for Homepage options
	 */
	$wp_customize->add_panel( 'proffice_panel_home', array(
		'priority'    => 10,
		'capability'     => 'edit_theme_options',
		'title'       => __( 'Proffice Homepage Settings', 'proffice' ),
	) );



	/*All sections and settings are coming form here*/
	require get_template_directory().'/inc/proffice-options/section-page-option.php';
	require get_template_directory().'/inc/proffice-options/section-footer-option.php';
	require get_template_directory().'/inc/proffice-options/section-slider.php';
	require get_template_directory().'/inc/proffice-options/section-service.php';
	require get_template_directory().'/inc/proffice-options/section-blog.php';
	require get_template_directory().'/inc/proffice-options/section-brand.php';
	require get_template_directory().'/inc/proffice-options/section-homepage-order.php';

}
add_action( 'customize_register', 'proffice_theme_options' );

/*fields powered by Kirki*/
require get_template_directory().'/inc/proffice-options/kirki-fields.php';