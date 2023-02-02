<?php
get_header();
get_template_part('parts/section', 'banner');
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no post matched your criteria.') ?></p>
<?php endif; ?>
<?php get_footer(); ?>