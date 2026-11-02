<?php
/**
 * Distinction / Features Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$distinction = function_exists('get_field') ? get_field('distinction_section') : null;

if (empty($distinction)) {
    return;
}

$section_tag   = !empty($distinction['section_tag']) ? $distinction['section_tag'] : '';
$section_title = !empty($distinction['section_title']) ? $distinction['section_title'] : '';
$section_desc  = !empty($distinction['section_description']) ? $distinction['section_description'] : '';
$cards         = (!empty($distinction['cards']) && is_array($distinction['cards'])) ? $distinction['cards'] : array();
?>

<section class="section-distinction" id="distinction">
    <div class="kny-container">
        <!-- Section Header Row -->
        <?php if ($section_tag || $section_title || $section_desc): ?>
            <div class="distinction-header-row">
                <div class="distinction-header-left">
                    <?php if ($section_tag): ?>
                        <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($section_title): ?>
                        <h2 class="section-heading"><?php echo nl2br(esc_html($section_title)); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if ($section_desc): ?>
                    <div class="distinction-header-right">
                        <p class="section-subtext"><?php echo esc_html($section_desc); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- Dynamic Feature Cards Grid -->
        <?php if (!empty($cards)): ?>
            <div class="distinction-cards-grid">
                <?php foreach ($cards as $card): 
                    $card_icon  = !empty($card['icon']) ? $card['icon'] : '';
                    $card_title = !empty($card['title']) ? $card['title'] : '';
                    $card_desc  = !empty($card['description']) ? $card['description'] : '';
                    $card_badge = !empty($card['badge']) ? $card['badge'] : '';
                    if (!$card_title && !$card_desc) continue;
                ?>
                    <div class="distinction-card">
                        <?php if ($card_icon): ?>
                            <div class="card-icon-box">
                                <?php echo kny_render_icon($card_icon, 'feature-icon'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($card_title): ?>
                            <h3 class="card-title"><?php echo nl2br(esc_html($card_title)); ?></h3>
                        <?php endif; ?>

                        <?php if ($card_desc): ?>
                            <p class="card-desc"><?php echo nl2br(esc_html($card_desc)); ?></p>
                        <?php endif; ?>

                        <?php if ($card_badge): ?>
                            <div class="card-footer-badge">
                                <span class="badge-text"><?php echo esc_html($card_badge); ?></span>
                                <span class="badge-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'card-arrow'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
