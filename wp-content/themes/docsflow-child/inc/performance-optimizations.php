<?php
/**
 * DocsFlow Performance Optimizations
 * Boost Core Web Vitals and page speed scores
 * 
 * @package DocsFlow Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class DocsFlow_Performance_Optimizations
 */
class DocsFlow_Performance_Optimizations {
    
    /**
     * Initialize performance optimizations
     */
    public static function init() {
        // Core Web Vitals optimizations
        add_action('wp_head', array(__CLASS__, 'add_preload_directives'), 1);
        add_action('wp_head', array(__CLASS__, 'add_resource_hints'), 2);
        
        // Script optimizations
        add_filter('script_loader_tag', array(__CLASS__, 'add_async_defer'), 10, 2);
        add_action('wp_enqueue_scripts', array(__CLASS__, 'optimize_scripts'), 100);
        
        // Image optimizations
        add_filter('wp_get_attachment_image_attributes', array(__CLASS__, 'add_lazy_loading'), 10, 2);
        add_filter('the_content', array(__CLASS__, 'add_loading_lazy_to_images'));
        
        // CSS optimizations
        add_action('wp_head', array(__CLASS__, 'inline_critical_css'), 1);
        add_filter('style_loader_tag', array(__CLASS__, 'defer_non_critical_css'), 10, 2);
        
        // Database optimizations
        add_action('init', array(__CLASS__, 'optimize_database_queries'));
        
        // Caching headers
        add_action('send_headers', array(__CLASS__, 'add_cache_headers'));
        
        // Remove unnecessary features
        add_action('init', array(__CLASS__, 'remove_unnecessary_features'));
    }
    
    /**
     * Add preload directives for critical resources
     */
    public static function add_preload_directives() {
        // Preload critical CSS
        echo '<link rel="preload" href="' . get_stylesheet_directory_uri() . '/style.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
        
        // Preload Hebrew fonts
        echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;600;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
        echo '<link rel="preload" href="https://fonts.gstatic.com/s/assistant/v18/2sDPZGJYnIjSi6H75xkMZJyiw1k.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
        
        // Preload hero image
        if (is_front_page()) {
            echo '<link rel="preload" as="image" href="' . get_stylesheet_directory_uri() . '/assets/images/hero-placeholder.svg">' . "\n";
        }
    }
    
    /**
     * Add resource hints for better performance
     */
    public static function add_resource_hints() {
        echo '<!-- Resource Hints for Performance -->' . "\n";
        echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">' . "\n";
        echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        
        // Add prefetch for likely next pages
        if (is_front_page()) {
            echo '<link rel="prefetch" href="' . home_url('/features/') . '">' . "\n";
            echo '<link rel="prefetch" href="' . home_url('/pricing/') . '">' . "\n";
        }
    }
    
    /**
     * Add async/defer to JavaScript files
     */
    public static function add_async_defer($tag, $handle) {
        // Scripts to defer (non-critical)
        $defer_scripts = array('docsflow-custom-js', 'contact-form-7');
        
        // Scripts to async load
        $async_scripts = array('google-analytics');
        
        if (in_array($handle, $defer_scripts)) {
            return str_replace(' src', ' defer src', $tag);
        }
        
        if (in_array($handle, $async_scripts)) {
            return str_replace(' src', ' async src', $tag);
        }
        
        return $tag;
    }
    
