<?php
/**
 * Plan Your Stay Green Banner Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$cta_banner = function_exists('get_field') ? get_field('about_cta_banner', get_the_ID()) : null;

if (empty($cta_banner)) {
    return;
}
?>

<section class="about-cta-banner-section">
    <div class="about-container">
        <div class="about-cta-banner-inner">
            <div class="about-cta-banner-text">
                <?php if (!empty($cta_banner['badge_text'])): ?>
                    <span class="about-cta-banner-eyebrow"><?php echo esc_html($cta_banner['badge_text']); ?></span>
                <?php endif; ?>

                <?php if (!empty($cta_banner['title'])): ?>
                    <h2 class="about-cta-banner-title"><?php echo esc_html($cta_banner['title']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($cta_banner['description'])): ?>
                    <p class="about-cta-banner-desc"><?php echo nl2br(esc_html($cta_banner['description'])); ?></p>
                <?php endif; ?>
            </div>

            <?php if (!empty($cta_banner['button_text'])): ?>
                <div class="about-cta-banner-action">
                    <a href="<?php echo esc_url($cta_banner['button_url'] ?? '#booking-modal'); ?>"
                        class="btn-about-banner-quote open-booking-modal">
                        <span><?php echo esc_html($cta_banner['button_text']); ?></span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.05 11.25L0 10.2L8.7 1.5H3.75V0H11.25V7.5H9.75V2.55L1.05 11.25V11.25"
                                fill="currentColor" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>