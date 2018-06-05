<?php

$wp_customize->add_section('header_section',array(
	'title' => 'Header',
	'priority' => 10,
	'panel' => 'proffice_option_panel'
));


// Header Email
Kirki::add_field( 'sb_proffice_kirki_id', array(
	'type'     => 'text',
	'settings' => 'header_email',
	'label'    => __( 'Email', 'sb_proffice' ),
	'section'  => 'header_section',
	'default'  => esc_attr__( 'hostlab@example.com', 'sb_proffice' ),
	'priority' => 10,
) );



