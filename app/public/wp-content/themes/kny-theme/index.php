<?php
/**
 * The main template file
 *
 * @package KNY_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="kny-container" style="padding: 100px 24px;">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
        else:
            echo '<p>' . esc_html__('No content found.', 'kny-theme') . '</p>';
        endif;
        ?>
    </div>
</main>

<?php
get_footer();

