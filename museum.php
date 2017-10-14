<?php
/**
 * Plugin Name:     Museum
 * Plugin URI:      https://github.com/RafaelFunchal/museum
 * Description:     Create Art Collections for museums with Projects and Artists Details.
 * Author:          Rafael Funchal
 * Author URI:      https://www.rafaelfunchal.com.br
 * Text Domain:     museum
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Museum
 */

/**
 * 
 * Create Collection, Artists, and Exhibitions Post Types
 * 
 */

function museum_post_types() {
	
	/**
	 * Collection
	 */
	$collection_labels = array(
		'name'               => __( 'Collection', 'museum' ),
		'singular_name'      => __( 'Collection', 'museum' ),
		'add_new'            => _x( 'Add New', 'museum' ),
		'add_new_item'       => __( 'Add New Collection Item', 'museum' ),
		'edit_item'          => __( 'Edit Collection Item', 'museum' ),
		'new_item'           => __( 'New Collection Item', 'museum' ),
		'view_item'          => __( 'View Collection Item', 'museum' ),
		'search_items'       => __( 'Search Collection Items', 'museum' ),
		'not_found'          => __( 'No Collection Items found', 'museum' ),
		'not_found_in_trash' => __( 'No Collection Items found in Trash', 'museum' ),
		'parent_item_colon'  => __( 'Parent Collection Item:', 'museum' ),
		'menu_name'          => __( 'Collection', 'museum' ),
	);

	$collection_args = array(
		'labels'              => $collection_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-art',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'trackbacks',
			'comments',
			'revisions'
		),
	);

	register_post_type( 'collection', $collection_args );

	/**
	 * Artists
	 */
	$artist_labels = array(
		'name'               => __( 'Artists', 'museum' ),
		'singular_name'      => __( 'Artist', 'museum' ),
		'add_new'            => _x( 'Add New', 'museum' ),
		'add_new_item'       => __( 'Add New Artist', 'museum' ),
		'edit_item'          => __( 'Edit Artist', 'museum' ),
		'new_item'           => __( 'New Artist', 'museum' ),
		'view_item'          => __( 'View Artist', 'museum' ),
		'search_items'       => __( 'Search Artits', 'museum' ),
		'not_found'          => __( 'No Artists found', 'museum' ),
		'not_found_in_trash' => __( 'No Artists found in Trash', 'museum' ),
		'parent_item_colon'  => __( 'Parent Artist:', 'museum' ),
		'menu_name'          => __( 'Artists', 'museum' ),
	);

	$artist_args = array(
		'labels'              => $artist_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-id-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'trackbacks',
			'comments',
			'revisions'
		),
	);

	register_post_type( 'artist', $artist_args );

	/**
	 * Exhibitions
	 */
	$exhibition_labels = array(
		'name'               => __( 'Exhibitions', 'museum' ),
		'singular_name'      => __( 'Exhibition', 'museum' ),
		'add_new'            => _x( 'Add New', 'museum' ),
		'add_new_item'       => __( 'Add New Exhibition', 'museum' ),
		'edit_item'          => __( 'Edit Exhibition ', 'museum' ),
		'new_item'           => __( 'New Exhibition', 'museum' ),
		'view_item'          => __( 'View Exhibition', 'museum' ),
		'search_items'       => __( 'Search Exhibitions', 'museum' ),
		'not_found'          => __( 'No Exhibitions found', 'museum' ),
		'not_found_in_trash' => __( 'No Exhibition found in Trash', 'museum' ),
		'parent_item_colon'  => __( 'Parent Exhibition:', 'museum' ),
		'menu_name'          => __( 'Exhibitions', 'museum' ),
	);

	$exhibition_args = array(
		'labels'              => $exhibition_labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-index-card',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'trackbacks',
			'comments',
			'revisions'
		),
	);

	register_post_type( 'exhibition', $exhibition_args );
}
add_action( 'init', 'museum_post_types' );