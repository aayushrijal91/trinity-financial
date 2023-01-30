<footer>
    <div class="container">
        <div class="quick-links">
            <div class="row">
                <div class="col-6 col-md-auto col-lg-4">
                    <div class="fw-800 fs-25 ls-2 pb-3">Contact Us</div>
                    <div class="fs-13 lh-2 ls-2 pb-2">Our team will help you search, choose & settle<br> your loan. <span class="fw-700">Chat to one of our loan specialists at a<br> time that suits you.</span></div>
                    <div class="fs-13 pt-4">
                        <div class="fw-800 lh-2">General Enquiries</div>
                        <a href="tel:<?= get_field('phone_number', 'options') ?>" class="text-white text-decoration-none"><?= get_field('phone_number', 'options') ?></a>
                        <div class="fw-800 lh-2 pt-4">Email Address</div>
                        <a href="mailto:<?= get_field('email_address', 'options') ?>" class="text-white text-decoration-none"><?= get_field('email_address', 'options') ?></a>
                        <div class="fw-800 lh-2 pt-4">Office</div>
                        <div class="text-white"><?= get_field('address', 'options') ?></div>
                    </div>
                </div>
                <div class="col-6 col-md-auto col-lg-2">
                    <div class="fw-800 fs-25 ls-2 pb-4">Resources</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Resources',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto col-lg-4">
                    <div class="fw-800 fs-25 ls-2 pb-4">Services</div>
                    <?php wp_nav_menu(array(
                        'menu' => 'Footer Resources',
                        'item_class' => 'nav-item',
                        'link_class' => 'nav-link',
                        'container_class' => 'footer_menu',
                    )); ?>
                </div>
                <div class="col-6 col-md-auto col-lg-2">
                    <div class="fw-800 fs-25 ls-2 pb-4">Contact</div>
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
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <div class="fs-14">Copyright © 2021 Trinity Financial Services &nbsp; | &nbsp; Australian Credit Licence Number 383704</div>
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
                    <div class="row align-items-center">
                        <div class="col-auto fs-14">Privacy Policy &nbsp; | &nbsp; Terms & Conditions &nbsp; | &nbsp; Disclaimer</div>
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