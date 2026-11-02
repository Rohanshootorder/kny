<?php
/**
 * Room Detail Section: What's Included in Your Stay
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow  = get_field('room_included_eyebrow', $page_id);
$title    = get_field('room_included_title', $page_id);
$subtitle = get_field('room_included_subtitle', $page_id);

$col1_title = get_field('room_included_col1_title', $page_id);
$col1_items = get_field('room_included_col1_items', $page_id);

$col2_title = get_field('room_included_col2_title', $page_id);
$col2_items = get_field('room_included_col2_items', $page_id);

$col3_title = get_field('room_included_col3_title', $page_id);
$col3_items = get_field('room_included_col3_items', $page_id);
?>

<section class="kny-room-inclusions-section">
    <div class="kny-room-container">
        <div class="kny-inclusions-card">
            <!-- Inclusions Header -->
            <div class="kny-inclusions-header">
                <div class="kny-inclusions-heading-block">
                    <?php if ($eyebrow): ?>
                        <div class="kny-inclusions-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                    <?php endif; ?>
                    <?php if ($title): ?>
                        <h2 class="kny-inclusions-title"><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                </div>
                <?php if ($subtitle): ?>
                    <div class="kny-inclusions-subtitle"><?php echo esc_html($subtitle); ?></div>
                <?php endif; ?>
            </div>

            <!-- 3 Columns Grid -->
            <div class="kny-inclusions-columns-grid">
                <!-- Column 1 -->
                <div class="kny-inclusions-col">
                    <?php if ($col1_title): ?>
                        <div class="kny-inclusions-col-header">
                            <span class="kny-inclusions-col-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            </span>
                            <h3 class="kny-inclusions-col-title"><?php echo esc_html($col1_title); ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($col1_items) && is_array($col1_items)): ?>
                        <div class="kny-inclusions-list">
                            <?php foreach ($col1_items as $item): 
                                $txt = !empty($item['item_text']) ? $item['item_text'] : '';
                                $ico = !empty($item['item_icon']) ? $item['item_icon'] : '';
                                if (!$txt) continue;
                            ?>
                                <div class="kny-inclusions-item">
                                    <span class="kny-inclusions-item-icon">
                                        <?php if ($ico): ?>
                                            <?php echo kny_render_icon($ico, 'inc-svg'); ?>
                                        <?php else: ?>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php endif; ?>
                                    </span>
                                    <span class="kny-inclusions-item-text"><?php echo esc_html($txt); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Column 2 -->
                <div class="kny-inclusions-col">
                    <?php if ($col2_title): ?>
                        <div class="kny-inclusions-col-header">
                            <span class="kny-inclusions-col-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
                            </span>
                            <h3 class="kny-inclusions-col-title"><?php echo esc_html($col2_title); ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($col2_items) && is_array($col2_items)): ?>
                        <div class="kny-inclusions-list">
                            <?php foreach ($col2_items as $item): 
                                $txt = !empty($item['item_text']) ? $item['item_text'] : '';
                                $ico = !empty($item['item_icon']) ? $item['item_icon'] : '';
                                if (!$txt) continue;
                            ?>
                                <div class="kny-inclusions-item">
                                    <span class="kny-inclusions-item-icon">
                                        <?php if ($ico): ?>
                                            <?php echo kny_render_icon($ico, 'inc-svg'); ?>
                                        <?php else: ?>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php endif; ?>
                                    </span>
                                    <span class="kny-inclusions-item-text"><?php echo esc_html($txt); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Column 3 -->
                <div class="kny-inclusions-col">
                    <?php if ($col3_title): ?>
                        <div class="kny-inclusions-col-header">
                            <span class="kny-inclusions-col-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><path d="M7 15h0M2 9.5h20"></path></svg>
                            </span>
                            <h3 class="kny-inclusions-col-title"><?php echo esc_html($col3_title); ?></h3>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($col3_items) && is_array($col3_items)): ?>
                        <div class="kny-inclusions-list">
                            <?php foreach ($col3_items as $item): 
                                $txt = !empty($item['item_text']) ? $item['item_text'] : '';
                                $ico = !empty($item['item_icon']) ? $item['item_icon'] : '';
                                if (!$txt) continue;
                            ?>
                                <div class="kny-inclusions-item">
                                    <span class="kny-inclusions-item-icon">
                                        <?php if ($ico): ?>
                                            <?php echo kny_render_icon($ico, 'inc-svg'); ?>
                                        <?php else: ?>
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                        <?php endif; ?>
                                    </span>
                                    <span class="kny-inclusions-item-text"><?php echo esc_html($txt); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

