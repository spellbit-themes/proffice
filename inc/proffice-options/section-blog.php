<?php

// Blog section
$wp_customize->add_section('section_blog',array(
	'title' => 'Blog',
	'priority' => 10,
	'panel' => 'proffice_panel_home'
));

//Blog section switch
$wp_customize->add_setting( 'blog_switch' , array(
	'default' => 'yes',
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
				'yes'   => __( 'Yes' ),
				'no'  => __( 'No' )
			)
		)
	)
);

//Section title
$wp_customize->add_setting( 'section_blog_title' , array(
	'default' => 'Blog',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_title',
		array(
			'label'          => __( 'Section Title', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_title',
			'type'           => 'text',
		)
	)
);
//Section subtitle
$wp_customize->add_setting( 'section_blog_subtitle' , array(
	'default' => 'Latest News',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_subtitle',
		array(
			'label'          => __( 'Section Subtitle', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_subtitle',
			'type'           => 'text',
		)
	)
);
//Post per page
$wp_customize->add_setting( 'section_blog_post_count' , array(
	'default' => '3',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'section_blog_post_count',
		array(
			'label'          => __( 'Post Count', 'proffice' ),
			'description'          => __( 'Insert a number', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'section_blog_post_count',
			'type'           => 'text',
		)
	)
);
//Blog post order
$wp_customize->add_setting( 'blog_order' , array(
	'default' => 'ASC',
) );

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'blog_order',
		array(
			'label'          => __( 'Post Order', 'proffice' ),
			'section'        => 'section_blog',
			'settings'       => 'blog_order',
			'type'           => 'radio',
			'choices'        => array(
				'ASC'   => __( 'ASC' ),
				'DESC'  => __( 'DESC' )
			)
		)
	)
);