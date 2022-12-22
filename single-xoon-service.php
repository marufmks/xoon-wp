<?php
get_header();
?>
<?php
get_template_part('template-parts/breadcrumbs/breadcrumb-single');
?>
<section class="introduction-area sec-mar">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part( 'loop-templates/content', 'single-service' );
        endwhile;

        // End of the loop.
        // If comments are open or there is at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }
        ?>

    </div>
</section>
<?php
get_footer();
?>