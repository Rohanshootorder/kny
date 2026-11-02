<?php
/**
 * Room Detail Section: Floor Plan & Spatial Breakdown
 *
 * Fully dynamic via SCF (Secure Custom Fields)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow    = get_field('room_floorplan_eyebrow', $page_id);
$title      = get_field('room_floorplan_title', $page_id);
$area_badge = get_field('room_floorplan_area_badge', $page_id);
$dimensions = get_field('room_floorplan_dimensions', $page_id);

$v_title1 = get_field('room_floorplan_visual_title1', $page_id);
$v_sub1   = get_field('room_floorplan_visual_sub1', $page_id);
$v_title2 = get_field('room_floorplan_visual_title2', $page_id);
$v_sub2   = get_field('room_floorplan_visual_sub2', $page_id);
$v_title3 = get_field('room_floorplan_visual_title3', $page_id);
$v_title4 = get_field('room_floorplan_visual_title4', $page_id);

$leg1 = get_field('room_floorplan_legend1', $page_id);
$leg2 = get_field('room_floorplan_legend2', $page_id);
$leg3 = get_field('room_floorplan_legend3', $page_id);

$tour_title    = get_field('room_walkthrough_title', $page_id);
$tour_desc     = get_field('room_walkthrough_desc', $page_id);
$tour_btn_text = get_field('room_walkthrough_btn_text', $page_id);
$tour_btn_link = get_field('room_walkthrough_btn_link', $page_id);
?>

<section class="kny-room-floorplan-section">
    <div class="kny-room-container">
        <!-- Floorplan Header -->
        <div class="kny-floorplan-header">
            <div class="kny-floorplan-title-group">
                <?php if ($eyebrow): ?>
                    <div class="kny-floorplan-eyebrow"><?php echo esc_html($eyebrow); ?></div>
                <?php endif; ?>
                <?php if ($title): ?>
                    <h2 class="kny-floorplan-title"><?php echo esc_html($title); ?></h2>
                <?php endif; ?>
            </div>

            <?php if ($area_badge): ?>
                <div class="kny-floorplan-area-badge">
                    <span><?php echo esc_html($area_badge); ?></span>
                </div>
            <?php endif; ?>
        </div>

        <!-- 5 Dimension Cards -->
        <?php if (!empty($dimensions) && is_array($dimensions)): ?>
            <div class="kny-floorplan-dimensions-row">
                <?php foreach ($dimensions as $dim): 
                    $d_name = !empty($dim['name']) ? $dim['name'] : '';
                    $d_val  = !empty($dim['dimensions']) ? $dim['dimensions'] : '';
                    $d_sqft = !empty($dim['sqft']) ? $dim['sqft'] : '';
                    if (!$d_name) continue;
                ?>
                    <div class="kny-dim-card">
                        <div class="kny-dim-name"><?php echo esc_html($d_name); ?></div>
                        <?php if ($d_val): ?>
                            <div class="kny-dim-value"><?php echo esc_html($d_val); ?></div>
                        <?php endif; ?>
                        <?php if ($d_sqft): ?>
                            <div class="kny-dim-sqft"><?php echo esc_html($d_sqft); ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Architectural Blueprint Visualizer Container -->
        <div class="kny-blueprint-wrapper">
            <div class="kny-blueprint-canvas">
                <!-- Zone 1: Social Lounge / Dining -->
                <div class="kny-blueprint-zone kny-zone-social">
                    <div class="kny-zone-label-bold"><?php echo esc_html($v_title1 ?: 'Living & Social Lounge'); ?></div>
                    <?php if ($v_sub1): ?>
                        <div class="kny-zone-sub"><?php echo esc_html($v_sub1); ?></div>
                    <?php endif; ?>
                </div>

                <!-- Zone 2: Master Suite -->
                <div class="kny-blueprint-zone kny-zone-master">
                    <div class="kny-zone-label-bold"><?php echo esc_html($v_title2 ?: 'Master Bedroom'); ?></div>
                    <?php if ($v_sub2): ?>
                        <div class="kny-zone-sub"><?php echo esc_html($v_sub2); ?></div>
                    <?php endif; ?>
                </div>

                <!-- Zone 3: Guest Suite -->
                <div class="kny-blueprint-zone kny-zone-guest">
                    <div class="kny-zone-label-bold"><?php echo esc_html($v_title3 ?: 'Suite Chamber Two'); ?></div>
                </div>

                <!-- Zone 4: Kitchen & Utility -->
                <div class="kny-blueprint-zone kny-zone-kitchen">
                    <div class="kny-zone-label-bold"><?php echo esc_html($v_title4 ?: 'Modular Kitchen & Utility'); ?></div>
                </div>
            </div>

            <!-- Blueprint Zoning Legend -->
            <div class="kny-blueprint-legend">
                <?php if ($leg1): ?>
                    <div class="kny-legend-item">
                        <span class="kny-legend-dot dot-social"></span>
                        <span class="kny-legend-text"><?php echo esc_html($leg1); ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($leg2): ?>
                    <div class="kny-legend-item">
                        <span class="kny-legend-dot dot-chambers"></span>
                        <span class="kny-legend-text"><?php echo esc_html($leg2); ?></span>
                    </div>
                <?php endif; ?>
                <?php if ($leg3): ?>
                    <div class="kny-legend-item">
                        <span class="kny-legend-dot dot-utility"></span>
                        <span class="kny-legend-text"><?php echo esc_html($leg3); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Video Walkthrough Bottom Banner -->
        <?php if ($tour_title): ?>
            <div class="kny-floorplan-walkthrough-card">
                <div class="kny-walkthrough-left">
                    <div class="kny-walkthrough-icon-circle">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M23 7l-7 5 7 5V7z"></path><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                    </div>
                    <div class="kny-walkthrough-texts">
                        <h4 class="kny-walkthrough-title"><?php echo esc_html($tour_title); ?></h4>
                        <?php if ($tour_desc): ?>
                            <p class="kny-walkthrough-desc"><?php echo esc_html($tour_desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if ($tour_btn_text): ?>
                    <a href="<?php echo esc_url($tour_btn_link ?: 'https://wa.me/919701006789'); ?>" target="_blank" rel="noopener noreferrer" class="kny-walkthrough-btn">
                        <span><?php echo esc_html($tour_btn_text); ?></span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

