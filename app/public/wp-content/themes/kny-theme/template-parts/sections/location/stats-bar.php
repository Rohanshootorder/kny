<?php
/**
 * Location Detail Section: Key Stats Bar
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$stats = [
    [
        'number'  => get_field('loc_stat1_number', $page_id),
        'title'   => get_field('loc_stat1_title', $page_id),
        'subtext' => get_field('loc_stat1_subtext', $page_id),
    ],
    [
        'number'  => get_field('loc_stat2_number', $page_id),
        'title'   => get_field('loc_stat2_title', $page_id),
        'subtext' => get_field('loc_stat2_subtext', $page_id),
    ],
    [
        'number'  => get_field('loc_stat3_number', $page_id),
        'title'   => get_field('loc_stat3_title', $page_id),
        'subtext' => get_field('loc_stat3_subtext', $page_id),
    ],
    [
        'number'  => get_field('loc_stat4_number', $page_id),
        'title'   => get_field('loc_stat4_title', $page_id),
        'subtext' => get_field('loc_stat4_subtext', $page_id),
    ],
];
?>

<section class="kny-loc-stats-section">
    <div class="kny-container">
        <div class="kny-loc-stats-card">
            <?php foreach ($stats as $stat): 
                if (!$stat['number'] && !$stat['title']) continue;
            ?>
                <div class="kny-loc-stat-col">
                    <div class="kny-loc-stat-num"><?php echo esc_html($stat['number']); ?></div>
                    <div class="kny-loc-stat-title"><?php echo esc_html($stat['title']); ?></div>
                    <?php if ($stat['subtext']): ?>
                        <div class="kny-loc-stat-subtext"><?php echo esc_html($stat['subtext']); ?></div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

