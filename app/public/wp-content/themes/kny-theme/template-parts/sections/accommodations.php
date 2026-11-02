<?php
/**
 * Accommodations (Suites & Residences) Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$accommodations = function_exists('get_field') ? get_field('accommodations_section') : null;

if (empty($accommodations)) {
    return;
}

$section_tag   = !empty($accommodations['section_tag']) ? $accommodations['section_tag'] : '';
$section_title = !empty($accommodations['section_title']) ? $accommodations['section_title'] : '';
$section_desc  = !empty($accommodations['section_description']) ? $accommodations['section_description'] : '';
$rooms         = (!empty($accommodations['rooms']) && is_array($accommodations['rooms'])) ? $accommodations['rooms'] : array();

$bulk_title  = !empty($accommodations['bulk_title']) ? $accommodations['bulk_title'] : '';
$bulk_desc   = !empty($accommodations['bulk_desc']) ? $accommodations['bulk_desc'] : '';
$bulk_btn1_t = !empty($accommodations['bulk_btn1_text']) ? $accommodations['bulk_btn1_text'] : '';
$bulk_btn1_u = !empty($accommodations['bulk_btn1_url']) ? $accommodations['bulk_btn1_url'] : '';
$bulk_btn2_t = !empty($accommodations['bulk_btn2_text']) ? $accommodations['bulk_btn2_text'] : '';
$bulk_btn2_u = !empty($accommodations['bulk_btn2_url']) ? $accommodations['bulk_btn2_url'] : '';
?>

<section class="section-accommodations" id="accommodations">
    <div class="kny-container">
        <!-- Section Header Row -->
        <?php if ($section_tag || $section_title || $section_desc): ?>
            <div class="accommodations-header-row">
                <div class="header-left">
                    <?php if ($section_tag): ?>
                        <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($section_title): ?>
                        <h2 class="section-heading"><?php echo esc_html($section_title); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if ($section_desc): ?>
                    <div class="header-right">
                        <p class="section-subtext"><?php echo esc_html($section_desc); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Room Cards Grid (3 Columns) -->
        <?php if (!empty($rooms)): ?>
            <div class="rooms-grid">
                <?php foreach ($rooms as $room): 
                    $room_img      = !empty($room['image']) ? $room['image'] : '';
                    $room_tag      = !empty($room['tag']) ? $room['tag'] : '';
                    $room_size     = !empty($room['size']) ? $room['size'] : '';
                    $room_title    = !empty($room['title']) ? $room['title'] : '';
                    $room_subtitle = !empty($room['subtitle']) ? $room['subtitle'] : '';
                    $room_desc     = !empty($room['description']) ? $room['description'] : '';
                    $room_features = (!empty($room['features']) && is_array($room['features'])) ? $room['features'] : array();
                    $room_price_n  = !empty($room['price_night']) ? $room['price_night'] : '';
                    $room_price_m  = !empty($room['price_month']) ? $room['price_month'] : '';
                    $room_cta_text = !empty($room['cta_text']) ? $room['cta_text'] : '';
                    $room_cta_url  = !empty($room['cta_url']) ? $room['cta_url'] : '';

                    // Modal data attributes
                    $room_strike_price = !empty($room['strikethrough_price']) ? $room['strikethrough_price'] : '';
                    $room_modal_guests = !empty($room['modal_guests']) ? $room['modal_guests'] : (!empty($room['subtitle']) ? $room['subtitle'] : '');
                    $room_modal_bed    = !empty($room['modal_bed_feature']) ? $room['modal_bed_feature'] : '';
                    $room_modal_cancel = !empty($room['modal_cancellation']) ? $room['modal_cancellation'] : '';
                ?>
                    <div class="room-card <?php echo ('MOST POPULAR' === $room_tag) ? 'room-card-featured' : ''; ?>" id="room-<?php echo esc_attr(sanitize_title($room_title)); ?>">
                        <!-- Room Media Header -->
                        <div class="room-media">
                            <?php if ($room_img): ?>
                                <img src="<?php echo esc_url(kny_get_image_url($room_img)); ?>"
                                    alt="<?php echo esc_attr($room_title); ?>" class="room-img" loading="lazy">
                            <?php endif; ?>

                            <!-- Top Tag -->
                            <?php if ($room_tag): ?>
                                <div class="room-badge-top <?php echo ('MOST POPULAR' === $room_tag) ? 'badge-popular' : (('AUTONOMOUS SUITE' === $room_tag) ? 'badge-autonomous' : ''); ?>">
                                    <span><?php echo esc_html($room_tag); ?></span>
                                </div>
                            <?php endif; ?>

                            <!-- Size Pill -->
                            <?php if ($room_size): ?>
                                <div class="room-size-pill">
                                    <span class="size-icon"><?php echo kny_render_icon('Icon-27.svg', 'size-svg'); ?></span>
                                    <span><?php echo esc_html($room_size); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Room Body -->
                        <div class="room-body">
                            <div class="room-header-info">
                                <?php if ($room_title): ?>
                                    <h3 class="room-title"><?php echo esc_html($room_title); ?></h3>
                                <?php endif; ?>
                                <?php if ($room_subtitle): ?>
                                    <div class="room-subtitle"><?php echo esc_html($room_subtitle); ?></div>
                                <?php endif; ?>
                            </div>

                            <?php if ($room_desc): ?>
                                <p class="room-desc"><?php echo nl2br(esc_html($room_desc)); ?></p>
                            <?php endif; ?>

                            <!-- Feature Amenities List -->
                            <?php if (!empty($room_features)): ?>
                                <div class="room-features-list">
                                    <?php foreach ($room_features as $feat): 
                                        $feat_icon  = !empty($feat['icon']) ? $feat['icon'] : '';
                                        $feat_label = !empty($feat['label']) ? $feat['label'] : '';
                                        if (!$feat_label) continue;
                                    ?>
                                        <div class="feature-item">
                                            <?php if ($feat_icon): ?>
                                                <span class="feature-icon"><?php echo kny_render_icon($feat_icon, 'feat-svg'); ?></span>
                                            <?php endif; ?>
                                            <span class="feature-label"><?php echo esc_html($feat_label); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Room Price & Booking Footer -->
                            <div class="room-footer">
                                <div class="price-box">
                                    <?php if ($room_price_n): ?>
                                        <div class="price-night-row">
                                            <span class="price-amount"><?php echo esc_html($room_price_n); ?></span>
                                            <span class="price-unit"> / night</span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($room_price_m): ?>
                                        <div class="price-month"><?php echo esc_html($room_price_m); ?></div>
                                    <?php endif; ?>
                                </div>
                                <button type="button" class="btn-reserve open-booking-modal"
                                    data-room-title="<?php echo esc_attr($room_title); ?>"
                                    data-room-price="<?php echo esc_attr($room_price_n); ?>"
                                    data-room-strike="<?php echo esc_attr($room_strike_price); ?>"
                                    data-room-size="<?php echo esc_attr($room_size); ?>"
                                    data-room-guests="<?php echo esc_attr($room_modal_guests); ?>"
                                    data-room-bed="<?php echo esc_attr($room_modal_bed); ?>"
                                    data-room-cancel="<?php echo esc_attr($room_modal_cancel); ?>"
                                    data-room-desc="<?php echo esc_attr($room_desc); ?>">
                                    <span><?php echo esc_html($room_cta_text); ?></span>
                                    <span class="reserve-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'reserve-svg'); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Corporate Project Teams Bulk Allotment Banner -->
        <?php if ($bulk_title || $bulk_desc): ?>
            <div class="corporate-bulk-banner">
                <div class="bulk-content">
                    <div class="bulk-icon-box">
                        <?php echo kny_render_icon('Icon-43.svg', 'bulk-svg'); ?>
                    </div>
                    <div class="bulk-texts">
                        <?php if ($bulk_title): ?>
                            <h3 class="bulk-title"><?php echo esc_html($bulk_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($bulk_desc): ?>
                            <p class="bulk-desc"><?php echo esc_html($bulk_desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($bulk_btn1_t || $bulk_btn2_t): ?>
                    <div class="bulk-actions">
                        <?php if ($bulk_btn1_t): ?>
                            <a href="<?php echo esc_url($bulk_btn1_u ? $bulk_btn1_u : '#'); ?>" class="btn-bulk-secondary">
                                <?php echo esc_html($bulk_btn1_t); ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($bulk_btn2_t): ?>
                            <a href="<?php echo esc_url($bulk_btn2_u ? $bulk_btn2_u : '#'); ?>" class="btn-bulk-primary">
                                <?php echo esc_html($bulk_btn2_t); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
