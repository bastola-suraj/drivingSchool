<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'testimonial_options';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'              => 'Testimonial Options',
		'post_type'          => 'testimonials',
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
				'id'    => 'testimonial_position',
				'type'  => 'text',
				'title' => 'Testimonial Position'
			),
			array(
				'id'    => 'testimonial_social',
				'type'  => 'switcher',
				'title' => 'Testimonial Social Accounts'
			),
			array(
				'id'    => 'testimonial_facebook',
				'type'  => 'text',
				'title' => 'Facebook',
				'dependency'=>array('testimonial_social','==','true'),
			),
			array(
				'id'    => 'testimonial_twitter',
				'type'  => 'text',
				'title' => 'Twitter',
				'dependency'=>array('testimonial_social','==','true'),
			),
			array(
				'id'    => 'testimonial_linked_in',
				'type'  => 'text',
				'title' => 'Linked In',
				'dependency'=>array('testimonial_social','==','true'),
			),
			array(
				'id'    => 'testimonial_google_plus',
				'type'  => 'text',
				'title' => 'Google Plus',
				'dependency'=>array('testimonial_social','==','true'),
			),
		),
	) );

}