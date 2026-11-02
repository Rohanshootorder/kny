<?php
/**
 * Location Detail Section: Enterprise Partnerships
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow   = get_field('loc_corp_eyebrow', $page_id);
$title     = get_field('loc_corp_title', $page_id);
$subtitle  = get_field('loc_corp_subtitle', $page_id);
$trust_txt = get_field('loc_corp_trust_text', $page_id);

$solutions = [
    [
        'icon'  => 'Icon-60.svg',
        'title' => get_field('loc_corp_c1_title', $page_id),
        'desc'  => get_field('loc_corp_c1_desc', $page_id),
        'badge' => get_field('loc_corp_c1_badge', $page_id),
    ],
    [
        'icon'  => 'Icon-6.svg',
        'title' => get_field('loc_corp_c2_title', $page_id),
        'desc'  => get_field('loc_corp_c2_desc', $page_id),
        'badge' => get_field('loc_corp_c2_badge', $page_id),
    ],
    [
        'icon'  => 'Icon-8.svg',
        'title' => get_field('loc_corp_c3_title', $page_id),
        'desc'  => get_field('loc_corp_c3_desc', $page_id),
        'badge' => get_field('loc_corp_c3_badge', $page_id),
    ],
    [
        'icon'  => 'Icon-62.svg',
        'title' => get_field('loc_corp_c4_title', $page_id),
        'desc'  => get_field('loc_corp_c4_desc', $page_id),
        'badge' => get_field('loc_corp_c4_badge', $page_id),
    ],
];
?>

<section class="kny-loc-partnerships-section" id="corporate-partnerships">
    <div class="kny-container">
        <!-- Section Header -->
        <div class="kny-loc-section-center-header">
            <?php if ($eyebrow): ?>
                <div class="kny-loc-eyebrow"><?php echo esc_html($eyebrow); ?></div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="kny-loc-sec-title"><?php echo wp_kses_post($title); ?></h2>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="kny-loc-sec-desc"><?php echo wp_kses_post($subtitle); ?></p>
            <?php endif; ?>
        </div>

        <!-- 4 Solution Cards -->
        <div class="kny-loc-corp-grid">
            <?php foreach ($solutions as $sol): 
                if (!$sol['title']) continue;
            ?>
                <div class="kny-loc-corp-card">
                    <div class="kny-loc-corp-card-top">
                        <div class="kny-loc-corp-icon-box">
                            <?php echo kny_render_icon($sol['icon'], 'corp-icon-svg'); ?>
                        </div>
                        <h3 class="kny-loc-corp-card-title"><?php echo esc_html($sol['title']); ?></h3>
                        <?php if ($sol['desc']): ?>
                            <p class="kny-loc-corp-card-desc"><?php echo esc_html($sol['desc']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php if ($sol['badge']): ?>
                        <div class="kny-loc-corp-card-bottom">
                            <span class="kny-loc-corp-badge-link">
                                <span><?php echo esc_html($sol['badge']); ?></span>
                                <span class="badge-arrow">→</span>
                            </span>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Corporate Trust Bar -->
        <?php if ($trust_txt): ?>
            <div class="kny-loc-trust-bar">
                <span class="trust-shield"><?php echo kny_render_icon('Icon-64.svg', 'shield-svg'); ?></span>
                <span class="trust-text"><?php echo esc_html($trust_txt); ?></span>
            </div>
        <?php endif; ?>
    </div>
</section>
