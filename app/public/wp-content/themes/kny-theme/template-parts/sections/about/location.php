<?php
/**
 * At Home in Hyderabad (Location & Commutes) Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$location_section = function_exists('get_field') ? get_field('about_location', get_the_ID()) : null;

if (empty($location_section)) {
    return;
}

$bldg_img_id = !empty($location_section['building_image']) ? (int) $location_section['building_image'] : 0;
$bldg_img_url = $bldg_img_id ? wp_get_attachment_image_url($bldg_img_id, 'full') : '';

$doorstep_icon_id = !empty($location_section['doorstep_icon']) ? (int) $location_section['doorstep_icon'] : 0;
$doorstep_icon_url = $doorstep_icon_id ? wp_get_attachment_image_url($doorstep_icon_id, 'full') : '';
?>

<section class="about-location-section">
    <div class="about-container">
        <div class="about-location-grid">
            <!-- Left Building Showcase -->
            <div class="about-location-media-col">
                <?php if (!empty($bldg_img_url)): ?>
                    <div class="about-location-building-card">
                        <img src="<?php echo esc_url($bldg_img_url); ?>"
                            alt="<?php echo esc_attr($location_section['positioning_title'] ?? ''); ?>"
                            class="about-building-img" />
                        <div class="about-building-overlay"></div>

                        <?php if (!empty($location_section['positioning_title'])): ?>
                            <div class="about-building-badge">
                                <?php if (!empty($location_section['positioning_tag'])): ?>
                                    <span
                                        class="about-positioning-tag"><?php echo esc_html($location_section['positioning_tag']); ?></span>
                                <?php endif; ?>
                                <span
                                    class="about-positioning-title"><?php echo esc_html($location_section['positioning_title']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Commutes Narrative -->
            <div class="about-location-content-col">
                <?php if (!empty($location_section['badge_text'])): ?>
                    <span class="about-eyebrow"><?php echo esc_html($location_section['badge_text']); ?></span>
                <?php endif; ?>

                <?php if (!empty($location_section['title'])): ?>
                    <h2 class="about-location-heading"><?php echo esc_html($location_section['title']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($location_section['description'])): ?>
                    <p class="about-location-desc"><?php echo nl2br(esc_html($location_section['description'])); ?></p>
                <?php endif; ?>

                <?php if (!empty($location_section['commutes']) && is_array($location_section['commutes'])): ?>
                    <div class="about-commutes-list">
                        <?php foreach ($location_section['commutes'] as $commute):
                            $icon_id = !empty($commute['icon']) ? (int) $commute['icon'] : 0;
                            $icon_url = $icon_id ? wp_get_attachment_image_url($icon_id, 'full') : '';
                            ?>
                            <div class="about-commute-item">
                                <div class="about-commute-left">
                                    <div class="about-commute-icon-box">
                                        <?php if (!empty($icon_url)): ?>
                                            <img src="<?php echo esc_url($icon_url); ?>" alt="" class="about-commute-icon" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="about-commute-details">
                                        <?php if (!empty($commute['title'])): ?>
                                            <div class="about-commute-name"><?php echo esc_html($commute['title']); ?></div>
                                        <?php endif; ?>
                                        <?php if (!empty($commute['subtitle'])): ?>
                                            <div class="about-commute-sub"><?php echo esc_html($commute['subtitle']); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if (!empty($commute['time'])): ?>
                                    <div class="about-commute-time"><?php echo esc_html($commute['time']); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($location_section['doorstep_text'])): ?>
                    <div class="about-doorstep-access">
                        <?php if (!empty($doorstep_icon_url)): ?>
                            <img src="<?php echo esc_url($doorstep_icon_url); ?>" alt="" class="about-doorstep-icon" />
                        <?php endif; ?>
                        <span><?php echo esc_html($location_section['doorstep_text']); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>