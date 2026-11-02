<?php
/**
 * Contact Hero & Form Section + Direct Inquiries Cards
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$form_sec = function_exists('get_field') ? get_field('contact_form_section', $post_id) : array();
$cards_sec = function_exists('get_field') ? get_field('contact_cards_section', $post_id) : array();

$hero_title = !empty($form_sec['hero_title']) ? $form_sec['hero_title'] : '';
$hero_description = !empty($form_sec['hero_description']) ? $form_sec['hero_description'] : '';

$form_title = !empty($form_sec['form_title']) ? $form_sec['form_title'] : '';
$form_subtitle = !empty($form_sec['form_subtitle']) ? $form_sec['form_subtitle'] : '';
$stay_types_label = !empty($form_sec['stay_types_label']) ? $form_sec['stay_types_label'] : '';
$stay_types = !empty($form_sec['stay_types']) && is_array($form_sec['stay_types']) ? $form_sec['stay_types'] : array();

$name_label = !empty($form_sec['name_label']) ? $form_sec['name_label'] : '';
$name_placeholder = !empty($form_sec['name_placeholder']) ? $form_sec['name_placeholder'] : '';
$email_label = !empty($form_sec['email_label']) ? $form_sec['email_label'] : '';
$email_placeholder = !empty($form_sec['email_placeholder']) ? $form_sec['email_placeholder'] : '';
$phone_label = !empty($form_sec['phone_label']) ? $form_sec['phone_label'] : '';
$phone_prefix = !empty($form_sec['phone_prefix']) ? $form_sec['phone_prefix'] : '+91';
$phone_placeholder = !empty($form_sec['phone_placeholder']) ? $form_sec['phone_placeholder'] : '';
$message_label = !empty($form_sec['message_label']) ? $form_sec['message_label'] : '';
$message_hint = !empty($form_sec['message_hint']) ? $form_sec['message_hint'] : '';
$message_placeholder = !empty($form_sec['message_placeholder']) ? $form_sec['message_placeholder'] : '';
$submit_btn_text = !empty($form_sec['submit_btn_text']) ? $form_sec['submit_btn_text'] : '';
$sla_icon_url = !empty($form_sec['sla_icon']) ? kny_get_image_url($form_sec['sla_icon']) : '';
$sla_text = !empty($form_sec['sla_text']) ? $form_sec['sla_text'] : '';

$email_desks_tag = !empty($cards_sec['email_desks_tag']) ? $cards_sec['email_desks_tag'] : '';
$email_desks_title = !empty($cards_sec['email_desks_title']) ? $cards_sec['email_desks_title'] : '';
$email_desks_icon = !empty($cards_sec['email_desks_icon']) ? kny_get_image_url($cards_sec['email_desks_icon']) : '';
$email_desks = !empty($cards_sec['email_desks']) && is_array($cards_sec['email_desks']) ? $cards_sec['email_desks'] : array();
$locations = !empty($cards_sec['locations']) && is_array($cards_sec['locations']) ? $cards_sec['locations'] : array();
?>

<section class="kny-contact-hero-section" id="contact-form">
    <div class="kny-contact-glow-blob" aria-hidden="true"></div>

    <div class="kny-contact-container">
        <!-- Hero Header -->
        <div class="kny-contact-hero-header">
            <?php if ($hero_title): ?>
                <h1 class="kny-contact-hero-title"><?php echo esc_html($hero_title); ?></h1>
            <?php endif; ?>
            <?php if ($hero_description): ?>
                <p class="kny-contact-hero-desc"><?php echo esc_html($hero_description); ?></p>
            <?php endif; ?>
        </div>

        <!-- Two Columns Layout -->
        <div class="kny-contact-main-grid">
            <!-- Left Column: Contact Form Card -->
            <div class="kny-contact-form-card">
                <div class="kny-contact-form-header">
                    <?php if ($form_title): ?>
                        <h2 class="kny-contact-form-title"><?php echo esc_html($form_title); ?></h2>
                    <?php endif; ?>
                    <?php if ($form_subtitle): ?>
                        <p class="kny-contact-form-subtitle"><?php echo esc_html($form_subtitle); ?></p>
                    <?php endif; ?>
                </div>

                <form class="kny-contact-form" action="#" method="post" id="kny-main-contact-form">
                    <!-- Stay Type Selector -->
                    <?php if (!empty($stay_types)): ?>
                        <div class="kny-form-group kny-stay-type-group">
                            <?php if ($stay_types_label): ?>
                                <label class="kny-form-label"><?php echo esc_html($stay_types_label); ?></label>
                            <?php endif; ?>
                            <div class="kny-stay-types-pills" role="radiogroup" aria-label="Stay Type Selection">
                                <input type="hidden" name="stay_type" id="kny-selected-stay-type" value="<?php
                                $default_val = '';
                                foreach ($stay_types as $st) {
                                    if (!empty($st['is_active'])) {
                                        $default_val = $st['name'];
                                        break;
                                    }
                                }
                                echo esc_attr($default_val ?: ($stay_types[0]['name'] ?? ''));
                                ?>">
                                <?php foreach ($stay_types as $st):
                                    $active_class = !empty($st['is_active']) ? ' is-active' : '';
                                    ?>
                                    <button type="button" class="kny-stay-pill<?php echo esc_attr($active_class); ?>"
                                        data-value="<?php echo esc_attr($st['name']); ?>">
                                        <?php echo esc_html($st['name']); ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Row: Name & Email -->
                    <div class="kny-form-row">
                        <div class="kny-form-group">
                            <?php if ($name_label): ?>
                                <label for="kny-contact-name"
                                    class="kny-form-label"><?php echo esc_html($name_label); ?></label>
                            <?php endif; ?>
                            <input type="text" id="kny-contact-name" name="full_name" class="kny-form-input"
                                placeholder="<?php echo esc_attr($name_placeholder); ?>" required>
                        </div>
                        <div class="kny-form-group">
                            <?php if ($email_label): ?>
                                <label for="kny-contact-email"
                                    class="kny-form-label"><?php echo esc_html($email_label); ?></label>
                            <?php endif; ?>
                            <input type="email" id="kny-contact-email" name="email" class="kny-form-input"
                                placeholder="<?php echo esc_attr($email_placeholder); ?>" required>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="kny-form-group">
                        <?php if ($phone_label): ?>
                            <label for="kny-contact-phone"
                                class="kny-form-label"><?php echo esc_html($phone_label); ?></label>
                        <?php endif; ?>
                        <div class="kny-phone-input-wrap">
                            <span class="kny-phone-prefix"><?php echo esc_html($phone_prefix); ?></span>
                            <input type="tel" id="kny-contact-phone" name="phone" class="kny-form-input kny-phone-input"
                                placeholder="<?php echo esc_attr($phone_placeholder); ?>" required>
                        </div>
                    </div>

                    <!-- Message / Inquiry -->
                    <div class="kny-form-group">
                        <div class="kny-form-label-row">
                            <?php if ($message_label): ?>
                                <label for="kny-contact-message"
                                    class="kny-form-label"><?php echo esc_html($message_label); ?></label>
                            <?php endif; ?>
                            <?php if ($message_hint): ?>
                                <span class="kny-form-hint"><?php echo esc_html($message_hint); ?></span>
                            <?php endif; ?>
                        </div>
                        <textarea id="kny-contact-message" name="message" class="kny-form-textarea" rows="4"
                            placeholder="<?php echo esc_attr($message_placeholder); ?>" required></textarea>
                    </div>

                    <!-- Actions Row: Button + SLA -->
                    <div class="kny-form-actions-row">
                        <?php if ($submit_btn_text): ?>
                            <button type="submit" class="kny-btn kny-contact-submit-btn">
                                <span><?php echo esc_html($submit_btn_text); ?></span>
                            </button>
                        <?php endif; ?>

                        <?php if ($sla_text): ?>
                            <div class="kny-form-sla-badge">
                                <?php if ($sla_icon_url): ?>
                                    <img src="<?php echo esc_url($sla_icon_url); ?>" alt="SLA Clock" class="kny-sla-icon"
                                        width="16" height="16">
                                <?php endif; ?>
                                <span><?php echo esc_html($sla_text); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </form>
            </div>

            <!-- Right Column: Email Desks & Locations -->
            <div class="kny-contact-right-cards">
                <!-- Card 1: Email Desks -->
                <div class="kny-contact-card kny-email-desks-card">
                    <div class="kny-card-top-header">
                        <div class="kny-card-tag-title-wrap">
                            <?php if ($email_desks_tag): ?>
                                <span class="kny-card-eyebrow"><?php echo esc_html($email_desks_tag); ?></span>
                            <?php endif; ?>
                            <?php if ($email_desks_title): ?>
                                <h3 class="kny-card-title"><?php echo esc_html($email_desks_title); ?></h3>
                            <?php endif; ?>
                        </div>
                        <?php if ($email_desks_icon): ?>
                            <div class="kny-card-icon-circle">
                                <img src="<?php echo esc_url($email_desks_icon); ?>" alt="Mail Icon" class="kny-card-icon"
                                    width="20" height="20">
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($email_desks)): ?>
                        <div class="kny-email-desks-list">
                            <?php foreach ($email_desks as $desk):
                                $badge_style = !empty($desk['badge_style']) && $desk['badge_style'] === 'green' ? 'kny-badge-green' : 'kny-badge-gray';
                                ?>
                                <div class="kny-email-desk-row">
                                    <div class="kny-email-desk-info">
                                        <span class="kny-desk-label"><?php echo esc_html($desk['label']); ?></span>
                                        <a href="mailto:<?php echo esc_attr($desk['email']); ?>"
                                            class="kny-desk-email"><?php echo esc_html($desk['email']); ?></a>
                                    </div>
                                    <?php if (!empty($desk['badge'])): ?>
                                        <span
                                            class="kny-desk-badge <?php echo esc_attr($badge_style); ?>"><?php echo esc_html($desk['badge']); ?></span>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Locations Cards -->
                <?php if (!empty($locations)): ?>
                    <?php foreach ($locations as $loc):
                        $loc_icon = !empty($loc['icon']) ? kny_get_image_url($loc['icon']) : '';
                        $map_img = !empty($loc['map_image']) ? kny_get_image_url($loc['map_image']) : '';
                        $btn_icon = !empty($loc['map_btn_icon']) ? kny_get_image_url($loc['map_btn_icon']) : '';
                        ?>
                        <div class="kny-contact-card kny-location-card">
                            <div class="kny-card-top-header">
                                <div class="kny-loc-tag-wrap">
                                    <?php if ($loc_icon): ?>
                                        <div class="kny-loc-icon-box">
                                            <img src="<?php echo esc_url($loc_icon); ?>" alt="Pin" class="kny-pin-icon" width="18"
                                                height="18">
                                        </div>
                                    <?php endif; ?>
                                    <span class="kny-card-eyebrow"><?php echo esc_html($loc['tag']); ?></span>
                                </div>
                                <?php if (!empty($loc['badge'])): ?>
                                    <span class="kny-desk-badge kny-badge-green"><?php echo esc_html($loc['badge']); ?></span>
                                <?php endif; ?>
                            </div>

                            <div class="kny-loc-details">
                                <h4 class="kny-loc-title"><?php echo esc_html($loc['title']); ?></h4>
                                <p class="kny-loc-address"><?php echo esc_html($loc['address']); ?></p>
                                <?php if (!empty($loc['vicinity_note'])): ?>
                                    <p class="kny-loc-vicinity"><?php echo esc_html($loc['vicinity_note']); ?></p>
                                <?php endif; ?>
                            </div>

                            <?php if ($map_img): ?>
                                <div class="kny-loc-map-wrap">
                                    <img src="<?php echo esc_url($map_img); ?>" alt="Map View" class="kny-map-img">
                                    <div class="kny-map-overlay">
                                        <div class="kny-map-info">
                                            <span
                                                class="kny-map-overlay-title"><?php echo esc_html($loc['map_overlay_title']); ?></span>
                                            <span
                                                class="kny-map-overlay-sub"><?php echo esc_html($loc['map_overlay_subtitle']); ?></span>
                                        </div>
                                        <?php if (!empty($loc['map_btn_text'])): ?>
                                            <a href="<?php echo esc_url($loc['map_btn_url'] ?: '#'); ?>" target="_blank"
                                                rel="noopener noreferrer" class="kny-map-btn">
                                                <span><?php echo esc_html($loc['map_btn_text']); ?></span>
                                                <?php if ($btn_icon): ?>
                                                    <img src="<?php echo esc_url($btn_icon); ?>" alt="Link" class="kny-map-ext-icon"
                                                        width="12" height="12">
                                                <?php else: ?>
                                                    <span class="kny-arrow-icon" aria-hidden="true">↗</span>
                                                <?php endif; ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>