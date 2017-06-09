<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function inhabitent_cpt_product() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Products',
		'name_admin_bar'        => 'Products',
		'archives'              => 'Product Archives',
		'attributes'            => 'Product Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Products',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New Product',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'view_items'            => 'View Products',
		'search_items'          => 'Search Product',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Products list',
		'items_list_navigation' => 'Products list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'description'           => 'Listing of camp items to sell',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-sos',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'inhabitent_cpt_product', 0 );

// Register Custom Adventure Post Type
function adventure_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Adventures', 'text_domain' ),
		'name_admin_bar'        => __( 'Adventures', 'text_domain' ),
		'archives'              => __( 'Adventure Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Adventure:', 'text_domain' ),
		'all_items'             => __( 'Adventure Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Adventure Item', 'text_domain' ),
		'add_new'               => __( 'Add New Adventure', 'text_domain' ),
		'new_item'              => __( 'New Adventure Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Adventure Item', 'text_domain' ),
		'update_item'           => __( 'Update Adventure Item', 'text_domain' ),
		'view_item'             => __( 'View Adventure Item', 'text_domain' ),
		'view_items'            => __( 'View Adventure Items', 'text_domain' ),
		'search_items'          => __( 'Search Adventure Item', 'text_domain' ),
		'not_found'             => __( 'Adventure Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Adventure Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Adventure Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured Adventure image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured Adventure image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured Adventure image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Adventure item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Adventure item', 'text_domain' ),
		'items_list'            => __( 'Items Adventure list', 'text_domain' ),
		'items_list_navigation' => __( 'Adventure items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Adventures items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'text_domain' ),
		'description'           => __( 'Adventure posts with Images', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-star-half',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rest_base'				=> 'adventures',
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'adventure_post_type', 0 );
