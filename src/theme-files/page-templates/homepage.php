<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
get_template_part('parts/section', 'bannerHome');
?>

<div class="homepage">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="row gx-4">
                <div class="col-md-7">
                    <div class="fs-75 lh-1_2 heading"><?= $section_1['heading'] ?></div>
                    <div class="row justify-content-md-end mt-5 mt-md-9">
                        <div class="col-md-8">
                            <div class="fs-37 sub_heading"><?= $section_1['sub_heading'] ?></div>
                            <div class="text-center pt-5 pt-md-7"><a href="<?= $section_1['button']['url'] ?>" class="btn btn-primary fs-21 rounded-0 py-3 py-md-4 px-5 fw-600"><?= $section_1['button']['title'] ?></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact_us_form">
                        <?= do_shortcode('[contact-form-7 id="133" title="Contact Us"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <?php $section_2 = get_field('section_2'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="fs-70 fw-400 ls-2 lh-1"><?= $section_2['heading'] ?></div>
                    <div class="fs-23 lh-1_87 py-4 py-md-6 description"><?= $section_2['description'] ?></div>
                    <a href="<?= $section_2['button']['url'] ?>" class="btn btn-primary fs-21 rounded-0 py-4 px-5 fw-600"><?= $section_2['button']['title'] ?></a>
                </div>
                <div class="col-md-6">
                    <img src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <section class="section_3">
        <?php $section_3 = get_field('section_3'); ?>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-end">
                    <a href="<?= $section_3['embed_url'] ?>" target="_blank">
                        <img src="<?= $section_3['hero_image']['url'] ?>" alt="<?= $section_3['hero_image']['alt'] ?>">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/section', 'assisted_services'); ?>
    <?php get_template_part('parts/section', 'client_video'); ?>
</div>

<?php get_footer(); ?>