<?php
/**
 * The template for displaying the Homepage
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main kny-homepage">
    <?php
    // 1. Hero Section
    get_template_part('template-parts/sections/hero');

    // 2. Distinction / Why Choose Us Section
    get_template_part('template-parts/sections/distinction');

    // 3. Accommodations / Rooms Section
    get_template_part('template-parts/sections/accommodations');

    // 4. Corporate Mobility Dark CTA Banner
    get_template_part('template-parts/sections/corporate-cta');

    // 5. About KNY Section
    get_template_part('template-parts/sections/about');

    // 6. Signature Amenities Section
    get_template_part('template-parts/sections/amenities');

    // 7. Property Glimpse / Gallery Section
    get_template_part('template-parts/sections/property-glimpse');

    // 8. Verified Corporate Reviews Section
    get_template_part('template-parts/sections/reviews');

    // 9. Location & Commutes Section
    get_template_part('template-parts/sections/location');

    // 10. Instant Resident Assistance Banner (Between Location and Footer)
    get_template_part('template-parts/sections/resident-assistance');
    ?>
</main>

<?php
get_footer();

