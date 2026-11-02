<?php
/**
 * Instant Resident Assistance Banner Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$assistance = function_exists('get_field') ? get_field('assistance_section') : null;

if (empty($assistance)) {
    return;
}

$assist_tag    = !empty($assistance['section_tag']) ? $assistance['section_tag'] : '';
$assist_title  = !empty($assistance['section_title']) ? $assistance['section_title'] : '';
$assist_desc   = !empty($assistance['section_description']) ? $assistance['section_description'] : '';
$assist_btn1_t = !empty($assistance['btn1_text']) ? $assistance['btn1_text'] : '';
$assist_btn1_u = !empty($assistance['btn1_url']) ? $assistance['btn1_url'] : '';
$assist_btn2_t = !empty($assistance['btn2_text']) ? $assistance['btn2_text'] : '';
$assist_btn2_u = !empty($assistance['btn2_url']) ? $assistance['btn2_url'] : '';
?>

<section class="section-resident-assistance" id="resident-assistance">
    <div class="kny-container">
        <div class="resident-assistance-card">
            <!-- Left Info Block with Icon -->
            <div class="assistance-main-col">
                <div class="assistance-circle-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#25D366" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        <line x1="9" y1="10" x2="15" y2="10"></line>
                        <line x1="9" y1="6" x2="15" y2="6"></line>
                    </svg>
                </div>
                <div class="assistance-text-block">
                    <?php if ($assist_tag): ?>
                        <span class="assistance-eyebrow"><?php echo esc_html($assist_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($assist_title): ?>
                        <h3 class="assistance-heading"><?php echo esc_html($assist_title); ?></h3>
                    <?php endif; ?>
                    <?php if ($assist_desc): ?>
                        <p class="assistance-paragraph"><?php echo nl2br(esc_html($assist_desc)); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Buttons Block -->
            <?php if ($assist_btn1_t || $assist_btn2_t): ?>
                <div class="assistance-actions-col">
                    <?php if ($assist_btn1_t): ?>
                        <a href="<?php echo esc_url($assist_btn1_u ? $assist_btn1_u : '#'); ?>" target="_blank" rel="noopener noreferrer"
                            class="btn-assistance-whatsapp">
                            <span class="btn-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                                    </path>
                                </svg>
                            </span>
                            <span><?php echo esc_html($assist_btn1_t); ?></span>
                        </a>
                    <?php endif; ?>
                    <?php if ($assist_btn2_t): ?>
                        <a href="<?php echo esc_url($assist_btn2_u ? $assist_btn2_u : '#'); ?>" class="btn-assistance-phone">
                            <span class="btn-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2.2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg>
                            </span>
                            <span><?php echo esc_html($assist_btn2_t); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
