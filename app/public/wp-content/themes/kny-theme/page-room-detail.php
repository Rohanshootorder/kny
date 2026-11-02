<?php
/**
 * Template Name: Room Detail Page
 *
 * Fully dynamic room & suite presentation template via SCF.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$page_id = get_the_ID();
$room_title = get_the_title();
?>

<main id="primary" class="site-main kny-room-detail-page">

    <?php
    // 1. Hero & Tariff callout & Feature pills
    get_template_part('template-parts/sections/room/hero');

    // 2. Photo Mosaic Grid (5 photos)
    get_template_part('template-parts/sections/room/gallery-mosaic');

    // 3. Transparent Executive Tariff Bar
    get_template_part('template-parts/sections/room/tariff-bar');

    // 4. Residency Story & Space (Narrative + 6 Feature Cards)
    get_template_part('template-parts/sections/room/story-space');

    // 5. What's Included in Your Stay (3 Columns)
    get_template_part('template-parts/sections/room/inclusions');

    // 6. Floor Plan & Spatial Breakdown (Dimensions + Blueprint + WhatsApp Walkthrough)
    get_template_part('template-parts/sections/room/floorplan');

    // 7. Commute & Prime Tech Hubs (3 Transit Cards)
    get_template_part('template-parts/sections/room/transit');

    // 8. 30+ Day Corporate Relocation CTA (Dark Banner)
    get_template_part('template-parts/sections/room/corporate-banner');

    // 9. Explore Other Accommodations (Comparison Cards)
    get_template_part('template-parts/sections/room/other-rooms');
    ?>

</main>

<!-- Room Gallery Lightbox Modal -->
<div id="room-gallery-modal" class="kny-room-modal" aria-hidden="true" role="dialog" aria-modal="true">
    <div class="kny-room-modal-backdrop"></div>
    <div class="kny-room-modal-container">
        <div class="kny-room-modal-header">
            <h3 class="kny-room-modal-title"><?php echo esc_html($room_title); ?> — Photo Gallery</h3>
            <button type="button" class="kny-room-modal-close" aria-label="Close photo gallery">&times;</button>
        </div>
        <div class="kny-room-modal-body">
            <div class="kny-room-modal-gallery">
                <?php
                // Collect all room gallery photos
                $photos = [
                    get_field('room_gallery_main_image', $page_id),
                    get_field('room_gallery_photo_2', $page_id),
                    get_field('room_gallery_photo_3', $page_id),
                    get_field('room_gallery_photo_4', $page_id),
                    get_field('room_gallery_photo_5', $page_id),
                ];
                $tags = [
                    get_field('room_gallery_main_tag', $page_id),
                    get_field('room_gallery_photo_2_tag', $page_id),
                    get_field('room_gallery_photo_3_tag', $page_id),
                    get_field('room_gallery_photo_4_tag', $page_id),
                    get_field('room_gallery_photo_5_badge', $page_id),
                ];
                foreach ($photos as $i => $img_id):
                    if (!$img_id) continue;
                    $url = kny_get_image_url($img_id);
                    $tag = !empty($tags[$i]) ? $tags[$i] : '';
                ?>
                    <div class="kny-modal-photo-item">
                        <img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($tag ?: $room_title); ?>" loading="lazy">
                        <?php if ($tag): ?>
                            <span class="kny-modal-photo-caption"><?php echo esc_html($tag); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('room-gallery-modal');
    var openBtn = document.querySelector('.open-room-gallery-modal');
    var closeBtn = document.querySelector('.kny-room-modal-close');
    var backdrop = document.querySelector('.kny-room-modal-backdrop');

    function openModal() {
        if (!modal) return;
        modal.classList.add('is-active');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        if (!modal) return;
        modal.classList.remove('is-active');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    if (openBtn) {
        openBtn.addEventListener('click', openModal);
        openBtn.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                openModal();
            }
        });
    }
    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    if (backdrop) backdrop.addEventListener('click', closeModal);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal && modal.classList.contains('is-active')) {
            closeModal();
        }
    });
});
</script>

<?php
get_template_part('template-parts/booking-modal');
get_footer();

