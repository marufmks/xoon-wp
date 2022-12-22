<div class="blog-grid mb-120 pt-120">
    <div class="container">
        <div class="row g-4">
            <?php
                $num = 0;
                if ($wp_query->have_posts()) :
                    /* Start the Loop */
                    while ($wp_query->have_posts()) :
                        $num++;
                        echo '<div class="col-lg-6 col-md-6 mb-20">';
                        $wp_query->the_post();
                        $format = get_post_format() ?: 'grid-one';
                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        get_template_part('loop-templates/content', $format);
                        echo '</div>';

                    endwhile;
                else :
                    get_template_part('loop-templates/content', 'none');
                endif;
            ?>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php get_template_part( 'template-parts/blog/pagination' ); ?>
            </div>
        </div>
    </div>
</div>