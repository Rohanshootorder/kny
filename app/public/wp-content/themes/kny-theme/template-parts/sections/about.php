<?php
/**
 * About KNY Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$about = function_exists('get_field') ? get_field('about_section') : null;

if (empty($about)) {
    return;
}

$section_tag   = !empty($about['section_tag']) ? $about['section_tag'] : '';
$section_title = !empty($about['section_title']) ? $about['section_title'] : '';
$paragraph_1   = !empty($about['paragraph_1']) ? $about['paragraph_1'] : '';
$paragraph_2   = !empty($about['paragraph_2']) ? $about['paragraph_2'] : '';
$cta_text      = !empty($about['cta_text']) ? $about['cta_text'] : '';
$cta_url       = !empty($about['cta_url']) ? $about['cta_url'] : '';
$about_img     = !empty($about['image']) ? $about['image'] : '';
$image_tag     = !empty($about['image_tag']) ? $about['image_tag'] : '';
?>

<section class="section-about" id="about">
    <div class="kny-container">
        <div class="about-grid">
            <!-- Left Side: Visual Image Card -->
            <?php if ($about_img): ?>
                <div class="about-visual">
                    <div class="about-image-card">
                        <img src="<?php echo esc_url(kny_get_image_url($about_img)); ?>"
                            alt="<?php echo esc_attr($section_title); ?>" class="about-main-img" width="624" height="480"
                            loading="lazy">

                        <!-- Floating Location Tag on Image -->
                        <?php if ($image_tag): ?>
                            <div class="about-floating-badge">
                                <span class="badge-icon"><?php echo kny_render_icon('Icon-20.svg', 'loc-icon'); ?></span>
                                <span class="badge-text"><?php echo esc_html($image_tag); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Right Side: Content -->
            <div class="about-content">
                <?php if ($section_tag): ?>
                    <span class="section-eyebrow"><?php echo esc_html($section_tag); ?></span>
                <?php endif; ?>

                <?php if ($section_title): ?>
                    <h2 class="section-heading"><?php echo nl2br(esc_html($section_title)); ?></h2>
                <?php endif; ?>

                <?php if ($paragraph_1): ?>
                    <div class="about-lead"><?php echo esc_html($paragraph_1); ?></div>
                <?php endif; ?>

                <?php if ($paragraph_2): ?>
                    <div class="about-body"><?php echo esc_html($paragraph_2); ?></div>
                <?php endif; ?>

                <?php if ($cta_text): ?>
                    <div class="about-action">
                        <a href="<?php echo esc_url($cta_url ? $cta_url : '#'); ?>" class="btn-about-pill">
                            <span><?php echo esc_html($cta_text); ?></span>
                            <span class="btn-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'arrow-svg'); ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
