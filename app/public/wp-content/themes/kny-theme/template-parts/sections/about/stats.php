<?php
/**
 * Room to Live & Scale Stats Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$stats_section = function_exists('get_field') ? get_field('about_stats', get_the_ID()) : null;

if (empty($stats_section)) {
    return;
}

$prod_icon_id = !empty($stats_section['productivity_icon']) ? (int) $stats_section['productivity_icon'] : 0;
$prod_icon_url = $prod_icon_id ? wp_get_attachment_image_url($prod_icon_id, 'full') : '';
?>

<section class="about-stats-section">
    <div class="about-container">
        <div class="about-stats-layout">
            <!-- Left Narrative Column -->
            <div class="about-stats-content">
                <?php if (!empty($stats_section['badge_text'])): ?>
                    <span class="about-eyebrow"><?php echo esc_html($stats_section['badge_text']); ?></span>
                <?php endif; ?>

                <?php if (!empty($stats_section['title'])): ?>
                    <h2 class="about-stats-title"><?php echo wp_kses_post($stats_section['title']); ?></h2>
                <?php endif; ?>

                <?php if (!empty($stats_section['para_1'])): ?>
                    <p class="about-stats-para lead"><?php echo nl2br(esc_html($stats_section['para_1'])); ?></p>
                <?php endif; ?>

                <?php if (!empty($stats_section['para_2'])): ?>
                    <p class="about-stats-para body"><?php echo nl2br(esc_html($stats_section['para_2'])); ?></p>
                <?php endif; ?>

                <?php if (!empty($stats_section['cta_text'])): ?>
                    <div class="about-stats-cta-wrap">
                        <a href="<?php echo esc_url($stats_section['cta_url'] ?? '#'); ?>" class="btn-about-primary">
                            <span><?php echo esc_html($stats_section['cta_text']); ?></span>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.05 11.25L0 10.2L8.7 1.5H3.75V0H11.25V7.5H9.75V2.55L1.05 11.25V11.25"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Metrics Column -->
            <div class="about-stats-grid-wrap">
                <?php if (!empty($stats_section['stats']) && is_array($stats_section['stats'])): ?>
                    <div class="about-stat-cards-grid">
                        <?php foreach ($stats_section['stats'] as $item): ?>
                            <div class="about-stat-card">
                                <?php if (!empty($item['label'])): ?>
                                    <div class="about-stat-card-label"><?php echo esc_html($item['label']); ?></div>
                                <?php endif; ?>

                                <?php if (!empty($item['value'])):
                                    // Highlight ampersand if present
                                    $formatted_val = preg_replace('/(&|&amp;)/', '<span class="amp-accent">&</span>', esc_html($item['value']));
                                    ?>
                                    <div class="about-stat-card-value"><?php echo wp_kses_post($formatted_val); ?></div>
                                <?php endif; ?>

                                <?php if (!empty($item['description'])): ?>
                                    <p class="about-stat-card-desc"><?php echo nl2br(esc_html($item['description'])); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($stats_section['productivity_title'])): ?>
                    <div class="about-productivity-banner">
                        <div class="about-productivity-icon-box">
                            <?php if (!empty($prod_icon_url)): ?>
                                <img src="<?php echo esc_url($prod_icon_url); ?>" alt="" class="about-prod-icon" />
                            <?php else: ?>
                                <svg width="20" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 18H14V2H2V18M8 17C9.38 17 10.56 16.51 11.54 15.54C12.51 14.56 13 13.38 13 12C13 10.62 12.51 9.44 11.54 8.46C10.56 7.49 9.38 7 8 7C6.62 7 5.44 7.49 4.46 8.46C3.49 9.44 3 10.62 3 12C3 13.38 3.49 14.56 4.46 15.54C5.44 16.51 6.62 17 8 17Z"
                                        fill="#476800" />
                                </svg>
                            <?php endif; ?>
                        </div>
                        <div class="about-productivity-text">
                            <h4 class="about-productivity-title">
                                <?php echo esc_html($stats_section['productivity_title']); ?></h4>
                            <?php if (!empty($stats_section['productivity_desc'])): ?>
                                <p class="about-productivity-desc"><?php echo esc_html($stats_section['productivity_desc']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>