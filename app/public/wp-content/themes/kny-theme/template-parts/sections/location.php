<?php
/**
 * Prime Location Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$location = function_exists('get_field') ? get_field('location_section') : null;

if (empty($location)) {
    return;
}

$section_tag  = !empty($location['section_tag']) ? $location['section_tag'] : '';
$section_title = !empty($location['section_title']) ? $location['section_title'] : '';
$section_desc  = !empty($location['section_description']) ? $location['section_description'] : '';
$distances     = (!empty($location['distances']) && is_array($location['distances'])) ? $location['distances'] : array();

$btn_text     = !empty($location['btn_text']) ? $location['btn_text'] : '';
$btn_url      = !empty($location['btn_url']) ? $location['btn_url'] : '';
$card_name    = !empty($location['card_name']) ? $location['card_name'] : '';
$card_address = !empty($location['card_address']) ? $location['card_address'] : '';
$card_phone   = !empty($location['card_phone']) ? $location['card_phone'] : '';
?>

<section class="section-location" id="location">
    <div class="kny-container">
        <div class="location-grid">
            <!-- Left Column: Details & Commute Times -->
            <div class="location-details">
                <?php if ($section_tag): ?>
                    <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>

                <?php if ($section_title): ?>
                    <h2 class="section-heading"><?php echo esc_html($section_title); ?></h2>
                <?php endif; ?>

                <?php if ($section_desc): ?>
                    <p class="location-desc"><?php echo esc_html($section_desc); ?></p>
                <?php endif; ?>

                <!-- Dynamic Commute List -->
                <?php if (!empty($distances)): ?>
                    <div class="commute-list">
                        <?php foreach ($distances as $dist): 
                            $dest = !empty($dist['destination']) ? $dist['destination'] : '';
                            $time = !empty($dist['time']) ? $dist['time'] : '';
                            if (!$dest && !$time) continue;
                        ?>
                            <div class="commute-item">
                                <span class="commute-name"><?php echo esc_html($dest); ?></span>
                                <span class="commute-time"><?php echo esc_html($time); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Google Maps Button -->
                <?php if ($btn_text): ?>
                    <div class="location-action">
                        <a href="<?php echo esc_url($btn_url ? $btn_url : '#'); ?>" target="_blank" rel="noopener noreferrer"
                            class="btn-location-maps">
                            <span><?php echo esc_html($btn_text); ?></span>
                            <span class="btn-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'map-arrow'); ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Column: Interactive Styled Map Visual Card -->
            <div class="location-map-visual">
                <div class="map-card-wrapper">
                    <iframe class="google-map-iframe" title="<?php echo esc_attr($card_name); ?>"
                        src="https://maps.google.com/maps?q=<?php echo urlencode($card_name . ' ' . $card_address); ?>&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        loading="lazy" allowfullscreen>
                    </iframe>

                    <!-- Floating Location Info Card -->
                    <?php if ($card_name || $card_address || $card_phone): ?>
                        <div class="map-floating-info-card">
                            <div class="floating-pin-row">
                                <span class="pin-icon-box"><?php echo kny_render_icon('Icon-20.svg', 'pin-svg'); ?></span>
                                <div class="pin-texts">
                                    <?php if ($card_name): ?>
                                        <h4 class="pin-title"><?php echo esc_html($card_name); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($card_address): ?>
                                        <p class="pin-address"><?php echo esc_html($card_address); ?></p>
                                    <?php endif; ?>
                                    <?php if ($card_phone): ?>
                                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9\+]/', '', $card_phone)); ?>" class="pin-phone"><?php echo esc_html($card_phone); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
