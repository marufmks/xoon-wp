<article aria-label="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php do_action('egns_post_before'); 
    
    /**
     * For blog single page.
     */
    if ( is_single() ) {
        egns_blog_details();
    }

    /**
     * For blog index.
     */
    if ( ! is_single() ) {
        egns_blog_grid_sidebar_view();
    }
    
    ?>
    <?php do_action('egns_post_after'); ?>
</article>

