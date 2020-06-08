<?php
/*
* Creating a function to create our CPT
*/

function testimonial_cpt_drivingschool() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'               => _x( 'Testimonials', 'Post Type General Name', 'drivingschool' ),
		'singular_name'      => _x( 'Testimonial', 'Post Type Singular Name', 'drivingschool' ),
		'menu_name'          => __( 'Testimonials', 'drivingschool' ),
		'parent_item_colon'  => __( 'Parent Testimonial', 'drivingschool' ),
		'all_items'          => __( 'All Testimonials', 'drivingschool' ),
		'view_item'          => __( 'View Testimonial', 'drivingschool' ),
		'add_new_item'       => __( 'Add New Testimonial', 'drivingschool' ),
		'add_new'            => __( 'Add New', 'drivingschool' ),
		'edit_item'          => __( 'Edit Testimonial', 'drivingschool' ),
		'update_item'        => __( 'Update Testimonial', 'drivingschool' ),
		'search_items'       => __( 'Search Testimonial', 'drivingschool' ),
		'not_found'          => __( 'Not Found', 'drivingschool' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'drivingschool' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'testimonials', 'drivingschool' ),
		'description'         => __( 'Testimonial news and reviews', 'drivingschool' ),
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
		'menu_icon'           => 'dashicons-megaphone',

	);

	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'testimonial_cpt_drivingschool', 0 );