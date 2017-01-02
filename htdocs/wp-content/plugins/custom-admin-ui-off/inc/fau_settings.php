<?php

add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('fau-colorpicker.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
}


function custom_admin_js() {
	$url = dirname(get_site_url());
    echo '
    <script type="text/javascript">
    	jQuery(document).ready(function($) {
	    	jQuery("#wp-admin-bar-site-name a").click(function(e) {
		    	e.preventDefault();
				window.location.href = "'.$url.'";
				return false;
	    	});
	    });
    </script>';
}
add_action('admin_footer', 'custom_admin_js');

// Customize Fancy Admin UI Colors
$__color_settings = new __color_settings();
class __color_settings {
    function __color_settings( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', '__primary_color', 'esc_attr' );
        add_settings_field('__primary_color', '<label for="__primary_color">'.__('Admin UI Primary Color:' , '__primary_color' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'fau_primary_color', '' );
        echo '<input type="text" id="__primary_color" name="__primary_color" value="' . $value . '" data-default-color="#3498db" />';
        echo "
          <script>
            jQuery(document).ready(function($){
              $('#__primary_color').wpColorPicker();
            });
          </script>
          ";
    }
}

$__secondary_color_settings = new __secondary_color_settings();
class __secondary_color_settings {
    function __secondary_color_settings( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', '__secondary_color', 'esc_attr' );
        add_settings_field('__secondary_color', '<label for="__secondary_color">'.__('Admin UI Secondary Color:' , '__secondary_color' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( '__secondary_color', '' );
        echo '<input type="text" id="__secondary_color" name="__secondary_color" value="' . $value . '" data-default-color="#2581bf" />';
        echo "
          <script>
            jQuery(document).ready(function($){
              $('#__secondary_color').wpColorPicker();
            });
          </script>
          ";
    }
}


$__third_color_settings = new __third_color_settings();
class __third_color_settings {
    function __third_color_settings( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', '__third_color', 'esc_attr' );
        add_settings_field('__third_color', '<label for="__third_color">'.__('"Add new" Button Color:' , '__third_color' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( '__third_color', '' );
        echo '<input type="text" id="__third_color" name="__third_color" value="' . $value . '" data-default-color="#2581bf" />';
        echo "
          <script>
            jQuery(document).ready(function($){
              $('#__third_color').wpColorPicker();
            });
          </script>
          ";
    }
}