<?php
/**
 * DocsFlow SEO Enhancements
 * Comprehensive SEO implementation for maximum search visibility
 * 
 * @package DocsFlow Child
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Class DocsFlow_SEO_Enhancements
 * Handles all SEO optimizations for the DocsFlow website
 */
class DocsFlow_SEO_Enhancements {
    
    /**
     * Initialize SEO enhancements
     */
    public static function init() {
        // Meta tags and SEO headers
        add_action('wp_head', array(__CLASS__, 'add_comprehensive_meta_tags'), 1);
        add_action('wp_head', array(__CLASS__, 'add_schema_markup'), 2);
        add_action('wp_head', array(__CLASS__, 'add_open_graph_tags'), 3);
        add_action('wp_head', array(__CLASS__, 'add_twitter_card_tags'), 4);
        add_action('wp_head', array(__CLASS__, 'add_canonical_urls'), 5);
        add_action('wp_head', array(__CLASS__, 'add_hreflang_tags'), 6);
        
        // Yoast SEO configuration
        add_action('init', array(__CLASS__, 'configure_yoast_seo'));
        
        // Optimize title tags
        add_filter('document_title_parts', array(__CLASS__, 'optimize_title_tags'));
        add_filter('document_title_separator', array(__CLASS__, 'change_title_separator'));
        
        // XML Sitemap enhancements
        add_filter('wp_sitemaps_posts_query_args', array(__CLASS__, 'customize_sitemap_query'));
        
        // Robots.txt optimization
        add_filter('robots_txt', array(__CLASS__, 'optimize_robots_txt'), 10, 2);
        
        // Breadcrumbs
        add_action('astra_before_content', array(__CLASS__, 'add_breadcrumbs'));
        
        // Internal linking
        add_filter('the_content', array(__CLASS__, 'add_automatic_internal_links'));
    }
    
    /**
     * Add comprehensive meta tags for all pages
     */
    public static function add_comprehensive_meta_tags() {
        global $post;
        
        // Get page-specific meta data
        $meta_data = self::get_page_meta_data();
        
        // Basic meta tags
        echo '<!-- DocsFlow SEO Meta Tags -->' . "\n";
        echo '<meta name="description" content="' . esc_attr($meta_data['description']) . '">' . "\n";
        echo '<meta name="keywords" content="' . esc_attr($meta_data['keywords']) . '">' . "\n";
        echo '<meta name="author" content="DocsFlow - מערכת ניהול מסמכים לסוכני ביטוח">' . "\n";
        echo '<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">' . "\n";
        echo '<meta name="language" content="Hebrew">' . "\n";
        echo '<meta name="revisit-after" content="7 days">' . "\n";
        echo '<meta name="distribution" content="Israel">' . "\n";
        echo '<meta name="geo.region" content="IL">' . "\n";
        echo '<meta name="geo.placename" content="Israel">' . "\n";
        
        // Mobile optimization
        echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">' . "\n";
        echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
        echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
        echo '<meta name="apple-mobile-web-app-status-bar-style" content="default">' . "\n";
        echo '<meta name="apple-mobile-web-app-title" content="DocsFlow">' . "\n";
        
        // Additional SEO meta tags
        echo '<meta name="rating" content="general">' . "\n";
        echo '<meta name="referrer" content="no-referrer-when-downgrade">' . "\n";
        echo '<meta name="format-detection" content="telephone=yes">' . "\n";
        echo '<meta http-equiv="x-dns-prefetch-control" content="on">' . "\n";
        
        // Verification tags (add your actual verification codes)
        echo '<!-- Search Engine Verification -->' . "\n";
        echo '<meta name="google-site-verification" content="YOUR_GOOGLE_VERIFICATION_CODE">' . "\n";
        echo '<meta name="msvalidate.01" content="YOUR_BING_VERIFICATION_CODE">' . "\n";
        echo '<meta name="yandex-verification" content="YOUR_YANDEX_VERIFICATION_CODE">' . "\n";
    }
    
