<?php
/**
 * Scripts and stylesheets
 */
function cutlass_scripts() {
  /**
   * The build task in Gulp renames production assets with a hash
   * Read the asset names from assets-manifest.json
   */
  if (WP_ENV === 'development') {
    $assets = array(
      'vendor-css'      => '/dist/css/vendor.css',
      'css'             => '/dist/css/main.css',
      'vendor-js'       => '/dist/js/vendor.js',
      'js'              => '/dist/js/main.js',
      'google-api'		=> 'https://maps.googleapis.com/maps/api/js'
    );
  }

  wp_enqueue_style('cutlass_vendor_css', get_template_directory_uri() . $assets['vendor-css'], false, null);
  wp_enqueue_style('cutlass_css', get_template_directory_uri() . $assets['css'], false, null);
  wp_enqueue_script('cutlass_vendor_js', get_template_directory_uri() . $assets['vendor-js'], array(), null, true);
  wp_enqueue_script('google-api', $assets['google-api'], array(), null, true);
  wp_enqueue_script('cutlass_js', get_template_directory_uri() . $assets['js'], array(), null, true);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

}
add_action('wp_enqueue_scripts', 'cutlass_scripts', 100);