<?php
function child_theme_enqueue_styles() {
  wp_enqueue_style('hypercore-child', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array('hypercore'), null, false);
}
add_action('wp_enqueue_scripts', 'child_theme_enqueue_styles');

/* Enqueue Critical Stylesheet above all others */
function enqueue_critical_styles() {
  wp_enqueue_style('hypercore-critical-styles', get_stylesheet_directory_uri() . '/dist/css/critical.css', '', null);
}
add_action('wp_enqueue_scripts', 'enqueue_critical_styles', 1);

/* Enqueue your custom JS files in the callback below.  See: https: //developer.wordpress.org/reference/functions/wp_enqueue_script/ */
function enqueue_custom_js() {
  wp_enqueue_style('glide', get_stylesheet_directory_uri() . '/dist/glide/css/glide.core.min.css', array('hypercore'), null);
  wp_enqueue_style('glide-theme', get_stylesheet_directory_uri() . '/dist/glide/css/glide.theme.min.css', array('hypercore'), null);
  hypercore\ScriptLoader::load_script('glide', get_stylesheet_directory_uri() . '/dist/glide/glide.min.js', array(), '3.4.1');
  hypercore\ScriptLoader::load_script('carousel', get_stylesheet_directory_uri() . '/dist/js/carousel.js', array('glide'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js', 2);

/**
 * Filters all menu item URLs for a #placeholder#.
 *
 * @param WP_Post[] $menu_items All of the nave menu items, sorted for display.
 *
 * @return WP_Post[] The menu items with any placeholders properly filled in.
 */
function my_dynamic_menu_items($menu_items) {

  // A list of placeholders to replace.
  // You can add more placeholders to the list as needed.
  $placeholders = array(
    '#v8_schedule_button#' => array(
      'shortcode' => 'v8_schedule_button',
      'atts' => array('form-id' => '5', 'heading' => 'How Can We Help You Tomorrow?', 'text' => 'Launch V8'),
    ),
  );

  foreach ($menu_items as $menu_item) {

    if (isset($placeholders[$menu_item->url])) {

      global $shortcode_tags;

      $placeholder = $placeholders[$menu_item->url];

      if (isset($shortcode_tags[$placeholder['shortcode']])) {

        $menu_item->url = call_user_func(
          $shortcode_tags[$placeholder['shortcode']]
          , $placeholder['atts']
          , $placeholder['shortcode']
        );
      }
    }
  }

  return $menu_items;
}
add_filter('wp_nav_menu_objects', 'my_dynamic_menu_items');

/* Include Custom Site Component Files */
if (file_exists(get_stylesheet_directory() . '/inc/custom-header.php')) {include_once get_stylesheet_directory() . '/inc/custom-header.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-sidebar.php')) {include_once get_stylesheet_directory() . '/inc/custom-sidebar.php';}
if (file_exists(get_stylesheet_directory() . '/inc/custom-footer.php')) {include_once get_stylesheet_directory() . '/inc/custom-footer.php';}
if (file_exists(get_stylesheet_directory() . '/inc/shortcodes.php')) {include_once get_stylesheet_directory() . '/inc/shortcodes.php';}

/* All other misc code that does not fall into one of the included files can be added below */
