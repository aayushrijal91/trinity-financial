<?php get_template_part('parts/section', 'nav'); ?>

<?php if (!empty(get_field('banner')['heading'])) : ?>
    <header class="subpage_header">
        <div class="container">
            <div class="row align-items-center">
                <?php if (is_page_template('page-templates/terms-conditions.php')) { ?>
                    <div class="col-auto">
                        <div class="ls-2 fs-60 fw-900"><?= get_field('banner')['heading']; ?></div>
                    </div>
                <?php } else { ?>
                    <div class="col-5">
                        <div class="ls-3 fs-75 fw-600"><?= get_field('banner')['heading']; ?></div>
                    </div>
                <?php } ?>
                <div class="col">
                    <div class="ls-33 fs-25 text-grey lh-1_4"><?= get_field('banner')['sub_heading']; ?></div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>