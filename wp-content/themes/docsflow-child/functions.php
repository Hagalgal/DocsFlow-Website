<?php
/**
 * DocsFlow Child Theme Functions
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
    // Get parent theme version for cache busting
    $parent_theme = wp_get_theme('astra');
    $parent_version = $parent_theme->get('Version');
    
    // Enqueue parent theme styles first
    wp_enqueue_style('astra-parent-style', 
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_version
    );
    
    // Load Hebrew fonts before our styles
    wp_enqueue_style('docsflow-hebrew-fonts',
        'https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;600;700&family=Rubik:wght@400;500;600;700&display=swap',
        array(),
        '1.0.0'
    );
    
    // Enqueue child theme styles with dependency on parent
    wp_enqueue_style('docsflow-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-parent-style', 'docsflow-hebrew-fonts'),
        '1.0.2'  // Increment version for cache busting
    );
    
    // Add RTL support - WordPress will automatically load style-rtl.css when needed
    wp_style_add_data('docsflow-child-style', 'rtl', 'replace');
    
    // Ensure Hebrew/RTL direction
    add_filter('body_class', function($classes) {
        $classes[] = 'rtl';
        return $classes;
    });
    
    // Enqueue custom JavaScript
    wp_enqueue_script('docsflow-custom-js',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array('jquery'),
        '1.0.1',
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('docsflow-custom-js', 'docsflow_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('docsflow_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'docsflow_child_enqueue_styles', 15);

/**
 * Add inline CSS as fallback
 */
function docsflow_inline_critical_css() {
    echo '<style id="docsflow-critical-css">
    /* Critical CSS for immediate loading */
    :root {
        --primary-blue: #2563EB;
        --primary-blue-dark: #1D4ED8;
        --primary-blue-light: #3B82F6;
        --primary-blue-ultra-light: #EFF6FF;
        --gray-900: #111827;
        --gray-700: #374151;
        --gray-600: #4B5563;
        --gray-100: #F3F4F6;
        --white: #FFFFFF;
        --space-3: 0.75rem;
        --space-4: 1rem;
        --space-6: 1.5rem;
        --space-8: 2rem;
        --text-base: 1rem;
        --text-lg: 1.125rem;
        --text-xl: 1.25rem;
        --text-2xl: 1.5rem;
        --text-3xl: 1.875rem;
        --text-4xl: 2.25rem;
        --text-5xl: 3rem;
        --radius-md: 8px;
        --radius-lg: 12px;
        --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    
    body {
        font-family: "Assistant", "Rubik", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        direction: rtl !important;
        text-align: right !important;
        color: var(--gray-700);
        background: var(--white);
        line-height: 1.6;
    }
    
    html {
        direction: rtl !important;
    }
    
    .container, .ast-container {
        max-width: 1200px !important;
        margin: 0 auto !important;
        padding: 0 var(--space-4) !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }
    
    .site-content,
    .entry-content {
        max-width: 1200px !important;
        margin: 0 auto !important;
        padding: 0 var(--space-4) !important;
    }
    
    .section {
        width: 100% !important;
        padding: var(--space-20) 0 !important;
    }
    
    h1, h2, h3, h4, h5, h6 {
        color: var(--gray-900);
        font-weight: 600;
        line-height: 1.2;
        margin-bottom: var(--space-4);
    }
    
    h1 { font-size: var(--text-5xl); }
    h2 { font-size: var(--text-4xl); }
    h3 { font-size: var(--text-3xl); }
    
    .btn-primary, .ast-button, .button {
        background: var(--primary-blue) !important;
        color: var(--white) !important;
        padding: var(--space-3) var(--space-6) !important;
        border-radius: var(--radius-md) !important;
        font-weight: 600 !important;
        border: none !important;
        cursor: pointer;
        text-decoration: none !important;
        display: inline-block;
        transition: all 0.2s ease;
    }
    
    .btn-primary:hover {
        background: var(--primary-blue-dark) !important;
        color: var(--white) !important;
    }
    </style>';
}
add_action('wp_head', 'docsflow_inline_critical_css', 1);

/**
 * Debug function to check if child theme is active
 */
function docsflow_debug_info() {
    if (current_user_can('manage_options')) {
        echo '<!-- DocsFlow Child Theme Debug Info -->';
        echo '<!-- Child Theme Directory: ' . get_stylesheet_directory_uri() . ' -->';
        echo '<!-- Parent Theme Directory: ' . get_template_directory_uri() . ' -->';
        echo '<!-- Child Theme Active: ' . (is_child_theme() ? 'Yes' : 'No') . ' -->';
        echo '<!-- Current Theme: ' . get_stylesheet() . ' -->';
    }
}
add_action('wp_head', 'docsflow_debug_info');

/**
 * Add Hebrew language support and theme setup
 */
function docsflow_child_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Add support for Elementor
    add_theme_support('elementor');
    
    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
    
    // Register navigation menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'docsflow-child'),
        'footer-menu' => __('Footer Menu', 'docsflow-child'),
    ));
}
add_action('after_setup_theme', 'docsflow_child_setup');

