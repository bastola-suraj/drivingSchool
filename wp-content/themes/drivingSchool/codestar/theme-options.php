<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'theme_options';

	//
	// Create a metabox
	CSF::createOptions( $prefix, array(
		'title'              => 'Theme Options',
		'post_type'          => 'themes',
		'data_type'          => 'serialize',
		'context'            => 'advanced',
		'priority'           => 'default',
		'exclude_post_types' => array(),
		'page_templates'     => '',
		'post_formats'       => '',
		'show_restore'       => false,
		'enqueue_webfont'    => true,
		'async_webfont'      => false,
		'output_css'         => true,
		'theme'              => 'dark',
		'class'              => '',
	) );

	//
	// Create a section
	CSF::createSection( $prefix, array(
		'title'  => 'Options',
		'fields' => array(
			array(
				'id'    => 'theme_message',
				'type'  => 'text',
				'title' => 'Theme message'
			),
			array(
				'id'    => 'theme_message_extended',
				'type'  => 'text',
				'title' => 'Theme extended message'
			),
			array(
				'id'    => 'theme_readmore_switcher',
				'type'  => 'switcher',
				'title' => 'Theme readmore switcher'
			),
			array(
				'id'         => 'theme_readmore_button_text',
				'type'       => 'text',
				'title'      => 'Readmore Button Text',
				'dependency' => array( 'theme_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'theme_readmore_button_url',
				'type'       => 'text',
				'default'    => '#',
				'title'      => 'Readmore Button URL',
				'dependency' => array( 'theme_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'theme_see_pricing_button_text',
				'type'       => 'text',
				'title'      => 'See Pricing Button Text ',
				'dependency' => array( 'theme_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'theme_see_pricing_button_url',
				'type'       => 'text',
				'default'    => '#',
				'title'      => 'See Pricing Button URL',
				'dependency' => array( 'theme_readmore_switcher', '==', 'true' )
			),
		),
	) );

}