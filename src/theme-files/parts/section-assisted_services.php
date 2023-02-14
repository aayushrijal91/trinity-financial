<div class="assisted_services">
    <div class="container">
        <div class="fw-600 fs-50 text-center lh-1_6 heading"><?= get_field('assisted_services', 'options')['heading'] ?></div>
        <div class="row gy-4 gx-xl-6 pt-6 pt-lg-7 pt-xl-9">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'services',
                'orderby' => 'menu_order',
                'order' => 'ASC',
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) :
                    $the_query->the_post();
            ?>
                    <div class="col-lg-6">
                        <div class="assisted_service_card">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="fs-24"><?= get_the_title() ?></div>
                                    <div class="fs-13 pt-2"><?= get_field('card_text') ?></div>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= get_the_permalink() ?>"><svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="22.6906" cy="22.6237" r="20.484" stroke="#353F94" stroke-width="3" />
                                            <path d="M21.1045 28.4394V15.9564H23.5882V28.4394H21.1045ZM16.1095 23.4351V20.9514H28.5924V23.4351H16.1095Z" fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>