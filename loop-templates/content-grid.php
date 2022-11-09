<?php

/**
 * Empty content partial template.
 *
 * @package xoon
 */
?>

<div class="blog-single2">
    <div class="blog-image">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('',['class' => 'img-fluid']); ?>
        <?php endif ?>
    </div>
    <div class="blog-content">
        <span class="date"><?php echo get_the_date( 'F j, Y' );?></span>
        <h4><a href="<?php echo the_permalink(); ?>" data-cursor="View<br>Details"><?php the_title(); ?></a>
        </h4>
    </div>
</div>