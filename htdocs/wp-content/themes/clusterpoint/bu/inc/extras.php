<?php
/**
 * Clean up the_excerpt()
 */
function cutlass_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'cutlass') . '</a>';
}
add_filter('excerpt_more', 'cutlass_excerpt_more');

/**
 * Manage output of wp_title()
 */
function cutlass_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'cutlass_wp_title', 10);


// Remove admin bar
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	//if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	//}
}

// Custom image sizes
add_image_size( 'map-image', 370, 500, true );

// ACF - Add custom option pages 
/*
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));	
}
*/

//  Register custom post type.
add_action( 'init', 'clusterpoint_events_init' );

function clusterpoint_events_init() {
	$labels = array(
		'name'               => _x( 'Events', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'Event', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'event', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New Event', 'clusterpoint' ),
		'new_item'           => __( 'New Event', 'clusterpoint' ),
		'edit_item'          => __( 'Edit Event', 'clusterpoint' ),
		'view_item'          => __( 'View Event', 'clusterpoint' ),
		'all_items'          => __( 'All Events', 'clusterpoint' ),
		'search_items'       => __( 'Search Events', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent Events:', 'clusterpoint' ),
		'not_found'          => __( 'No events found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No events found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-location-alt',
		'query_var'          => true,
		'rewrite'			 => array( 'slug' => 'events'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'events', $args );
}

add_action( 'init', 'clusterpoint_tutorials_init' );

function clusterpoint_tutorials_init() {
	$labels = array(
		'name'               => _x( 'Tutorials', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'Tutorial', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'Tutorials', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'Tutorial', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'tutorial', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New Tutorial', 'clusterpoint' ),
		'new_item'           => __( 'New Tutorial', 'clusterpoint' ),
		'edit_item'          => __( 'Edit Tutorial', 'clusterpoint' ),
		'view_item'          => __( 'View Tutorial', 'clusterpoint' ),
		'all_items'          => __( 'All Tutorials', 'clusterpoint' ),
		'search_items'       => __( 'Search Tutorials', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent Tutorials:', 'clusterpoint' ),
		'not_found'          => __( 'No tutorials found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No tutorials found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'			 => 'dashicons-hammer',
		'rewrite'			 => array( 'slug' => 'tutorials'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'tutorials', $args );
}

add_action( 'init', 'clusterpoint_press_releases_init' );

function clusterpoint_press_releases_init() {
	$labels = array(
		'name'               => _x( 'Press Releases', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'Press Release', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'Press Releases', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'Press Release', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'press-releases', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New Press Release', 'clusterpoint' ),
		'new_item'           => __( 'New Press Release', 'clusterpoint' ),
		'edit_item'          => __( 'Edit Press Release', 'clusterpoint' ),
		'view_item'          => __( 'View Press Release', 'clusterpoint' ),
		'all_items'          => __( 'All Releases', 'clusterpoint' ),
		'search_items'       => __( 'Search Press Releases', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent Press Releases:', 'clusterpoint' ),
		'not_found'          => __( 'No Press Releases found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No Press Releases found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'			 => 'dashicons-format-status',
		'rewrite'			 => array( 'slug' => 'tutorials'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'press_releases', $args );
}

add_action( 'init', 'clusterpoint_white_papers_init' );

function clusterpoint_white_papers_init() {
	$labels = array(
		'name'               => _x( 'White Papers', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'White Paper', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'White Papers', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'White Papers', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'white-papers', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New White Paper', 'clusterpoint' ),
		'new_item'           => __( 'New White Paper', 'clusterpoint' ),
		'edit_item'          => __( 'Edit White Paper', 'clusterpoint' ),
		'view_item'          => __( 'View White Paper', 'clusterpoint' ),
		'all_items'          => __( 'All White Papers', 'clusterpoint' ),
		'search_items'       => __( 'Search White Papers', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent White Papers:', 'clusterpoint' ),
		'not_found'          => __( 'No White Papers found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No White Papers found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'			 => 'dashicons-media-document',
		'rewrite'			 => array( 'slug' => 'tutorials'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'white_papers', $args );
}

add_action( 'init', 'clusterpoint_careers_init' );

function clusterpoint_careers_init() {
	$labels = array(
		'name'               => _x( 'Careers', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'Career', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'Careers', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'Careers', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'white-papers', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New Career', 'clusterpoint' ),
		'new_item'           => __( 'New Career', 'clusterpoint' ),
		'edit_item'          => __( 'Edit Career', 'clusterpoint' ),
		'view_item'          => __( 'View Career', 'clusterpoint' ),
		'all_items'          => __( 'All Careers', 'clusterpoint' ),
		'search_items'       => __( 'Search Careers', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent Career:', 'clusterpoint' ),
		'not_found'          => __( 'No Careers found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No Careers found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'			 => 'dashicons-groups',
		'rewrite'			 => array( 'slug' => 'tutorials'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'careers', $args );
}

add_action( 'init', 'clusterpoint_use_cases_init' );

function clusterpoint_use_cases_init() {
	$labels = array(
		'name'               => _x( 'Use Cases', 'post type general name', 'clusterpoint' ),
		'singular_name'      => _x( 'Use Case', 'post type singular name', 'clusterpoint' ),
		'menu_name'          => _x( 'Use Cases', 'admin menu', 'clusterpoint' ),
		'name_admin_bar'     => _x( 'Use Cases', 'add new on admin bar', 'clusterpoint' ),
		'add_new'            => _x( 'Add New', 'use-cases', 'clusterpoint' ),
		'add_new_item'       => __( 'Add New Use Case', 'clusterpoint' ),
		'new_item'           => __( 'New Use Case', 'clusterpoint' ),
		'edit_item'          => __( 'Edit Use Case', 'clusterpoint' ),
		'view_item'          => __( 'View Use Case', 'clusterpoint' ),
		'all_items'          => __( 'All Use Cases', 'clusterpoint' ),
		'search_items'       => __( 'Search Use Cases', 'clusterpoint' ),
		'parent_item_colon'  => __( 'Parent Use Case:', 'clusterpoint' ),
		'not_found'          => __( 'No Use Cases found.', 'clusterpoint' ),
		'not_found_in_trash' => __( 'No Use Cases found in Trash.', 'clusterpoint' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'clusterpoint' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'			 => 'dashicons-media-document',
		'rewrite'			 => array( 'slug' => 'tutorials'), 
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'use_cases', $args );
}


// Add support for SVG files
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// Add subpage for news
add_action('admin_menu' , '__enable_subpages'); 

function __enable_subpages() {
    add_submenu_page('edit.php?post_type=press_releases', 'Custom Post Type Admin', 'In News', 'edit_posts', 'post.php?post=41&action=edit');
}



add_action( 'admin_menu', 'register_web_menu_page', 999);

function register_web_menu_page () {
  global $menu;
   
  $menu[9] = array (
    'FAQs', // menu title
    'read', // capability
	'post.php?post=119&action=edit', // menu item url
    null,
    'menu-top menu-icon-generic toplevel_page_web_menu_page', // menu item class
    'FAQs', // page title
    'dashicons-admin-links' // menu function
  );
}

// Change post preview button url 
function nixcraft_preview_link() {
		if(get_post_type( $_GET['post'] ) == 'white_papers') :
		    $slug = basename(get_permalink());
		    $mydomain = '/resources/white-papers/';
		    $mynewpurl = "$mydomain$slug";
		    return "$mynewpurl";
	    endif;
    
}
add_filter( 'preview_post_link', 'nixcraft_preview_link' );

add_action('admin_head', 'myposttype_admin_css');

	function myposttype_admin_css() {

		global $post_type; if (($_GET['post_type'] == 'white_papers') || ($post_type == 'white_papers')) :		

			echo "<style>#edit-slug-box { display:none; } #slugdiv input { width: 100%; }</style>";

		endif;

}
