<?php
/**
 * Location Detail Section: Hero & Badges
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow        = get_field('loc_hero_eyebrow', $page_id);
$title          = get_field('loc_hero_title', $page_id);
$subtitle       = get_field('loc_hero_subtitle', $page_id);
$btn1_text      = get_field('loc_hero_btn1_text', $page_id);
$btn1_url       = get_field('loc_hero_btn1_url', $page_id) ?: '#inventory';
$btn2_text      = get_field('loc_hero_btn2_text', $page_id);
$btn2_url       = get_field('loc_hero_btn2_url', $page_id) ?: '#rfp-section';
$badge1_text    = get_field('loc_hero_badge1_text', $page_id);
$badge2_text    = get_field('loc_hero_badge2_text', $page_id);

$feat_img_id    = get_field('loc_hero_featured_image', $page_id);
$feat_img_url   = $feat_img_id ? kny_get_image_url($feat_img_id) : '';
$feat_tag       = get_field('loc_hero_featured_tag', $page_id);
$feat_title     = get_field('loc_hero_featured_title', $page_id);
$prox_tag       = get_field('loc_hero_proximity_tag', $page_id);
$prox_text      = get_field('loc_hero_proximity_text', $page_id);
?>

<section class="kny-loc-hero-section" id="location-overview">
    <div class="kny-container">
        <div class="kny-loc-hero-grid">
            <!-- Left Hero Content -->
            <div class="kny-loc-hero-content">
                <?php if ($eyebrow): ?>
                    <div class="kny-loc-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h1 class="kny-loc-hero-title"><?php echo wp_kses_post($title); ?></h1>
                <?php endif; ?>

                <?php if ($subtitle): ?>
                    <p class="kny-loc-hero-desc"><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif; ?>

                <div class="kny-loc-hero-ctas">
                    <?php if ($btn1_text): ?>
                        <a href="<?php echo esc_url($btn1_url); ?>" class="kny-btn-primary kny-loc-btn-explore">
                            <span><?php echo esc_html($btn1_text); ?></span>
                            <span class="btn-arrow-down">↓</span>
                        </a>
                    <?php endif; ?>

                    <?php if ($btn2_text): ?>
                        <a href="<?php echo esc_url($btn2_url); ?>" class="kny-btn-secondary kny-loc-btn-rfp">
                            <span><?php echo esc_html($btn2_text); ?></span>
                            <span class="btn-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'icon-arrow'); ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="kny-loc-hero-badges">
                    <?php if ($badge1_text): ?>
                        <div class="kny-loc-badge-item">
                            <span class="badge-icon"><?php echo kny_render_icon('Icon-64.svg', 'badge-check-svg'); ?></span>
                            <span class="badge-text"><?php echo esc_html($badge1_text); ?></span>
                        </div>
                    <?php endif; ?>

                    <?php if ($badge2_text): ?>
                        <div class="kny-loc-badge-item">
                            <span class="badge-icon"><?php echo kny_render_icon('Icon-8.svg', 'badge-hotel-svg'); ?></span>
                            <span class="badge-text"><?php echo esc_html($badge2_text); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Featured Card with Floating Pill -->
            <div class="kny-loc-hero-media">
                <div class="kny-loc-flagship-card">
                    <?php if ($feat_img_url): ?>
                        <img src="<?php echo esc_url($feat_img_url); ?>" alt="<?php echo esc_attr($feat_title ?: 'Flagship Residence'); ?>" class="kny-loc-flagship-img" loading="eager">
                    <?php endif; ?>
                    <div class="kny-loc-flagship-overlay">
                        <?php if ($feat_tag): ?>
                            <span class="kny-loc-flagship-tag"><?php echo esc_html($feat_tag); ?></span>
                        <?php endif; ?>
                        <?php if ($feat_title): ?>
                            <h3 class="kny-loc-flagship-title"><?php echo esc_html($feat_title); ?></h3>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($prox_text): ?>
                    <div class="kny-loc-floating-proximity">
                        <div class="kny-loc-prox-icon-box">
                            <?php echo kny_render_icon('Icon-71.svg', 'prox-map-pin'); ?>
                        </div>
                        <div class="kny-loc-prox-text-col">
                            <?php if ($prox_tag): ?>
                                <span class="kny-loc-prox-tag"><?php echo esc_html($prox_tag); ?></span>
                            <?php endif; ?>
                            <span class="kny-loc-prox-desc"><?php echo esc_html($prox_text); ?></span>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