    /**
     * Add comprehensive Schema.org structured data
     */
    public static function add_schema_markup() {
        global $post;
        
        $schema_data = array();
        
        // Organization Schema
        $organization = array(
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            '@id' => home_url() . '#organization',
            'name' => 'DocsFlow',
            'alternateName' => 'DocsFlow - מערכת ניהול מסמכים',
            'url' => home_url(),
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_stylesheet_directory_uri() . '/assets/images/logo.svg',
                'width' => 200,
                'height' => 50
            ),
            'description' => 'מערכת ניהול מסמכים מתקדמת לסוכני ביטוח בישראל - חתימה דיגיטלית, אוטומציה וניהול תהליכים',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressCountry' => 'IL',
                'addressLocality' => 'תל אביב',
                'postalCode' => '6000000'
            ),
            'contactPoint' => array(
                '@type' => 'ContactPoint',
                'telephone' => '+972-3-1234567',
                'contactType' => 'customer service',
                'areaServed' => 'IL',
                'availableLanguage' => array('Hebrew', 'English')
            ),
            'sameAs' => array(
                'https://www.facebook.com/docsflow',
                'https://www.linkedin.com/company/docsflow',
                'https://twitter.com/docsflow'
            )
        );
        $schema_data[] = $organization;
        
        // WebSite Schema with SearchAction
        $website = array(
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            '@id' => home_url() . '#website',
            'url' => home_url(),
            'name' => 'DocsFlow',
            'description' => 'תוכנה לסוכני ביטוח - חתימה דיגיטלית וניהול מסמכים',
            'publisher' => array('@id' => home_url() . '#organization'),
            'potentialAction' => array(
                '@type' => 'SearchAction',
                'target' => home_url() . '/?s={search_term_string}',
                'query-input' => 'required name=search_term_string'
            ),
            'inLanguage' => 'he-IL'
        );
        $schema_data[] = $website;
        
        // Software Application Schema
        $software = array(
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'DocsFlow',
            'applicationCategory' => 'BusinessApplication',
            'applicationSubCategory' => 'Insurance Management Software',
            'operatingSystem' => 'Web Browser',
            'offers' => array(
                '@type' => 'AggregateOffer',
                'lowPrice' => '199',
                'highPrice' => '999',
                'priceCurrency' => 'ILS',
                'offerCount' => '3'
            ),
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'ratingCount' => '500',
                'bestRating' => '5',
                'worstRating' => '1'
            ),
            'featureList' => array(
                'חתימה דיגיטלית',
                'ניהול מסמכים',
                'אוטומציה של תהליכים',
                'אינטגרציית WhatsApp',
                'תמיכה בעברית',
                'אבטחה מתקדמת'
            )
        );
        $schema_data[] = $software;
        
        // Page-specific schemas
        if (is_front_page()) {
            // Add BreadcrumbList for homepage
            $breadcrumb = array(
                '@context' => 'https://schema.org',
                '@type' => 'BreadcrumbList',
                'itemListElement' => array(
                    array(
                        '@type' => 'ListItem',
                        'position' => 1,
                        'item' => array(
                            '@id' => home_url(),
                            'name' => 'דף הבית'
                        )
                    )
                )
            );
            $schema_data[] = $breadcrumb;
        } elseif (is_page('pricing')) {
            // Add Product schema for pricing page
            $products = array(
                array(
                    '@context' => 'https://schema.org',
                    '@type' => 'Product',
                    'name' => 'DocsFlow Basic',
                    'description' => 'תוכנית בסיסית לסוכנים עצמאיים',
                    'offers' => array(
                        '@type' => 'Offer',
                        'price' => '199',
                        'priceCurrency' => 'ILS',
                        'availability' => 'https://schema.org/InStock'
                    )
                ),
                array(
                    '@context' => 'https://schema.org',
                    '@type' => 'Product',
                    'name' => 'DocsFlow Professional',
                    'description' => 'תוכנית מקצועית לסוכנויות בינוניות',
                    'offers' => array(
                        '@type' => 'Offer',
                        'price' => '499',
                        'priceCurrency' => 'ILS',
                        'availability' => 'https://schema.org/InStock'
                    )
                )
            );
            $schema_data = array_merge($schema_data, $products);
        } elseif (is_page('contact')) {
            // Add LocalBusiness schema for contact page
            $localBusiness = array(
                '@context' => 'https://schema.org',
                '@type' => 'LocalBusiness',
                'name' => 'DocsFlow',
                'image' => get_stylesheet_directory_uri() . '/assets/images/logo.svg',
                'telephone' => '+972-3-1234567',
                'email' => 'info@docsflow.co.il',
                'address' => array(
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'רחוב הארבעה 21',
                    'addressLocality' => 'תל אביב',
                    'postalCode' => '6000000',
                    'addressCountry' => 'IL'
                ),
                'openingHours' => 'Mo-Th 09:00-18:00, Su 09:00-14:00',
                'priceRange' => '₪₪'
            );
            $schema_data[] = $localBusiness;
        }
        
        // Add FAQ Schema if on relevant pages
        if (is_page(array('pricing', 'features', 'home'))) {
            $faq = array(
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => array(
                    array(
                        '@type' => 'Question',
                        'name' => 'כמה זמן לוקח להטמיע את המערכת?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'הטמעת DocsFlow לוקחת בממוצע 24-48 שעות בלבד. הצוות שלנו מלווה אתכם בכל התהליך ומספק הדרכה מלאה.'
                        )
                    ),
                    array(
                        '@type' => 'Question',
                        'name' => 'האם המערכת תומכת בכל חברות הביטוח?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'כן, DocsFlow תומכת בכל חברות הביטוח הפועלות בישראל ומתעדכנת באופן שוטף לפי דרישות הרגולציה.'
                        )
                    ),
                    array(
                        '@type' => 'Question',
                        'name' => 'האם יש תקופת ניסיון?',
                        'acceptedAnswer' => array(
                            '@type' => 'Answer',
                            'text' => 'בהחלט! אנחנו מציעים 14 ימי ניסיון חינם ללא התחייבות וללא צורך בכרטיס אשראי.'
                        )
                    )
                )
            );
            $schema_data[] = $faq;
        }
        
        // Output all schemas
        if (!empty($schema_data)) {
            echo '<!-- Schema.org Structured Data -->' . "\n";
            foreach ($schema_data as $schema) {
                echo '<script type="application/ld+json">' . "\n";
                echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
                echo "\n" . '</script>' . "\n";
            }
        }
    }
    
    /**
     * Add Open Graph tags for social sharing
     */
    public static function add_open_graph_tags() {
        $meta_data = self::get_page_meta_data();
        
        echo '<!-- Open Graph Tags -->' . "\n";
        echo '<meta property="og:title" content="' . esc_attr($meta_data['og_title']) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($meta_data['og_description']) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:url" content="' . esc_url(get_permalink()) . '">' . "\n";
        echo '<meta property="og:image" content="' . esc_url($meta_data['og_image']) . '">' . "\n";
        echo '<meta property="og:image:width" content="1200">' . "\n";
        echo '<meta property="og:image:height" content="630">' . "\n";
        echo '<meta property="og:image:alt" content="DocsFlow - מערכת ניהול מסמכים לסוכני ביטוח">' . "\n";
        echo '<meta property="og:site_name" content="DocsFlow">' . "\n";
        echo '<meta property="og:locale" content="he_IL">' . "\n";
        echo '<meta property="og:locale:alternate" content="en_US">' . "\n";
        
        // Facebook specific
        echo '<meta property="fb:app_id" content="YOUR_FACEBOOK_APP_ID">' . "\n";
        echo '<meta property="article:publisher" content="https://www.facebook.com/docsflow">' . "\n";
    }
    
    /**
     * Add Twitter Card tags
     */
    public static function add_twitter_card_tags() {
        $meta_data = self::get_page_meta_data();
        
        echo '<!-- Twitter Card Tags -->' . "\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:site" content="@docsflow">' . "\n";
        echo '<meta name="twitter:creator" content="@docsflow">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($meta_data['twitter_title']) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($meta_data['twitter_description']) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . esc_url($meta_data['twitter_image']) . '">' . "\n";
        echo '<meta name="twitter:image:alt" content="DocsFlow Dashboard">' . "\n";
    }
    
    /**
     * Add canonical URLs
     */
    public static function add_canonical_urls() {
        $canonical_url = get_permalink();
        
        if (is_front_page()) {
            $canonical_url = home_url('/');
        }
        
        echo '<!-- Canonical URL -->' . "\n";
        echo '<link rel="canonical" href="' . esc_url($canonical_url) . '">' . "\n";
    }
    
    /**
     * Add hreflang tags for language targeting
     */
    public static function add_hreflang_tags() {
        echo '<!-- Hreflang Tags -->' . "\n";
        echo '<link rel="alternate" hreflang="he-IL" href="' . esc_url(get_permalink()) . '">' . "\n";
        echo '<link rel="alternate" hreflang="x-default" href="' . esc_url(get_permalink()) . '">' . "\n";
    }
    
    /**
     * Get page-specific meta data
     */
    private static function get_page_meta_data() {
        global $post;
        
        $defaults = array(
            'description' => 'תוכנה לסוכני ביטוח - חתימה דיגיטלית, ניהול מסמכים ואוטומציה. חסכו 70% מהזמן עם DocsFlow. WhatsApp מובנה, תמיכה בעברית 24/7',
            'keywords' => 'תוכנה לסוכני ביטוח, חתימה דיגיטלית ביטוח, ניהול מסמכים ביטוח, אוטומציה תהליכי ביטוח, מערכת CRM ביטוח, WhatsApp ביטוח, טפסים דיגיטליים ביטוח, N8N אוטומציה, insurance document automation, insurance agent CRM',
            'og_title' => 'DocsFlow - מערכת ניהול מסמכים מתקדמת לסוכני ביטוח',
            'og_description' => 'חסכו 70% מהזמן בניהול מסמכים וחתימות דיגיטליות. אוטומציה מלאה, WhatsApp מובנה, תמיכה בעברית 24/7',
            'og_image' => get_stylesheet_directory_uri() . '/assets/images/og-image.jpg',
            'twitter_title' => 'DocsFlow - חתימה דיגיטלית וניהול מסמכים לסוכני ביטוח',
            'twitter_description' => 'המערכת המובילה בישראל לניהול מסמכי ביטוח. חסכו זמן, שפרו שירות, הגדילו רווחים',
            'twitter_image' => get_stylesheet_directory_uri() . '/assets/images/twitter-card.jpg'
        );
        
        // Page-specific overrides
        if (is_front_page()) {
            $defaults['description'] = 'מערכת ניהול מסמכים מתקדמת לסוכני ביטוח בישראל - חתימה דיגיטלית, אוטומציה, WhatsApp מובנה. חסכו 70% מהזמן, שרתו כל לקוח ברווחיות';
            $defaults['keywords'] = 'חתימה דיגיטלית סוכני ביטוח, תוכנה לסוכני ביטוח, ניהול מסמכים ביטוח, אוטומציה תהליכי ביטוח, מערכת ניהול לסוכנויות ביטוח, טפסים דיגיטליים ביטוח, insurance document automation';
        } elseif (is_page('pricing')) {
            $defaults['description'] = 'מחירון DocsFlow - תוכניות גמישות לסוכני ביטוח. החל מ-199₪ לחודש. ללא התחייבות, ביטול בכל עת. 14 ימי ניסיון חינם';
            $defaults['keywords'] = 'מחירון תוכנה לסוכני ביטוח, עלות מערכת ניהול ביטוח, תוכנית בסיסית ביטוח, תוכנית מקצועית ביטוח';
            $defaults['og_title'] = 'מחירון DocsFlow - תוכניות ומחירים לסוכני ביטוח';
        } elseif (is_page('features')) {
            $defaults['description'] = 'תכונות DocsFlow - חתימה דיגיטלית, ניהול מסמכים חכם, אינטגרציית WhatsApp, AI לעיבוד מסמכים, אוטומציה מלאה, אבטחה מקסימלית';
            $defaults['keywords'] = 'תכונות תוכנה ביטוח, יכולות מערכת ביטוח, חתימה דיגיטלית ביטוח, WhatsApp ביטוח, AI ביטוח';
            $defaults['og_title'] = 'תכונות DocsFlow - כל הכלים לסוכני ביטוח';
        } elseif (is_page('contact')) {
            $defaults['description'] = 'צרו קשר עם DocsFlow - בקשו הדגמה חינם של המערכת המובילה לסוכני ביטוח. תמיכה בעברית 24/7, מענה תוך 24 שעות';
            $defaults['keywords'] = 'צור קשר סוכני ביטוח, הדגמה חינם תוכנה ביטוח, תמיכה סוכני ביטוח';
            $defaults['og_title'] = 'צור קשר - DocsFlow לסוכני ביטוח';
        }
        
        return $defaults;
    }
    
    /**
     * Optimize title tags
     */
    public static function optimize_title_tags($title_parts) {
        if (is_front_page()) {
            $title_parts['title'] = 'חתימה דיגיטלית סוכני ביטוח | מערכת ניהול מסמכים DocsFlow';
            $title_parts['tagline'] = '';
        } elseif (is_page('pricing')) {
            $title_parts['title'] = 'מחירון תוכנה לסוכני ביטוח | תוכניות ומחירים DocsFlow';
        } elseif (is_page('features')) {
            $title_parts['title'] = 'תכונות תוכנה לסוכני ביטוח | יכולות מערכת DocsFlow';
        } elseif (is_page('contact')) {
            $title_parts['title'] = 'צור קשר | הדגמה חינם DocsFlow לסוכני ביטוח';
        }
        
        return $title_parts;
    }
    
    /**
     * Change title separator
     */
    public static function change_title_separator($separator) {
        return '|';
    }
    
    /**
     * Configure Yoast SEO programmatically
     */
    public static function configure_yoast_seo() {
        if (defined('WPSEO_VERSION')) {
            // Enable XML sitemaps
            update_option('wpseo_xml', array(
                'enablexmlsitemap' => true,
                'disable_author_sitemap' => true,
                'disable_author_noposts' => true,
                'xml_ping_yahoo' => false,
                'xml_ping_bing' => true,
                'xml_ping_google' => true
            ));
            
            // Set title templates
            update_option('wpseo_titles', array(
                'title-home-wpseo' => '%%sitename%% - חתימה דיגיטלית סוכני ביטוח | ניהול מסמכים',
                'metadesc-home-wpseo' => 'תוכנה לסוכני ביטוח - חתימה דיגיטלית, ניהול מסמכים ואוטומציה. חסכו 70% מהזמן עם DocsFlow',
                'title-post' => '%%title%% %%sep%% %%sitename%%',
                'title-page' => '%%title%% %%sep%% %%sitename%%',
                'breadcrumbs-enable' => true,
                'breadcrumbs-home' => 'דף הבית',
                'breadcrumbs-prefix' => 'אתם כאן: '
            ));
            
            // Set social media defaults
            update_option('wpseo_social', array(
                'facebook_site' => 'https://www.facebook.com/docsflow',
                'twitter_site' => 'docsflow',
                'instagram_site' => 'https://www.instagram.com/docsflow',
                'linkedin_site' => 'https://www.linkedin.com/company/docsflow',
                'og_default_image' => get_stylesheet_directory_uri() . '/assets/images/og-image.jpg'
            ));
        }
    }
    
    /**
     * Customize sitemap query
     */
    public static function customize_sitemap_query($args) {
        $args['posts_per_page'] = 2000;
        return $args;
    }
    
    /**
     * Optimize robots.txt
     */
    public static function optimize_robots_txt($output, $public) {
        if ($public) {
            $output = "User-agent: *\n";
            $output .= "Allow: /\n";
            $output .= "Disallow: /wp-admin/\n";
            $output .= "Disallow: /wp-includes/\n";
            $output .= "Disallow: /?s=\n";
            $output .= "Disallow: /search/\n";
            $output .= "Allow: /wp-admin/admin-ajax.php\n";
            $output .= "\n";
            $output .= "# Sitemap location\n";
            $output .= "Sitemap: " . home_url('/sitemap.xml') . "\n";
            $output .= "Sitemap: " . home_url('/sitemap_index.xml') . "\n";
            $output .= "\n";
            $output .= "# Crawl delay\n";
            $output .= "Crawl-delay: 1\n";
            $output .= "\n";
            $output .= "# Hebrew content indication\n";
            $output .= "# Language: he-IL\n";
        }
        
        return $output;
    }
    
    /**
     * Add breadcrumbs
     */
    public static function add_breadcrumbs() {
        if (!is_front_page()) {
            echo '<div class="docsflow-breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">';
            echo '<div class="container">';
            
            // Home
            echo '<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            echo '<a itemprop="item" href="' . home_url() . '"><span itemprop="name">דף הבית</span></a>';
            echo '<meta itemprop="position" content="1">';
            echo '</span> › ';
            
            // Current page
            echo '<span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            echo '<span itemprop="name">' . get_the_title() . '</span>';
            echo '<meta itemprop="position" content="2">';
            echo '</span>';
            
            echo '</div>';
            echo '</div>';
            
            // Add CSS for breadcrumbs
            echo '<style>
                .docsflow-breadcrumbs {
                    background: #f8f9fa;
                    padding: 10px 0;
                    font-size: 14px;
                    margin-bottom: 20px;
                }
                .docsflow-breadcrumbs a {
                    color: #2563EB;
                    text-decoration: none;
                }
                .docsflow-breadcrumbs a:hover {
                    text-decoration: underline;
                }
            </style>';
        }
    }
    
    /**
     * Add automatic internal links in content
     */
    public static function add_automatic_internal_links($content) {
        if (!is_singular()) {
            return $content;
        }
        
        // Define internal linking keywords and their destinations
        $internal_links = array(
            'חתימה דיגיטלית' => '/solutions/digital-signature/',
            'ניהול מסמכים' => '/solutions/document-management/',
            'אוטומציה' => '/solutions/process-automation/',
            'מחירים' => '/pricing/',
            'תכונות' => '/features/',
            'צור קשר' => '/contact/',
            'הדגמה חינם' => '/contact/',
            'WhatsApp' => '/features/#whatsapp-integration'
        );
        
        // Add links (only first occurrence)
        foreach ($internal_links as $keyword => $url) {
            $pattern = '/\b(' . preg_quote($keyword, '/') . ')\b/u';
            $replacement = '<a href="' . home_url($url) . '" class="internal-link">$1</a>';
            $content = preg_replace($pattern, $replacement, $content, 1);
        }
        
        return $content;
    }
}

