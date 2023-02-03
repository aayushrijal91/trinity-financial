<?php
get_template_part('parts/section', 'nav');

if (!empty(get_field('banner')['heading']) && !is_home()) {
    $heading = get_field('banner')['heading'];
    $sub_heading = get_field('banner')['sub_heading'];
} elseif (is_home()) {
    $heading = "Our Blog";
    $sub_heading = "Our team will assist you in researching, organising, and negotiating loans on your behalf. View our services below.";
}
?>
<?php if (!is_404()) : ?>
    <header class="subpage_header">
        <div class="container">
            <div class="row align-items-center">
                <?php if (is_single() && get_post_type() == "services") { ?>
                    <div class="col-6">
                        <div class="ls-3 fs-75 fw-600"><?= $heading ?></div>
                    </div>
                <?php } else if (is_page_template('page-templates/terms-conditions.php') || is_single()) { ?>
                    <div class="col-auto">
                        <div class="ls-2 fs-60 fw-900"><?= $heading ?></div>
                    </div>
                <?php } else { ?>
                    <div class="col-5">
                        <div class="ls-3 fs-75 fw-600"><?= $heading ?></div>
                    </div>
                <?php } ?>
                <div class="col">
                    <div class="ls-33 fs-25 text-grey lh-1_4"><?= $sub_heading ?></div>
                </div>
            </div>
        </div>
    </header>
<?php endif; ?>