<?php
/**
 * The main template file
 *
 * Template Name: Blog Right Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xoon
 * @since 1.0.0
 * 
 */
get_header();
if( ! is_front_page() ) :
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
endif;
?>
<div class="inner-blog pt-120 mb-120">
    <div class="container">
        <div class="row gy-5 <?php echo !is_active_sidebar('blog_sidebar') ? 'justify-content-center' : '' ?>">
            <div class="col-lg-8">
                <?php the_content() ?>
            </div>
            <?php 
                if (is_active_sidebar('blog_sidebar')) { ?>
                    <div class="col-12 col-lg-4 col-xl-4 or2">
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
<?php
get_footer();