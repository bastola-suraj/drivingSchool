<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'about_us_options';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'              => 'Page options',
		'post_type'          => 'page',
		'data_type'          => 'serialize',
		'context'            => 'advanced',
		'priority'           => 'default',
		'exclude_post_types' => array(),
		'page_templates'     => 'templates/about_us.php',
		'post_formats'       => '',
		'show_restore'       => false,
		'enqueue_webfont'    => true,
		'async_webfont'      => false,
		'output_css'         => true,
		'theme'              => 'dark',
		'class'              => '',
	) );
	CSF::createSection( $prefix, array(
		'title'  => 'Options',
		'fields' => array(
			array(
				'id'    => 'about_us_image',
				'type'  => 'media',
				'title' => 'Image'
			),
		),
	) );
	CSF::createSection( $prefix, array(
		'title'  => 'Opening Hours',
		'fields' => array(
			array(
				'id'    => 'about_us_image',
				'type'  => 'media',
				'title' => 'Image'
			),
		),
	) );
	CSF::createSection( $prefix, array(
		'title'  => 'Our Services',
		'fields' => array(
			array(
				'id'    => 'services_image',
				'type'  => 'media',
				'title' => 'Services Image',
			),
			array(
				'id'     => 'services_repeater',
				'type'   => 'repeater',
				'title'  => 'Services',
				'fields' => array(
					array(
						'id'    => 'service_title',
						'type'  => 'text',
						'title' => 'Service Title',
					),
					array(
						'id'    => 'service_description',
						'type'  => 'text',
						'title' => 'Service Description',
					),
					array(
						'id'    => 'service_logo',
						'type'  => 'icon',
						'title' => 'Service Logo',
					),
				)
			),
		),
	) );

}