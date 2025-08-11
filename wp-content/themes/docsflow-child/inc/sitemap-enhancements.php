<?php
/**
 * DocsFlow Sitemap Enhancements
 * Custom sitemap optimization for better SEO
 * 
 * @package DocsFlow Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class DocsFlow_Sitemap_Enhancements
 */
class DocsFlow_Sitemap_Enhancements {
    
    /**
     * Initialize sitemap enhancements
     */
    public static function init() {
        // Add custom sitemaps
        add_action('init', array(__CLASS__, 'add_custom_sitemaps'));
        
        // Enhance default WordPress sitemap
        add_filter('wp_sitemaps_posts_query_args', array(__CLASS__, 'customize_posts_sitemap'));
        add_filter('wp_sitemaps_pages_query_args', array(__CLASS__, 'customize_pages_sitemap'));
        add_filter('wp_sitemaps_posts_entry', array(__CLASS__, 'enhance_post_entries'), 10, 3);
        add_filter('wp_sitemaps_posts_show_on_front_entry', array(__CLASS__, 'enhance_homepage_entry'));
        
        // Add news sitemap for fresh content
        add_action('wp_sitemaps_init', array(__CLASS__, 'register_news_sitemap'));
        
        // Ping search engines on content update
        add_action('save_post', array(__CLASS__, 'ping_search_engines'), 10, 2);
    }
    
    /**
     * Add custom sitemaps
     */
    public static function add_custom_sitemaps() {
        // Add rewrite rule for custom sitemap
        add_rewrite_rule(
            '^docsflow-sitemap\.xml$',
            'index.php?docsflow_sitemap=1',
            'top'
        );
        
        // Handle custom sitemap request
        add_action('template_redirect', array(__CLASS__, 'handle_custom_sitemap'));
        
        // Add query var
        add_filter('query_vars', array(__CLASS__, 'add_query_vars'));
    }
    
    /**
     * Add query vars
     */
    public static function add_query_vars($vars) {
        $vars[] = 'docsflow_sitemap';
        return $vars;
    }
    
    /**
     * Handle custom sitemap request
     */
    public static function handle_custom_sitemap() {
        if (get_query_var('docsflow_sitemap')) {
            header('Content-Type: application/xml; charset=UTF-8');
            echo self::generate_custom_sitemap();
            exit;
        }
    }
    
