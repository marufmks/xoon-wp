<?php

/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package xoon
 */
?>

<div class="container">
    <div class="error-area-wrapper text-center">
        <div class="mt-30 mb-30">
            <img src="<?php echo get_theme_file_uri() ?>../assets/images/cry.svg" alt="">
            <h3><?php echo esc_html__('PAGE NOT', 'xoon'); ?> <span><?php echo esc_html__('FOUND', 'xoon'); ?></span> </h3>
            <p><?php echo esc_html__("The page you are looking for might have been removed, Had it's name changed or is temporarily unavailable.", 'xoon'); ?></p>
        </div>
        <?php
            get_template_part( 'searchform' );
        ?>
    </div>
</div>