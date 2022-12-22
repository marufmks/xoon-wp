<?php

/**
 * Empty content partial template.
 *
 * @package xoon
 */
?>

<div class="blog-wrrap">
    <div class="blog-img magnetic-item">
        <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail('',['class' => 'img-fluid']); ?>
            <div class="publish-date">
                <span><?php echo esc_html(get_the_date('M')); ?></span>
                <p><?php echo esc_html(get_the_date('j')); ?></p>
                <span><?php echo esc_html(get_the_date('Y')); ?></span>
            </div>
        <?php endif ?>
    </div>
    <div class="blog-content">
        <div class="blog-meta">
            <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
            <p>
                <?php echo esc_html__('Posted by :', 'xoon') . ' '; ?> 
                <a class="name" href="<?php echo esc_url($author_url) ?>">
                    <?php echo esc_html(get_the_author()); ?>
                </a>

                    <?php echo esc_html('-'). ' ' ?> 
                <?php if (have_comments()): ?>
                    <a href="<?php echo esc_url(get_comments_link()); ?>">                   
                        <?php comments_number( esc_html__('0 Comments', 'xoon'), esc_html__('1 Comment', 'xoon'), esc_html__(  '% Comments', 'xoon') ); ?>
                    </a> 
                <?php endif ?>                   
            </p>
        </div>
        <h3><a data-cursor="View<br>Details" href="<?php esc_url( the_permalink() ) ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
    </div>
</div>