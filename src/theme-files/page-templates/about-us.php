<?php
/*
 * Template Name: About Us Page
 * The About Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="about_us">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 text-white">
                    <div class="fs-70 fw-400"><?= $section_1['heading'] ?></div>
                    <div class="py-5 fs-23 lh-1_87 fw-400">
                        <?= $section_1['description'] ?>
                    </div>
                    <a href="<?= $section_1['button']['url'] ?>" class="btn btn-primary fs-23 rounded-0 py-4 px-6 fw-600"><?= $section_1['button']['title'] ?></a>
                </div>
                <div class="col-6">
                    <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'assisted_services'); ?>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="text-center fw-900 fs-57"><?= $section_2['heading'] ?></div>
            <div class="text-center fw-500 fs-43 lh-2 pt-3"><?= $section_2['sub_heading'] ?></div>

            <div class="row gy-4 gx-6 align-items-end pt-7">
                <?php
                if (have_rows('section_2')) :
                    while (have_rows('section_2')) : the_row();
                        if (have_rows('videos')) :
                            while (have_rows('videos')) : the_row();
                                $thumbnail = get_sub_field('thumbnail');
                                $url = get_sub_field('url');
                ?>
                                <div class="col-md-6">
                                    <a href="<?= $url ?>" target="_blank">
                                        <img src="<?= $thumbnail['url'] ?>" alt="<?= $thumbnail['alt'] ?>" class="w-100">
                                    </a>
                                </div>
                <?php
                            endwhile;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>