    /**
     * Generate custom sitemap with SEO priorities
     */
    public static function generate_custom_sitemap() {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<?xml-stylesheet type="text/xsl" href="' . get_stylesheet_directory_uri() . '/sitemap.xsl"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
        
        $urls = array(
            // Homepage - Highest Priority
            array(
                'loc' => home_url('/'),
                'lastmod' => date('c'),
                'changefreq' => 'daily',
                'priority' => '1.0'
            ),
            // Key Landing Pages
            array(
                'loc' => home_url('/features/'),
                'lastmod' => date('c'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ),
            array(
                'loc' => home_url('/pricing/'),
                'lastmod' => date('c'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ),
            array(
                'loc' => home_url('/contact/'),
                'lastmod' => date('c'),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ),
            // Solution Pages - High Priority for Keywords
            array(
                'loc' => home_url('/solutions/digital-signature/'),
                'lastmod' => date('c'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ),
            array(
                'loc' => home_url('/solutions/document-management/'),
                'lastmod' => date('c'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ),
            array(
                'loc' => home_url('/solutions/process-automation/'),
                'lastmod' => date('c'),
                'changefreq' => 'weekly',
                'priority' => '0.9'
            ),
            // Blog Section
            array(
                'loc' => home_url('/blog/'),
                'lastmod' => date('c'),
                'changefreq' => 'daily',
                'priority' => '0.8'
            )
        );
        
        foreach ($urls as $url_data) {
            $xml .= '<url>' . "\n";
            $xml .= '<loc>' . esc_url($url_data['loc']) . '</loc>' . "\n";
            $xml .= '<lastmod>' . $url_data['lastmod'] . '</lastmod>' . "\n";
            $xml .= '<changefreq>' . $url_data['changefreq'] . '</changefreq>' . "\n";
            $xml .= '<priority>' . $url_data['priority'] . '</priority>' . "\n";
            
            // Add hreflang for Hebrew/English if needed
            $xml .= '<xhtml:link rel="alternate" hreflang="he-IL" href="' . esc_url($url_data['loc']) . '"/>' . "\n";
            
            $xml .= '</url>' . "\n";
        }
        
        $xml .= '</urlset>';
        return $xml;
    }
    
    /**
     * Customize posts sitemap
     */
    public static function customize_posts_sitemap($args) {
        $args['posts_per_page'] = 2000;
        $args['no_found_rows'] = false;
        return $args;
    }
    
    /**
     * Customize pages sitemap
     */
    public static function customize_pages_sitemap($args) {
        $args['posts_per_page'] = 500;
        $args['meta_query'] = array(
            array(
                'key' => '_yoast_wpseo_meta-robots-noindex',
                'value' => '1',
                'compare' => '!='
            )
        );
        return $args;
    }
    
    /**
     * Enhance post entries with custom priorities
     */
    public static function enhance_post_entries($sitemap_entry, $post, $post_type) {
        // Set priorities based on content importance
        if ($post_type === 'post') {
            $sitemap_entry['priority'] = 0.7;
            
            // Higher priority for recent posts
            $post_age = (time() - strtotime($post->post_date)) / (60 * 60 * 24);
            if ($post_age < 30) {
                $sitemap_entry['priority'] = 0.8;
            }
            
            // Higher priority for posts with SEO keywords in title
            $seo_keywords = array('חתימה דיגיטלית', 'ביטוח', 'אוטומציה', 'מסמכים');
            foreach ($seo_keywords as $keyword) {
                if (strpos($post->post_title, $keyword) !== false) {
                    $sitemap_entry['priority'] = 0.8;
                    break;
                }
            }
        }
        
        return $sitemap_entry;
    }
    
    /**
     * Enhance homepage entry
     */
    public static function enhance_homepage_entry($sitemap_entry) {
        $sitemap_entry['priority'] = 1.0;
        $sitemap_entry['changefreq'] = 'daily';
        return $sitemap_entry;
    }
    
    /**
     * Register news sitemap for fresh content
     */
    public static function register_news_sitemap($sitemaps) {
        if (!class_exists('WP_Sitemaps_Posts')) {
            return;
        }
        
        // Add news sitemap rewrite
        add_rewrite_rule(
            '^news-sitemap\.xml$',
            'index.php?docsflow_news_sitemap=1',
            'top'
        );
        
        // Handle news sitemap
        add_action('template_redirect', array(__CLASS__, 'handle_news_sitemap'));
    }
    
    /**
     * Handle news sitemap request
     */
    public static function handle_news_sitemap() {
        if (get_query_var('docsflow_news_sitemap')) {
            header('Content-Type: application/xml; charset=UTF-8');
            echo self::generate_news_sitemap();
            exit;
        }
    }
    
    /**
     * Generate Google News sitemap
     */
    public static function generate_news_sitemap() {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">' . "\n";
        
        // Get recent posts (last 2 days for news)
        $recent_posts = get_posts(array(
            'numberposts' => 10,
            'date_query' => array(
                array(
                    'after' => '2 days ago'
                )
            ),
            'post_status' => 'publish'
        ));
        
        foreach ($recent_posts as $post) {
            $xml .= '<url>' . "\n";
            $xml .= '<loc>' . get_permalink($post->ID) . '</loc>' . "\n";
            $xml .= '<news:news>' . "\n";
            $xml .= '<news:publication>' . "\n";
            $xml .= '<news:name>DocsFlow Blog</news:name>' . "\n";
            $xml .= '<news:language>he</news:language>' . "\n";
            $xml .= '</news:publication>' . "\n";
            $xml .= '<news:publication_date>' . get_the_date('c', $post->ID) . '</news:publication_date>' . "\n";
            $xml .= '<news:title><![CDATA[' . get_the_title($post->ID) . ']]></news:title>' . "\n";
            $xml .= '<news:keywords>סוכני ביטוח, חתימה דיגיטלית, ניהול מסמכים</news:keywords>' . "\n";
            $xml .= '</news:news>' . "\n";
            $xml .= '</url>' . "\n";
        }
        
        $xml .= '</urlset>';
        return $xml;
    }
    
    /**
     * Ping search engines when content is updated
     */
    public static function ping_search_engines($post_id, $post) {
        // Only ping for published posts/pages
        if ($post->post_status !== 'publish') {
            return;
        }
        
        // Ping Google
        $google_ping_url = 'http://www.google.com/ping?sitemap=' . urlencode(home_url('/sitemap.xml'));
        wp_remote_get($google_ping_url, array('timeout' => 5));
        
        // Ping Bing
        $bing_ping_url = 'http://www.bing.com/ping?sitemap=' . urlencode(home_url('/sitemap.xml'));
        wp_remote_get($bing_ping_url, array('timeout' => 5));
        
        // Update sitemap cache timestamp
        update_option('docsflow_sitemap_updated', time());
    }
}

// Initialize sitemap enhancements
DocsFlow_Sitemap_Enhancements::init();

/**
 * Flush rewrite rules on theme activation
 */
function docsflow_flush_rewrite_rules() {
    DocsFlow_Sitemap_Enhancements::add_custom_sitemaps();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'docsflow_flush_rewrite_rules');