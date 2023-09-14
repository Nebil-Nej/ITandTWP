<?php
// Add theme Support

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post_formats', [
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'
]);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

// Load in the CSS

function itandt_enqueue_style()
{
    wp_enqueue_style(
        'main-css',
        get_stylesheet_directory_uri() . '/style.css',
        [],
        time(),
        'all'
    );
}

add_action('wp_enqueue_scripts', 'itandt_enqueue_style');

// Adding Navigation Menu Location

register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'itandt'),
    'footer-menu' => esc_html__('Footer Menu', 'itandt')
]);

// Widget Areas
function itandt_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Main Sidebar', 'itandt'),
        'id' => 'main-sidebar',
        'description' => esc_html__('Add Widgets for main sidebar here', 'itandt'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
    register_sidebar([
        'name' => esc_html__('Header Sidebar', 'itandt'),
        'id' => 'header-sidebar',
        'description' => esc_html__('Add Widgets for header here', 'itandt'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
    register_sidebar([
        'name' => esc_html__('Footer Sidebar', 'itandt'),
        'id' => 'footer-sidebar',
        'description' => esc_html__('Add Widgets for footer here', 'itandt'),
        'before_widget' => '<section class="widget">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
}

add_action('widgets_init', 'itandt_widgets_init');
?>