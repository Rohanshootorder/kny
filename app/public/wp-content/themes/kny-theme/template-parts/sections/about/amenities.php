<?php
/**
 * Everyday Amenities Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$amenities_section = function_exists('get_field') ? get_field('about_amenities', get_the_ID()) : null;

if (empty($amenities_section)) {
    return;
}
?>

<section class="about-amenities-section">
    <div class="about-container">
        <div class="about-amenities-header">
            <?php if (!empty($amenities_section['badge_text'])): ?>
                <span class="about-eyebrow"><?php echo esc_html($amenities_section['badge_text']); ?></span>
            <?php endif; ?>

            <?php if (!empty($amenities_section['title'])): ?>
                <h2 class="about-section-heading"><?php echo esc_html($amenities_section['title']); ?></h2>
            <?php endif; ?>

            <?php if (!empty($amenities_section['description'])): ?>
                <p class="about-section-subtext"><?php echo nl2br(esc_html($amenities_section['description'])); ?></p>
            <?php endif; ?>
        </div>

        <?php if (!empty($amenities_section['amenities']) && is_array($amenities_section['amenities'])): ?>
            <div class="about-amenities-grid">
                <?php foreach ($amenities_section['amenities'] as $item):
                    $img_id = !empty($item['image']) ? (int) $item['image'] : 0;
                    $img_url = $img_id ? wp_get_attachment_image_url($img_id, 'full') : '';
                    ?>
                    <div class="about-amenity-card">
                        <?php if (!empty($img_url)): ?>
                            <div class="about-amenity-img-wrapper">
                                <div class="about-amenity-img-inner">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($item['title'] ?? ''); ?>"
                                        class="about-amenity-img" />
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="about-amenity-info">
                            <?php if (!empty($item['title'])): ?>
                                <h3 class="about-amenity-card-title"><?php echo nl2br(esc_html($item['title'])); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty($item['description'])): ?>
                                <p class="about-amenity-card-desc"><?php echo nl2br(esc_html($item['description'])); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>