/**
 * Set Hebrew as default language direction
 */
function docsflow_set_rtl_direction() {
    // Force RTL direction for Hebrew
    if (!is_admin()) {
        global $wp_locale;
        $wp_locale->text_direction = 'rtl';
    }
}
add_action('init', 'docsflow_set_rtl_direction');

/**
 * Add RTL body class
 */
function docsflow_add_rtl_body_class($classes) {
    $classes[] = 'rtl';
    $classes[] = 'hebrew-site';
    return $classes;
}
add_filter('body_class', 'docsflow_add_rtl_body_class');

/**
 * Customize Astra theme defaults for DocsFlow
 */
function docsflow_customize_astra_defaults($defaults) {
    // Set primary color
    $defaults['theme-color'] = '#2563EB';
    
    // Set typography
    $defaults['body-font-family'] = "'Assistant', 'Rubik', sans-serif";
    $defaults['body-font-weight'] = '400';
    $defaults['font-size-body'] = array(
        'desktop' => 16,
        'tablet'  => 16,
        'mobile'  => 16,
        'desktop-unit' => 'px',
        'tablet-unit'  => 'px',
        'mobile-unit'  => 'px',
    );
    
    // Set container width
    $defaults['container-width'] = 1200;
    
    // Set header defaults
    $defaults['header-main-sep'] = 1;
    $defaults['header-main-sep-color'] = '#E5E7EB';
    
    return $defaults;
}
add_filter('astra_theme_defaults', 'docsflow_customize_astra_defaults');

/**
 * Register widget areas
 */
