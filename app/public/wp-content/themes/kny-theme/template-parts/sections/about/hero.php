<?php
/**
 * About Hero Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$hero = function_exists('get_field') ? get_field('about_hero', get_the_ID()) : null;

if (empty($hero)) {
    return;
}

$hero_img_id = !empty($hero['hero_image']) ? (int) $hero['hero_image'] : 0;
$hero_img_url = $hero_img_id ? wp_get_attachment_image_url($hero_img_id, 'full') : '';

$top_badge_icon_id = !empty($hero['top_badge_icon']) ? (int) $hero['top_badge_icon'] : 0;
$top_badge_icon_url = $top_badge_icon_id ? wp_get_attachment_image_url($top_badge_icon_id, 'full') : '';

$neighborhood_icon_id = !empty($hero['neighborhood_icon']) ? (int) $hero['neighborhood_icon'] : 0;
$neighborhood_icon_url = $neighborhood_icon_id ? wp_get_attachment_image_url($neighborhood_icon_id, 'full') : '';
?>

<section class="about-hero-section">
    <div class="about-container">
        <div class="about-hero-header">
            <?php if (!empty($hero['badge_text'])): ?>
                <span class="about-eyebrow"><?php echo esc_html($hero['badge_text']); ?></span>
            <?php endif; ?>

            <?php if (!empty($hero['title'])): ?>
                <h1 class="about-hero-title"><?php echo esc_html($hero['title']); ?></h1>
            <?php endif; ?>

            <?php if (!empty($hero['description'])): ?>
                <p class="about-hero-desc"><?php echo nl2br(esc_html($hero['description'])); ?></p>
            <?php endif; ?>
        </div>

        <?php if (!empty($hero_img_url)): ?>
            <div class="about-hero-card">
                <img src="<?php echo esc_url($hero_img_url); ?>" alt="<?php echo esc_attr($hero['title'] ?? ''); ?>"
                    class="about-hero-img" />
                <div class="about-hero-overlay"></div>

                <?php if (!empty($hero['top_badge_text'])): ?>
                    <div class="about-hero-top-badge">
                        <?php if (!empty($top_badge_icon_url)): ?>
                            <img src="<?php echo esc_url($top_badge_icon_url); ?>" alt="" class="about-badge-icon" />
                        <?php endif; ?>
                        <span><?php echo esc_html($hero['top_badge_text']); ?></span>
                    </div>
                <?php endif; ?>

                <div class="about-hero-bottom-bar">
                    <div class="about-hero-caption">
                        <?php if (!empty($hero['overlay_tag'])): ?>
                            <span class="about-overlay-tag"><?php echo esc_html($hero['overlay_tag']); ?></span>
                        <?php endif; ?>
                        <?php if (!empty($hero['overlay_title'])): ?>
                            <div class="about-overlay-title"><?php echo esc_html($hero['overlay_title']); ?></div>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($hero['neighborhood_text'])): ?>
                        <div class="about-hero-neighborhood">
                            <?php if (!empty($neighborhood_icon_url)): ?>
                                <img src="<?php echo esc_url($neighborhood_icon_url); ?>" alt="" class="about-pin-icon" />
                            <?php endif; ?>
                            <div class="about-neighborhood-info">
                                <?php if (!empty($hero['neighborhood_tag'])): ?>
                                    <span class="about-neighborhood-tag"><?php echo esc_html($hero['neighborhood_tag']); ?></span>
                                <?php endif; ?>
                                <span class="about-neighborhood-name"><?php echo esc_html($hero['neighborhood_text']); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>