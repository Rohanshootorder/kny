<?php
/**
 * Template Name: Contact Page
 *
 * Dedicated template for the KNY Contact Us page.
 * Fully dynamic via SCF (Secure Custom Fields) with pixel-perfect design.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main kny-contact-page">
    <?php
    get_template_part('template-parts/sections/contact/hero-form');
    get_template_part('template-parts/sections/contact/features');
    get_template_part('template-parts/sections/contact/walkthrough');
    ?>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Stay type pill selection
        var pills = document.querySelectorAll('.kny-stay-pill');
        var hiddenInput = document.getElementById('kny-selected-stay-type');
        if (pills && hiddenInput) {
            pills.forEach(function (pill) {
                pill.addEventListener('click', function () {
                    pills.forEach(function (p) { p.classList.remove('is-active'); });
                    this.classList.add('is-active');
                    hiddenInput.value = this.getAttribute('data-value');
                });
            });
        }
    });
</script>

<?php
get_footer();

