<?php
/**
 * Property Glimpse (Gallery) Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$gallery = function_exists('get_field') ? get_field('gallery_section') : null;

if (empty($gallery)) {
    return;
}

$section_tag    = !empty($gallery['section_tag']) ? $gallery['section_tag'] : '';
$section_title  = !empty($gallery['section_title']) ? $gallery['section_title'] : '';
$feat_tag       = !empty($gallery['featured_tag']) ? $gallery['featured_tag'] : '';
$feat_title     = !empty($gallery['featured_title']) ? $gallery['featured_title'] : '';
$feat_img       = !empty($gallery['featured_image']) ? $gallery['featured_image'] : '';
$feat_cap_title = !empty($gallery['featured_caption_title']) ? $gallery['featured_caption_title'] : '';
$feat_cap_desc  = !empty($gallery['featured_caption_desc']) ? $gallery['featured_caption_desc'] : '';
$grid_items     = (!empty($gallery['grid_items']) && is_array($gallery['grid_items'])) ? $gallery['grid_items'] : array();
?>

<section class="section-property-glimpse" id="gallery">
    <div class="kny-container">
        <!-- Section Header -->
        <?php if ($section_tag || $section_title): ?>
            <div class="glimpse-header">
                <?php if ($section_tag): ?>
                    <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>
                <?php if ($section_title): ?>
                    <h2 class="section-heading"><?php echo esc_html($section_title); ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="glimpse-layout">
            <!-- Left Side: Large Featured Card -->
            <?php if ($feat_img || $feat_title): ?>
                <div class="glimpse-featured-card">
                    <div class="featured-card-header">
                        <?php if ($feat_tag): ?>
                            <span class="featured-tag"><?php echo esc_html($feat_tag); ?></span>
                        <?php endif; ?>
                        <?php if ($feat_title): ?>
                            <h3 class="featured-title"><?php echo esc_html($feat_title); ?></h3>
                        <?php endif; ?>
                        <div class="accent-bar" aria-hidden="true"></div>
                    </div>
                    <?php if ($feat_img): ?>
                        <div class="featured-image-wrapper">
                            <img src="<?php echo esc_url(kny_get_image_url($feat_img)); ?>"
                                alt="<?php echo esc_attr($feat_cap_title); ?>" class="featured-img" loading="lazy">
                            <?php if ($feat_cap_title || $feat_cap_desc): ?>
                                <div class="featured-caption-overlay">
                                    <?php if ($feat_cap_title): ?>
                                        <h4 class="caption-title"><?php echo esc_html($feat_cap_title); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($feat_cap_desc): ?>
                                        <p class="caption-desc"><?php echo esc_html($feat_cap_desc); ?></p>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Right Side: 2x2 Grid of Feature Cards -->
            <?php if (!empty($grid_items)): ?>
                <div class="glimpse-grid">
                    <?php foreach ($grid_items as $item): 
                        $item_tag   = !empty($item['tag']) ? $item['tag'] : '';
                        $item_title = !empty($item['title']) ? $item['title'] : '';
                        $item_img   = !empty($item['image']) ? $item['image'] : '';
                        if (!$item_img && !$item_title) continue;
                    ?>
                        <div class="glimpse-item-card">
                            <div class="item-card-header">
                                <?php if ($item_tag): ?>
                                    <span class="item-tag"><?php echo esc_html($item_tag); ?></span>
                                <?php endif; ?>
                                <?php if ($item_title): ?>
                                    <h4 class="item-title"><?php echo esc_html($item_title); ?></h4>
                                <?php endif; ?>
                                <div class="accent-bar-sm" aria-hidden="true"></div>
                            </div>
                            <?php if ($item_img): ?>
                                <div class="item-image-wrapper">
                                    <img src="<?php echo esc_url(kny_get_image_url($item_img)); ?>"
                                        alt="<?php echo esc_attr($item_title); ?>" class="item-img" loading="lazy">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
