    <div class="marathon-block">
        <div class="marathon-block__image">
            <?php echo wp_get_attachment_image(get_field('image'), 'full'); ?>
        </div>
        <div class="marathon-block__content">
            <h2 class="marathon-block__title"><?php the_field('title'); ?></h2>
            <p class="marathon-block__description"><?php the_field('description'); ?></p>
            <div class="marathon-block__meta">
                <span class="marathon-block__category"><?php the_field('category'); ?></span>
                <span class="marathon-block__author"><?php the_field('author'); ?></span>
                <span class="marathon-block__date"><?php the_field('date'); ?></span>
                <img class="marathon-block__date" src="<?php the_field('image'); ?>"></img>

            </div>
        </div>
    </div>