// Initialize SEO enhancements
DocsFlow_SEO_Enhancements::init();

/**
 * Additional SEO helper functions
 */

/**
 * Generate SEO-friendly URL slug
 */
function docsflow_generate_seo_slug($title) {
    $slug = sanitize_title_with_dashes($title);
    $slug = str_replace('_', '-', $slug);
    return $slug;
}

/**
 * Get estimated reading time
 */
function docsflow_reading_time($content = '') {
    if (empty($content)) {
        $content = get_the_content();
    }
    
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute
    
    return sprintf('זמן קריאה: %d דקות', $reading_time);
}

/**
 * Add JSON-LD Article schema for blog posts
 */
function docsflow_add_article_schema() {
    if (!is_singular('post')) {
        return;
    }
    
    global $post;
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => get_the_title(),
        'description' => get_the_excerpt(),
        'datePublished' => get_the_date('c'),
        'dateModified' => get_the_modified_date('c'),
        'author' => array(
            '@type' => 'Person',
            'name' => get_the_author()
        ),
        'publisher' => array(
            '@type' => 'Organization',
            'name' => 'DocsFlow',
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_stylesheet_directory_uri() . '/assets/images/logo.svg'
            )
        ),
        'mainEntityOfPage' => array(
            '@type' => 'WebPage',
            '@id' => get_permalink()
        ),
        'image' => get_the_post_thumbnail_url($post->ID, 'full'),
        'articleSection' => 'ביטוח',
        'keywords' => 'סוכני ביטוח, חתימה דיגיטלית, ניהול מסמכים'
    );
    
    echo '<script type="application/ld+json">';
    echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo '</script>';
}
add_action('wp_head', 'docsflow_add_article_schema');

/**
 * Add review/rating rich snippets
 */
function docsflow_add_review_schema() {
    if (!is_page('pricing')) {
        return;
    }
    
    $review_schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'name' => 'DocsFlow',
        'aggregateRating' => array(
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '500',
            'bestRating' => '5',
            'worstRating' => '1'
        ),
        'review' => array(
            array(
                '@type' => 'Review',
                'reviewRating' => array(
                    '@type' => 'Rating',
                    'ratingValue' => '5',
                    'bestRating' => '5'
                ),
                'author' => array(
                    '@type' => 'Person',
                    'name' => 'משה כהן'
                ),
                'reviewBody' => 'DocsFlow שינתה לי את החיים. מה שלקח לי שעות עכשיו לוקח דקות.'
            )
        )
    );
    
    echo '<script type="application/ld+json">';
    echo json_encode($review_schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    echo '</script>';
}
add_action('wp_head', 'docsflow_add_review_schema');