    /**
     * Optimize scripts loading
     */
    public static function optimize_scripts() {
        // Remove jQuery migrate on frontend
        if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), false, '3.6.0');
            wp_enqueue_script('jquery');
        }
        
        // Dequeue unnecessary scripts
        wp_dequeue_script('wp-embed');
        
        // Only load Contact Form 7 scripts on contact page
        if (!is_page('contact')) {
            wp_dequeue_script('contact-form-7');
            wp_dequeue_style('contact-form-7');
        }
    }
    
    /**
     * Add lazy loading to images
     */
    public static function add_lazy_loading($attr, $attachment) {
        $attr['loading'] = 'lazy';
        return $attr;
    }
    
    /**
     * Add loading="lazy" to images in content
     */
    public static function add_loading_lazy_to_images($content) {
        // Add loading="lazy" to images that don't already have it
        $content = preg_replace('/<img(?![^>]*loading=)([^>]+)>/i', '<img loading="lazy" $1>', $content);
        
        // Add width and height attributes for CLS prevention
        $content = preg_replace_callback('/<img[^>]+>/i', function($matches) {
            $img = $matches[0];
            
            // If no width/height specified, add defaults
            if (!strpos($img, 'width=') && !strpos($img, 'height=')) {
                $img = str_replace('<img', '<img width="auto" height="auto"', $img);
            }
            
            return $img;
        }, $content);
        
        return $content;
    }
    
    /**
     * Inline critical CSS
     */
    public static function inline_critical_css() {
        if (is_front_page()) {
            echo '<style id="critical-css">';
            echo '
            /* Critical Above-the-fold CSS */
            :root {
                --primary-blue: #2563EB;
                --primary-blue-dark: #1D4ED8;
                --gray-900: #111827;
                --white: #FFFFFF;
                --text-5xl: 3rem;
                --space-4: 1rem;
                --space-8: 2rem;
            }
            
            body {
                font-family: "Assistant", -apple-system, BlinkMacSystemFont, sans-serif;
                margin: 0;
                padding: 0;
                direction: rtl;
                text-align: right;
            }
            
            .hero-section {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                padding: 2rem 1rem;
            }
            
            .hero-title {
                font-size: 3rem;
                font-weight: 900;
                line-height: 1.1;
                color: white;
                margin-bottom: 1.5rem;
                text-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            }
            
            .hero-subtitle {
                font-size: 1.25rem;
                color: rgba(255, 255, 255, 0.95);
                margin-bottom: 2rem;
                line-height: 1.6;
            }
            
            .btn-primary {
                background: rgba(255, 255, 255, 0.95);
                color: #1e293b;
                padding: 1rem 2rem;
                border-radius: 50px;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
                transition: transform 0.3s ease;
            }
            
            .btn-primary:hover {
                transform: translateY(-2px);
            }
            
            @media (max-width: 768px) {
                .hero-title { font-size: 2rem; }
                .hero-subtitle { font-size: 1.125rem; }
            }
            ';
            echo '</style>';
        }
    }
    
    /**
     * Defer non-critical CSS
     */
    public static function defer_non_critical_css($tag, $handle) {
        // Don't defer critical styles
        $critical_styles = array('docsflow-child-style', 'astra-parent-style');
        
        if (!in_array($handle, $critical_styles)) {
            $tag = str_replace("rel='stylesheet'", "rel='preload' as='style' onload=\"this.onload=null;this.rel='stylesheet'\"", $tag);
        }
        
        return $tag;
    }
    
    /**
     * Optimize database queries
     */
    public static function optimize_database_queries() {
        // Remove unnecessary queries
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wp_shortlink_wp_head');
        
        // Optimize WP Query
        add_action('pre_get_posts', array(__CLASS__, 'optimize_queries'));
    }
    
    /**
     * Optimize specific queries
     */
    public static function optimize_queries($query) {
        if (!is_admin() && $query->is_main_query()) {
            // Reduce posts per page to improve performance
            if (is_home()) {
                $query->set('posts_per_page', 10);
            }
        }
    }
    
    /**
     * Add cache headers
     */
    public static function add_cache_headers() {
        if (!is_admin()) {
            // Set cache headers for static assets
            $expires = 60 * 60 * 24 * 30; // 30 days
            header('Cache-Control: public, max-age=' . $expires);
            header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT');
            
            // Add ETag for cache validation
            $etag = md5($_SERVER['REQUEST_URI'] . filemtime(__FILE__));
            header('ETag: "' . $etag . '"');
            
            // Handle 304 Not Modified
            if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] === '"' . $etag . '"') {
                header('HTTP/1.1 304 Not Modified');
                exit;
            }
        }
    }
    
    /**
     * Remove unnecessary features
     */
    public static function remove_unnecessary_features() {
        // Remove emoji scripts (saves ~15KB)
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');
        remove_filter('the_content_feed', 'wp_staticize_emoji');
        remove_filter('comment_text_rss', 'wp_staticize_emoji');
        remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
        
        // Remove REST API links
        remove_action('wp_head', 'rest_output_link_wp_head');
        remove_action('template_redirect', 'rest_output_link_header', 11);
        
        // Remove Windows Live Writer support
        remove_action('wp_head', 'wlwmanifest_link');
        
        // Remove WordPress version
        remove_action('wp_head', 'wp_generator');
    }
}

// Initialize performance optimizations
DocsFlow_Performance_Optimizations::init();

/**
 * Additional performance helper functions
 */

/**
 * Optimize images with WebP format
 */
function docsflow_webp_support() {
    // Check if browser supports WebP
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $accepts_webp = strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'image/webp') !== false;
    
    if ($accepts_webp) {
        add_filter('wp_generate_attachment_metadata', function($metadata, $attachment_id) {
            // Generate WebP versions of uploaded images
            $file = get_attached_file($attachment_id);
            $info = pathinfo($file);
            
            if (in_array(strtolower($info['extension']), array('jpg', 'jpeg', 'png'))) {
                $webp_file = $info['dirname'] . '/' . $info['filename'] . '.webp';
                
                // Create WebP version
                if (function_exists('imagewebp')) {
                    $image = null;
                    switch (strtolower($info['extension'])) {
                        case 'jpg':
                        case 'jpeg':
                            $image = imagecreatefromjpeg($file);
                            break;
                        case 'png':
                            $image = imagecreatefrompng($file);
                            break;
                    }
                    
                    if ($image) {
                        imagewebp($image, $webp_file, 85);
                        imagedestroy($image);
                    }
                }
            }
            
            return $metadata;
        }, 10, 2);
    }
}
add_action('init', 'docsflow_webp_support');

/**
 * Add service worker for caching
 */
function docsflow_add_service_worker() {
    if (is_front_page()) {
        echo '<script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function() {
                navigator.serviceWorker.register("/sw.js")
                    .then(function(registration) {
                        console.log("SW registered: ", registration);
                    })
                    .catch(function(registrationError) {
                        console.log("SW registration failed: ", registrationError);
                    });
            });
        }
        </script>';
    }
}
add_action('wp_footer', 'docsflow_add_service_worker');

/**
 * Minify HTML output
 */
function docsflow_minify_html($buffer) {
    if (!is_admin() && !is_feed() && !is_robots()) {
        // Remove HTML comments (except IE conditionals)
        $buffer = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $buffer);
        
        // Remove extra whitespace
        $buffer = preg_replace('/>\s+</', '><', $buffer);
        $buffer = preg_replace('/\s{2,}/', ' ', $buffer);
        
        // Remove whitespace around block elements
        $buffer = preg_replace('/\s*(<\/?(div|p|h[1-6]|section|article|header|footer|nav|main)[^>]*>)\s*/', '$1', $buffer);
    }
    return $buffer;
}

// Enable HTML minification
function docsflow_start_buffer() {
    ob_start('docsflow_minify_html');
}
add_action('template_redirect', 'docsflow_start_buffer', 1);