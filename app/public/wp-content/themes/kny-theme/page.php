<?php
/**
 * The template for displaying all pages
 *
 * Dynamically renders SCF sections assigned to this page,
 * or standard WordPress post content if no sections are populated.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$page_id = get_the_ID();
$has_custom_sections = false;

// List of all modular page sections
$section_order = array(
    'hero_section'           => 'hero',
    'about_section'          => 'about',
    'distinction_section'    => 'distinction',
    'accommodations_section' => 'accommodations',
    'amenities_section'      => 'amenities',
    'gallery_section'        => 'property-glimpse',
    'reviews_section'        => 'reviews',
    'location_section'       => 'location',
    'corporate_cta_section'  => 'corporate-cta',
    'assistance_section'     => 'resident-assistance',
);

foreach ($section_order as $field_key => $template_slug) {
    if (function_exists('get_field') && get_field($field_key, $page_id)) {
        $has_custom_sections = true;
        break;
    }
}
?>

<main id="primary" class="site-main kny-dynamic-page">
    <?php if ($has_custom_sections): ?>
        <!-- Render Dynamic SCF Sections assigned to this page -->
        <?php
        foreach ($section_order as $field_key => $template_slug) {
            $section_data = function_exists('get_field') ? get_field($field_key, $page_id) : null;
            if (!empty($section_data)) {
                get_template_part('template-parts/sections/' . $template_slug);
            }
        }
        ?>
    <?php else: ?>
        <!-- Fallback standard page editor content -->
        <div class="kny-container page-container">
            <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
            </header>

            <div class="page-content">
                <?php
                while (have_posts()):
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();


