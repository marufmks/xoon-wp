<div class="inner-blog pt-120 pb-120">
    <div class="container">
        <div class="row g-lg-5 g-4 <?php echo !is_active_sidebar('blog_sidebar') ? 'justify-content-center' : '' ?>">
            <div class="col-lg-8">
                    <?php
                        if ( have_posts() ) :

                            /* Start the Loop */
                            while ( have_posts() ) :
                                the_post();
                                $format = get_post_format() ? : 'default';
                                /*
                                * Include the Post-Type-specific template for the content.
                                * If you want to override this in a child theme, then include a file
                                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                */
                                echo '<div class="blog-details-area">';
                                    get_template_part( 'loop-templates/content', $format );
                                echo '</div>';

                            endwhile; 
                        else :
                            get_template_part( 'loop-templates/content', 'none' );
                        endif;
                    ?>
                    
                <?php get_template_part( 'template-parts/blog/pagination' ); ?>
            </div>
            <?php 
                if (is_active_sidebar('blog_sidebar')) { ?>
                    <div class="col-lg-4 col-md-8">
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
