<?php 
function load_scripts() {
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'), '4.5.2', true);
  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all' );
  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');



function firsttheme_config() {
  function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

$args = array(
  'height' => 225,
  'width' => 1920
);

add_theme_support('custom-header', $args);
add_theme_support('post-thumbnails');
add_theme_support('post-formats', 'video', 'image');
add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'firsttheme_config', 0);
// register sidebar
add_action('widgets_init', 'firsttheme_sidebar');
function firsttheme_sidebar() {
  register_sidebar(array(
    'name' => 'Home Page Sidebar',
    'id' => 'sidebar-1',
    'description' => 'this is the home page sidebar',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name' => 'Blog Sidebar',
    'id' => 'sidebar-2',
    'description' => 'this is the blog page sidebar',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));
  // services area
  register_sidebar(array(
    'name' => 'Service 1',
    'id' => 'services-1',
    'description' => 'First service area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));
  register_sidebar(array(
    'name' => 'Service 2',
    'id' => 'services-2',
    'description' => 'Second service area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));
  register_sidebar(array(
    'name' => 'Service 3',
    'id' => 'services-3',
    'description' => 'Third service area',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));
}
?>