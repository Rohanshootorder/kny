<?php
/**
 * Verified Corporate Reviews Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$reviews_data = function_exists('get_field') ? get_field('reviews_section') : null;

if (empty($reviews_data)) {
    return;
}

$section_tag   = !empty($reviews_data['section_tag']) ? $reviews_data['section_tag'] : '';
$section_title = !empty($reviews_data['section_title']) ? $reviews_data['section_title'] : '';
$rating_score  = !empty($reviews_data['rating_score']) ? $reviews_data['rating_score'] : '';
$rating_sub    = !empty($reviews_data['rating_sub']) ? $reviews_data['rating_sub'] : '';
$reviews       = (!empty($reviews_data['reviews']) && is_array($reviews_data['reviews'])) ? $reviews_data['reviews'] : array();
$trust_title   = !empty($reviews_data['trust_strip_title']) ? $reviews_data['trust_strip_title'] : '';
$partners      = (!empty($reviews_data['partners']) && is_array($reviews_data['partners'])) ? $reviews_data['partners'] : array();
?>

<section class="section-reviews" id="reviews">
    <div class="reviews-container">
        <!-- Header Row with Rating Score -->
        <div class="reviews-header-row">
            <div class="reviews-header-left">
                <?php if ($section_tag): ?>
                    <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>
                <?php if ($section_title): ?>
                    <h2 class="section-heading"><?php echo esc_html($section_title); ?></h2>
                <?php endif; ?>
            </div>

            <?php if ($rating_score || $rating_sub): ?>
                <div class="reviews-header-right">
                    <div class="stars-row" aria-label="5 out of 5 stars">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg class="star-svg-lg" width="17" height="16" viewBox="0 0 20 20" fill="#F59E0B" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <?php if ($rating_score): ?>
                        <div class="rating-score"><?php echo esc_html($rating_score); ?></div>
                    <?php endif; ?>
                    <?php if ($rating_sub): ?>
                        <div class="rating-sub"><?php echo esc_html($rating_sub); ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Dynamic Review Cards Grid -->
        <?php if (!empty($reviews)): ?>
            <div class="reviews-grid">
                <?php foreach ($reviews as $rev): 
                    $card_title  = !empty($rev['title']) ? $rev['title'] : '';
                    $card_body   = !empty($rev['body']) ? $rev['body'] : '';
                    $card_author = !empty($rev['author']) ? $rev['author'] : '';
                    $card_role   = !empty($rev['role']) ? $rev['role'] : '';
                    $card_avatar = !empty($rev['avatar']) ? $rev['avatar'] : ($card_author ? mb_substr($card_author, 0, 1) : '');
                    $card_badge  = !empty($rev['badge']) ? $rev['badge'] : '';
                    $card_stars  = !empty($rev['stars']) ? intval($rev['stars']) : 5;
                ?>
                    <div class="review-card">
                        <div class="review-card-top">
                            <div class="review-stars-row" aria-label="<?php echo esc_attr($card_stars); ?> stars">
                                <?php for ($s = 0; $s < $card_stars; $s++): ?>
                                    <svg class="star-svg" width="15" height="15" viewBox="0 0 20 20" fill="#F59E0B" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                <?php endfor; ?>
                            </div>

                            <?php if ($card_title): ?>
                                <h3 class="review-title"><?php echo esc_html($card_title); ?></h3>
                            <?php endif; ?>

                            <?php if ($card_body): ?>
                                <div class="review-body"><?php echo nl2br(esc_html($card_body)); ?></div>
                            <?php endif; ?>
                        </div>

                        <?php if ($card_author || $card_role || $card_avatar || $card_badge): ?>
                            <div class="review-author-bar">
                                <div class="author-info-group">
                                    <?php if ($card_avatar): ?>
                                        <div class="author-avatar"><?php echo esc_html($card_avatar); ?></div>
                                    <?php endif; ?>
                                    <div class="author-texts">
                                        <?php if ($card_author): ?>
                                            <div class="author-name"><?php echo esc_html($card_author); ?></div>
                                        <?php endif; ?>
                                        <?php if ($card_role): ?>
                                            <div class="author-role"><?php echo nl2br(esc_html($card_role)); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if ($card_badge): ?>
                                    <div class="verified-pill"><?php echo esc_html($card_badge); ?></div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Dynamic Partner Trust Strip -->
        <?php if ($trust_title || !empty($partners)): ?>
            <div class="trust-strip">
                <?php if ($trust_title): ?>
                    <div class="trust-heading"><?php echo esc_html($trust_title); ?></div>
                <?php endif; ?>
                <?php if (!empty($partners)): ?>
                    <div class="trust-partners-row">
                        <?php foreach ($partners as $idx => $p): 
                            $partner_name = !empty($p['name']) ? $p['name'] : '';
                            if (!$partner_name) continue;
                        ?>
                            <span class="partner-badge"><?php echo esc_html($partner_name); ?></span>
                            <?php if ($idx < count($partners) - 1): ?>
                                <span class="partner-dot" aria-hidden="true">·</span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
