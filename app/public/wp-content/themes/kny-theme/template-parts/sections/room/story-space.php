<?php
/**
 * Room Detail Section: Residency Story & Space
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow = get_field('room_story_eyebrow', $page_id);
$title   = get_field('room_story_title', $page_id);
$p1      = get_field('room_story_p1', $page_id);
$p2      = get_field('room_story_p2', $page_id);
$cards   = get_field('room_story_cards', $page_id);
?>

<section class="kny-room-story-section">
    <div class="kny-room-container">
        <!-- Story Header -->
        <div class="kny-room-story-header">
            <?php if ($eyebrow): ?>
                <div class="kny-room-story-eyebrow">
                    <span><?php echo esc_html($eyebrow); ?></span>
                </div>
            <?php endif; ?>

            <?php if ($title): ?>
                <h2 class="kny-room-story-title"><?php echo esc_html($title); ?></h2>
            <?php endif; ?>

            <div class="kny-room-story-paragraphs">
                <?php if ($p1): ?>
                    <p class="kny-room-story-p"><?php echo nl2br(esc_html($p1)); ?></p>
                <?php endif; ?>
                <?php if ($p2): ?>
                    <p class="kny-room-story-p"><?php echo nl2br(esc_html($p2)); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <!-- 6 Feature Cards Grid -->
        <?php if (!empty($cards) && is_array($cards)): ?>
            <div class="kny-room-story-cards-grid">
                <?php foreach ($cards as $card): 
                    $c_icon  = !empty($card['icon']) ? $card['icon'] : '';
                    $c_title = !empty($card['title']) ? $card['title'] : '';
                    $c_desc  = !empty($card['description']) ? $card['description'] : '';
                    if (!$c_title && !$c_desc) continue;
                ?>
                    <div class="kny-story-card">
                        <div class="kny-story-card-icon-box">
                            <?php if ($c_icon): ?>
                                <?php echo kny_render_icon($c_icon, 'story-card-svg'); ?>
                            <?php else: ?>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <?php endif; ?>
                        </div>
                        <div class="kny-story-card-content">
                            <?php if ($c_title): ?>
                                <h3 class="kny-story-card-title"><?php echo esc_html($c_title); ?></h3>
                            <?php endif; ?>
                            <?php if ($c_desc): ?>
                                <p class="kny-story-card-desc"><?php echo nl2br(esc_html($c_desc)); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

