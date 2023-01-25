<?php 
/*
Plugin Name: Events Manager Organiser
Plugin URI: https://github.com/audunmb/event-arrangorer
Description: Add organiser custom taxonomy to Events Manager
Author: audunmb
Version: 0.1
Author URI: 
License: GPL3
Text Domain: event-arrangorer
Domain Path: /languages/
*/

function wporg_register_taxonomy_em_arrangorer() {
	 $labels = array(
		 'name'              => _x( 'Organisers', 'taxonomy general name', 'event-arrangorer' ),
		 'singular_name'     => _x( 'Organiser', 'taxonomy singular name', 'event-arrangorer' ),
		 'search_items'      => __( 'Search Organisers', 'event-arrangorer' ),
		 'all_items'         => __( 'All Organisers', 'event-arrangorer' ),
		 'parent_item'       => __( 'Parent Organiser', 'event-arrangorer' ),
		 'parent_item_colon' => __( 'Parent Organiser:', 'event-arrangorer' ),
		 'edit_item'         => __( 'Edit Organiser', 'event-arrangorer' ),
		 'update_item'       => __( 'Update Organiser', 'event-arrangorer' ),
		 'add_new_item'      => __( 'Add New Organiser', 'event-arrangorer' ),
		 'new_item_name'     => __( 'New Organiser Name', 'event-arrangorer' ),
		 'menu_name'         => __( 'Organisers', 'event-arrangorer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_in_rest'		 => true,
		 'show_admin_column' => true,
		 'show_in_menu'		 => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'organiser' ],
	 );
	 register_taxonomy( 'organiser', [ 'event' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_em_arrangorer' );



load_plugin_textdomain( 'event-arrangorer', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
add_action( 'plugins_loaded', 'load_plugin_textdomain' );
