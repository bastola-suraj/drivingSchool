<?php
/*
* Creating a function to create our CPT
*/

function instructor_cpt_drivingschool() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'               => _x( 'Instructors', 'Post Type General Name', 'drivingschool' ),
		'singular_name'      => _x( 'Instructor', 'Post Type Singular Name', 'drivingschool' ),
		'menu_name'          => __( 'Instructors', 'drivingschool' ),
		'parent_item_colon'  => __( 'Parent Instructor', 'drivingschool' ),
		'all_items'          => __( 'All Instructors', 'drivingschool' ),
		'view_item'          => __( 'View Instructor', 'drivingschool' ),
		'add_new_item'       => __( 'Add New Instructor', 'drivingschool' ),
		'add_new'            => __( 'Add New', 'drivingschool' ),
		'edit_item'          => __( 'Edit Instructor', 'drivingschool' ),
		'update_item'        => __( 'Update Instructor', 'drivingschool' ),
		'search_items'       => __( 'Search Instructor', 'drivingschool' ),
		'not_found'          => __( 'Not Found', 'drivingschool' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'drivingschool' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'instructors', 'drivingschool' ),
		'description'         => __( 'Instructor news and reviews', 'drivingschool' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'author',
			'thumbnail',
			'comments',
			'revisions',
			'custom-fields',
		),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-book',

	);

	// Registering your Custom Post Type
	register_post_type( 'instructors', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'instructor_cpt_drivingschool', 0 );