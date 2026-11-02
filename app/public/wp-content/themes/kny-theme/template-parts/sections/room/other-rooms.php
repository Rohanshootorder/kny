<?php
/**
 * Room Detail Section: Explore Other Accommodations
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow   = get_field('room_other_eyebrow', $page_id);
$title     = get_field('room_other_title', $page_id);
$link_text = get_field('room_other_link_text', $page_id);
$link_url  = get_field('room_other_link_url', $page_id);
$cards     = get_field('room_other_cards', $page_id);
?>

<section class="kny-room-other-section">
    <div class="kny-room-container">
        <!-- Section Header -->
        <div class="kny-other-header">
            <div class="kny-other-title-block">
                <?php if ($eyebrow): ?>
                    <div class="kny-other-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="kny-other-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>

            <?php if ($link_text): ?>
                <a href="<?php echo esc_url($link_url ?: '/rooms/'); ?>" class="kny-other-view-all">
                    <span><?php echo esc_html($link_text); ?></span>
                </a>
            <?php endif; ?>
        </div>

        <!-- 2 Comparison Cards Grid -->
        <?php if (!empty($cards) && is_array($cards)): ?>
            <div class="kny-other-cards-grid">
                <?php foreach ($cards as $card): 
                    $c_tag    = !empty($card['tag']) ? $card['tag'] : '';
                    $c_img    = !empty($card['image']) ? $card['image'] : '';
                    $c_rate   = !empty($card['rate']) ? $card['rate'] : '';
                    $c_meta   = !empty($card['meta']) ? $card['meta'] : '';
                    $c_title  = !empty($card['title']) ? $card['title'] : '';
                    $c_desc   = !empty($card['description']) ? $card['description'] : '';
                    $c_link_t = !empty($card['detail_link_text']) ? $card['detail_link_text'] : '';
                    $c_link_u = !empty($card['detail_link_url']) ? $card['detail_link_url'] : '';
                    $c_btn_t  = !empty($card['inquire_btn_text']) ? $card['inquire_btn_text'] : '';
                    $c_btn_u  = !empty($card['inquire_btn_link']) ? $card['inquire_btn_link'] : '';

                    $img_url = $c_img ? kny_get_image_url($c_img) : '';
                    if (!$c_title) continue;
                ?>
                    <div class="kny-other-card">
                        <?php if ($img_url): ?>
                            <div class="kny-other-card-img-wrap">
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($c_title); ?>" class="kny-other-card-img" loading="lazy">
                                <?php if ($c_tag): ?>
                                    <span class="kny-other-card-tag"><?php echo esc_html($c_tag); ?></span>
                                <?php endif; ?>
                                <?php if ($c_rate): ?>
                                    <span class="kny-other-card-price"><?php echo esc_html($c_rate); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <div class="kny-other-card-body">
                            <?php if ($c_meta): ?>
                                <div class="kny-other-card-meta"><?php echo esc_html($c_meta); ?></div>
                            <?php endif; ?>

                            <h3 class="kny-other-card-title"><?php echo esc_html($c_title); ?></h3>

                            <?php if ($c_desc): ?>
                                <p class="kny-other-card-desc"><?php echo nl2br(esc_html($c_desc)); ?></p>
                            <?php endif; ?>

                            <div class="kny-other-card-actions">
                                <?php if ($c_link_t): ?>
                                    <a href="<?php echo esc_url($c_link_u ?: '/rooms/'); ?>" class="kny-other-card-detail-link">
                                        <?php echo esc_html($c_link_t); ?>
                                    </a>
                                <?php endif; ?>

                                <?php if ($c_btn_t): ?>
                                    <a href="<?php echo esc_url($c_btn_u ?: '/contact/'); ?>" class="kny-other-card-inquire-btn">
                                        <?php echo esc_html($c_btn_t); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

