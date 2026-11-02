<?php
/**
 * Stay Informed Newsletter Section Template
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$newsletter = function_exists('get_field') ? get_field('about_newsletter', get_the_ID()) : null;

if (empty($newsletter)) {
    return;
}

$mail_icon_id = !empty($newsletter['icon']) ? (int) $newsletter['icon'] : 0;
$mail_icon_url = $mail_icon_id ? wp_get_attachment_image_url($mail_icon_id, 'full') : '';
?>

<section class="about-newsletter-section">
    <div class="about-container">
        <div class="about-newsletter-card">
            <div class="about-newsletter-content">
                <?php if (!empty($newsletter['badge_text'])): ?>
                    <span class="about-eyebrow"><?php echo esc_html($newsletter['badge_text']); ?></span>
                <?php endif; ?>

                <?php if (!empty($newsletter['title'])): ?>
                    <h3 class="about-newsletter-title"><?php echo esc_html($newsletter['title']); ?></h3>
                <?php endif; ?>

                <?php if (!empty($newsletter['description'])): ?>
                    <p class="about-newsletter-desc"><?php echo nl2br(esc_html($newsletter['description'])); ?></p>
                <?php endif; ?>
            </div>

            <div class="about-newsletter-form-wrap">
                <form class="about-newsletter-form"
                    onsubmit="event.preventDefault(); alert('Thank you for subscribing to KNY corporate updates.');">
                    <div class="about-newsletter-input-box">
                        <?php if (!empty($mail_icon_url)): ?>
                            <img src="<?php echo esc_url($mail_icon_url); ?>" alt="" class="about-newsletter-icon" />
                        <?php else: ?>
                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.67 13.33H15C15.92 13.33 16.67 12.58 16.67 11.67V1.67C16.67 0.75 15.92 0 15 0H1.67C0.75 0 0 0.75 0 1.67V11.67C0 12.58 0.75 13.33 1.67 13.33ZM8.33 7.5L1.67 3.33V1.67L8.33 5.83L15 1.67V3.33L8.33 7.5Z"
                                    fill="#5C5F62" />
                            </svg>
                        <?php endif; ?>
                        <input type="email"
                            placeholder="<?php echo esc_attr($newsletter['input_placeholder'] ?? 'corporate.email@company.com'); ?>"
                            required class="about-newsletter-input" />
                    </div>

                    <?php if (!empty($newsletter['button_text'])): ?>
                        <button type="submit" class="btn-about-newsletter">
                            <?php echo esc_html($newsletter['button_text']); ?>
                        </button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>