<?php
get_header();

get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>

<div class="blog-standard-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 <?php echo !is_active_sidebar('blog_sidebar') ? 'offset-xl-2 offset-lg-2' : '' ?> or1">
                <div class="blog-post-area">
                    <?php
                        while ( have_posts() ) :

                            the_post();
                            $format = get_post_format() ?: 'default';

                            get_template_part('loop-templates/content', $format);

                        endwhile; // End of the loop.
                        ?>
                        <?php
                            //If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) : ?>

                            <?php 
                                comments_template();
                            endif;
                        ?>
                </div>
            </div>
            <?php 
                if ( is_active_sidebar('blog_sidebar') ) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="blog-sidebar ps-lg-4">
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

<?php
get_footer();
