<?php

/**
 * The main template file
 *
 * Template Name: Blog grid
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xoon
 * @since 1.0.0
 * 
 */
get_header();
if (!is_front_page()) :
    get_template_part('template-parts/breadcrumbs/breadcrumb-page');
endif;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
$wp_query = new WP_Query($args);

?>

<div class="blog-section bg-color2 pbb-120 pb-120">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <?php
                $num = 0;
                if ($wp_query->have_posts()) :
                    /* Start the Loop */
                    while ($wp_query->have_posts()) :
                        $num++;
                        echo '<div class="col-xl-4 col-lg-6 col-md-6">';
                        $wp_query->the_post();
                        $format = get_post_format() ?: 'grid';
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
        <div class="row pt-80">
            <div class="col-lg-12">
                <?php get_template_part( 'template-parts/blog/pagination' ); ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
