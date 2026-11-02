<?php
/**
 * Room Detail Section: Commute & Prime Tech Hubs
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow  = get_field('room_commute_eyebrow', $page_id);
$title    = get_field('room_commute_title', $page_id);
$subtitle = get_field('room_commute_subtitle', $page_id);
$cards    = get_field('room_commute_cards', $page_id);
?>

<section class="kny-room-commute-section">
    <div class="kny-room-container">
        <!-- Commute Header -->
        <div class="kny-commute-header">
            <div class="kny-commute-title-block">
                <?php if ($eyebrow): ?>
                    <div class="kny-commute-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="kny-commute-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>
            <?php if ($subtitle): ?>
                <div class="kny-commute-subtitle"><?php echo esc_html($subtitle); ?></div>
            <?php endif; ?>
        </div>

        <!-- 3 Transit Cards Grid -->
        <?php if (!empty($cards) && is_array($cards)): ?>
            <div class="kny-commute-cards-grid">
                <?php foreach ($cards as $card): 
                    $c_badge = !empty($card['badge']) ? $card['badge'] : '';
                    $c_title = !empty($card['title']) ? $card['title'] : '';
                    $c_desc  = !empty($card['description']) ? $card['description'] : '';
                    if (!$c_title) continue;
                ?>
                    <div class="kny-commute-card">
                        <div class="kny-commute-card-top">
                            <div class="kny-commute-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#476800" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            </div>
                            <?php if ($c_badge): ?>
                                <span class="kny-commute-badge"><?php echo esc_html($c_badge); ?></span>
                            <?php endif; ?>
                        </div>
                        <h3 class="kny-commute-card-title"><?php echo esc_html($c_title); ?></h3>
                        <?php if ($c_desc): ?>
                            <p class="kny-commute-card-desc"><?php echo nl2br(esc_html($c_desc)); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

