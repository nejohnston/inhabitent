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
		'description'           => 'List of camp items to sell',
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
		'name'                  =>  'Adventures',
		'singular_name'         =>  'Adventure',
		'menu_name'             =>  'Adventures',
		'name_admin_bar'        =>  'Adventures',
		'archives'              =>  'Adventure Archives',
		'attributes'            =>  'Item Attributes',
		'parent_item_colon'     =>  'Adventure:',
		'all_items'             =>  'Adventure Items',
		'add_new_item'          =>  'Add New Adventure Item',
		'add_new'               =>  'Add New Adventure',
		'new_item'              =>  'New Adventure Item',
		'edit_item'             =>  'Edit Adventure Item',
		'update_item'           =>  'Update Adventure Item',
		'view_item'             =>  'View Adventure Item',
		'view_items'            =>  'View Adventure Items',
		'search_items'          =>  'Search Adventure Item',
		'not_found'             =>  'Adventure Not found',
		'not_found_in_trash'    =>  'Adventure Not found in Trash',
		'featured_image'        =>  'Featured Adventure Image',
		'set_featured_image'    =>  'Set featured Adventure image',
		'remove_featured_image' =>  'Remove featured Adventure image',
		'use_featured_image'    =>  'Use as featured Adventure image',
		'insert_into_item'      =>  'Insert into Adventure item',
		'uploaded_to_this_item' =>  'Uploaded to this Adventure item',
		'items_list'            =>  'Items Adventure list',
		'items_list_navigation' =>  'Adventure items list navigation',
		'filter_items_list'     =>  'Filter Adventures items list',
	);
	$args = array(
		'label'                 => 'Adventure',
		'description'           => 'Adventure posts with images',
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
		'capability_type'       => 'post',
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'adventure_post_type', 0 );
