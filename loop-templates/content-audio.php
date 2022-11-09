
    <article aria-label="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php do_action('egns_post_before'); 
        
        /**
         * For blog single page.
         */
        if ( is_single()  ) {
            if ( class_exists( 'CSF' ) ) {
                egns_blog_audio_details();
            }else{
                egns_blog_details();
            }
        }

        /**
         * For blog index.
         */
        if ( ! is_single()  ) {
            if ( class_exists( 'CSF' ) ) {
                egns_blog_list_audio_view();
            }else {
                egns_blog_list_view();
            }
        }
        
        ?>
        <?php do_action('egns_post_after'); ?>
    </article>

