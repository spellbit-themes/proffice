<?php



// Blog section
$wp_customize->add_section('section_blog',array(
	'title' => esc_html__('Blog','proffice'),
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//Blog section switch
$wp_customize->add_setting( 'blog_switch' , array(
	'default' => 'yes',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'blog_switch',
		array(
			'label'          => __( 'Do you need blog section', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'blog_switch',
			'type'           => 'radio',
			'choices'        => array(
				'yes'   => esc_html__('Yes','proffice'),
				'no'  => esc_html__('No','proffice'),
			)
		)
	)
);

//Section title
$wp_customize->add_setting( 'section_blog_title' , array(
	'default' => esc_html__('Blog','proffice'),
	'sanitize_callback' => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_title',
		array(
			'label'          => esc_html__( 'Section Title', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_title',
			'type'           => 'text',
		)
	)
);
//Section subtitle
$wp_customize->add_setting( 'section_blog_subtitle' , array(
	'default' => esc_html__('Latest News','proffice'),
	'sanitize_callback' => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_subtitle',
		array(
			'label'          => esc_html__( 'Section Subtitle', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_subtitle',
			'type'           => 'text',
		)
	)
);
//Post per page
$wp_customize->add_setting( 'section_blog_post_count' , array(
	'default' => 3,
	'sanitize_callback' => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_post_count',
		array(
			'label'          => esc_html__( 'Post Count', 'proffice' ),
			'description'          => esc_html__( 'Insert a number', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_post_count',
			'type'           => 'text',
		)
	)
);
//Blog post order
$wp_customize->add_setting( 'blog_order' , array(
	'default' => 'asc',
	'sanitize_callback' => 'proffice_radio_sanitization',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'blog_order',
		array(
			'label'          => esc_html__( 'Post Order', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'blog_order',
			'type'           => 'radio',
			'choices'        => array(
				'asc'   => esc_html__('ASC','proffice'),
				'desc'  => esc_html__('DESC','proffice')
			)
		)
	)
);

//radio box sanitization function
        function proffice_radio_sanitization( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible radio box options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }