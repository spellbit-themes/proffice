<?php
function sb_proffice_theme_options($wp_customize){
	/**
	*
	* Header Section
	*/

	// panel
	$wp_customize->add_panel( 'proffice_option_panel', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'          => 'Proffice Home Sections',
	) );


	/**
	*	
	* Proffice General Options
	*	
	*/
	// panel
	$wp_customize->add_panel( 'general_section_panel_id', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'title'          => 'Proffice General Options',
	) );



	/**
	*	
	* Proffice Homepage Settings
	*	
	*/
	// panel
	$wp_customize->add_panel( 'home_section_panel_id', array(
		'priority'       => 20,
		'capability'     => 'edit_theme_options',
		'title'          => 'Proffice Home Section Order',
	) );


	/**
	 * Adding Kirki config file
	 */
	include('kirki-config.php');
	// Homepage Layout Settings Section
	require_once('customizer-to-homepagelayout-settings.php');


// slider section
	require_once('customize-to-slider.php');

// Service section
	require_once('customize-to-services.php');

// blog section
	require_once('customize-to-blog.php');

// brands section
	require_once('customize-to-brands.php');

// footer section
	require_once('customize-to-footer.php');

// footer section
	require_once('customize-to-page-options.php');





}
add_action('customize_register','sb_proffice_theme_options');