function docsflow_widgets_init() {
    register_sidebar(array(
        'name'          => __('Hero Section', 'docsflow-child'),
        'id'            => 'hero-section',
        'description'   => __('Widget area for hero section', 'docsflow-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Features Section', 'docsflow-child'),
        'id'            => 'features-section',
        'description'   => __('Widget area for features section', 'docsflow-child'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'docsflow_widgets_init');

/**
 * Add custom HTML attributes
 */
function docsflow_add_html_attributes($output) {
    if (strpos($output, '<html') !== false) {
        $output = str_replace('<html', '<html dir="rtl" lang="he-IL"', $output);
    }
    return $output;
}
add_filter('language_attributes', 'docsflow_add_html_attributes');

/**
 * Custom excerpt length
 */
function docsflow_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'docsflow_excerpt_length');

/**
 * Custom excerpt more
 */
function docsflow_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'docsflow_excerpt_more');

/**
 * Add custom meta tags for SEO
 */
function docsflow_add_meta_tags() {
    if (is_front_page()) {
        echo '<meta name="description" content="מערכת ניהול מסמכים מתקדמת לסוכני ביטוח בישראל - חתימה דיגיטלית, אוטומציה וניהול תהליכים">' . "\n";
        echo '<meta name="keywords" content="תוכנה לסוכני ביטוח, חתימה דיגיטלית ביטוח, ניהול מסמכים ביטוח, אוטומציה תהליכי ביטוח">' . "\n";
    }
}
add_action('wp_head', 'docsflow_add_meta_tags');

/**
 * Create custom pages programmatically
 */
function docsflow_create_pages() {
    // Define all pages to create
    $pages = array(
        'home' => array(
            'title' => 'דף הבית',
            'content' => '',
            'template' => 'page-templates/homepage.php'
        ),
        'features' => array(
            'title' => 'תכונות',
            'content' => '',
            'template' => 'page-templates/features.php'
        ),
        'pricing' => array(
            'title' => 'מחירים',
            'content' => '',
            'template' => 'page-templates/pricing.php'
        ),
        'contact' => array(
            'title' => 'צור קשר',
            'content' => '',
            'template' => 'page-templates/contact.php'
        ),
        'about' => array(
            'title' => 'על אודות',
            'content' => 'דף זה יכיל מידע על החברה והצוות.',
            'template' => ''
        ),
    );
    
    // Create solution pages
    $solution_pages = array(
        'solutions/digital-signature' => array(
            'title' => 'חתימה דיגיטלית',
            'content' => '',
            'template' => 'page-templates/solutions.php'
        ),
        'solutions/document-management' => array(
            'title' => 'ניהול מסמכים',
            'content' => '',
            'template' => 'page-templates/solutions.php'
        ),
        'solutions/process-automation' => array(
            'title' => 'אוטומציה של תהליכים',
            'content' => '',
            'template' => 'page-templates/solutions.php'
        ),
    );
    
    // Merge solution pages with main pages
    $all_pages = array_merge($pages, $solution_pages);
    
    foreach ($all_pages as $slug => $page_data) {
        // Check if page already exists
        $page_exists = get_page_by_path($slug);
        if (!$page_exists) {
            
            // Handle parent pages for nested slugs
            $parent_id = 0;
            if (strpos($slug, '/') !== false) {
                $path_parts = explode('/', $slug);
                $parent_slug = $path_parts[0];
                $child_slug = $path_parts[1];
                
                // Create parent page if it doesn't exist
                $parent_page = get_page_by_path($parent_slug);
                if (!$parent_page) {
                    $parent_id = wp_insert_post(array(
                        'post_title'    => 'פתרונות',
                        'post_content'  => 'דף פתרונות - יכיל קישורים לכל הפתרונות שלנו.',
                        'post_status'   => 'publish',
                        'post_type'     => 'page',
                        'post_name'     => $parent_slug,
                    ));
                } else {
                    $parent_id = $parent_page->ID;
                }
                
                $post_name = $child_slug;
            } else {
                $post_name = $slug;
            }
            
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title'    => $page_data['title'],
                'post_content'  => $page_data['content'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_name'     => $post_name,
                'post_parent'   => $parent_id,
            ));
            
            // Set page template if specified
            if ($page_data['template'] && $page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        }
    }
    
    // Set homepage if it doesn't exist
    $homepage = get_page_by_path('home');
    if ($homepage && get_option('page_on_front') != $homepage->ID) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $homepage->ID);
    }
}

// Auto-create pages on theme activation
add_action('after_switch_theme', 'docsflow_create_pages');

/**
 * Create navigation menu
 */
function docsflow_create_navigation() {
    // Create menu if it doesn't exist
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        // Add menu items
        $menu_items = array(
            array('title' => 'דף הבית', 'url' => home_url('/home/')),
            array('title' => 'תכונות', 'url' => home_url('/features/')),
            array('title' => 'פתרונות', 'url' => home_url('/solutions/'), 'children' => array(
                array('title' => 'חתימה דיגיטלית', 'url' => home_url('/solutions/digital-signature/')),
                array('title' => 'ניהול מסמכים', 'url' => home_url('/solutions/document-management/')),
                array('title' => 'אוטומציה', 'url' => home_url('/solutions/process-automation/')),
            )),
            array('title' => 'מחירים', 'url' => home_url('/pricing/')),
            array('title' => 'על אודות', 'url' => home_url('/about/')),
            array('title' => 'צור קשר', 'url' => home_url('/contact/')),
        );
        
        foreach ($menu_items as $item) {
            $menu_item_id = wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $item['title'],
                'menu-item-url' => $item['url'],
                'menu-item-status' => 'publish',
                'menu-item-type' => 'custom'
            ));
            
            // Add sub-menu items
            if (isset($item['children'])) {
                foreach ($item['children'] as $child) {
                    wp_update_nav_menu_item($menu_id, 0, array(
                        'menu-item-title' => $child['title'],
                        'menu-item-url' => $child['url'],
                        'menu-item-status' => 'publish',
                        'menu-item-type' => 'custom',
                        'menu-item-parent-id' => $menu_item_id
                    ));
                }
            }
        }
        
        // Set menu to theme location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

// Create navigation menu after creating pages
add_action('after_switch_theme', 'docsflow_create_navigation', 20);

/**
 * Create pages button for admin
 */
function docsflow_add_admin_menu() {
    add_theme_page(
        'DocsFlow Setup',
        'DocsFlow Setup',
        'manage_options',
        'docsflow-setup',
        'docsflow_admin_page'
    );
}
add_action('admin_menu', 'docsflow_add_admin_menu');

