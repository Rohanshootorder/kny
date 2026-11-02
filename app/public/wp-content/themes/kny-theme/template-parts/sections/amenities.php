<?php
/**
 * Amenities Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$amenities = function_exists('get_field') ? get_field('amenities_section') : null;

if (empty($amenities)) {
    return;
}

$section_tag        = !empty($amenities['section_tag']) ? $amenities['section_tag'] : '';
$section_title      = !empty($amenities['section_title']) ? $amenities['section_title'] : '';
$section_desc       = !empty($amenities['section_description']) ? $amenities['section_description'] : '';
$circular_amenities = (!empty($amenities['circular_amenities']) && is_array($amenities['circular_amenities'])) ? $amenities['circular_amenities'] : array();
$pill_amenities     = (!empty($amenities['pill_amenities']) && is_array($amenities['pill_amenities'])) ? $amenities['pill_amenities'] : array();
?>

<section class="section-amenities" id="amenities">
    <div class="kny-container">
        <!-- Section Header -->
        <?php if ($section_tag || $section_title || $section_desc): ?>
            <div class="section-header-centered">
                <?php if ($section_tag): ?>
                    <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>
                <?php if ($section_title): ?>
                    <h2 class="section-heading"><?php echo esc_html($section_title); ?></h2>
                <?php endif; ?>
                <?php if ($section_desc): ?>
                    <p class="section-subtext"><?php echo esc_html($section_desc); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 4 Circular Featured Amenities -->
        <?php if (!empty($circular_amenities)): ?>
            <div class="amenities-circle-grid">
                <?php foreach ($circular_amenities as $item): 
                    $item_img   = !empty($item['image']) ? $item['image'] : '';
                    $item_title = !empty($item['title']) ? $item['title'] : '';
                    $item_desc  = !empty($item['description']) ? $item['description'] : '';
                    if (!$item_img && !$item_title) continue;
                ?>
                    <div class="amenity-circle-card">
                        <?php if ($item_img): ?>
                            <div class="circle-image-wrapper">
                                <img src="<?php echo esc_url(kny_get_image_url($item_img)); ?>"
                                    alt="<?php echo esc_attr($item_title); ?>" class="circle-img" loading="lazy">
                            </div>
                        <?php endif; ?>
                        <?php if ($item_title): ?>
                            <h3 class="amenity-title"><?php echo esc_html($item_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($item_desc): ?>
                            <p class="amenity-desc"><?php echo esc_html($item_desc); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Pill Amenity Badges Row -->
        <?php if (!empty($pill_amenities)): ?>
            <div class="amenities-pill-row">
                <?php foreach ($pill_amenities as $pill): 
                    $pill_icon  = !empty($pill['icon']) ? $pill['icon'] : '';
                    $pill_label = !empty($pill['label']) ? $pill['label'] : '';
                    if (!$pill_label) continue;
                ?>
                    <div class="amenity-pill-badge">
                        <?php if ($pill_icon): ?>
                            <span class="pill-icon"><?php echo kny_render_icon($pill_icon, 'pill-svg'); ?></span>
                        <?php endif; ?>
                        <span class="pill-label"><?php echo esc_html($pill_label); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
