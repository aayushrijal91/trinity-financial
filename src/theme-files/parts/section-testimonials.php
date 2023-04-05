<div class="testimonials">
    <?php $testimonials = get_field('testimonials', 'options'); ?>
    <div class="container">
            <div class="text-center fw-900 fs-57"><?= $testimonials['heading'] ?></div>
            <div class="text-center fw-500 fs-43 lh-2 pt-3 sub_heading"><?= $testimonials['sub_heading'] ?></div>
        <div class="row gy-4 pt-5 pt-lg-7">
            <?php
            if (have_rows('testimonials', 'options')) :
                while (have_rows('testimonials', 'options')) : the_row();
                    if (have_rows('reviews', 'options')) :
                        while (have_rows('reviews', 'options')) : the_row();
                            $username = get_sub_field('username');
                            $review = get_sub_field('review');
            ?>
                            <div class="col-md-6">
                                <div class="review_card">
                                    <div class="description"><?= $review ?></div>
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="initial"><?= substr($username, 0, 1) ?></div>
                                                <div class="fs-14 fw-700"><?= $username ?></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg-2"><img src="<?= get_template_directory_uri() ?>/images/lib/stars.png" alt="5 stars" /></div>
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
</div>