function docsflow_admin_page() {
    if (isset($_POST['create_pages']) && check_admin_referer('docsflow_create_pages')) {
        docsflow_create_pages();
        echo '<div class="notice notice-success"><p>Pages created successfully!</p></div>';
    }
    
    if (isset($_POST['fix_templates']) && check_admin_referer('docsflow_fix_templates')) {
        docsflow_fix_page_templates();
        echo '<div class="notice notice-success"><p>Page templates fixed successfully!</p></div>';
    }
    ?>
    <div class="wrap">
        <h1>DocsFlow Theme Setup</h1>
        
        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
            <div style="flex: 1;">
                <h2>Create Pages</h2>
                <p>Click the button below to create all necessary pages for the DocsFlow website.</p>
                <form method="post">
                    <?php wp_nonce_field('docsflow_create_pages'); ?>
                    <input type="submit" name="create_pages" class="button button-primary" value="Create All Pages">
                </form>
            </div>
            
            <div style="flex: 1;">
                <h2>Fix Templates</h2>
                <p>If pages exist but aren't showing correctly, click here to fix their templates.</p>
                <form method="post">
                    <?php wp_nonce_field('docsflow_fix_templates'); ?>
                    <input type="submit" name="fix_templates" class="button button-secondary" value="Fix Page Templates">
                </form>
            </div>
        </div>
        
        <h2>Current Pages Status:</h2>
        <?php docsflow_show_pages_status(); ?>
        
        <h2>Pages that will be created:</h2>
        <ul>
            <li>דף הבית (Homepage) - Custom Template</li>
            <li>תכונות (Features) - Custom Template</li>
            <li>מחירים (Pricing) - Custom Template</li>
            <li>צור קשר (Contact) - Custom Template</li>
            <li>על אודות (About) - Default Template</li>
            <li>פתרונות/חתימה דיגיטלית (Solutions/Digital Signature) - Solutions Template</li>
            <li>פתרונות/ניהול מסמכים (Solutions/Document Management) - Solutions Template</li>
            <li>פתרונות/אוטומציה של תהליכים (Solutions/Process Automation) - Solutions Template</li>
        </ul>
    </div>
    <?php
}

/**
 * Fix page templates for existing pages
 */
function docsflow_fix_page_templates() {
    $template_mappings = array(
        'home' => 'page-templates/homepage.php',
        'features' => 'page-templates/features.php',
        'pricing' => 'page-templates/pricing.php',
        'contact' => 'page-templates/contact.php',
        'digital-signature' => 'page-templates/solutions.php',
        'document-management' => 'page-templates/solutions.php',
        'process-automation' => 'page-templates/solutions.php',
    );
    
    foreach ($template_mappings as $slug => $template) {
        $page = get_page_by_path($slug);
        if (!$page) {
            // Try to find as child page
            $page = get_page_by_path('solutions/' . $slug);
        }
        
        if ($page) {
            update_post_meta($page->ID, '_wp_page_template', $template);
        }
    }
}

/**
 * Show current pages status
 */
function docsflow_show_pages_status() {
    $pages_to_check = array(
        'home' => 'דף הבית',
        'features' => 'תכונות', 
        'pricing' => 'מחירים',
        'contact' => 'צור קשר',
        'about' => 'על אודות',
        'solutions' => 'פתרונות',
        'solutions/digital-signature' => 'חתימה דיגיטלית',
        'solutions/document-management' => 'ניהול מסמכים',
        'solutions/process-automation' => 'אוטומציה של תהליכים',
    );
    
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Page</th><th>Status</th><th>Template</th><th>URL</th></tr></thead>';
    echo '<tbody>';
    
    foreach ($pages_to_check as $slug => $title) {
        $page = get_page_by_path($slug);
        $status = $page ? '✅ Exists' : '❌ Missing';
        $template = $page ? get_page_template_slug($page->ID) : 'N/A';
        $url = $page ? get_permalink($page->ID) : 'N/A';
        
        echo "<tr>";
        echo "<td><strong>{$title}</strong><br><small>{$slug}</small></td>";
        echo "<td>{$status}</td>";
        echo "<td>{$template}</td>";
        echo "<td>" . ($page ? "<a href='{$url}' target='_blank'>View Page</a>" : 'N/A') . "</td>";
        echo "</tr>";
    }
    
    echo '</tbody></table>';
}
?>