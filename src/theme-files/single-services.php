<?php
get_header();
get_template_part('parts/section', 'banner');
$template = get_field('choose_template');
?>
<div class="inner_service">
    <?php $header = get_field('header'); ?>
    <?php if (!empty($header['title'])) : ?>
        <div class="header">
            <div class="container">
                <div class="ls-2 fw-900 fs-60"><?= $header['title'] ?></div>
                <div class="fs-21 py-4 py-md-5 <?= $header['button'] ? 'pt-lg-6 pb-lg-7' : ''; ?> description"><?= $header['description'] ?></div>
                <?php if ($header['button']) { ?>
                    <a href="<?= $header['button']['url'] ?>" class="btn btn-primary fs-21 rounded-0 py-3 py-md-4 px-5 px-md-6 fw-600"><?= $header['button']['title'] ?></a>
                <?php } ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($template == 'Template 1') : ?>
        <div class="template_1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 position-relative">
                        <div class="floating_card">
                            <div class="fw-800 fs-30 ls-2">Stress-Free Loan Process</div>
                            <div class="fs-21 ls-2 fw-500 pt-3">Here are a few things that can help make your investment loan process stress-free:</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $section_1 = get_field('template_1')['section_1']; ?>
            <div class="section_1">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <?php if (have_rows('template_1')) :
                            while (have_rows('template_1')) : the_row();
                                if (have_rows('section_1')) :
                                    $index = 1;
                                    while (have_rows('section_1')) : the_row();
                                        $icon = get_sub_field('icon');
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        $button = get_sub_field('button');
                        ?>
                                        <div class="col-md-6 col-lg-4 <?= ($index == 1) ? 'bg-primary' : 'bg-light-grey' ?>">
                                            <div class="py-5 py-md-6 py-lg-5 py-xl-6 py-xxl-9 px-4 px-md-5 px-lg-4 px-xl-5 px-xxl-7 <?= ($index == 1) ? 'text-white' : 'text-dark' ?>">
                                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                                <div class="ls-2 fw-600 fs-30 py-4"><?= $title ?></div>
                                                <div class="lh-1_87 fw-500"><?= $description ?></div>
                                                <?php if (!empty($button)) { ?>
                                                    <a href="<?= $button['url'] ?>" class="btn btn-primary fs-14 ls-2 rounded-0 py-3 px-4 fw-600"><?= $button['title'] ?></a>
                                                <?php } ?>
                                            </div>
                                        </div>
                        <?php
                                        $index++;
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php elseif ($template == 'Template 2') : ?>
        <div class="template_2">
            <?php $section_1 = get_field('template_2')['section_1']; ?>
            <?php if (!empty($section_1['title'])) : ?>
                <div class="section_1">
                    <div class="container">
                        <div class="row align-items-center gx-lg-7">
                            <div class="col-lg-7">
                                <div class="ls-2 fs-60 fw-600 pb-4 pb-md-5"><?= $section_1['title'] ?></div>
                                <div class="ls-2 fs-21 lh-2 description"><?= $section_1['description'] ?></div>
                            </div>
                            <div class="col">
                                <img src="<?= $section_1['image']['url'] ?>" alt="<?= $section_1['image']['alt'] ?>" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php $section_2 = get_field('template_2')['section_2']; ?>
            <?php if (!empty($section_2['title'])) : ?>
                <div class="section_2 bg-primary text-white">
                    <div class="container">
                        <div class="ls-2 fw-600 fs-60"><?= $section_2['title'] ?></div>
                        <div class="fs-21 py-4 py-md-5 pt-lg-6 pb-lg-7 description"><?= $section_2['description'] ?></div>
                        <a href="<?= $section_2['button']['url'] ?>" class="btn btn-jet-black fs-21 rounded-0 py-3 py-md-4 px-5 px-md-6 fw-600"><?= $section_2['button']['title'] ?></a>
                    </div>
                </div>
            <?php endif; ?>

            <?php $section_3 = get_field('template_2')['section_3']; ?>
            <?php if (!empty($section_3['title'])) : ?>
                <div class="section_3">
                    <div class="container">
                        <div class="row g-5 <?= $section_3['button_position'] == 'Right' ? 'align-items-end' : 'align-items-center' ?>">
                            <div class="col-lg-6">
                                <img src="<?= $section_3['image']['url'] ?>" alt="<?= $section_3['image']['alt'] ?>" class="w-100">

                                <?php if ($section_3['button_position'] == 'Left') { ?>
                                    <div class="d-flex justify-content-end pt-5">
                                        <a href="<?= $section_3['button']['url'] ?>" class="btn btn-primary fs-21 rounded-0 py-3 py-md-4 px-5 px-md-6 fw-600"><?= $section_3['button']['title'] ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-lg-6">
                                <div class="fs-55 ls-2 fw-600"><?= $section_3['title'] ?></div>
                                <div class="ls-2 fs-21 lh-2 pt-4 pt-md-5 description"><?= $section_3['description'] ?></div>
                                <?php if ($section_3['button_position'] == 'Right') { ?>
                                    <div class="py-5">
                                        <a href="<?= $section_3['button']['url'] ?>" class="btn btn-primary fs-21 rounded-0 py-3 py-md-4 px-5 px-md-6 fw-600"><?= $section_3['button']['title'] ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php elseif ($template == 'Template 3') : ?>
        <?php $template_3 = get_field('template_3'); ?>
        <?php if (!empty($template_3['title'])) : ?>
            <div class="template_3 bg-primary text-white">
                <div class="container">
                    <div class="heading text-center ls-2 fs-68 fw-600 lh-1_6 pb-5 pb-lg-9"><?= $template_3['title'] ?></div>
                    <div class="grid_container">
                        <?php if (have_rows('template_3')) :
                            while (have_rows('template_3')) : the_row();
                                if (have_rows('loan_usage')) :
                                    while (have_rows('loan_usage')) : the_row();
                        ?>
                                        <div class="grid_item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                            </svg>
                                            <span class="ps-4"><?= get_sub_field('text') ?></span>
                                        </div>
                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php elseif ($template == 'Template 4') : ?>
        <div class="template_4">
            <?php $section_1 = get_field('template_4')['section_1']; ?>
            <?php if (!empty($section_1['title'])) : ?>
                <div class="section_1">
                    <div class="container">
                        <div class="row align-items-center gx-lg-6 gy-5">
                            <div class="col-lg-7">
                                <div class="ls-2 fs-60 fw-600"><?= $section_1['title'] ?></div>
                                <div class="ls-2 fs-21 lh-2 py-4 py-md-5 description"><?= $section_1['description'] ?></div>
                                <a href="<?= $section_1['button']['url'] ?>" class="btn btn-primary fs-23 ls-2 rounded-0 py-3 px-4 px-lg-5 fw-600"><?= $section_1['button']['title'] ?></a>
                            </div>
                            <div class="col">
                                <img src="<?= $section_1['image']['url'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php $section_2 = get_field('template_4')['section_2']; ?>
            <?php if (!empty($section_2['title'])) : ?>
                <div class="section_2">
                    <div class="container">
                        <div class="text-center fs-50 fw-600 ls-2"><?= $section_2['title'] ?></div>
                        <div class="text-center fs-24 lh-1_87 pt-6 pb-4 description"><?= $section_2['description'] ?></div>
                        <div class="accordion-container">
                            <?php if (have_rows('template_4')) :
                                while (have_rows('template_4')) : the_row();
                                    if (have_rows('section_2')) :
                                        while (have_rows('section_2')) : the_row();
                                            if (have_rows('information')) :
                                                $index = 1;
                                                while (have_rows('information')) : the_row();
                                                    $question = get_sub_field('heading');
                                                    $answer = get_sub_field('description');
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
                                        endwhile;
                                    endif;
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php elseif ($template == 'Template 5') : ?>
        <div class="template_5">
            <?php $section_1 = get_field('template_5')['section_1']; ?>
            <?php if (!empty($section_1['title'])) : ?>
                <div class="section_1">
                    <div class="container">
                        <div class="text-center fs-50 fw-600 ls-2 mb-5 mg-lg-6 mb-xl-8"><?= $section_1['title'] ?></div>
                        <?php
                        $totalList = count($section_1['section_1_list']);

                        if (have_rows('template_5')) :
                            while (have_rows('template_5')) : the_row();
                                if (have_rows('section_1')) :
                                    while (have_rows('section_1')) : the_row();
                                        if (have_rows('section_1_list')) :
                                            $index = 1;
                                            while (have_rows('section_1_list')) : the_row();
                        ?>
                                                <div class="py-3 py-md-4 fs-24 fw-500 ls-2 d-flex align-items-center list">
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                                        </svg>
                                                    </div>
                                                    <div class="ps-3 ps-md-4"><?= get_sub_field('text') ?></div>
                                                </div>
                                                <?php if ($index < $totalList) : ?>
                                                    <hr>
                        <?php
                                                endif;
                                                $index++;
                                            endwhile;
                                        endif;
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php $section_2 = get_field('template_5')['section_2']; ?>
            <?php if (!empty($section_2['title'])) : ?>
                <div class="section_2">
                    <div class="container">
                        <div class="row justify-content-center align-items-center gx-lg-6 gy-5">
                            <div class="col-xl-6">
                                <div class="fs-60 fw-500 pb-5 pb-md-6"><?= $section_2['title'] ?></div>
                                <div class="description fs-23 lh-2"><?= $section_2['description'] ?></div>
                            </div>
                            <div class="col-lg-auto col-xl-6">
                                <img src="<?= $section_2['image']['url'] ?>" alt="<?= $section_2['image']['alt'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php $footer = get_field('footer'); ?>
    <?php if (!empty($footer['image']['url'])) : ?>
        <div class="footer">
            <img src="<?= $footer['image']['url'] ?>" alt="frames" class="main_img w-100">
            <div class="inner">
                <div class="container-fluid">
                    <div class="row justify-content-end">
                        <div class="col-xl-11">
                            <div class="row justify-content-between align-items-end">
                                <div class="col-auto">
                                    <div class="bg-grey py-4 py-xl-5"></div>
                                    <div class="part_1">
                                        <div class="fw-500 ls-2 fs-28"><?= $footer['part_1_title'] ?></div>
                                        <a href="<?= $footer['part_1_button']['url'] ?>" target="<?= $footer['part_1_button']['target'] ?>" class="btn fs-21 fw-500 text-white rounded-0 px-0 mt-6"><?= $footer['part_1_button']['title'] ?> <span class="ps-4"><svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.5661 7.75837L13.5375 1.60835C13.2003 1.3133 13.1661 0.800772 13.4612 0.463579C13.7562 0.126386 14.2687 0.0922174 14.6059 0.387261L23.2595 7.9591C23.6289 8.28232 23.6289 8.85697 23.2595 9.18019L14.6059 16.752C14.2687 17.0471 13.7562 17.0129 13.4612 16.6757C13.1661 16.3385 13.2003 15.826 13.5375 15.5309L20.5661 9.38091H1.62768C1.17962 9.38091 0.816406 9.01769 0.816406 8.56964C0.816406 8.12159 1.17962 7.75837 1.62768 7.75837H20.5661Z" fill="white" />
                                                </svg></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="part_2">
                                        <img src="<?= get_template_directory_uri() ?>/images/logo/tfs-logo.png" alt="TFS">
                                        <div class="fs-25 pt-5 pt-xl-9"><?= $footer['part_2_title'] ?></div>
                                    </div>
                                    <div class="bg-white">
                                        <a href="<?= $footer['part_2_button']['url'] ?>" target="<?= $footer['part_2_button']['target'] ?>" class="btn fs-21 fw-500 text-primary rounded-0 p-4 p-xl-5"><?= $footer['part_2_button']['title'] ?> <span class="ps-4"><svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.7643 7.65795L13.0447 1.77827C12.7223 1.49619 12.6897 1.00619 12.9717 0.683822C13.2538 0.361452 13.7438 0.328785 14.0662 0.610859L22.3393 7.84986C22.6925 8.15887 22.6925 8.70825 22.3393 9.01726L14.0662 16.2563C13.7438 16.5383 13.2538 16.5057 12.9717 16.1833C12.6897 15.8609 12.7223 15.3709 13.0447 15.0889L19.7643 9.20916H1.65842C1.23006 9.20916 0.882812 8.86191 0.882812 8.43355C0.882812 8.0052 1.23006 7.65795 1.65842 7.65795H19.7643Z" fill="#2B3484" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>