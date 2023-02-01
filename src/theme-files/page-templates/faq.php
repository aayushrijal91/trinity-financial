<?php
/*
 * Template Name: FAQ
 * The FAQ page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="heading fs-50 fw-600 text-center lh-1_6"><?= get_field('heading') ?></div>
            </div>
        </div>
        <div class="accordion-container">
            <?php if (have_rows('faq_list')) :
                $index = 1;
                while (have_rows('faq_list')) : the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
            ?>
                    <div class="accordion-card">
                        <div class="accordion-head<?= ($index == 1) ? " active" : ""; ?>">
                            <div class="row g-0 w-100 justify-content-between">
                                <div class="col h-inherit">
                                    <?= $question ?>
                                </div>
                                <div class="col-auto h-inherit">
                                    <div class="plusminus">
                                        <?php if ($index == 1) { ?>
                                            <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.79759 0.950905V3.34224H0.414062V0.950905H8.79759Z" fill="white" />
                                            </svg>
                                        <?php } else { ?>
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.10449 13.4713V0.988392H7.58816V13.4713H5.10449ZM0.109464 8.46709V5.98342H12.5924V8.46709H0.109464Z" fill="white" />
                                            </svg>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-body" style="<?= ($index == 1) ? 'display: block;' : ''; ?>">
                            <?= $answer ?>
                        </div>
                    </div>
            <?php
                    $index++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_template_part('parts/section', 'client_video'); ?>

<?php get_footer(); ?>