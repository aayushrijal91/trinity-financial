<footer>
    <div class="container">
        <div class="quick-links">

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