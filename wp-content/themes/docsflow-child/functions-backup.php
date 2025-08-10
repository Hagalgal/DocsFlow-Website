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
    // Get parent theme version
    $parent_style = 'astra-style';
    
    // Enqueue parent theme styles
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    
    // Enqueue child theme styles
    wp_enqueue_style('docsflow-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
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
add_action('wp_enqueue_scripts', 'docsflow_child_enqueue_styles', 15);

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
    
    // Load text domain for translations
    load_child_theme_textdomain('docsflow-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'docsflow_child_setup');

/**
 * Enqueue custom scripts
 */
function docsflow_child_scripts() {
    // Add custom JavaScript if needed
    wp_enqueue_script('docsflow-custom', 
        get_stylesheet_directory_uri() . '/js/custom.js', 
        array('jquery'), 
        wp_get_theme()->get('Version'), 
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('docsflow-custom', 'docsflow_ajax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('docsflow_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'docsflow_child_scripts');

/**
 * Customize WordPress login page to match brand
 */
function docsflow_login_style() {
    ?>
    <style type="text/css">
        body.login {
            background: linear-gradient(135deg, #EFF6FF 0%, #FFFFFF 100%);
        }
        .login h1 a {
            background-image: none;
            background-size: contain;
            width: auto;
            height: auto;
            text-decoration: none;
            color: #2563EB;
            font-size: 24px;
            font-weight: 700;
            text-align: center;
        }
        .login form {
            background: #FFFFFF;
            border-radius: 12px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        .login form .input {
            border-radius: 8px;
            border: 2px solid #D1D5DB;
            padding: 12px;
        }
        .login form .input:focus {
            border-color: #2563EB;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        .wp-core-ui .button-primary {
            background: #2563EB;
            border-color: #2563EB;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .wp-core-ui .button-primary:hover {
            background: #1D4ED8;
            border-color: #1D4ED8;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'docsflow_login_style');

/**
 * Change login page URL
 */
function docsflow_login_url() {
    return home_url();
}
add_filter('login_headerurl', 'docsflow_login_url');

/**
 * Change login page title
 */
function docsflow_login_title() {
    return 'DocsFlow - מערכת ניהול מסמכים לסוכני ביטוח';
}
add_filter('login_headertitle', 'docsflow_login_title');

/**
 * Add custom post types
 */
function docsflow_custom_post_types() {
    // Case Studies
    register_post_type('case_study', array(
        'labels' => array(
            'name' => 'מקרי בוחן',
            'singular_name' => 'מקרה בוחן',
            'add_new' => 'הוסף מקרה בוחן',
            'add_new_item' => 'הוסף מקרה בוחן חדש',
            'edit_item' => 'ערוך מקרה בוחן',
            'new_item' => 'מקרה בוחן חדש',
            'view_item' => 'צפה במקרה בוחן',
            'search_items' => 'חפש מקרי בוחן',
            'not_found' => 'לא נמצאו מקרי בוחן',
            'not_found_in_trash' => 'לא נמצאו מקרי בוחן בפח'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'customers'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio'
    ));
    
    // Testimonials
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'המלצות',
            'singular_name' => 'המלצה',
            'add_new' => 'הוסף המלצה',
            'add_new_item' => 'הוסף המלצה חדשה',
            'edit_item' => 'ערוך המלצה',
            'new_item' => 'המלצה חדשה',
            'view_item' => 'צפה בהמלצה',
            'search_items' => 'חפש המלצות',
            'not_found' => 'לא נמצאו המלצות',
            'not_found_in_trash' => 'לא נמצאו המלצות בפח'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-testimonial'
    ));
}
add_action('init', 'docsflow_custom_post_types');

/**
 * Add custom meta boxes
 */
function docsflow_add_meta_boxes() {
    // Company name for case studies
    add_meta_box(
        'company_details',
        'פרטי החברה',
        'docsflow_company_details_callback',
        'case_study'
    );
    
    // Customer details for testimonials
    add_meta_box(
        'customer_details',
        'פרטי הלקוח',
        'docsflow_customer_details_callback',
        'testimonial'
    );
}
add_action('add_meta_boxes', 'docsflow_add_meta_boxes');

/**
 * Company details meta box callback
 */
function docsflow_company_details_callback($post) {
    wp_nonce_field('docsflow_save_meta_box_data', 'docsflow_meta_box_nonce');
    
    $company_name = get_post_meta($post->ID, '_company_name', true);
    $company_size = get_post_meta($post->ID, '_company_size', true);
    $industry = get_post_meta($post->ID, '_industry', true);
    $results = get_post_meta($post->ID, '_results', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="company_name">שם החברה</label></th>';
    echo '<td><input type="text" id="company_name" name="company_name" value="' . esc_attr($company_name) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="company_size">גודל החברה</label></th>';
    echo '<td><input type="text" id="company_size" name="company_size" value="' . esc_attr($company_size) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="industry">תחום</label></th>';
    echo '<td><input type="text" id="industry" name="industry" value="' . esc_attr($industry) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="results">תוצאות</label></th>';
    echo '<td><textarea id="results" name="results" rows="4" cols="50">' . esc_textarea($results) . '</textarea></td>';
    echo '</tr>';
    echo '</table>';
}

/**
 * Customer details meta box callback
 */
function docsflow_customer_details_callback($post) {
    wp_nonce_field('docsflow_save_meta_box_data', 'docsflow_meta_box_nonce');
    
    $customer_name = get_post_meta($post->ID, '_customer_name', true);
    $customer_title = get_post_meta($post->ID, '_customer_title', true);
    $customer_company = get_post_meta($post->ID, '_customer_company', true);
    $rating = get_post_meta($post->ID, '_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="customer_name">שם הלקוח</label></th>';
    echo '<td><input type="text" id="customer_name" name="customer_name" value="' . esc_attr($customer_name) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="customer_title">תפקיד</label></th>';
    echo '<td><input type="text" id="customer_title" name="customer_title" value="' . esc_attr($customer_title) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="customer_company">חברה</label></th>';
    echo '<td><input type="text" id="customer_company" name="customer_company" value="' . esc_attr($customer_company) . '" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="rating">דירוג (1-5)</label></th>';
    echo '<td><select id="rating" name="rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '"' . selected($rating, $i, false) . '>' . $i . ' כוכבים</option>';
    }
    echo '</select></td>';
    echo '</tr>';
    echo '</table>';
}

/**
 * Save meta box data
 */
function docsflow_save_meta_box_data($post_id) {
    if (!isset($_POST['docsflow_meta_box_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['docsflow_meta_box_nonce'], 'docsflow_save_meta_box_data')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save case study fields
    if (isset($_POST['company_name'])) {
        update_post_meta($post_id, '_company_name', sanitize_text_field($_POST['company_name']));
    }
    if (isset($_POST['company_size'])) {
        update_post_meta($post_id, '_company_size', sanitize_text_field($_POST['company_size']));
    }
    if (isset($_POST['industry'])) {
        update_post_meta($post_id, '_industry', sanitize_text_field($_POST['industry']));
    }
    if (isset($_POST['results'])) {
        update_post_meta($post_id, '_results', sanitize_textarea_field($_POST['results']));
    }
    
    // Save testimonial fields
    if (isset($_POST['customer_name'])) {
        update_post_meta($post_id, '_customer_name', sanitize_text_field($_POST['customer_name']));
    }
    if (isset($_POST['customer_title'])) {
        update_post_meta($post_id, '_customer_title', sanitize_text_field($_POST['customer_title']));
    }
    if (isset($_POST['customer_company'])) {
        update_post_meta($post_id, '_customer_company', sanitize_text_field($_POST['customer_company']));
    }
    if (isset($_POST['rating'])) {
        update_post_meta($post_id, '_rating', intval($_POST['rating']));
    }
}
add_action('save_post', 'docsflow_save_meta_box_data');

/**
 * Add shortcodes
 */

// Testimonials shortcode
function docsflow_testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'limit' => 3,
        'columns' => 3
    ), $atts);
    
    $testimonials = new WP_Query(array(
        'post_type' => 'testimonial',
        'posts_per_page' => $atts['limit']
    ));
    
    $output = '<div class="testimonials-grid grid-' . $atts['columns'] . '">';
    
    if ($testimonials->have_posts()) {
        while ($testimonials->have_posts()) {
            $testimonials->the_post();
            $customer_name = get_post_meta(get_the_ID(), '_customer_name', true);
            $customer_title = get_post_meta(get_the_ID(), '_customer_title', true);
            $customer_company = get_post_meta(get_the_ID(), '_customer_company', true);
            $rating = get_post_meta(get_the_ID(), '_rating', true);
            
            $output .= '<div class="testimonial-card">';
            $output .= '<div class="testimonial-content">' . get_the_content() . '</div>';
            $output .= '<div class="testimonial-author">' . esc_html($customer_name) . '</div>';
            $output .= '<div class="testimonial-company">' . esc_html($customer_title) . ', ' . esc_html($customer_company) . '</div>';
            if ($rating) {
                $output .= '<div class="testimonial-rating">';
                for ($i = 1; $i <= 5; $i++) {
                    $output .= $i <= $rating ? '★' : '☆';
                }
                $output .= '</div>';
            }
            $output .= '</div>';
        }
        wp_reset_postdata();
    }
    
    $output .= '</div>';
    
    return $output;
}
add_shortcode('testimonials', 'docsflow_testimonials_shortcode');

// Feature cards shortcode
function docsflow_features_shortcode($atts, $content = null) {
    return '<div class="features-grid grid-3">' . do_shortcode($content) . '</div>';
}
add_shortcode('features', 'docsflow_features_shortcode');

// Individual feature card shortcode
function docsflow_feature_shortcode($atts) {
    $atts = shortcode_atts(array(
        'icon' => '⭐',
        'title' => '',
        'description' => ''
    ), $atts);
    
    $output = '<div class="feature-card">';
    $output .= '<div class="feature-card-icon">' . $atts['icon'] . '</div>';
    $output .= '<h3 class="feature-card-title">' . esc_html($atts['title']) . '</h3>';
    $output .= '<p class="feature-card-description">' . esc_html($atts['description']) . '</p>';
    $output .= '</div>';
    
    return $output;
}
add_shortcode('feature', 'docsflow_feature_shortcode');

/**
 * Customize excerpt length
 */
function docsflow_excerpt_length($length) {
    return 25; // words
}
add_filter('excerpt_length', 'docsflow_excerpt_length');

/**
 * Customize excerpt more text
 */
function docsflow_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'docsflow_excerpt_more');

/**
 * Add admin styles
 */
function docsflow_admin_styles() {
    echo '<style>
        /* Admin styling for Hebrew interface */
        .rtl .wrap h1,
        .rtl .wrap h2,
        .rtl .wp-heading-inline {
            font-family: "Assistant", "Rubik", Arial, sans-serif;
        }
        
        /* Custom post type icons */
        #menu-posts-case_study .wp-menu-image:before {
            content: "\f318" !important;
        }
        #menu-posts-testimonial .wp-menu-image:before {
            content: "\f473" !important;
        }
    </style>';
}
add_action('admin_head', 'docsflow_admin_styles');

/**
 * Add Hebrew date format
 */
function docsflow_hebrew_date($format = '') {
    if (empty($format)) {
        $format = 'd בF Y'; // Hebrew date format
    }
    return $format;
}

/**
 * Disable comments for specific post types
 */
function docsflow_disable_comments_post_types_support() {
    remove_post_type_support('page', 'comments');
    remove_post_type_support('case_study', 'comments');
    remove_post_type_support('testimonial', 'comments');
}
add_action('init', 'docsflow_disable_comments_post_types_support');

/**
 * Add body classes for better styling
 */
function docsflow_body_classes($classes) {
    // Add Hebrew class if site is in Hebrew
    if (get_locale() == 'he_IL') {
        $classes[] = 'hebrew';
        $classes[] = 'rtl';
    }
    
    // Add page-specific classes
    if (is_page_template('page-pricing.php')) {
        $classes[] = 'pricing-page';
    }
    
    if (is_page_template('page-contact.php')) {
        $classes[] = 'contact-page';
    }
    
    return $classes;
}
add_filter('body_class', 'docsflow_body_classes');
?>