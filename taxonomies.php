<?php 
/**
 * 
 * Create Taxonomies for Collection, Artists, and Exhibitions Post Types
 * 
 */
function museum_taxonomies() {

	/**
	 * Collection Types
	 */
	$type_labels = array(
		'name'                  => _x( 'Types', 'museum' ),
		'singular_name'         => _x( 'Type', 'museum' ),
		'search_items'          => __( 'Search Types', 'museum' ),
		'popular_items'         => __( 'Popular Types', 'museum' ),
		'all_items'             => __( 'All Types', 'museum' ),
		'parent_item'           => __( 'Parent Type', 'museum' ),
		'parent_item_colon'     => __( 'Parent Type', 'museum' ),
		'edit_item'             => __( 'Edit Type', 'museum' ),
		'update_item'           => __( 'Update Type', 'museum' ),
		'add_new_item'          => __( 'Add New Type', 'museum' ),
		'new_item_name'         => __( 'New Type Name', 'museum' ),
		'add_or_remove_items'   => __( 'Add or remove Types', 'museum' ),
		'choose_from_most_used' => __( 'Choose from most used Types', 'museum' ),
		'menu_name'             => __( 'Type', 'museum' ),
	);

	$type_args = array(
		'labels'            => $type_labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'type', array( 'collection', 'artist' ), $type_args );

	/**
	 * Collection and Artist Styles
	 */
	$style_labels = array(
		'name'                  => _x( 'Styles', 'museum' ),
		'singular_name'         => _x( 'Style', 'museum' ),
		'search_items'          => __( 'Search Styles', 'museum' ),
		'popular_items'         => __( 'Popular Styles', 'museum' ),
		'all_items'             => __( 'All Styles', 'museum' ),
		'parent_item'           => __( 'Parent Style', 'museum' ),
		'parent_item_colon'     => __( 'Parent Style', 'museum' ),
		'edit_item'             => __( 'Edit Style', 'museum' ),
		'update_item'           => __( 'Update Style', 'museum' ),
		'add_new_item'          => __( 'Add New Style', 'museum' ),
		'new_item_name'         => __( 'New Style Name', 'museum' ),
		'add_or_remove_items'   => __( 'Add or remove Styles', 'museum' ),
		'choose_from_most_used' => __( 'Choose from most used Styles', 'museum' ),
		'menu_name'             => __( 'Style', 'museum' ),
	);

	$style_args = array(
		'labels'            => $style_labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'style', array( 'collection', 'artist' ), $style_args );
}

add_action( 'init', 'museum_taxonomies' );