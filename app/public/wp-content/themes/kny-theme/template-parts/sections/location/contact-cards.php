<?php
/**
 * Location Detail Section: Direct Contact Channels (4 Cards)
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$channels = [
    [
        'icon'      => 'logos_whatsapp-icon.svg',
        'title'     => get_field('loc_cnt_c1_title', $page_id) ?: 'WhatsApp Concierge',
        'sub'       => get_field('loc_cnt_c1_sub', $page_id) ?: 'Instant Hyderabad Desk Support',
        'val'       => get_field('loc_cnt_c1_val', $page_id) ?: '+91 970 100 6789',
        'link_text' => get_field('loc_cnt_c1_link_text', $page_id) ?: 'Launch WhatsApp Desk',
        'link_url'  => get_field('loc_cnt_c1_link_url', $page_id) ?: 'https://wa.me/919701006789',
        'note'      => '',
    ],
    [
        'icon'      => 'phone.svg',
        'title'     => get_field('loc_cnt_c2_title', $page_id) ?: 'Direct Phone Lines',
        'sub'       => get_field('loc_cnt_c2_sub', $page_id) ?: 'Central Reservations',
        'val'       => get_field('loc_cnt_c2_val', $page_id) ?: '+91 (040) 4859 9000',
        'link_text' => '',
        'link_url'  => 'tel:' . preg_replace('/[^0-9+]/', '', get_field('loc_cnt_c2_val', $page_id) ?: '+9104048599000'),
        'note'      => get_field('loc_cnt_c2_note', $page_id) ?: 'Available 24 hours daily',
    ],
    [
        'icon'      => 'Icon-70.svg',
        'title'     => get_field('loc_cnt_c3_title', $page_id) ?: 'Corporate Email',
        'sub'       => get_field('loc_cnt_c3_sub', $page_id) ?: 'RFPs & Partner Invoicing',
        'val'       => get_field('loc_cnt_c3_val', $page_id) ?: 'hyderabad@knystay.com',
        'link_text' => '',
        'link_url'  => 'mailto:' . esc_attr(get_field('loc_cnt_c3_val', $page_id) ?: 'hyderabad@knystay.com'),
        'note'      => get_field('loc_cnt_c3_note', $page_id) ?: 'Formal GST quote responses',
    ],
    [
        'icon'      => 'Icon-71.svg',
        'title'     => get_field('loc_cnt_c4_title', $page_id) ?: 'Kondapur Flagship',
        'sub'       => get_field('loc_cnt_c4_sub', $page_id) ?: 'Temple Square Property',
        'val'       => get_field('loc_cnt_c4_val', $page_id) ?: 'Sreebagh Colony, Opp. Botanical Garden, Whitefields Road, Kondapur, Hyderabad 500084',
        'link_text' => get_field('loc_cnt_c4_link_text', $page_id) ?: 'Get Directions',
        'link_url'  => get_field('loc_cnt_c4_link_url', $page_id) ?: 'https://maps.google.com/?q=Temple+Square+Kondapur+Hyderabad',
        'note'      => '',
    ],
];
?>

<section class="kny-loc-contact-channels-section">
    <div class="kny-container">
        <div class="kny-loc-channels-grid">
            <?php foreach ($channels as $ch): 
                if (!$ch['title']) continue;
            ?>
                <div class="kny-loc-channel-card">
                    <div class="kny-loc-channel-icon-box">
                        <?php echo kny_render_icon($ch['icon'], 'channel-svg'); ?>
                    </div>
                    
                    <div class="kny-loc-channel-header">
                        <h4 class="channel-title"><?php echo esc_html($ch['title']); ?></h4>
                        <?php if ($ch['sub']): ?>
                            <span class="channel-sub"><?php echo esc_html($ch['sub']); ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="kny-loc-channel-value">
                        <?php if ($ch['link_url'] && !$ch['link_text']): ?>
                            <a href="<?php echo esc_url($ch['link_url']); ?>" class="channel-val-link">
                                <?php echo esc_html($ch['val']); ?>
                            </a>
                        <?php else: ?>
                            <span class="channel-val-text"><?php echo wp_kses_post($ch['val']); ?></span>
                        <?php endif; ?>
                    </div>

                    <?php if ($ch['link_text'] && $ch['link_url']): ?>
                        <div class="kny-loc-channel-action">
                            <a href="<?php echo esc_url($ch['link_url']); ?>" target="_blank" rel="noopener noreferrer" class="channel-action-link">
                                <span><?php echo esc_html($ch['link_text']); ?></span>
                                <span class="arrow-up-icon">↗</span>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if ($ch['note']): ?>
                        <div class="kny-loc-channel-note">
                            <?php echo esc_html($ch['note']); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
