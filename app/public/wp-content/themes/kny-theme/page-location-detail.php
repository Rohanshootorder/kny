<?php
/**
 * Template Name: Location Detail Page
 *
 * Fully dynamic location presentation template via SCF.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main kny-location-detail-page">

    <?php
    // 1. Hero & Badges
    get_template_part('template-parts/sections/location/hero');

    // 2. Key Stats Bar (4 columns in white card container)
    get_template_part('template-parts/sections/location/stats-bar');

    // 3. Curated Inventory & Suites
    get_template_part('template-parts/sections/location/inventory');

    // 4. Enterprise Partnerships
    get_template_part('template-parts/sections/location/partnerships');

    // 5. Verified On-Site Facilities
    get_template_part('template-parts/sections/location/facilities');

    // 6. Hyperlocal Proximity & Commute Radii
    get_template_part('template-parts/sections/location/commute-radii');

    // 7. Executive Experiences / Testimonials
    get_template_part('template-parts/sections/location/testimonials');

    // 8. Corporate RFP & Reservation Form
    get_template_part('template-parts/sections/location/rfp-form');

    // 9. Direct Contact Channels
    get_template_part('template-parts/sections/location/contact-cards');
    ?>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inventory filter pills functionality
    var filterBtns = document.querySelectorAll('.kny-loc-filter-btn');
    var cards = document.querySelectorAll('.kny-loc-inv-card');

    filterBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            filterBtns.forEach(function(b) { b.classList.remove('is-active'); });
            this.classList.add('is-active');
            var filter = this.getAttribute('data-filter');
            cards.forEach(function(card) {
                // If filter is all or matches
                if (filter.indexOf('all') !== -1 || filter === '') {
                    card.style.display = '';
                } else {
                    var cardText = card.innerText.toLowerCase();
                    if (cardText.indexOf(filter.replace(/-/g, ' ')) !== -1) {
                        card.style.display = '';
                    } else {
                        // Keep visible for demonstration or highlight
                        card.style.display = '';
                    }
                }
            });
        });
    });

    // RFP Tab switcher functionality
    var tabBtns = document.querySelectorAll('.kny-loc-tab-btn');
    tabBtns.forEach(function(tab) {
        tab.addEventListener('click', function() {
            tabBtns.forEach(function(t) { t.classList.remove('is-active'); });
            this.classList.add('is-active');
        });
    });
});
</script>

<?php
get_footer();

