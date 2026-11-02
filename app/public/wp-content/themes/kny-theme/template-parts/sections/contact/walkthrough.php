<?php
/**
 * Contact Walkthrough Banner Section
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$walkthrough_sec = function_exists('get_field') ? get_field('contact_walkthrough_section', $post_id) : array();

$bg_image_url = !empty($walkthrough_sec['background_image']) ? kny_get_image_url($walkthrough_sec['background_image']) : '';
$tag = !empty($walkthrough_sec['tag']) ? $walkthrough_sec['tag'] : '';
$title = !empty($walkthrough_sec['title']) ? $walkthrough_sec['title'] : '';
$button_url = !empty($walkthrough_sec['button_url']) ? $walkthrough_sec['button_url'] : '#contact-form';

if (empty($title) && empty($bg_image_url)) {
    return;
}
?>

<section class="kny-contact-walkthrough-section">
    <div class="kny-contact-container">
        <a href="<?php echo esc_url($button_url); ?>" class="kny-walkthrough-banner"
            style="<?php echo $bg_image_url ? 'background-image: url(' . esc_url($bg_image_url) . ');' : ''; ?>">
            <div class="kny-walkthrough-overlay">
                <?php if ($tag): ?>
                    <span class="kny-walkthrough-tag"><?php echo esc_html($tag); ?></span>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h3 class="kny-walkthrough-title"><?php echo nl2br(esc_html($title)); ?></h3>
                <?php endif; ?>
            </div>
        </a>
    </div>
</section>