<?php
function amader_custom_post_type() {
	register_post_type('portfolio-post',
		array(
			'labels'      => array(
				'name'          => __( 'PortFolio', 'faith_bs_portfolio' ),
				'singular_name' => __( 'PortFolio', 'faith_bs_portfolio' ),
				'menu_name'             => __( 'Portfolio', 'faith_bs_portfolio' ),
				'name_admin_bar'        => __( 'Portfolio Type', 'faith_bs_portfolio' ),
				'archives'              => __( 'Item Archives', 'faith_bs_portfolio' ),
				'attributes'            => __( 'Item Attributes', 'faith_bs_portfolio' ),
				'parent_item_colon'     => __( 'Parent Portfolio:', 'faith_bs_portfolio' ),
				'all_items'             => __( 'All Portfolio', 'faith_bs_portfolio' ),
				'add_new_item'          => __( 'Add New Portfolio', 'faith_bs_portfolio' ),
				'add_new'               => __( 'Add New Portfolio', 'faith_bs_portfolio' ),
				'new_item'              => __( 'New Portfolio', 'faith_bs_portfolio' ),
				'edit_item'             => __( 'Edit Portfolio', 'faith_bs_portfolio' ),
				'update_item'           => __( 'Update Portfolio', 'faith_bs_portfolio' ),
				'view_item'             => __( 'View Portfolio', 'faith_bs_portfolio' ),
				'view_items'            => __( 'View Portfolios', 'faith_bs_portfolio' ),
				'search_items'          => __( 'Search Portfolios', 'faith_bs_portfolio' ),
				'not_found'             => __( 'Not found', 'faith_bs_portfolio' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'faith_bs_portfolio' ),
				'featured_image'        => __( 'Featured Image', 'faith_bs_portfolio' ),
				'set_featured_image'    => __( 'Set featured image', 'faith_bs_portfolio' ),
				'remove_featured_image' => __( 'Remove featured image', 'faith_bs_portfolio' ),
				'use_featured_image'    => __( 'Use as featured image', 'faith_bs_portfolio' ),
				'insert_into_item'      => __( 'Insert into item', 'faith_bs_portfolio' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'faith_bs_portfolio' ),
				'items_list'            => __( 'Portfolio list', 'faith_bs_portfolio' ),
				'items_list_navigation' => __( 'Portfolio list navigation', 'faith_bs_portfolio' ),
				'filter_items_list'     => __( 'Filter Portfolio list', 'faith_bs_portfolio' ),
			),
			'public'      => true,
			'has_archive' => true,
			'supports' => array('title','thumbnail', 'editor'),
			'rewrite'     => array( 'slug' => 'portfolio' ), // my custom slug
		)
	);
}
add_action('init', 'amader_custom_post_type');