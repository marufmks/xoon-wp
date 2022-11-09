<div class="blog-grid-section pt-120 pb-120">
    <div class="container">
        <div class="row <?php echo !is_active_sidebar('blog_sidebar') ? 'justify-content-center' : '' ?>">
            <div class="col-md-6 col-lg-8 col-xl-8 or1">
                <div class="row gy-5">
                    <?php
                        if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : 
                                echo '<div class="col-12 col-lg-6 col-xl-6">';
                                    the_post();
                                    $format = get_post_format() ? : 'grid-sidebar';
                                    /*
                                    * Include the Post-Type-specific template for the content.
                                    * If you want to override this in a child theme, then include a file
                                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                    */
                                    get_template_part( 'loop-templates/content', $format );
                                echo '</div>';
                            endwhile; 

                        else :
                            get_template_part( 'loop-templates/content', 'none' );
                        endif;
                    ?>
                    
                </div>
                <?php get_template_part( 'template-parts/blog/pagination' ); ?>
            </div>
            <?php 
                if (is_active_sidebar('blog_sidebar')) { ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 or2">
                        <div class="widget-area">
                            <?php 
                                dynamic_sidebar( 'blog_sidebar' );
                            ?> 
                        </div>
                    </div>
                <?php
                }
            
            ?>
        </div>
    </div>
</div>