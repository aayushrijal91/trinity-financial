<div class="client_video">
    <?php $client_video = get_field('client_video', 'options'); ?>
    <div class="container">
        <?php if (!is_page_template('page-templates/faq.php')) : ?>
            <div class="text-center fw-900 fs-57"><?= $client_video['heading'] ?></div>
            <div class="text-center fw-500 fs-43 lh-2 pt-3 sub_heading"><?= $client_video['sub_heading'] ?></div>
        <?php endif; ?>
        <div class="row gy-4 gx-6 align-items-end<?= is_page_template('page-templates/faq.php') ? '' : ' pt-5 pt-md-7' ?>">
            <?php
            if (have_rows('client_video', 'options')) :
                while (have_rows('client_video', 'options')) : the_row();
                    if (have_rows('videos', 'options')) :
                        while (have_rows('videos', 'options')) : the_row();
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
</div>