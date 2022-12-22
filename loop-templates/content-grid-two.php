<?php

/**
 * Empty content partial template.
 *
 * @package xoon
 */
?>


    <div class="single-news magnetic-item">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('', ['class' => 'img-fluid']); ?>
        <?php endif ?>
        <div class="overlay">
            <a data-cursor="View<br>Details" href="<?php echo the_permalink(); ?>">
                <svg width="114" height="105" viewBox="0 0 114 105" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.7 104L113 1M113 1H1M113 1V104" stroke-width="2" stroke-linecap="round" />
                </svg>
            </a>
            <div class="gallery-content">
                <h4><a data-cursor="View<br>Details" href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                <span><?php echo get_the_date('F j, Y'); ?></span>
            </div>
        </div>
    </div>