<?php
get_header();
get_template_part('parts/section', 'nav');
?>
<header class="subpage_header">
        <div class="container">
            <div class="ls-3 fs-75 fw-600 text-primary">Search Results...</div>
        </div>
    </header>
<section class="search_result">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-9">
                        <div class="py-4">
                            <a href="<?= get_the_permalink() ?>" class="fs-24 fw-600"><?= get_the_title() ?></a>
                            <div class="fw-500 pt-3 lh-1_87 fs-18"><?= get_the_content(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
    else : ?>
        <div class="container">
            <p><?php esc_html_e('Sorry, no post matched your criteria.') ?></p>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>