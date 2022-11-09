<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package egns
 */

get_header();

if( ! is_front_page() ) :
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
endif;
?>
<div class="page-wrapper sec-mar">
    <?php
        do_action( 'egns_page_before' );
            while ( have_posts() ) :
                the_post();
                get_template_part( 'loop-templates/content', 'page' );
            endwhile;
        do_action( 'egns_page_after' );
    ?>
</div>
<?php
get_footer();
?>