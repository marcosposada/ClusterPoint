<?php
/*
  Plugin Name:  Custom Admin UI
  Plugin URI:   
  Description:  Super clean, admin panel theme
  Version:      1
  Author:       
  Author URI:   
  */
error_reporting(0);
include_once('inc/fau_settings.php');

// Include Admin Styles
function fau_admin_theme_style() {
  wp_enqueue_style( 'custom-admin-theme', plugins_url( 'css/fau-styles-admin.php', __FILE__ ) );
  wp_enqueue_style( 'custom-adminbar', plugins_url( 'css/fau-styles-adminbar.php', __FILE__ ) );
}
add_action( 'admin_enqueue_scripts', 'fau_admin_theme_style' );

function fau_adminbar_style() {
  wp_enqueue_style( 'fau-admin-theme', plugins_url( 'css/fau-styles-adminbar.php', __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'fau_adminbar_style' );

// Login Page Styling
function fau_login_theme_style() {
	wp_enqueue_style( 'fau-login-theme', plugins_url( 'css/fau-styles-login.php', __FILE__ ) );
	wp_enqueue_script( 'fau-login-theme', plugins_url( 'css/fau-styles-login.php', __FILE__ ) );
}
add_action( 'login_enqueue_scripts', 'fau_login_theme_style' );

// Update Admin Footer
function fau_swap_footer_admin() {
  echo '';
}
add_filter( 'admin_footer_text', 'fau_swap_footer_admin' );

// Remove default HTML height on the admin bar callback
function fui_admin_bar_style() {
	if ( is_admin_bar_showing() ) :
?>
  <style type="text/css" media="screen">
    html { margin-top: 46px !important; }
    * html body { margin-top: 46px !important; }
  </style>
<?php 
	endif; 
}
add_theme_support( 'admin-bar', array( 'callback' => 'fui_admin_bar_style' ) );

function __remove_menus() {
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'plugins.php' );                //Plugins
	//remove_menu_page( 'users.php' );                  //Users
	remove_menu_page( 'tools.php' );                  //Tools
	//remove_menu_page( 'options-general.php' );        //Settings
	remove_menu_page( 'upload.php' );                 //Media
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'themes.php' );
	remove_menu_page( 'index.php' );
	//remove_menu_page( 'edit.php' );
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
	remove_menu_page('edit.php?post_type=acf-field-group');
}
add_action( 'admin_menu', '__remove_menus' );


// Create the function to use in the action hook

function __remove_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin

	global $wp_meta_boxes;

	// Remove the quickpress widget

	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);

	// Remove the incomming links widget

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	
	// Activity
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	
	// At glance
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	
	// Wp news
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	
	
} 

// Hoook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', '__remove_dashboard_widgets' );

// Disable dashboard
add_action('load-index.php', 'dashboard_Redirect');
function dashboard_Redirect(){
	wp_redirect(admin_url('edit.php'));
}

