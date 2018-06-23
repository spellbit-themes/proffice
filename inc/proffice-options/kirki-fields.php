<?php
function proffice_kirki_fields( $fields ) {
	/**
	 * Add a Field to change the body text color in the Text Colors Section
	 */

	/*Slide repeater*/
	$fields[] = array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Manage Slider', 'proffice' ),
		'section'     => 'section_slider',
		'priority'    => 10,
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__('Slide', 'proffice' ),
		),
		'button_label' => esc_attr__('Add Slide', 'proffice' ),
		'settings'     => 'proffice_slides',
		'fields' => array(
			'slide_bg' => array(
				'type'        => 'image',
				'label'       => esc_attr__( 'Slide Background Image', 'proffice' ),
				'description' => esc_attr__( 'Upload your slide image from here', 'proffice' ),
			),
			'slide_title' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Title', 'proffice' ),
				'description' => esc_attr__( 'Title Here', 'proffice' ),
				'default'     => 'WE BUILD UP YOUR BUSINESS'
			),
			'slide_desc' => array(
				'type'        => 'textarea',
				'label'       => esc_attr__( 'Description', 'proffice' ),
				'description' => esc_attr__( 'Write something about your service here', 'proffice' ),
				'default'     => 'Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',
			),
			'left_btn_text' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Left Button Text', 'proffice' ),
				'description' => esc_attr__( 'Please provide Left Button Text here', 'proffice' ),
				'default'     => 'Learn More',
			),
			'left_btn_url' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Left Button Url', 'proffice' ),
				'description' => esc_attr__( 'Please provide Left Button Url here', 'proffice' ),
				'default'     => '#',
			),
			'right_btn_text' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Right Button Text', 'proffice' ),
				'description' => esc_attr__( 'Please provide Right Button Text here', 'proffice' ),
				'default'     => 'Our Services',
			),
			'right_btn_url' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Right Button Url', 'proffice' ),
				'description' => esc_attr__( 'Please provide Right Button Url here', 'proffice' ),
				'default'     => '#',
			),
		)
	);


	/*Service repeater*/

	$fields[] = array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Manage Services', 'proffice' ),
		'section'     => 'section_service',
		'priority'    => 10,
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__('Service', 'proffice' ),
		),
		'button_label' => esc_attr__('Add Service', 'proffice' ),
		'settings'     => 'proffice_services',
		'fields' => array(
			'service_title' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Title', 'proffice' ),
				'description' => esc_attr__( 'Title Here', 'proffice' ),
				'default'     => 'Web Design'
			),
			'service_desc' => array(
				'type'        => 'textarea',
				'label'       => esc_attr__( 'Description', 'proffice' ),
				'description' => esc_attr__( 'Write something about your service here', 'proffice' ),
				'default'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus vitae architecto officia voluptatem aspernatur qui.',
			),
			'service_icon' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Icon Name', 'proffice' ),
				'description' => esc_attr__( 'write a beautiful icon name here from https://fontawesome.com/v4.7.0/icons/', 'proffice' ),
				'default'     => 'desktop',
			),
		)
	);

	/*Brand repeater*/


	$fields[] = array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Manage Brand Logo', 'proffice' ),
		'section'     => 'section_brand',
		'priority'    => 10,
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__('Brand Logo', 'proffice' ),
		),
		'button_label' => esc_attr__('Add Brand Logo', 'proffice' ),
		'settings'     => 'proffice_brands',
		'fields' => array(
			'brand_logo' => array(
				'type'        => 'image',
				'label'       => esc_attr__( 'Brand Logo', 'proffice' ),
				'description' => esc_attr__( 'Upload your brand logo here', 'proffice' ),
				'default'     => '',
				'choices'     => array(
					'save_as' => 'id'
				),
			)
		)
	);


	/*Footer Social repeater*/


	$fields[] = array(
		'type'        => 'repeater',
		'label'       => esc_attr__( 'Social icon', 'proffice' ),
		'section'     => 'section_footer_option',
		'priority'    => 10,
		'row_label' => array(
			'type' => 'text',
			'value' => esc_attr__('Social icon', 'proffice' ),
		),
		'button_label' => esc_attr__('Add icon', 'proffice' ),
		'settings'     => 'footer_social_profiles',
		'fields' => array(
			'social_icon' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Icon Name', 'proffice' ),
				'description' => esc_attr__( 'write a social icon name here from https://fontawesome.com/v4.7.0/icons/', 'proffice' ),
				'default'     => 'facebook',
			),
			'social_link' => array(
				'type'        => 'text',
				'label'       => esc_attr__( 'Url', 'proffice' ),
				'description' => esc_attr__( 'Put social profile url', 'proffice' ),
				'default'     => 'https://www.facebook.com/myid'
			),
		)
	);
	/*Homepage section Order*/
	$fields[] = array(
		'type'        => 'sortable',
		'settings'    => 'homepage_layout_settings',
		'label'       => __( 'Re-Arrage Homepage Layout', 'proffice' ),
		'section'     => 'section_order',
		'default'     => array(
			'sb-slider',
			'sb-services',
			'sb-blog',
			'sb-brands'
		),
		'choices'     => array(
			'sb-slider' => esc_attr__( 'Slider', 'proffice' ),
			'sb-services' => esc_attr__( 'Services', 'proffice' ),
			'sb-blog' => esc_attr__( 'Blog', 'proffice' ),
			'sb-brands' => esc_attr__( 'Brands', 'proffice' ),
		),
		'priority'    => 10,
	);
	return $fields;
}
add_filter( 'kirki/fields', 'proffice_kirki_fields' );