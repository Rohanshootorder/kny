<?php
/**
 * KNY Theme functions and definitions
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

define('KNY_THEME_VERSION', '1.0.0');
define('KNY_THEME_DIR', get_template_directory());
define('KNY_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function kny_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 86,
        'width' => 110,
        'flex-width' => true,
        'flex-height' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu'          => __('Primary Navigation Menu', 'kny-theme'),
        'footer-accommodations' => __('Footer Accommodations Menu', 'kny-theme'),
        'footer-quick-links'    => __('Footer Quick Links Menu', 'kny-theme'),
        'footer-legal'          => __('Footer Legal Links Menu', 'kny-theme'),
    ));
}
add_action('after_setup_theme', 'kny_theme_setup');

/**
 * Enqueue scripts and styles
 */
function kny_theme_scripts()
{
    // Google Fonts
    wp_enqueue_style(
        'kny-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'kny-main-style',
        KNY_THEME_URI . '/assets/css/main.css',
        array('kny-google-fonts'),
        KNY_THEME_VERSION
    );

    // Theme style.css fallback
    wp_enqueue_style(
        'kny-theme-style',
        get_stylesheet_uri(),
        array('kny-main-style'),
        KNY_THEME_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'kny-main-js',
        KNY_THEME_URI . '/assets/js/main.js',
        array(),
        KNY_THEME_VERSION,
        true
    );

    wp_localize_script('kny-main-js', 'knyAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('kny_booking_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'kny_theme_scripts');

/**
 * Handle Booking Enquiry AJAX Submission
 */
function kny_ajax_booking_enquiry()
{
    check_ajax_referer('kny_booking_nonce', 'nonce');

    $full_name     = sanitize_text_field(wp_unslash($_POST['full_name'] ?? ''));
    $email         = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone         = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $guests        = sanitize_text_field(wp_unslash($_POST['guests'] ?? ''));
    $arrival_date  = sanitize_text_field(wp_unslash($_POST['arrival_date'] ?? ''));
    $depart_date   = sanitize_text_field(wp_unslash($_POST['departure_date'] ?? ''));
    $stay_nature   = sanitize_text_field(wp_unslash($_POST['nature_of_stay'] ?? ''));
    $requirements  = sanitize_textarea_field(wp_unslash($_POST['requirements'] ?? ''));
    $room_title    = sanitize_text_field(wp_unslash($_POST['room_title'] ?? ''));

    if (empty($full_name) || empty($email) || empty($phone)) {
        wp_send_json_error(array('message' => __('Please fill in all required fields.', 'kny-theme')));
    }

    // Save as booking enquiry post or send notification email
    $to = get_option('admin_email');
    $subject = sprintf('[KNY Stay] Direct Enquiry for %s from %s', $room_title ? $room_title : 'Residence', $full_name);
    $body = "New Booking Enquiry:\n\n"
          . "Name: {$full_name}\n"
          . "Email: {$email}\n"
          . "Phone: {$phone}\n"
          . "Room: {$room_title}\n"
          . "Guests: {$guests}\n"
          . "Arrival: {$arrival_date}\n"
          . "Departure: {$depart_date}\n"
          . "Nature of Stay: {$stay_nature}\n\n"
          . "Requirements:\n{$requirements}\n";

    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: KNY Stay Reservations <no-reply@kny.local>');
    wp_mail($to, $subject, $body, $headers);

    wp_send_json_success(array('message' => __('Your reservation enquiry has been sent to our reservations concierge. A priority callback SLA of 15 minutes applies.', 'kny-theme')));
}
add_action('wp_ajax_kny_submit_booking_enquiry', 'kny_ajax_booking_enquiry');
add_action('wp_ajax_nopriv_kny_submit_booking_enquiry', 'kny_ajax_booking_enquiry');

/**
 * Helper to get image URL from SCF (Attachment ID, Image Array, direct URL, or theme fallback filename)
 */
function kny_get_image_url($image_input)
{
    if (empty($image_input)) {
        return '';
    }

    // 1. If it's a numeric attachment ID from WP Media Library
    if (is_numeric($image_input)) {
        $url = wp_get_attachment_image_url(intval($image_input), 'full');
        if ($url) {
            return $url;
        }
    }

    // 2. If it's an ACF/SCF Image Array
    if (is_array($image_input)) {
        if (!empty($image_input['url'])) {
            return $image_input['url'];
        }
    }

    // 3. If it's a direct URL (http:// or https://)
    if (is_string($image_input) && filter_var($image_input, FILTER_VALIDATE_URL)) {
        return $image_input;
    }

    // 4. Fallback to theme bundled image asset
    if (is_string($image_input)) {
        return KNY_THEME_URI . '/assets/images/' . ltrim($image_input, '/');
    }

    return '';
}

/**
 * Helper to render SVG icon inline from SCF (Media Library Upload or theme icons)
 */
function kny_render_icon($icon_input, $custom_class = '')
{
    if (empty($icon_input)) {
        return '';
    }

    // 1. If it's a numeric attachment ID from WP Media Library
    if (is_numeric($icon_input)) {
        $attached_file = get_attached_file(intval($icon_input));
        if ($attached_file && file_exists($attached_file)) {
            $svg = file_get_contents($attached_file);
            if (!empty($custom_class)) {
                $svg = preg_replace('/<svg /', '<svg class="' . esc_attr($custom_class) . '" ', $svg, 1);
            }
            return $svg;
        }
    }

    // 2. If it's an ACF/SCF File/Image Array
    if (is_array($icon_input)) {
        if (!empty($icon_input['ID'])) {
            $attached_file = get_attached_file($icon_input['ID']);
            if ($attached_file && file_exists($attached_file)) {
                $svg = file_get_contents($attached_file);
                if (!empty($custom_class)) {
                    $svg = preg_replace('/<svg /', '<svg class="' . esc_attr($custom_class) . '" ', $svg, 1);
                }
                return $svg;
            }
        }
        if (!empty($icon_input['url'])) {
            return '<img src="' . esc_url($icon_input['url']) . '" class="' . esc_attr($custom_class) . '" alt="" width="20" height="20">';
        }
    }

    // 3. If it's an absolute path to a file
    if (is_string($icon_input) && file_exists($icon_input)) {
        $svg = file_get_contents($icon_input);
        if (!empty($custom_class)) {
            $svg = preg_replace('/<svg /', '<svg class="' . esc_attr($custom_class) . '" ', $svg, 1);
        }
        return $svg;
    }

    // 4. If it's already an SVG XML string (<svg ...)
    if (is_string($icon_input) && strpos($icon_input, '<svg') !== false) {
        if (!empty($custom_class)) {
            return preg_replace('/<svg /', '<svg class="' . esc_attr($custom_class) . '" ', $icon_input, 1);
        }
        return $icon_input;
    }

    // 5. If it's a remote URL
    if (is_string($icon_input) && filter_var($icon_input, FILTER_VALIDATE_URL)) {
        return '<img src="' . esc_url($icon_input) . '" class="' . esc_attr($custom_class) . '" alt="" width="20" height="20">';
    }

    // 6. Otherwise look in assets/icons/
    $icon_file = $icon_input;
    if (substr($icon_file, -4) !== '.svg') {
        $icon_file .= '.svg';
    }

    $filepath = KNY_THEME_DIR . '/assets/icons/' . $icon_file;
    if (file_exists($filepath)) {
        $svg = file_get_contents($filepath);
        if (!empty($custom_class)) {
            $svg = preg_replace('/<svg /', '<svg class="' . esc_attr($custom_class) . '" ', $svg, 1);
        }
        return $svg;
    }

    return '';
}

/**
 * Custom Nav Walker to support dropdown chevrons & responsive submenus
 */
class KNY_Nav_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        if ($has_children) {
            $item_output .= ' <span class="dropdown-icon">' . kny_render_icon('Dropdown chevron.svg', 'kny-chevron') . '</span>';
        }

        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

add_action( 'template_redirect', function() {
    if ( is_page( 'hyderabad' ) || is_page( 10 ) ) {
        wp_safe_redirect( home_url( '/hyderabad-kondapur/' ), 301 );
        exit;
    }
} );

// ACF / SCF JSON Sync Points
add_filter( 'acf/settings/save_json', function( $path ) {
    return KNY_THEME_DIR . '/acf-json';
} );

add_filter( 'acf/settings/load_json', function( $paths ) {
    $paths[] = KNY_THEME_DIR . '/acf-json';
    return $paths;
} );

// Load SCF local field definitions
require_once KNY_THEME_DIR . '/inc/scf-fields.php';
require_once KNY_THEME_DIR . '/inc/seed-data.php';


/**
 * Enable SVG uploads in WordPress Media Library
 */
add_filter( 'upload_mimes', 'kny_enable_svg_uploads' );
function kny_enable_svg_uploads( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'kny_fix_svg_mime_type', 10, 5 );
function kny_fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {
    if ( ! empty( $data['ext'] ) && ! empty( $data['type'] ) ) {
        return $data;
    }
    $filetype = wp_check_filetype( $filename, $mimes );
    if ( 'svg' === $filetype['ext'] ) {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}

/**
 * Universal SEO Meta Tags, Open Graph & Schema.org Structured Data
 */
add_action( 'wp_head', 'kny_render_seo_meta_tags', 1 );
function kny_render_seo_meta_tags() {
    global $post;

    $site_name = get_bloginfo('name');
    $site_desc = get_bloginfo('description');
    $current_url = home_url( add_query_arg( array(), $GLOBALS['wp']->request ) );
    
    // Default SEO Fallbacks
    $meta_title = 'KNY Stay | Luxury Serviced Apartments HITEC City Hyderabad';
    $meta_desc = 'Curated 2 & 3 BHK luxury serviced apartments and executive suites in Kondapur, HITEC City, Hyderabad. Zero brokerage, GST compliant, 24/7 care.';
    $og_image = kny_get_image_url('hero-residence.png');

    // Page-specific SEO overrides from SCF
    if ( is_front_page() ) {
        $seo = function_exists('get_field') ? get_field('seo_settings') : array();
        if ( !empty($seo['meta_title']) ) {
            $meta_title = $seo['meta_title'];
        }
        if ( !empty($seo['meta_description']) ) {
            $meta_desc = $seo['meta_description'];
        }
        if ( !empty($seo['og_image']) ) {
            $og_image = kny_get_image_url($seo['og_image']);
        }
    } elseif ( is_singular() && !empty($post) ) {
        $meta_title = get_the_title() . ' | ' . $site_name;
        $excerpt = get_the_excerpt($post->ID);
        if ( !empty($excerpt) ) {
            $meta_desc = wp_strip_all_tags($excerpt);
        }
        if ( has_post_thumbnail($post->ID) ) {
            $og_image = get_the_post_thumbnail_url($post->ID, 'full');
        }
    }

    echo "\n<!-- Universal KNY SEO & Open Graph Meta Tags -->\n";
    echo '<meta name="description" content="' . esc_attr($meta_desc) . '">' . "\n";
    echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";
    echo '<link rel="canonical" href="' . esc_url($current_url) . '">' . "\n";

    // Open Graph / Facebook
    echo '<meta property="og:locale" content="en_US">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($meta_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($meta_desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($current_url) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($og_image) . '">' . "\n";
    echo '<meta property="og:image:width" content="1200">' . "\n";
    echo '<meta property="og:image:height" content="630">' . "\n";

    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($meta_title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($meta_desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($og_image) . '">' . "\n";

    // JSON-LD Structured Data Schema for LocalBusiness / LodgingBusiness
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'LodgingBusiness',
        'name' => 'KNY Stay Residences',
        'description' => $meta_desc,
        'url' => home_url('/'),
        'telephone' => '+918043694577',
        'priceRange' => 'INR 3800 - 15000',
        'image' => $og_image,
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => 'Temple Square Apartment, Sreebagh Colony, adjacent to Vijetha Super Market, near Google Office',
            'addressLocality' => 'Kondapur, HITEC City',
            'addressRegion' => 'Telangana',
            'postalCode' => '500084',
            'addressCountry' => 'IN'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => 17.4589,
            'longitude' => 78.3614
        )
    );
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    echo "<!-- /Universal KNY SEO & Open Graph Meta Tags -->\n\n";
}

/**
 * Enhance ACF/SCF Image uploader behavior in WP Admin:
 * Makes every image/icon field behave like Elementor:
 * - Clicking the image or the "Edit" button opens the WordPress Media Modal immediately
 *   allowing the user to either select from existing Media or upload a new file.
 */
add_action( 'admin_footer', 'kny_acf_media_modal_quick_picker' );
function kny_acf_media_modal_quick_picker() {
    ?>
    <script type="text/javascript">
    (function($) {
        if (typeof acf === 'undefined') return;

        // In ACF, the "Edit" button by default opens WordPress attachment edit screen (or modal details).
        // To make it behave like Elementor where clicking "Edit" opens the Media Library to replace/select:
        $(document).on('click', '.acf-image-uploader a[data-name="edit"], .acf-image-uploader .image-wrap', function(e) {
            // Allow native remove button to work
            if ($(e.target).closest('a[data-name="remove"]').length) {
                return;
            }

            e.preventDefault();
            e.stopPropagation();

            var $uploader = $(this).closest('.acf-image-uploader');
            var $field = $(this).closest('.acf-field');

            // Find the ACF field instance
            var field = acf.getField($field);

            // Open WordPress native Media Frame for selecting/uploading a replacement image
            var frame = wp.media({
                title: 'Select or Upload Media',
                button: {
                    text: 'Select'
                },
                multiple: false
            });

            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                if (field) {
                    field.val(attachment.id);
                } else {
                    $uploader.find('input[type="hidden"]').val(attachment.id).trigger('change');
                }
            });

            frame.open();
        });
    })(jQuery);
    </script>
    <style>
    /* Elementor-like UI styling for all ACF Image fields in WP Admin */
    .acf-image-uploader .image-wrap {
        cursor: pointer !important;
        position: relative !important;
        display: inline-block !important;
        border-radius: 8px !important;
        overflow: hidden !important;
        border: 2px solid transparent !important;
        transition: all 0.2s ease !important;
    }
    .acf-image-uploader .image-wrap:hover {
        border-color: #2271b1 !important;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.18) !important;
    }
    .acf-image-uploader .image-wrap::after {
        content: "✎ Select or Upload from Media" !important;
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        right: 0 !important;
        background: rgba(15, 23, 42, 0.85) !important;
        color: #ffffff !important;
        font-size: 11px !important;
        font-weight: 600 !important;
        text-align: center !important;
        padding: 6px 8px !important;
        opacity: 0 !important;
        transition: opacity 0.2s ease !important;
    }
    .acf-image-uploader .image-wrap:hover::after {
        opacity: 1 !important;
    }
    .acf-image-uploader .actions a[data-name="edit"] {
        cursor: pointer !important;
    }
    </style>
    <?php
}
