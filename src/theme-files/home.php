<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<div class="blogs">
    <div class="container">
        <div class="row gx-7">
            <div class="col-8">
                <div class="row g-5">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
                            $featured_description = get_the_content() ? substr(get_the_content(), 0, 200) . '...' : '...';
                            $date = get_the_time('d', $post->ID) . ' ' . get_the_time('M', $post->ID) . ' ' . get_the_time('Y', $post->ID);
                    ?>
                            <div class="col-md-6">
                                <div class="blog_card">
                                    <img src="<?= $featured_img_url ?>" alt="featured" class="featured_image">
                                    <div class="content">
                                        <div class="fs-11 fw-900 ls-2"><?= $date ?></div>
                                        <div class="py-3 fs-25 fw-700"><?= get_the_title(); ?></div>
                                        <div class="fs-200 fs-11 lh-1_87 pb-4"><?= strip_tags($featured_description) ?></div>
                                        <a href="<?= get_the_permalink() ?>" class="btn p-0 text-white fs-13 fw-600 ls-2">Continue Reading
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
            <div class="col-4">
                <div class="search d-flex">
                    <div class="pe-3">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0002 17.2521L11.9258 12.1777" stroke="white" stroke-width="2" stroke-linecap="square" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4 14.052C10.9346 14.052 13.8 11.1866 13.8 7.65195C13.8 4.11733 10.9346 1.25195 7.4 1.25195C3.86538 1.25195 1 4.11733 1 7.65195C1 11.1866 3.86538 14.052 7.4 14.052Z" stroke="white" stroke-width="2" stroke-linecap="square" />
                        </svg>
                    </div>

                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                        <input type="text" value="" name="s" id="s" placeholder="Type to search">
                        <input type="submit" id="searchsubmit" value="Search">
                    </form>
                </div>
                <div class="recent_posts">
                    <div class="fs-24 fw-700 pb-4">Recent Posts</div>
                    <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) :
                        $index = 1;
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $date = get_the_time('d', $post->ID) . ' ' . get_the_time('M', $post->ID) . ' ' . get_the_time('Y', $post->ID);
                    ?>
                            <a href="<?= get_the_permalink() ?>" class="text-white">
                                <div class="fw-700 lh-2"><?= get_the_title(); ?></div>
                                <div class="fs-14 fw-300 opacity-70"><?= $date ?></div>
                            </a>
                            <?php if ($index < 4) { ?>
                                <hr class="my-4">
                    <?php
                            }
                            $index++;
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="categories">
                    <div class="fs-24 fw-700 pb-4">Categories</div>
                    <?php foreach (get_categories() as $category) { ?>
                        <div class="fw-700 py-2"><?= $category->name ?> - <span class="opacity-70"><?= $category->count ?> <?= $category->count <= 1 ? 'Post' : 'Posts' ?></span></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>