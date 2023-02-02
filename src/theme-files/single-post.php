<?php
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="blog_post">
    <div class="container">
        <?= the_content() ?>
    </div>
</div>
<?php get_template_part('parts/section', 'free_review'); ?>

<?php get_footer(); ?>