<?php

/**
 * Template Name: Marathon Posts
 */

get_header(); ?>

<div class="marathon-container">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        $post_counter = 0;
        while ($query->have_posts()) : $query->the_post();
            if ($post_counter == 0) {
    ?>
                <div class="featured-post">
                    <div class="marathon-block">
                        <div class="marathon-block__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                            </a>
                        </div>
                        <span class="marathon-block__category"><?php echo get_the_category_list(', '); ?></span>
                        <div class="marathon-block__content">
                            <h2 class="marathon-block__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="marathon-block__description"><?php the_excerpt(); ?></p>
                            <div class="marathon-block__meta">
                                <span class="marathon-block__author"><?php the_author(); ?></span>
                                <span class="circle-divider"></span>
                                <span class="marathon-block__date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                if ($post_counter == 1) {
                    echo '<div class="other-posts">';
                }
            ?>
                <div class="other-post">
                    <div class="marathon-block">
                        <div class="marathon-block__image">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                            </a>
                        </div>
                        <div class="marathon-block__content">
                            <span class="marathon-block__category"><?php echo get_the_category_list(', '); ?></span>
                            <h2 class="marathon-block__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="marathon-block__description"><?php the_excerpt(); ?></p>
                            <div class="marathon-block__meta">
                                <span class="marathon-block__author"><?php the_author(); ?></span>
                                <span class="circle-divider"></span>
                                <span class="marathon-block__date"><?php echo get_the_date(); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
                if ($post_counter == $query->post_count - 1) {
                    echo '</div>';
                }
            }
            $post_counter++;
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>
