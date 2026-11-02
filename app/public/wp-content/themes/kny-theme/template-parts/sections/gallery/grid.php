<?php
/**
 * Residence Gallery Grid Section
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$grid_sec = function_exists('get_field') ? get_field('gallery_grid_section', $post_id) : array();
$eyebrow = !empty($grid_sec['eyebrow']) ? $grid_sec['eyebrow'] : '';
$title = !empty($grid_sec['title']) ? $grid_sec['title'] : '';
$hint_text = !empty($grid_sec['hint_text']) ? $grid_sec['hint_text'] : '';
$hint_icon = !empty($grid_sec['hint_icon']) ? kny_get_image_url($grid_sec['hint_icon']) : '';
$items = !empty($grid_sec['gallery_items']) && is_array($grid_sec['gallery_items']) ? $grid_sec['gallery_items'] : array();

if (empty($items)) {
    return;
}
?>

<section class="kny-gallery-grid-section">
    <div class="kny-gallery-container">
        <!-- Section Header -->
        <div class="kny-gallery-grid-header">
            <div class="kny-gallery-grid-title-wrap">
                <?php if ($eyebrow): ?>
                    <span class="kny-gallery-sub-eyebrow"><?php echo esc_html($eyebrow); ?></span>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="kny-gallery-grid-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>

            <?php if ($hint_text): ?>
                <div class="kny-gallery-hint-badge">
                    <?php if ($hint_icon): ?>
                        <img src="<?php echo esc_url($hint_icon); ?>" alt="Studio View" class="kny-gallery-hint-icon" width="13"
                            height="16">
                    <?php endif; ?>
                    <span><?php echo esc_html($hint_text); ?></span>
                </div>
            <?php endif; ?>
        </div>

        <!-- Gallery Cards 3-Column Grid -->
        <div class="kny-gallery-cards-grid" id="kny-gallery-items-grid">
            <?php foreach ($items as $idx => $item):
                $img_url = !empty($item['image']) ? kny_get_image_url($item['image']) : '';
                $cat_tag = !empty($item['category_tag']) ? $item['category_tag'] : '';
                $bhk_tag = !empty($item['bhk_tag']) ? $item['bhk_tag'] : '';
                $card_title = !empty($item['title']) ? $item['title'] : '';
                $card_desc = !empty($item['description']) ? $item['description'] : '';
                $slugs = !empty($item['filter_slugs']) ? $item['filter_slugs'] : '';

                if (!$img_url) {
                    continue;
                }
                ?>
                <div class="kny-gallery-card" data-slugs="<?php echo esc_attr($slugs); ?>"
                    data-image-src="<?php echo esc_url($img_url); ?>" data-title="<?php echo esc_attr($card_title); ?>"
                    data-category="<?php echo esc_attr($cat_tag); ?>" data-bhk="<?php echo esc_attr($bhk_tag); ?>"
                    data-desc="<?php echo esc_attr($card_desc); ?>" tabindex="0" role="button"
                    aria-label="Expand <?php echo esc_attr($card_title); ?>">

                    <!-- Card Media -->
                    <div class="kny-gallery-card-media">
                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($card_title); ?>"
                            class="kny-gallery-card-img" loading="lazy">
                        <div class="kny-gallery-card-gradient" aria-hidden="true"></div>
                    </div>

                    <!-- Top Floating Tags -->
                    <div class="kny-gallery-card-tags">
                        <?php if ($cat_tag): ?>
                            <span class="kny-card-tag kny-tag-light"><?php echo esc_html($cat_tag); ?></span>
                        <?php endif; ?>
                        <?php if ($bhk_tag): ?>
                            <span class="kny-card-tag kny-tag-green"><?php echo esc_html($bhk_tag); ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Bottom Caption -->
                    <div class="kny-gallery-card-caption">
                        <?php if ($card_title): ?>
                            <h3 class="kny-card-item-title"><?php echo esc_html($card_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($card_desc): ?>
                            <p class="kny-card-item-desc"><?php echo esc_html($card_desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Studio View Lightbox Modal -->
<div class="kny-studio-modal" id="kny-studio-modal" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="kny-studio-backdrop" id="kny-studio-backdrop"></div>
    <div class="kny-studio-dialog">
        <button type="button" class="kny-studio-close" id="kny-studio-close"
            aria-label="Close studio view">&times;</button>
        <div class="kny-studio-media-wrap">
            <img src="" alt="" class="kny-studio-modal-img" id="kny-studio-modal-img">
        </div>
        <div class="kny-studio-modal-info">
            <div class="kny-studio-tags" id="kny-studio-tags"></div>
            <h3 class="kny-studio-title" id="kny-studio-title"></h3>
            <p class="kny-studio-desc" id="kny-studio-desc"></p>
        </div>
    </div>
</div>