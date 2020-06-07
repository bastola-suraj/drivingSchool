<?php
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	//
	// Set a unique slug-like ID
	$prefix = 'instructor_options';

	//
	// Create a metabox
	CSF::createMetabox( $prefix, array(
		'title'              => 'Instructor Options',
		'post_type'          => 'instructors',
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
				'id'    => 'instructor_position',
				'type'  => 'text',
				'title' => 'Instructor Position'
			),
			array(
				'id'    => 'instructor_social',
				'type'  => 'switcher',
				'title' => 'Instructor Social Accounts'
			),
			array(
				'id'    => 'instructor_facebook',
				'type'  => 'text',
				'title' => 'Facebook',
				'dependency'=>array('instructor_social','==','true'),
			),
			array(
				'id'    => 'instructor_twitter',
				'type'  => 'text',
				'title' => 'Twitter',
				'dependency'=>array('instructor_social','==','true'),
			),
			array(
				'id'    => 'instructor_linked_in',
				'type'  => 'text',
				'title' => 'Linked In',
				'dependency'=>array('instructor_social','==','true'),
			),
			array(
				'id'    => 'instructor_google_plus',
				'type'  => 'text',
				'title' => 'Google Plus',
				'dependency'=>array('instructor_social','==','true'),
			),
		),
	) );

}