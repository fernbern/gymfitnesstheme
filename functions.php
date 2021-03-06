<?php

// Link to the queries file
require get_template_directory() . '/inc/queries.php';

// Creates the Menus
function gymfitness_menus() {
    // WordPress Function
    register_nav_menus(
        array(
          'main-menu' => __( 'Main Menu' ),
          'extra-menu' => __( 'Extra Menu' )
        )
    );
}

// Hook
add_action('init', 'gymfitness_menus' ); 

// Adds Stylesheets and JS Files
function gymfitness_scripts() {

    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1'); 

    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );

    // Slicknav css
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
    wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.1');
    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0' );
    
    wp_enqueue_script('jquery');

    /** Load JS Files */
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '2.11.1', true );

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

// Enable Feature images and other stuff
function gymfitness_setup() {

    // Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true );
    add_image_size('blog', 966, 644, true);

    // Add featured image
    add_theme_support('post-thumbnails');

    // SEO Titles
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup'); // When the theme is activated and ready!

// Creates a Widget Zone
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar', 
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary">',
        'after_title' => '</h3>'
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');
 ?>