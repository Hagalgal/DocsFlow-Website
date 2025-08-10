<?php
/**
 * DocsFlow Child Theme Functions - Simplified Version
 * 
 * @package DocsFlow Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child theme styles
 */
function docsflow_child_enqueue_styles() {
    // Get parent theme version
    $parent_style = 'astra-style';
    
    // Enqueue parent theme styles
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    
    // Enqueue child theme styles
    wp_enqueue_style('docsflow-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        '1.0.0'
    );
    
    // Add RTL support
    wp_style_add_data('docsflow-child-style', 'rtl', 'replace');
    
    // Load Hebrew fonts
    wp_enqueue_style('docsflow-hebrew-fonts',
        'https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700&family=Rubik:wght@400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'docsflow_child_enqueue_styles');

/**
 * Add Hebrew language support
 */
function docsflow_child_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'docsflow_child_setup');
?>