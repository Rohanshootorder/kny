<?php
/**
 * Room Detail Section: Corporate Relocation Banner (30+ Day)
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow   = get_field('room_relocation_eyebrow', $page_id);
$title     = get_field('room_relocation_title', $page_id);
$desc      = get_field('room_relocation_desc', $page_id);
$btn1_text = get_field('room_relocation_btn1_text', $page_id);
$btn1_link = get_field('room_relocation_btn1_link', $page_id);
$btn2_text = get_field('room_relocation_btn2_text', $page_id);
$btn2_link = get_field('room_relocation_btn2_link', $page_id);
?>

<section class="kny-room-relocation-section">
    <div class="kny-room-container">
        <div class="kny-relocation-banner-card">
            <div class="kny-relocation-ambient-glow"></div>
            
            <div class="kny-relocation-content-left">
                <?php if ($eyebrow): ?>
                    <div class="kny-relocation-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="kny-relocation-title"><?php echo nl2br(esc_html($title)); ?></h2>
                <?php endif; ?>
                <?php if ($desc): ?>
                    <p class="kny-relocation-desc"><?php echo nl2br(esc_html($desc)); ?></p>
                <?php endif; ?>
            </div>

            <div class="kny-relocation-actions-right">
                <?php if ($btn1_text): ?>
                    <a href="<?php echo esc_url($btn1_link ?: '/contact/'); ?>" class="kny-relocation-btn-primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span><?php echo esc_html($btn1_text); ?></span>
                    </a>
                <?php endif; ?>

                <?php if ($btn2_text): ?>
                    <a href="<?php echo esc_url($btn2_link ?: 'https://wa.me/919701006789'); ?>" target="_blank" rel="noopener noreferrer" class="kny-relocation-btn-secondary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#98CA31" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        <span><?php echo esc_html($btn2_text); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

