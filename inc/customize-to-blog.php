<?php 
// Blog section
$wp_customize->add_section('blog_section_id',array(
	'title' => 'Blog',
	'priority' => 10,
	'panel' => 'proffice_option_panel'
));

/**
* sb_proffice_kirki_id is found in kirki-config.php
* Please don't change it
* 
* all fields goes below
*/
// Enable or Disable blog section
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'switch',
	'settings' => 'enable_blog_section',
	'label'    => __( 'Enable or Diable Blog Section', 'sb_proffice' ),
	'section'  => 'blog_section_id',
	'default'  => '1',
	'priority' => 10,
	
) );



// title
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'text',
	'settings' => 'blog_title',
	'label'    => __( 'Title', 'sb_proffice' ),
	'section'  => 'blog_section_id',
	'default'  => esc_attr__( 'Our Blog', 'sb_proffice' ),
	'priority' => 10,
) );


// subtitle
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'text',
	'settings' => 'blog_subtitle',
	'label'    => __( 'Subtitle', 'sb_proffice' ),
	'section'  => 'blog_section_id',
	'default'  => esc_attr__( 'Latest News', 'sb_proffice' ),
	'priority' => 10,
) );


// post_per_page
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'number',
	'settings' => 'blog_post_number',
	'label'    => __( 'Posts Per Page', 'sb_proffice' ),
	'section'  => 'blog_section_id',
	'default'  => esc_attr__( '3', 'sb_proffice' ),
	'priority' => 10,
	'choices'     => array(
		'min'  => 1,
		'max'  => 80,
		'step' => 1,
	)
) );






// post order
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'select',
	'settings' => 'blog_post_order',
	'label'    => __( 'Post Order', 'sb_proffice' ),
	'section'  => 'blog_section_id',
	'default'  => 'DESC',
	'priority' => 10,
	'choices'     => array(
		'ASC' => esc_attr__( 'ASC', 'sb_proffice' ),
		'DESC' => esc_attr__( 'DESC', 'sb_proffice' ),
		
		
	)
) );
