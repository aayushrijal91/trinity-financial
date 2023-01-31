<div class="client_video">
    <?php $client_video = get_field('client_video', 'options'); ?>
    <div class="container">
        <div class="text-center fw-900 fs-57"><?= $client_video['heading'] ?></div>
        <div class="text-center fw-500 fs-43 lh-2 pt-3"><?= $client_video['sub_heading'] ?></div>
    
        <div class="row gy-4 gx-6 align-items-end pt-7">
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