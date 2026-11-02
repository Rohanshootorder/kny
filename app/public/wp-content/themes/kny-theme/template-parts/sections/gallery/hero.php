<?php
/**
 * Gallery Hero & Category Filter Section
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$post_id = get_the_ID();
$hero_sec = function_exists('get_field') ? get_field('gallery_hero_section', $post_id) : array();
$eyebrow = !empty($hero_sec['eyebrow']) ? $hero_sec['eyebrow'] : '';
$title = !empty($hero_sec['title']) ? $hero_sec['title'] : '';
$filters = !empty($hero_sec['filters']) && is_array($hero_sec['filters']) ? $hero_sec['filters'] : array();
?>

<section class="kny-gallery-hero-section">
    <div class="kny-gallery-container">
        <!-- Eyebrow with green dot -->
        <?php if ($eyebrow): ?>
            <div class="kny-gallery-eyebrow-wrap">
                <span class="kny-gallery-dot" aria-hidden="true"></span>
                <span class="kny-gallery-eyebrow"><?php echo esc_html($eyebrow); ?></span>
            </div>
        <?php endif; ?>

        <!-- Hero Title -->
        <?php if ($title): ?>
            <h1 class="kny-gallery-hero-title"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

        <!-- Filter Pills Bar -->
        <?php if (!empty($filters)): ?>
            <div class="kny-gallery-filters-bar" role="tablist" aria-label="Gallery Category Filters">
                <?php foreach ($filters as $f):
                    $is_active = !empty($f['is_active']);
                    $active_class = $is_active ? ' is-active' : '';
                    ?>
                    <button type="button" class="kny-gallery-filter-pill<?php echo esc_attr($active_class); ?>"
                        data-filter="<?php echo esc_attr($f['slug']); ?>" role="tab"
                        aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>">
                        <?php echo esc_html($f['name']); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>