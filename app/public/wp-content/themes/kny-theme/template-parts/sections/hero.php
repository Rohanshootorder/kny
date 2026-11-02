<?php
/**
 * Hero Section Template
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$hero = function_exists('get_field') ? get_field('hero_section') : null;

if (empty($hero)) {
    return;
}

$badge_text     = !empty($hero['badge_text']) ? $hero['badge_text'] : '';
$badge_subtext  = !empty($hero['badge_subtext']) ? $hero['badge_subtext'] : '';
$section_title  = !empty($hero['section_title']) ? $hero['section_title'] : '';
$section_desc   = !empty($hero['section_description']) ? $hero['section_description'] : '';
$btn1_text      = !empty($hero['primary_btn_text']) ? $hero['primary_btn_text'] : '';
$btn1_url       = !empty($hero['primary_btn_url']) ? $hero['primary_btn_url'] : '';
$btn2_text      = !empty($hero['secondary_btn_text']) ? $hero['secondary_btn_text'] : '';
$btn2_url       = !empty($hero['secondary_btn_url']) ? $hero['secondary_btn_url'] : '';
$stats          = (!empty($hero['stats']) && is_array($hero['stats'])) ? $hero['stats'] : array();

$hero_img       = !empty($hero['image']) ? $hero['image'] : '';
$image_tag      = !empty($hero['image_tag']) ? $hero['image_tag'] : '';
$card_title     = !empty($hero['card_title']) ? $hero['card_title'] : '';
$card_subtitle  = !empty($hero['card_subtitle']) ? $hero['card_subtitle'] : '';
$verified_badge = !empty($hero['verified_badge']) ? $hero['verified_badge'] : '';
?>

<section class="section-hero" id="hero">
    <!-- Ambient Blur Background Lights -->
    <div class="ambient-glow glow-top-right" aria-hidden="true"></div>
    <div class="ambient-glow glow-bottom-left" aria-hidden="true"></div>

    <div class="kny-container">
        <!-- Top Location Pill -->
        <?php if ($badge_text || $badge_subtext): ?>
            <div class="hero-eyebrow-row">
                <?php if ($badge_text): ?>
                    <span class="eyebrow-badge"><?php echo esc_html($badge_text); ?></span>
                <?php endif; ?>
                <?php if ($badge_subtext): ?>
                    <span class="eyebrow-subtext"><?php echo esc_html($badge_subtext); ?></span>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="hero-grid">
            <!-- Left Column: Content, CTAs, Stats -->
            <div class="hero-content">
                <?php if ($section_title): ?>
                    <h1 class="hero-title"><?php echo wp_kses_post($section_title); ?></h1>
                <?php endif; ?>

                <?php if ($section_desc): ?>
                    <p class="hero-description"><?php echo esc_html($section_desc); ?></p>
                <?php endif; ?>

                <!-- Dynamic CTA Row -->
                <?php if ($btn1_text || $btn2_text): ?>
                    <div class="hero-cta-row">
                        <?php if ($btn1_text): ?>
                            <a href="<?php echo esc_url($btn1_url ? $btn1_url : '#'); ?>" class="btn-hero-primary">
                                <span><?php echo esc_html($btn1_text); ?></span>
                                <span class="btn-arrow"><?php echo kny_render_icon('arrow-up-right.svg', 'arrow-icon'); ?></span>
                            </a>
                        <?php endif; ?>
                        <?php if ($btn2_text): ?>
                            <a href="<?php echo esc_url($btn2_url ? $btn2_url : '#'); ?>" class="btn-hero-secondary">
                                <span class="phone-icon"><?php echo kny_render_icon('phone.svg', 'phone-icon'); ?></span>
                                <span><?php echo esc_html($btn2_text); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <!-- Dynamic Stats Strip -->
                <?php if (!empty($stats)): ?>
                    <div class="hero-stats-card">
                        <?php foreach ($stats as $index => $stat): 
                            $stat_val   = !empty($stat['value']) ? $stat['value'] : '';
                            $stat_label = !empty($stat['label']) ? $stat['label'] : '';
                            if (!$stat_val && !$stat_label) continue;
                        ?>
                            <div class="stat-col <?php echo (1 === $index) ? 'stat-accent' : ''; ?>">
                                <div class="stat-value"><?php echo esc_html($stat_val); ?></div>
                                <div class="stat-label"><?php echo esc_html($stat_label); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Right Column: Hero Visual Card -->
            <?php if ($hero_img || $card_title): ?>
                <div class="hero-visual">
                    <div class="hero-card-inner">
                        <?php if ($hero_img): ?>
                            <img src="<?php echo esc_url(kny_get_image_url($hero_img)); ?>"
                                alt="<?php echo esc_attr($card_title); ?>" class="hero-main-img" width="509" height="520">
                            <div class="hero-img-overlay" aria-hidden="true"></div>
                        <?php endif; ?>

                        <!-- Dynamic Top Pill on image -->
                        <?php if ($image_tag): ?>
                            <div class="hero-img-badge">
                                <span class="badge-dot" aria-hidden="true"></span>
                                <span class="badge-text"><?php echo esc_html($image_tag); ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Floating Glass Residence Card -->
                        <?php if ($card_title || $card_subtitle || $verified_badge): ?>
                            <div class="hero-floating-card">
                                <div class="floating-info">
                                    <?php if ($card_title): ?>
                                        <h4 class="floating-title"><?php echo esc_html($card_title); ?></h4>
                                    <?php endif; ?>
                                    <?php if ($card_subtitle): ?>
                                        <p class="floating-subtitle"><?php echo esc_html($card_subtitle); ?></p>
                                    <?php endif; ?>
                                </div>
                                <?php if ($verified_badge): ?>
                                    <div class="floating-badge">
                                        <span class="badge-check"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></span>
                                        <span class="badge-label"><?php echo esc_html($verified_badge); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
