<?php
/**
 * The main template file
 *
 * Template Name: Blog Right Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corelaw
 * @since 1.0.0
 * 
 */
get_header();
if( ! is_front_page() ) :
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
endif;
?>
<div class="blog-news blog-sec-mar">
    <div class="container">
        <div class="blog-wrapper">
            <div class="row <?php echo !is_active_sidebar('blog_sidebar') ? 'justify-content-center' : '' ?>">
                <div class="col-md-12 col-lg-7 col-xl-8 or1">
                    <?php the_content() ?>
                </div>
                <?php 
                    if (is_active_sidebar('blog_sidebar')) { ?>
                        <div class="col-md-12 col-lg-5 col-xl-4 or2">
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
</div>
<?php
get_footer();