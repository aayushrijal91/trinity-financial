<?php
/*
 * Template Name: Contact Us
 * The Contact Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="contact_us">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-5">
                <div class="fw-500 fs-75"><?= the_title() ?></div>
                <div class="fs-24 lh-1_87 pt-5 pb-4"><?= get_field('footer', 'options')['main_description'] ?></div>
                <div class="pt-3 pb-5">
                    <div class="fs-18">Call us:</div>
                    <a href="tel:<?= get_field('phone_number', 'options') ?>" class="fs-25 fw-800 text-white text-decoration-none"><?= get_field('phone_number', 'options') ?></a>
                </div>
                <div class="fs-18">Email Us:</div>
                <a href="mailto:<?= get_field('email_address', 'options') ?>" class="fs-25 fw-800 text-white text-decoration-none"><?= get_field('email_address', 'options') ?></a>
                <div class="pt-7">
                    <img src="<?= get_field('image')['url'] ?>" alt="">
                </div>
            </div>
            <div class="col-md-6 col-xl-5">
                <div class="contact_us_form">
                    <?= do_shortcode('[contact-form-7 id="133" title="Contact Us"]') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>