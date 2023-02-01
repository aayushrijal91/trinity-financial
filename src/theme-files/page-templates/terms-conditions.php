<?php
/*
 * Template Name: Terms & Conditions
 * The Terms & Conditions page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="terms_and_conditions">
    <div class="container">
        <?php if (have_rows('content')) :
            while (have_rows('content')) : the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
        ?>
                <div class="content">
                    <div class="fs-24 fw-700 ls-2"><?= $title ?></div>
                    <div class="fs-18 ls-2 pt-4 lh-2"><?= $description ?></div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <?php get_template_part('parts/section', 'free_review'); ?>
</div>

<?php get_footer(); ?>