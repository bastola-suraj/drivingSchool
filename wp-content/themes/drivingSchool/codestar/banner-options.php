<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'banner_options';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'              => 'Banner Options',
		'post_type'          => 'banners',
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
				'id'    => 'banner_message',
				'type'  => 'text',
				'title' => 'Banner message'
			),
			array(
				'id'    => 'banner_message_extended',
				'type'  => 'text',
				'title' => 'Banner extended message'
			),
			array(
				'id'    => 'banner_readmore_switcher',
				'type'  => 'switcher',
				'title' => 'Banner readmore switcher'
			),
			array(
				'id'         => 'banner_readmore_button_text',
				'type'       => 'text',
				'title'      => 'Readmore Button Text',
				'dependency' => array( 'banner_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'banner_readmore_button_url',
				'type'       => 'text',
				'default'    => '#',
				'title'      => 'Readmore Button URL',
				'dependency' => array( 'banner_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'banner_see_pricing_button_text',
				'type'       => 'text',
				'title'      => 'See Pricing Button Text ',
				'dependency' => array( 'banner_readmore_switcher', '==', 'true' )
			),
			array(
				'id'         => 'banner_see_pricing_button_url',
				'type'       => 'text',
				'default'    => '#',
				'title'      => 'See Pricing Button URL',
				'dependency' => array( 'banner_readmore_switcher', '==', 'true' )
			),
		),
	) );

}