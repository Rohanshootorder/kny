<?php
/**
 * Location Detail Section: Hyperlocal Proximity & Commute Radii
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow  = get_field('loc_com_eyebrow', $page_id);
$title    = get_field('loc_com_title', $page_id);
$subtitle = get_field('loc_com_subtitle', $page_id);

// Col 1
$col1_title = get_field('loc_com_col1_title', $page_id) ?: 'Major IT Hubs';
$col1_items = [];
for ($i = 1; $i <= 4; $i++) {
    $col1_items[] = [
        'name' => get_field("loc_com_c1_i{$i}_name", $page_id),
        'sub'  => get_field("loc_com_c1_i{$i}_sub", $page_id),
        'time' => get_field("loc_com_c1_i{$i}_time", $page_id),
    ];
}

// Col 2
$col2_title = get_field('loc_com_col2_title', $page_id) ?: 'Healthcare Centers';
$col2_items = [];
for ($i = 1; $i <= 4; $i++) {
    $col2_items[] = [
        'name' => get_field("loc_com_c2_i{$i}_name", $page_id),
        'sub'  => get_field("loc_com_c2_i{$i}_sub", $page_id),
        'time' => get_field("loc_com_c2_i{$i}_time", $page_id),
    ];
}

// Col 3
$col3_title = get_field('loc_com_col3_title', $page_id) ?: 'Transit & Travel';
$col3_items = [];
for ($i = 1; $i <= 4; $i++) {
    $col3_items[] = [
        'name' => get_field("loc_com_c3_i{$i}_name", $page_id),
        'sub'  => get_field("loc_com_c3_i{$i}_sub", $page_id),
        'time' => get_field("loc_com_c3_i{$i}_time", $page_id),
    ];
}

// Map Card
$map_img_id    = get_field('loc_com_map_img', $page_id);
$map_img_url   = $map_img_id ? kny_get_image_url($map_img_id) : '';
$map_tag       = get_field('loc_com_map_tag', $page_id);
$map_title     = get_field('loc_com_map_title', $page_id);
$map_address   = get_field('loc_com_map_address', $page_id);
$shuttle_title = get_field('loc_com_shuttle_title', $page_id);
$shuttle_desc  = get_field('loc_com_shuttle_desc', $page_id);
?>

<section class="kny-loc-commute-section" id="location-map">
    <div class="kny-container">
        <!-- Section Header -->
        <div class="kny-loc-com-header">
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

        <!-- 4 Columns Grid: 3 Transit Columns + 1 Map Preview Card -->
        <div class="kny-loc-com-grid">
            <!-- Column 1: Major IT Hubs -->
            <div class="kny-loc-transit-col">
                <div class="kny-loc-transit-header">
                    <span class="transit-icon"><?php echo kny_render_icon('Icon-8.svg', 'transit-head-svg'); ?></span>
                    <h3 class="transit-col-title"><?php echo esc_html($col1_title); ?></h3>
                </div>
                <div class="kny-loc-transit-items">
                    <?php foreach ($col1_items as $item): 
                        if (!$item['name']) continue;
                    ?>
                        <div class="kny-loc-transit-card">
                            <div class="transit-meta">
                                <span class="transit-name"><?php echo esc_html($item['name']); ?></span>
                                <?php if ($item['sub']): ?>
                                    <span class="transit-sub"><?php echo esc_html($item['sub']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($item['time']): ?>
                                <span class="transit-time-pill"><?php echo esc_html($item['time']); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Column 2: Healthcare Centers -->
            <div class="kny-loc-transit-col">
                <div class="kny-loc-transit-header">
                    <span class="transit-icon"><?php echo kny_render_icon('Icon-60.svg', 'transit-head-svg'); ?></span>
                    <h3 class="transit-col-title"><?php echo esc_html($col2_title); ?></h3>
                </div>
                <div class="kny-loc-transit-items">
                    <?php foreach ($col2_items as $item): 
                        if (!$item['name']) continue;
                    ?>
                        <div class="kny-loc-transit-card">
                            <div class="transit-meta">
                                <span class="transit-name"><?php echo esc_html($item['name']); ?></span>
                                <?php if ($item['sub']): ?>
                                    <span class="transit-sub"><?php echo esc_html($item['sub']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($item['time']): ?>
                                <span class="transit-time-pill"><?php echo esc_html($item['time']); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Column 3: Transit & Travel -->
            <div class="kny-loc-transit-col">
                <div class="kny-loc-transit-header">
                    <span class="transit-icon"><?php echo kny_render_icon('Icon-65.svg', 'transit-head-svg'); ?></span>
                    <h3 class="transit-col-title"><?php echo esc_html($col3_title); ?></h3>
                </div>
                <div class="kny-loc-transit-items">
                    <?php foreach ($col3_items as $item): 
                        if (!$item['name']) continue;
                    ?>
                        <div class="kny-loc-transit-card">
                            <div class="transit-meta">
                                <span class="transit-name"><?php echo esc_html($item['name']); ?></span>
                                <?php if ($item['sub']): ?>
                                    <span class="transit-sub"><?php echo esc_html($item['sub']); ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($item['time']): ?>
                                <span class="transit-time-pill"><?php echo esc_html($item['time']); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Column 4: Map Preview & Shuttle Card -->
            <div class="kny-loc-map-preview-col">
                <div class="kny-loc-map-card">
                    <!-- Map Media Container -->
                    <div class="kny-loc-map-media">
                        <?php if ($map_img_url): ?>
                            <img src="<?php echo esc_url($map_img_url); ?>" alt="<?php echo esc_attr($map_title ?: 'Map Location'); ?>" loading="lazy" class="kny-loc-map-img">
                        <?php endif; ?>

                        <!-- Top Title & Tag Overlay -->
                        <div class="kny-loc-map-top-bar">
                            <span class="map-corridor-title"><?php echo esc_html($map_title); ?></span>
                            <?php if ($map_tag): ?>
                                <span class="map-zone-tag"><?php echo esc_html($map_tag); ?></span>
                            <?php endif; ?>
                        </div>

                        <!-- Address Floating Pill -->
                        <?php if ($map_address): ?>
                            <div class="kny-loc-map-address-pill">
                                <span class="pin-svg"><?php echo kny_render_icon('Icon-71.svg', 'map-pin'); ?></span>
                                <div class="addr-text"><?php echo wp_kses_post($map_address); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Corporate Shuttle Coordination Box -->
                    <?php if ($shuttle_desc): ?>
                        <div class="kny-loc-shuttle-box">
                            <div class="shuttle-header">
                                <span class="shuttle-icon"><?php echo kny_render_icon('Icon-8.svg', 'shuttle-svg'); ?></span>
                                <h4 class="shuttle-title"><?php echo esc_html($shuttle_title ?: 'Corporate Shuttle Coordination'); ?></h4>
                            </div>
                            <p class="shuttle-desc"><?php echo esc_html($shuttle_desc); ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
