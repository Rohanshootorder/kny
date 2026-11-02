<?php
/**
 * Template Name: About Page
 *
 * Dedicated template for the KNY About Us page.
 * Fully dynamic via SCF (Secure Custom Fields) with pixel-perfect design.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main kny-about-page">
    <?php
    get_template_part('template-parts/sections/about/hero');
    get_template_part('template-parts/sections/about/stats');
    get_template_part('template-parts/sections/about/amenities');
    get_template_part('template-parts/sections/about/location');
    get_template_part('template-parts/sections/about/gallery');
    get_template_part('template-parts/sections/about/cta-banner');
    get_template_part('template-parts/sections/about/newsletter');
    ?>
</main>

<?php
get_footer();

