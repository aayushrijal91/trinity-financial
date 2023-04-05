<?php
/*
 * Template Name: About Us
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
            <div class="row align-items-center gy-5">
                <div class="col-xl-6 text-white">
                    <div class="fs-70 fw-400"><?= $section_1['heading'] ?></div>
                    <div class="py-4 py-md-5 fs-23 lh-1_87 fw-400 description">
                        <?= $section_1['description'] ?>
                    </div>
                    <a href="<?= $section_1['button']['url'] ?>" class="btn btn-primary fs-23 rounded-0 py-3 py-md-4 px-5 px-md-6 fw-600"><?= $section_1['button']['title'] ?></a>
                </div>
                <div class="col-xl-6">
                    <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'assisted_services'); ?>
    <?php get_template_part('parts/section', 'testimonials'); ?>
</div>
<?php get_footer(); ?>