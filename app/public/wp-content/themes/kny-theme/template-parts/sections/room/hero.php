<?php
/**
 * Room Detail Section: Hero & Header
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow    = get_field('room_hero_eyebrow', $page_id);
$title      = get_field('room_hero_title', $page_id);
$desc       = get_field('room_hero_desc', $page_id);
$rate_label = get_field('room_hero_rate_label', $page_id);
$rate       = get_field('room_hero_rate', $page_id);
$rate_unit  = get_field('room_hero_rate_unit', $page_id);
$subnote    = get_field('room_hero_subnote', $page_id);
$pills      = get_field('room_feature_pills', $page_id);
?>

<section class="kny-room-hero-section">
    <div class="kny-room-container">
        <!-- Top Row: Title & Tariff Callout -->
        <div class="kny-room-hero-top">
            <div class="kny-room-hero-heading-col">
                <?php if ($eyebrow): ?>
                    <div class="kny-room-eyebrow">
                        <span><?php echo esc_html($eyebrow); ?></span>
                    </div>
                <?php endif; ?>

                <?php if ($title): ?>
                    <h1 class="kny-room-hero-title"><?php echo esc_html($title); ?></h1>
                <?php endif; ?>

                <?php if ($desc): ?>
                    <div class="kny-room-hero-desc">
                        <p><?php echo nl2br(esc_html($desc)); ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($rate || $rate_label): ?>
                <div class="kny-room-hero-rate-col">
                    <?php if ($rate_label): ?>
                        <div class="kny-room-rate-label"><?php echo esc_html($rate_label); ?></div>
                    <?php endif; ?>
                    <div class="kny-room-rate-amount-row">
                        <?php if ($rate): ?>
                            <span class="kny-room-rate-amount"><?php echo esc_html($rate); ?></span>
                        <?php endif; ?>
                        <?php if ($rate_unit): ?>
                            <span class="kny-room-rate-unit"><?php echo esc_html($rate_unit); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if ($subnote): ?>
                        <div class="kny-room-rate-subnote">
                            <span class="kny-check-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            </span>
                            <span><?php echo esc_html($subnote); ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Bottom Row: Feature Pills -->
        <?php if (!empty($pills) && is_array($pills)): ?>
            <div class="kny-room-feature-pills-bar">
                <?php foreach ($pills as $pill): 
                    $p_icon = !empty($pill['icon']) ? $pill['icon'] : '';
                    $p_text = !empty($pill['text']) ? $pill['text'] : '';
                    if (!$p_text) continue;
                ?>
                    <div class="kny-room-pill-item">
                        <?php if ($p_icon): ?>
                            <span class="kny-room-pill-icon">
                                <?php echo kny_render_icon($p_icon, 'pill-svg-icon'); ?>
                            </span>
                        <?php else: ?>
                            <span class="kny-room-pill-dot"></span>
                        <?php endif; ?>
                        <span class="kny-room-pill-text"><?php echo esc_html($p_text); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

