<?php
/**
 * Footer template
 *
 * Fully dynamic via SCF (Secure Custom Fields) and WordPress Nav Menus
 * Pixel-to-pixel Figma matching
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$footer = function_exists('get_field') ? get_field('footer_section') : array();

// Global Options from SCF
$foot_logo     = function_exists('get_field') ? (get_field('footer_logo', 'option') ?: (!empty($footer['logo']) ? $footer['logo'] : '')) : '';
$foot_tagline  = function_exists('get_field') ? (get_field('footer_tagline', 'option') ?: (!empty($footer['tagline']) ? $footer['tagline'] : '')) : '';
$foot_address  = function_exists('get_field') ? (get_field('footer_address', 'option') ?: (!empty($footer['address']) ? $footer['address'] : '')) : '';
$foot_phone    = function_exists('get_field') ? (get_field('footer_phone', 'option') ?: (!empty($footer['phone']) ? $footer['phone'] : '')) : '';
$foot_email    = function_exists('get_field') ? (get_field('footer_email', 'option') ?: (!empty($footer['email']) ? $footer['email'] : '')) : '';
$foot_copy     = function_exists('get_field') ? (get_field('footer_copyright', 'option') ?: (!empty($footer['copyright']) ? $footer['copyright'] : '')) : '';
$wa_sticky_num = function_exists('get_field') ? (get_field('whatsapp_number', 'option') ?: '') : '';

$foot_acc_title   = !empty($footer['accommodations_title']) ? $footer['accommodations_title'] : (get_field('footer_accommodations_title', 'option') ?: 'ACCOMMODATIONS');
$foot_quick_title = !empty($footer['quick_links_title']) ? $footer['quick_links_title'] : (get_field('footer_quick_links_title', 'option') ?: 'LOCATIONS & AMENITIES');
$foot_nl_title    = !empty($footer['newsletter_title']) ? $footer['newsletter_title'] : (get_field('footer_newsletter_title', 'option') ?: 'CORPORATE MOBILITY BRIEF');
$foot_nl_desc     = !empty($footer['newsletter_desc']) ? $footer['newsletter_desc'] : (get_field('footer_newsletter_desc', 'option') ?: 'Subscribe for institutional rate updates, seasonal corporate allotments, and priority inventory.');
?>

<footer class="site-footer" id="site-footer">
    <!-- Main Dark Footer Content -->
    <div class="footer-main">
        <div class="kny-footer-container">
            <!-- Top Logo -->
            <?php if ($foot_logo): ?>
                <div class="footer-top-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="<?php bloginfo('name'); ?>">
                        <img src="<?php echo esc_url(kny_get_image_url($foot_logo)); ?>"
                            alt="<?php bloginfo('name'); ?>" class="footer-logo" width="141" height="94">
                    </a>
                </div>
            <?php endif; ?>

            <div class="footer-grid">
                <!-- Column 1: Brand & Contact Info -->
                <div class="footer-col footer-col-brand">
                    <?php if ($foot_tagline): ?>
                        <p class="footer-tagline"><?php echo wp_kses_post($foot_tagline); ?></p>
                    <?php endif; ?>

                    <div class="footer-contact-list">
                        <?php if ($foot_address): ?>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 0C3.13 0 0 3.13 0 7C0 11.75 7 17 7 17C7 17 14 11.75 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#BFF365"/>
                                    </svg>
                                </span>
                                <span class="contact-text"><?php echo wp_kses_post($foot_address); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ($foot_phone): ?>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.62 10.37L10.98 9.07C10.74 8.95 10.45 8.99 10.25 9.17L8.64 10.51C6.67 9.47 5.25 8.07 4.24 6.13L5.59 4.49C5.77 4.28 5.81 3.99 5.69 3.75L4.4 1.13C4.26 0.85 3.94 0.69 3.63 0.77L0.86 1.48C0.52 1.57 0.28 1.88 0.28 2.24C0.28 9.13 5.87 14.72 12.76 14.72C13.12 14.72 13.43 14.48 13.52 14.14L14.23 11.37C14.31 11.06 14.15 10.74 13.87 10.6L13.62 10.37Z" fill="#BFF365"/>
                                    </svg>
                                </span>
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $foot_phone)); ?>"
                                    class="contact-link"><?php echo esc_html($foot_phone); ?></a>
                            </div>
                        <?php endif; ?>

                        <?php if ($foot_email): ?>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.3 0H1.7C0.765 0 0 0.78 0 1.75V12.25C0 13.22 0.765 14 1.7 14H15.3C16.235 14 17 13.22 17 12.25V1.75C17 0.78 16.235 0 15.3 0ZM14.96 3.5L8.5 7.66L2.04 3.5V1.75L8.5 5.91L14.96 1.75V3.5Z" fill="#BFF365"/>
                                    </svg>
                                </span>
                                <a href="mailto:<?php echo esc_attr($foot_email); ?>"
                                    class="contact-link"><?php echo esc_html($foot_email); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Column 2: Dynamic Accommodations Links -->
                <div class="footer-col footer-col-nav">
                    <h4 class="footer-heading"><?php echo esc_html($foot_acc_title); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-accommodations',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ));
                    ?>
                </div>

                <!-- Column 3: Dynamic Locations & Amenities Links -->
                <div class="footer-col footer-col-nav footer-col-loc">
                    <h4 class="footer-heading"><?php echo esc_html($foot_quick_title); ?></h4>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-quick-links',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ));
                    ?>
                </div>

                <!-- Column 4: Corporate Mobility Brief -->
                <div class="footer-col footer-col-newsletter">
                    <?php if ($foot_nl_title): ?>
                        <h4 class="footer-heading"><?php echo esc_html($foot_nl_title); ?></h4>
                    <?php endif; ?>
                    <?php if ($foot_nl_desc): ?>
                        <p class="newsletter-desc"><?php echo wp_kses_post($foot_nl_desc); ?></p>
                    <?php endif; ?>
                    <form class="newsletter-form"
                        onsubmit="event.preventDefault(); alert('Thank you for subscribing to Corporate Mobility Brief.');">
                        <div class="newsletter-input-wrap">
                            <input type="email"
                                placeholder="<?php esc_attr_e('corporate.email@company.com', 'kny-theme'); ?>" required
                                class="newsletter-input"
                                aria-label="<?php esc_attr_e('Corporate Email', 'kny-theme'); ?>">
                            <button type="submit" class="newsletter-btn"
                                aria-label="<?php esc_attr_e('Subscribe', 'kny-theme'); ?>">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.16699 7.00033H12.8337M12.8337 7.00033L7.00033 1.16699M12.8337 7.00033L7.00033 12.8337" stroke="#253900" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <p class="newsletter-disclaimer">
                        <?php esc_html_e('Confidential. Direct reservation team contact only.', 'kny-theme'); ?>
                    </p>
                </div>
            </div>

            <!-- Footer Bottom Bar with Dynamic Legal Menu -->
            <div class="footer-bottom">
                <?php if ($foot_copy): ?>
                    <div class="copyright-text"><?php echo esc_html($foot_copy); ?></div>
                <?php endif; ?>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-legal',
                    'menu_class'     => 'footer-legal-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 1,
                ));
                ?>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Action Button (Global) -->
    <aside class="floating-whatsapp-container"
        aria-label="<?php esc_attr_e('WhatsApp Reservation Support', 'kny-theme'); ?>">
        <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $wa_sticky_num)); ?>" target="_blank"
            rel="noopener noreferrer" class="floating-whatsapp-btn"
            aria-label="<?php esc_attr_e('Chat on WhatsApp', 'kny-theme'); ?>"
            title="<?php esc_attr_e('Chat on WhatsApp', 'kny-theme'); ?>">
            <?php echo kny_render_icon('logos_whatsapp-icon.svg', 'wa-floating-icon'); ?>
        </a>
    </aside>

    <!-- Global Direct Residence Booking Modal -->
    <?php get_template_part('template-parts/booking-modal'); ?>
</footer>

<?php wp_footer(); ?>
</body>

</html>
