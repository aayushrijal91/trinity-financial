<footer>
    <div class="container">
        <div class="quick-links">
            <div class="row justify-content-between gy-5">
                <div class="col-md-auto col-lg-3 order-1">
                    <div class="fw-800 fs-25 pb-3">Contact Us</div>
                    <div class="description fs-13 lh-2 pb-2 pe-xxl-6"><?= get_field('footer', 'options')['main_description'] ?></div>
                    <div class="fs-13 pt-4">
                        <div class="fw-800 lh-2">General Enquiries</div>
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white text-decoration-none"><?= get_field('phone_number', 'options') ?></a>
                        <div class="fw-800 lh-2 pt-4">Email Address</div>
                        <a href="mailto:<?= get_field('email_address', 'options') ?>" class="text-white text-decoration-none"><?= get_field('email_address', 'options') ?></a>
                        <div class="fw-800 lh-2 pt-4">Office</div>
                        <div class="text-white"><?= get_field('address', 'options') ?></div>
                    </div>
                </div>
                <div class="col-6 col-md-auto col-lg-2 order-2">
                    <div class="fw-800 fs-25 pb-4">Resources</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Resources',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                    )); ?>
                </div>
                <div class="col-md-auto col-lg-4 order-4 order-md-3">
                    <div class="fw-800 fs-25 pb-4">Services</div>
                    <div class="footer_menu">
                        <ul class="menu menu_services">
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
                                    <li class="menu-item nav-item">
                                        <a href="<?= get_the_permalink() ?>" class="nav-link"><?= get_the_title() ?></a>
                                    </li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-6 col-md-auto order-3 order-md-4">
                    <div class="fw-800 fs-25 pb-4">Contact</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Contact',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                    )); ?>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-4">
                <div class="col-auto">
                    <div class="fs-14 text-center text-md-start"><?= get_field('footer', 'options')['copyright'] ?></div>
                </div>
                <div class="col-auto">
                    <?php if (have_rows('socials', 'options')) :
                        while (have_rows('socials', 'options')) : the_row();
                            $icon = get_sub_field('icon');
                            $link = get_sub_field('link');
                    ?>
                            <a href="<?= $link['url'] ?>" class="px-2">
                                <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="col-auto">
                    <div class="row align-items-center justify-content-center gy-5">
                        <div class="col-auto">
                            <?php
                            $totalLinks = get_field('footer', 'options')['links'] ? count(get_field('footer', 'options')['links']) : 0;

                            if (have_rows('footer', 'options')) :
                                while (have_rows('footer', 'options')) : the_row();
                                    if (have_rows('links', 'options')) :
                                        $index = 1;
                                        while (have_rows('links', 'options')) : the_row();
                                            $linkUrl = get_sub_field('link')['url'];
                                            $linkTitle = get_sub_field('link')['title'];

                                            if (strpos($linkUrl, 'http') === 0) {
                            ?>
                                                <a href="<?= $linkUrl ?>" class="text-white fs-14 text-decoration-none"><?= $linkTitle ?></a>
                                            <?php
                                            } else { ?>
                                                <span class="text-white fs-14"><?= $linkTitle ?></span>
                            <?php
                                            }

                                            if ($index < $totalLinks) {
                                                echo "<span class='px-2'>|</span>";
                                            }

                                            $index++;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                            ?>
                        </div>
                        <div class="col-auto">
                            <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/aiims.png" alt="Aiims">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>