<?php
/*
 * Template Name: Services
 * The Services page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="services">
    <div class="container">
        <div class="row gy-6 gx-xl-5">
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
                    $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
            ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="service_card">
                            <img src="<?= $featured_img_url ?>" alt="featured" class="featured_image">
                            <div class="content">
                                <div class="fs-25 ls-2 fw-800"><?= get_the_title() ?></div>
                                <div class="fs-13 ls-2 fw-300 py-3"><?= get_the_content() ?></div>
                                <a href="<?= get_the_permalink() ?>" class="btn p-0 text-white fs-13 fw-500 ls-2"><u>Find Out More</u>
                                    <span class="ps-2"><svg width="13" height="10" viewBox="0 0 13 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.932 4.396L7.10611 1.04835C6.92256 0.887753 6.90396 0.608768 7.06456 0.425224C7.22516 0.24168 7.50415 0.22308 7.68769 0.383682L12.3981 4.50526C12.5991 4.6812 12.5991 4.994 12.3981 5.16993L7.68769 9.29152C7.50415 9.45212 7.22516 9.43352 7.06456 9.24997C6.90396 9.06643 6.92256 8.78744 7.10611 8.62684L10.932 5.27919H0.623239C0.379351 5.27919 0.181641 5.08148 0.181641 4.83759C0.181641 4.59371 0.379351 4.396 0.623239 4.396H10.932Z" fill="white" />
                                        </svg>
                                    </span></a>
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
<?php get_footer(); ?>