<?php
/**
 * Photo Gallery Preview Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$gallery_section = function_exists('get_field') ? get_field('about_gallery', get_the_ID()) : null;

if (empty($gallery_section)) {
    return;
}

$card1_img_id = !empty($gallery_section['card_1_image']) ? (int) $gallery_section['card_1_image'] : 0;
$card1_img_url = $card1_img_id ? wp_get_attachment_image_url($card1_img_id, 'full') : '';

$card2_img_id = !empty($gallery_section['card_2_image']) ? (int) $gallery_section['card_2_image'] : 0;
$card2_img_url = $card2_img_id ? wp_get_attachment_image_url($card2_img_id, 'full') : '';
?>

<section class="about-gallery-section">
    <div class="about-container">
        <!-- Gallery Header -->
        <div class="about-gallery-header">
            <div class="about-gallery-titles">
                <?php if (!empty($gallery_section['badge_text'])): ?>
                    <span class="about-eyebrow"><?php echo esc_html($gallery_section['badge_text']); ?></span>
                <?php endif; ?>

                <?php if (!empty($gallery_section['title'])): ?>
                    <h2 class="about-section-heading"><?php echo esc_html($gallery_section['title']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($gallery_section['description'])): ?>
                    <p class="about-section-subtext"><?php echo nl2br(esc_html($gallery_section['description'])); ?></p>
                <?php endif; ?>
            </div>

            <?php if (!empty($gallery_section['cta_text'])): ?>
                <div class="about-gallery-action">
                    <a href="<?php echo esc_url($gallery_section['cta_url'] ?? '#'); ?>" class="btn-about-outline">
                        <span><?php echo esc_html($gallery_section['cta_text']); ?></span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.5" y="1.5" width="13" height="13" rx="2" stroke="currentColor" stroke-width="1.3" />
                            <path d="M4 11.5L6.5 8.5L8.5 11L11 7.5L14 11.5H4Z" fill="currentColor" />
                            <circle cx="5" cy="5" r="1.2" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Gallery Showcase Cards -->
        <div class="about-gallery-showcase">
            <?php if (!empty($card1_img_url)): ?>
                <div class="about-gallery-card card-major">
                    <img src="<?php echo esc_url($card1_img_url); ?>"
                        alt="<?php echo esc_attr($gallery_section['card_1_title'] ?? ''); ?>" class="about-gal-img" />
                    <div class="about-gal-overlay"></div>

                    <div class="about-gal-card-content">
                        <?php if (!empty($gallery_section['card_1_title'])): ?>
                            <h3 class="about-gal-card-title"><?php echo esc_html($gallery_section['card_1_title']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($gallery_section['card_1_subtitle'])): ?>
                            <div class="about-gal-card-sub"><?php echo esc_html($gallery_section['card_1_subtitle']); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="about-gal-zoom-btn" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 14L11.1 11.1" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.33334 5.33333V9.33333M5.33334 7.33333H9.33334" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($card2_img_url)): ?>
                <div class="about-gallery-card card-minor">
                    <img src="<?php echo esc_url($card2_img_url); ?>"
                        alt="<?php echo esc_attr($gallery_section['card_2_title'] ?? ''); ?>" class="about-gal-img" />
                    <div class="about-gal-overlay"></div>

                    <div class="about-gal-card-content">
                        <?php if (!empty($gallery_section['card_2_title'])): ?>
                            <h3 class="about-gal-card-title"><?php echo esc_html($gallery_section['card_2_title']); ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($gallery_section['card_2_subtitle'])): ?>
                            <div class="about-gal-card-sub"><?php echo esc_html($gallery_section['card_2_subtitle']); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="about-gal-zoom-btn" aria-hidden="true">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.33333 12.6667C10.2789 12.6667 12.6667 10.2789 12.6667 7.33333C12.6667 4.38781 10.2789 2 7.33333 2C4.38781 2 2 4.38781 2 7.33333C2 10.2789 4.38781 12.6667 7.33333 12.6667Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 14L11.1 11.1" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M7.33334 5.33333V9.33333M5.33334 7.33333H9.33334" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>