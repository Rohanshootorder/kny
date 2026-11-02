<?php
/**
 * Location Detail Section: Guest Testimonials
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow  = get_field('loc_test_eyebrow', $page_id);
$title    = get_field('loc_test_title', $page_id);
$subtitle = get_field('loc_test_subtitle', $page_id);

$testimonials = [
    [
        'quote'  => get_field('loc_test_c1_quote', $page_id),
        'author' => get_field('loc_test_c1_author', $page_id),
        'role'   => get_field('loc_test_c1_role', $page_id),
        'tag'    => get_field('loc_test_c1_tag', $page_id),
    ],
    [
        'quote'  => get_field('loc_test_c2_quote', $page_id),
        'author' => get_field('loc_test_c2_author', $page_id),
        'role'   => get_field('loc_test_c2_role', $page_id),
        'tag'    => get_field('loc_test_c2_tag', $page_id),
    ],
    [
        'quote'  => get_field('loc_test_c3_quote', $page_id),
        'author' => get_field('loc_test_c3_author', $page_id),
        'role'   => get_field('loc_test_c3_role', $page_id),
        'tag'    => get_field('loc_test_c3_tag', $page_id),
    ],
];
?>

<section class="kny-loc-testimonials-section" id="reviews">
    <div class="kny-container">
        <!-- Section Header -->
        <div class="kny-loc-section-center-header">
            <?php if ($eyebrow): ?>
                <div class="kny-loc-eyebrow"><?php echo esc_html($eyebrow); ?></div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="kny-loc-sec-title"><?php echo wp_kses_post($title); ?></h2>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="kny-loc-sec-desc"><?php echo wp_kses_post($subtitle); ?></p>
            <?php endif; ?>
        </div>

        <!-- 3 Testimonial Cards -->
        <div class="kny-loc-test-grid">
            <?php foreach ($testimonials as $t): 
                if (!$t['author']) continue;
            ?>
                <div class="kny-loc-test-card">
                    <div class="kny-loc-test-body">
                        <!-- 5 Green Stars -->
                        <div class="kny-loc-stars-row" aria-label="5 stars">
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                            <span class="star-icon">★</span>
                        </div>

                        <?php if ($t['quote']): ?>
                            <blockquote class="kny-loc-test-quote">
                                <?php echo wp_kses_post($t['quote']); ?>
                            </blockquote>
                        <?php endif; ?>
                    </div>

                    <div class="kny-loc-test-footer">
                        <div class="kny-loc-author-info">
                            <span class="author-name"><?php echo esc_html($t['author']); ?></span>
                            <?php if ($t['role']): ?>
                                <span class="author-role"><?php echo esc_html($t['role']); ?></span>
                            <?php endif; ?>
                        </div>

                        <?php if ($t['tag']): ?>
                            <div class="kny-loc-stay-tag">
                                <span class="tag-icon">⏱</span>
                                <span><?php echo esc_html($t['tag']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
