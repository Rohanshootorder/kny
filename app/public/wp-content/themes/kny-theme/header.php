<?php
/**
 * Header template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$header_phone     = function_exists('get_field') ? get_field('header_phone', 'option') : '';
$header_book_text = function_exists('get_field') ? get_field('header_book_text', 'option') : '';
$header_book_url  = function_exists('get_field') ? get_field('header_book_url', 'option') : '';
$header_logo      = function_exists('get_field') ? get_field('header_logo', 'option') : '';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header" id="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="site-branding">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php elseif ($header_logo): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
                        <img src="<?php echo esc_url(kny_get_image_url($header_logo)); ?>"
                            alt="<?php bloginfo('name'); ?>" class="kny-logo" width="110" height="86">
                    </a>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title-text"><?php bloginfo('name'); ?></a>
                <?php endif; ?>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-navigation" id="desktop-nav"
                aria-label="<?php esc_attr_e('Main Navigation', 'kny-theme'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'walker'         => new KNY_Nav_Walker(),
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ));
                ?>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <?php if ($header_phone): ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $header_phone)); ?>"
                        class="btn-phone">
                        <span class="btn-icon"><?php echo kny_render_icon('phone.svg', 'icon-phone'); ?></span>
                        <span class="phone-text"><?php echo esc_html($header_phone); ?></span>
                    </a>
                <?php endif; ?>

                <?php if ($header_book_text): ?>
                    <button type="button" class="btn-primary btn-book open-booking-modal">
                        <span><?php echo esc_html($header_book_text); ?></span>
                        <span class="btn-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'icon-arrow'); ?></span>
                    </button>
                <?php endif; ?>

                <!-- Mobile Hamburger Toggle -->
                <button class="mobile-menu-toggle" id="mobile-menu-toggle"
                    aria-label="<?php esc_attr_e('Toggle navigation', 'kny-theme'); ?>" aria-expanded="false">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer Overlay -->
    <div class="mobile-overlay" id="mobile-overlay"></div>

    <!-- Mobile Drawer Navigation -->
    <div class="mobile-drawer" id="mobile-drawer" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Mobile Navigation Drawer', 'kny-theme'); ?>">
        <div class="mobile-drawer-inner">
            <div class="mobile-drawer-header">
                <?php if ($header_logo): ?>
                    <img src="<?php echo esc_url(kny_get_image_url($header_logo)); ?>"
                        alt="<?php bloginfo('name'); ?>" class="kny-logo-mobile" width="90" height="70">
                <?php endif; ?>
                <button class="mobile-drawer-close" id="mobile-drawer-close"
                    aria-label="<?php esc_attr_e('Close menu', 'kny-theme'); ?>">&times;</button>
            </div>
            <nav class="mobile-navigation" aria-label="<?php esc_attr_e('Mobile Navigation', 'kny-theme'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class'     => 'mobile-nav-menu',
                    'container'      => false,
                    'walker'         => new KNY_Nav_Walker(),
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ));
                ?>
            </nav>
            <div class="mobile-drawer-actions">
                <?php if ($header_phone): ?>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $header_phone)); ?>"
                        class="btn-phone btn-mobile-action">
                        <?php echo kny_render_icon('phone.svg', 'icon-phone'); ?>
                        <span><?php echo esc_html($header_phone); ?></span>
                    </a>
                <?php endif; ?>
                <?php if ($header_book_text): ?>
                    <button type="button" class="btn-primary btn-book btn-mobile-action open-booking-modal">
                        <span><?php echo esc_html($header_book_text); ?></span>
                        <?php echo kny_render_icon('arrow-up-right.svg', 'icon-arrow'); ?>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
