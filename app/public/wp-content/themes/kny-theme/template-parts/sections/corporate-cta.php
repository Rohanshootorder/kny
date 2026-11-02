<?php
/**
 * Corporate Mobility CTA Banner Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$corp = function_exists('get_field') ? get_field('corporate_cta_section') : null;

if (empty($corp)) {
    return;
}

$section_tag   = !empty($corp['section_tag']) ? $corp['section_tag'] : '';
$section_title = !empty($corp['section_title']) ? $corp['section_title'] : '';
$section_desc  = !empty($corp['section_description']) ? $corp['section_description'] : '';
$features      = (!empty($corp['features']) && is_array($corp['features'])) ? $corp['features'] : array();
$btn1_t        = !empty($corp['btn1_text']) ? $corp['btn1_text'] : '';
$btn1_u        = !empty($corp['btn1_url']) ? $corp['btn1_url'] : '';
$btn2_t        = !empty($corp['btn2_text']) ? $corp['btn2_text'] : '';
$btn2_u        = !empty($corp['btn2_url']) ? $corp['btn2_url'] : '';
?>

<section class="section-corporate-cta" id="corporate-cta">
    <div class="kny-container">
        <div class="corporate-banner-card">
            <!-- Glow effect in corner -->
            <div class="corp-glow" aria-hidden="true"></div>

            <div class="corp-content">
                <?php if ($section_tag): ?>
                    <span class="corp-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>

                <?php if ($section_title): ?>
                    <h2 class="corp-title"><?php echo nl2br(esc_html($section_title)); ?></h2>
                <?php endif; ?>

                <?php if ($section_desc): ?>
                    <p class="corp-desc"><?php echo esc_html($section_desc); ?></p>
                <?php endif; ?>

                <!-- Dynamic Checkmark features -->
                <?php if (!empty($features)): ?>
                    <div class="corp-features-row">
                        <?php foreach ($features as $feat): 
                            $label = !empty($feat['label']) ? $feat['label'] : '';
                            if (!$label) continue;
                        ?>
                            <div class="corp-feature-item">
                                <span class="corp-check-icon"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#98CA31" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span>
                                <span class="corp-feature-text"><?php echo esc_html($label); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($btn1_t || $btn2_t): ?>
                <div class="corp-actions">
                    <?php if ($btn1_t): ?>
                        <a href="<?php echo esc_url($btn1_u ? $btn1_u : '#'); ?>" class="btn-corp-primary">
                            <span class="btn-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
                            <span><?php echo esc_html($btn1_t); ?></span>
                        </a>
                    <?php endif; ?>
                    <?php if ($btn2_t): ?>
                        <a href="<?php echo esc_url($btn2_u ? $btn2_u : '#'); ?>" target="_blank" rel="noopener noreferrer"
                            class="btn-corp-whatsapp">
                            <span class="btn-icon"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></span>
                            <span><?php echo esc_html($btn2_t); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
