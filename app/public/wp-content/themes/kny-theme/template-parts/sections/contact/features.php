<?php
/**
 * Contact Features Bar Section
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$features_sec = function_exists('get_field') ? get_field('contact_features_section', $post_id) : array();
$features = !empty($features_sec['features']) && is_array($features_sec['features']) ? $features_sec['features'] : array();

if (empty($features)) {
    return;
}
?>

<section class="kny-contact-features-section">
    <div class="kny-contact-container">
        <div class="kny-contact-features-bar">
            <?php foreach ($features as $f):
                $icon_url = !empty($f['icon']) ? kny_get_image_url($f['icon']) : '';
                ?>
                <div class="kny-contact-feature-item">
                    <?php if ($icon_url): ?>
                        <div class="kny-feature-icon-box">
                            <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($f['title']); ?>"
                                class="kny-feature-icon" width="20" height="20">
                        </div>
                    <?php endif; ?>
                    <div class="kny-feature-content">
                        <h4 class="kny-feature-title"><?php echo esc_html($f['title']); ?></h4>
                        <p class="kny-feature-desc"><?php echo esc_html($f['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>