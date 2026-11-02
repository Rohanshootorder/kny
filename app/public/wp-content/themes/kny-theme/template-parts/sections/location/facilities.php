<?php
/**
 * Location Detail Section: Verified On-Site Facilities
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow      = get_field('loc_fac_eyebrow', $page_id);
$title        = get_field('loc_fac_title', $page_id);
$subtitle     = get_field('loc_fac_subtitle', $page_id);
$status_badge = get_field('loc_fac_status_badge', $page_id);

$categories = [
    [
        'title' => get_field('loc_fac_cat1_title', $page_id) ?: 'In-Suite Autonomy',
        'icon'  => 'Icon-63.svg',
        'items' => [
            get_field('loc_fac_cat1_i1', $page_id),
            get_field('loc_fac_cat1_i2', $page_id),
            get_field('loc_fac_cat1_i3', $page_id),
            get_field('loc_fac_cat1_i4', $page_id),
            get_field('loc_fac_cat1_i5', $page_id),
            get_field('loc_fac_cat1_i6', $page_id),
        ]
    ],
    [
        'title' => get_field('loc_fac_cat2_title', $page_id) ?: 'Executive Connectivity',
        'icon'  => 'Icon-60.svg',
        'items' => [
            get_field('loc_fac_cat2_i1', $page_id),
            get_field('loc_fac_cat2_i2', $page_id),
            get_field('loc_fac_cat2_i3', $page_id),
            get_field('loc_fac_cat2_i4', $page_id),
            get_field('loc_fac_cat2_i5', $page_id),
            get_field('loc_fac_cat2_i6', $page_id),
        ]
    ],
    [
        'title' => get_field('loc_fac_cat3_title', $page_id) ?: 'Wellness & Leisure',
        'icon'  => 'Icon-61.svg',
        'items' => [
            get_field('loc_fac_cat3_i1', $page_id),
            get_field('loc_fac_cat3_i2', $page_id),
            get_field('loc_fac_cat3_i3', $page_id),
            get_field('loc_fac_cat3_i4', $page_id),
            get_field('loc_fac_cat3_i5', $page_id),
            get_field('loc_fac_cat3_i6', $page_id),
        ]
    ],
    [
        'title' => get_field('loc_fac_cat4_title', $page_id) ?: 'Five-Star Services',
        'icon'  => 'Icon-64.svg',
        'items' => [
            get_field('loc_fac_cat4_i1', $page_id),
            get_field('loc_fac_cat4_i2', $page_id),
            get_field('loc_fac_cat4_i3', $page_id),
            get_field('loc_fac_cat4_i4', $page_id),
            get_field('loc_fac_cat4_i5', $page_id),
            get_field('loc_fac_cat4_i6', $page_id),
        ]
    ],
];
?>

<section class="kny-loc-facilities-section" id="amenities">
    <div class="kny-container">
        <!-- Section Header with Operational Badge -->
        <div class="kny-loc-fac-header">
            <div class="kny-loc-fac-titles">
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

            <?php if ($status_badge): ?>
                <div class="kny-loc-status-pill">
                    <span class="status-check-circle">✓</span>
                    <span class="status-text"><?php echo esc_html($status_badge); ?></span>
                </div>
            <?php endif; ?>
        </div>

        <!-- 4 Columns Grid -->
        <div class="kny-loc-fac-grid">
            <?php foreach ($categories as $cat): ?>
                <div class="kny-loc-fac-card">
                    <div class="kny-loc-fac-card-header">
                        <div class="kny-loc-fac-icon-box">
                            <?php echo kny_render_icon($cat['icon'], 'fac-icon-svg'); ?>
                        </div>
                        <h3 class="kny-loc-fac-card-title"><?php echo esc_html($cat['title']); ?></h3>
                    </div>

                    <ul class="kny-loc-fac-list">
                        <?php foreach ($cat['items'] as $item): 
                            if (!$item) continue;
                        ?>
                            <li class="kny-loc-fac-item">
                                <span class="check-mark">✓</span>
                                <span class="item-text"><?php echo esc_html($item); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
