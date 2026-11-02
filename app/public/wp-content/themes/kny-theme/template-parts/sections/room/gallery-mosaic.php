<?php
/**
 * Room Detail Section: Photo Mosaic Grid
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$main_img   = get_field('room_gallery_main_image', $page_id);
$main_tag   = get_field('room_gallery_main_tag', $page_id);
$main_title = get_field('room_gallery_main_title', $page_id);

$p2_img = get_field('room_gallery_photo_2', $page_id);
$p2_tag = get_field('room_gallery_photo_2_tag', $page_id);

$p3_img = get_field('room_gallery_photo_3', $page_id);
$p3_tag = get_field('room_gallery_photo_3_tag', $page_id);

$p4_img = get_field('room_gallery_photo_4', $page_id);
$p4_tag = get_field('room_gallery_photo_4_tag', $page_id);

$p5_img   = get_field('room_gallery_photo_5', $page_id);
$p5_badge = get_field('room_gallery_photo_5_badge', $page_id);
$p5_sub   = get_field('room_gallery_photo_5_sub', $page_id);

$main_url = $main_img ? kny_get_image_url($main_img) : '';
$p2_url   = $p2_img ? kny_get_image_url($p2_img) : '';
$p3_url   = $p3_img ? kny_get_image_url($p3_img) : '';
$p4_url   = $p4_img ? kny_get_image_url($p4_img) : '';
$p5_url   = $p5_img ? kny_get_image_url($p5_img) : '';
?>

<section class="kny-room-mosaic-section">
    <div class="kny-room-container">
        <div class="kny-room-mosaic-grid">
            <!-- Left Large Card -->
            <?php if ($main_url): ?>
                <div class="kny-mosaic-main-card">
                    <img src="<?php echo esc_url($main_url); ?>" alt="<?php echo esc_attr($main_tag ?: 'Main Lounge'); ?>" class="kny-mosaic-img" loading="eager">
                    <div class="kny-mosaic-gradient-overlay"></div>
                    <div class="kny-mosaic-main-content">
                        <?php if ($main_tag): ?>
                            <span class="kny-mosaic-tag-pill"><?php echo esc_html($main_tag); ?></span>
                        <?php endif; ?>
                        <?php if ($main_title): ?>
                            <h3 class="kny-mosaic-main-title"><?php echo esc_html($main_title); ?></h3>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Right 2x2 Grid -->
            <div class="kny-mosaic-side-grid">
                <!-- Item 1 (Photo 2) -->
                <?php if ($p2_url): ?>
                    <div class="kny-mosaic-thumb-card">
                        <img src="<?php echo esc_url($p2_url); ?>" alt="<?php echo esc_attr($p2_tag ?: 'Master Suite'); ?>" class="kny-mosaic-thumb-img" loading="lazy">
                        <?php if ($p2_tag): ?>
                            <div class="kny-mosaic-thumb-tag"><?php echo esc_html($p2_tag); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Item 2 (Photo 3) -->
                <?php if ($p3_url): ?>
                    <div class="kny-mosaic-thumb-card">
                        <img src="<?php echo esc_url($p3_url); ?>" alt="<?php echo esc_attr($p3_tag ?: 'Kitchen'); ?>" class="kny-mosaic-thumb-img" loading="lazy">
                        <?php if ($p3_tag): ?>
                            <div class="kny-mosaic-thumb-tag"><?php echo esc_html($p3_tag); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Item 3 (Photo 4) -->
                <?php if ($p4_url): ?>
                    <div class="kny-mosaic-thumb-card">
                        <img src="<?php echo esc_url($p4_url); ?>" alt="<?php echo esc_attr($p4_tag ?: 'Guest Suite'); ?>" class="kny-mosaic-thumb-img" loading="lazy">
                        <?php if ($p4_tag): ?>
                            <div class="kny-mosaic-thumb-tag"><?php echo esc_html($p4_tag); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Item 4 (Photo 5 / View All Overlay) -->
                <?php if ($p5_url): ?>
                    <div class="kny-mosaic-thumb-card kny-mosaic-card-all open-room-gallery-modal" role="button" tabindex="0">
                        <img src="<?php echo esc_url($p5_url); ?>" alt="All Photos" class="kny-mosaic-thumb-img" loading="lazy">
                        <div class="kny-mosaic-all-overlay">
                            <div class="kny-mosaic-all-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                            </div>
                            <?php if ($p5_badge): ?>
                                <div class="kny-mosaic-all-title"><?php echo esc_html($p5_badge); ?></div>
                            <?php endif; ?>
                            <?php if ($p5_sub): ?>
                                <div class="kny-mosaic-all-sub"><?php echo esc_html($p5_sub); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

