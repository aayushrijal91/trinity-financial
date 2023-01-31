<?php
/*
 * Template Name: Meet The Team Page
 * The Meet The Team Page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="meet_the_team">
    <section class="section_1">
        <?php $section_1 = get_field('section_1'); ?>
        <div class="container">
            <div class="text-center fs-50 fw-600 lh-1_6 pb-8"><?= $section_1['heading'] ?></div>
            <div class="row justify-content-center g-5">
                <?php
                if (have_rows('section_1')) :
                    while (have_rows('section_1')) : the_row();
                        if (have_rows('team_members')) :
                            while (have_rows('team_members')) : the_row();
                                $image = get_sub_field('image');
                                $name = get_sub_field('name');
                                $position = get_sub_field('position');
                                $email = get_sub_field('email_address');
                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="team_member">
                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="w-100">
                                        <div class="d-flex justify-content-end mt-n9">
                                            <div class="name_card bg-primary text-white py-5 px-4">
                                                <div class="fs-24 fw-800"><?= $name ?></div>
                                                <div class="fw-300 pt-2 pb-5"><?= $position ?></div>
                                                <a href="mailto:<?= $email ?>" class="text-white fs-14 fw-500">
                                                    <u><?= $email ?></u> <span class="ps-2"><svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.4474 5.04169L8.20889 1.333C8.00555 1.15508 7.98494 0.846001 8.16286 0.642661C8.34079 0.439321 8.64986 0.418716 8.8532 0.596638L14.0716 5.16274C14.2944 5.35766 14.2944 5.70419 14.0716 5.8991L8.8532 10.4652C8.64986 10.6431 8.34079 10.6225 8.16286 10.4192C7.98494 10.2158 8.00555 9.90677 8.20889 9.72885L12.4474 6.02014H1.02682C0.756631 6.02014 0.537598 5.80111 0.537598 5.53092C0.537598 5.26073 0.756631 5.04169 1.02682 5.04169H12.4474Z" fill="white" />
                                                        </svg></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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
    <?php get_template_part('parts/section', 'assisted_services'); ?>
</div>
<?php get_footer(); ?>