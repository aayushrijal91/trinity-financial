<?php get_template_part('parts/section', 'nav'); ?>

<header class="homepage_header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="ls-3 fs-75 fw-600 text-center"><?= get_field('banner')['heading']; ?></h1>
                <div class="text-center text-grey ls-3 fs-25 py-6"><?= get_field('banner')['sub_heading']; ?></div>
                <div class="text-center">
                    <a href="" class="btn btn-black fs-21 rounded-0 py-4 px-6 fw-600 ls-2">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</header>