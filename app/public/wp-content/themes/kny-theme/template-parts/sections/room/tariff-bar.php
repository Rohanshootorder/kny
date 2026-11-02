<?php
/**
 * Room Detail Section: Transparent Executive Tariff Bar
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$badge      = get_field('room_tariff_badge', $page_id);
$rate_title = get_field('room_tariff_rate_title', $page_id);
$subnote    = get_field('room_tariff_subnote', $page_id);
$btn1_text  = get_field('room_tariff_btn1_text', $page_id);
$btn1_link  = get_field('room_tariff_btn1_link', $page_id);
$btn2_text  = get_field('room_tariff_btn2_text', $page_id);
$btn2_link  = get_field('room_tariff_btn2_link', $page_id);
$phone      = get_field('room_tariff_phone', $page_id);
?>

<section class="kny-room-tariff-bar-section">
    <div class="kny-room-container">
        <div class="kny-room-tariff-card">
            <!-- Left Info Area -->
            <div class="kny-tariff-info-group">
                <div class="kny-tariff-icon-box">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-4"></path><path d="M9 9h1"></path><path d="M9 13h1"></path><path d="M9 17h1"></path></svg>
                </div>
                <div class="kny-tariff-text-block">
                    <?php if ($badge): ?>
                        <div class="kny-tariff-eyebrow-badge">
                            <?php 
                            // Split on bullet if present
                            $parts = explode('•', $badge);
                            if (count($parts) > 1): ?>
                                <span class="kny-tariff-badge-bold"><?php echo esc_html(trim($parts[0])); ?></span>
                                <span class="kny-tariff-badge-dot">•</span>
                                <span class="kny-tariff-badge-sub"><?php echo esc_html(trim($parts[1])); ?></span>
                            <?php else: ?>
                                <span><?php echo esc_html($badge); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($rate_title): ?>
                        <div class="kny-tariff-main-rate">
                            <?php echo esc_html($rate_title); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($subnote): ?>
                        <div class="kny-tariff-subnote-text">
                            <?php echo esc_html($subnote); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Actions Area -->
            <div class="kny-tariff-actions-group">
                <?php if ($btn1_text): ?>
                    <a href="<?php echo esc_url($btn1_link ?: '/contact/'); ?>" class="kny-btn-primary kny-tariff-btn-inquire">
                        <span><?php echo esc_html($btn1_text); ?></span>
                    </a>
                <?php endif; ?>

                <div class="kny-tariff-secondary-row">
                    <?php if ($btn2_text): ?>
                        <a href="<?php echo esc_url($btn2_link ?: '/contact/'); ?>" class="kny-tariff-btn-rfp">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                            <span><?php echo esc_html($btn2_text); ?></span>
                        </a>
                    <?php endif; ?>

                    <?php if ($phone): ?>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="kny-tariff-phone-link">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span><?php echo esc_html($phone); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

