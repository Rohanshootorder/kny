<?php
/**
 * Location Detail Section: Curated Inventory & Suites
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow  = get_field('loc_inv_eyebrow', $page_id);
$title    = get_field('loc_inv_title', $page_id);
$subtitle = get_field('loc_inv_subtitle', $page_id);

$filters = [
    get_field('loc_inv_filter1', $page_id) ?: 'All Residences (3)',
    get_field('loc_inv_filter2', $page_id),
    get_field('loc_inv_filter3', $page_id),
];

$cards = [
    [
        'img'        => get_field('loc_inv_c1_img', $page_id),
        'bhk'        => get_field('loc_inv_c1_bhk', $page_id),
        'badge'      => get_field('loc_inv_c1_badge', $page_id),
        'sqft'       => get_field('loc_inv_c1_sqft', $page_id),
        'loc'        => get_field('loc_inv_c1_loc', $page_id),
        'title'      => get_field('loc_inv_c1_title', $page_id),
        'feat1'      => get_field('loc_inv_c1_feat1', $page_id),
        'feat2'      => get_field('loc_inv_c1_feat2', $page_id),
        'feat3'      => get_field('loc_inv_c1_feat3', $page_id),
        'desc'       => get_field('loc_inv_c1_desc', $page_id),
        'price'      => get_field('loc_inv_c1_price', $page_id),
        'corp_price' => get_field('loc_inv_c1_corp_price', $page_id),
        'btn_text'   => get_field('loc_inv_c1_btn_text', $page_id),
        'btn_url'    => get_field('loc_inv_c1_btn_url', $page_id),
    ],
    [
        'img'        => get_field('loc_inv_c2_img', $page_id),
        'bhk'        => get_field('loc_inv_c2_bhk', $page_id),
        'badge'      => get_field('loc_inv_c2_badge', $page_id),
        'sqft'       => get_field('loc_inv_c2_sqft', $page_id),
        'loc'        => get_field('loc_inv_c2_loc', $page_id),
        'title'      => get_field('loc_inv_c2_title', $page_id),
        'feat1'      => get_field('loc_inv_c2_feat1', $page_id),
        'feat2'      => get_field('loc_inv_c2_feat2', $page_id),
        'feat3'      => get_field('loc_inv_c2_feat3', $page_id),
        'desc'       => get_field('loc_inv_c2_desc', $page_id),
        'price'      => get_field('loc_inv_c2_price', $page_id),
        'corp_price' => get_field('loc_inv_c2_corp_price', $page_id),
        'btn_text'   => get_field('loc_inv_c2_btn_text', $page_id),
        'btn_url'    => get_field('loc_inv_c2_btn_url', $page_id),
    ],
    [
        'img'        => get_field('loc_inv_c3_img', $page_id),
        'bhk'        => get_field('loc_inv_c3_bhk', $page_id),
        'badge'      => get_field('loc_inv_c3_badge', $page_id),
        'sqft'       => get_field('loc_inv_c3_sqft', $page_id),
        'loc'        => get_field('loc_inv_c3_loc', $page_id),
        'title'      => get_field('loc_inv_c3_title', $page_id),
        'feat1'      => get_field('loc_inv_c3_feat1', $page_id),
        'feat2'      => get_field('loc_inv_c3_feat2', $page_id),
        'feat3'      => get_field('loc_inv_c3_feat3', $page_id),
        'desc'       => get_field('loc_inv_c3_desc', $page_id),
        'price'      => get_field('loc_inv_c3_price', $page_id),
        'corp_price' => get_field('loc_inv_c3_corp_price', $page_id),
        'btn_text'   => get_field('loc_inv_c3_btn_text', $page_id),
        'btn_url'    => get_field('loc_inv_c3_btn_url', $page_id),
    ],
];
?>

<section class="kny-loc-inventory-section" id="inventory">
    <div class="kny-container">
        <!-- Section Header -->
        <div class="kny-loc-inv-header">
            <div class="kny-loc-inv-heading-group">
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

            <!-- Filter Pills -->
            <div class="kny-loc-inv-filter-bar">
                <?php foreach ($filters as $index => $filter_label): 
                    if (!$filter_label) continue;
                    $is_active = ($index === 0) ? 'is-active' : '';
                ?>
                    <button type="button" class="kny-loc-filter-btn <?php echo esc_attr($is_active); ?>" data-filter="<?php echo esc_attr(sanitize_title($filter_label)); ?>">
                        <?php echo esc_html($filter_label); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Inventory Grid (3 Cards) -->
        <div class="kny-loc-inv-grid">
            <?php foreach ($cards as $c): 
                if (!$c['title']) continue;
                $img_url = $c['img'] ? kny_get_image_url($c['img']) : '';
            ?>
                <article class="kny-loc-inv-card">
                    <!-- Media Header -->
                    <div class="kny-loc-card-media">
                        <?php if ($img_url): ?>
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($c['title']); ?>" loading="lazy" class="kny-loc-card-img">
                        <?php endif; ?>

                        <!-- Top Badges -->
                        <div class="kny-loc-card-top-tags">
                            <?php if ($c['bhk']): ?>
                                <span class="kny-loc-bhk-tag"><?php echo esc_html($c['bhk']); ?></span>
                            <?php endif; ?>
                            <?php if ($c['badge']): ?>
                                <span class="kny-loc-status-tag"><?php echo esc_html($c['badge']); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Bottom Sq Ft Badge -->
                        <?php if ($c['sqft']): ?>
                            <span class="kny-loc-sqft-badge"><?php echo esc_html($c['sqft']); ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Card Body -->
                    <div class="kny-loc-card-body">
                        <?php if ($c['loc']): ?>
                            <div class="kny-loc-card-location">
                                <span class="loc-pin-icon"><?php echo kny_render_icon('Icon-71.svg', 'card-pin'); ?></span>
                                <span class="loc-text"><?php echo esc_html($c['loc']); ?></span>
                            </div>
                        <?php endif; ?>

                        <h3 class="kny-loc-card-title"><?php echo esc_html($c['title']); ?></h3>

                        <!-- Feature Pills -->
                        <div class="kny-loc-card-features">
                            <?php if ($c['feat1']): ?>
                                <span class="kny-loc-feat-pill">
                                    <span class="feat-icon"><?php echo kny_render_icon('Icon-8.svg', 'feat-svg'); ?></span>
                                    <span><?php echo esc_html($c['feat1']); ?></span>
                                </span>
                            <?php endif; ?>
                            <?php if ($c['feat2']): ?>
                                <span class="kny-loc-feat-pill">
                                    <span class="feat-icon"><?php echo kny_render_icon('Icon-9.svg', 'feat-svg'); ?></span>
                                    <span><?php echo esc_html($c['feat2']); ?></span>
                                </span>
                            <?php endif; ?>
                            <?php if ($c['feat3']): ?>
                                <span class="kny-loc-feat-pill">
                                    <span class="feat-icon"><?php echo kny_render_icon('Icon-22.svg', 'feat-svg'); ?></span>
                                    <span><?php echo esc_html($c['feat3']); ?></span>
                                </span>
                            <?php endif; ?>
                        </div>

                        <?php if ($c['desc']): ?>
                            <p class="kny-loc-card-desc"><?php echo esc_html($c['desc']); ?></p>
                        <?php endif; ?>

                        <!-- Pricing Row -->
                        <div class="kny-loc-card-pricing">
                            <div class="kny-loc-price-block">
                                <span class="kny-price-label"><?php esc_html_e('Nightly Rate', 'kny-theme'); ?></span>
                                <span class="kny-price-value"><?php echo esc_html($c['price']); ?></span>
                            </div>
                            <?php if ($c['corp_price']): ?>
                                <div class="kny-loc-corp-pill">
                                    <?php echo esc_html('Corporate: ' . $c['corp_price']); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Action Button -->
                        <?php if ($c['btn_text']): ?>
                            <a href="<?php echo esc_url($c['btn_url'] ?: '#rfp-section'); ?>" class="kny-btn-primary kny-loc-card-btn open-booking-modal">
                                <?php echo esc_html($c['btn_text']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
