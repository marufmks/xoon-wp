<?php

/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xoon
 */

get_header();

if( is_404() ) :
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-error' );
endif;

?>

<div class="error-page pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="bacground-img">
                        <img class="img-fluid" src="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('404_image', 'url'))  ?>" alt="<?php echo esc_attr('error-image') ?>">
                    </div>
                    <div class="error-content text-center style-two">
                        <h5><?php echo Egns_Helpers::egns_get_theme_option('404_subtitle') ? esc_html(Egns_Helpers::egns_get_theme_option('404_subtitle')) : esc_html__('Error Page', 'xoon') ?></h5>
                        <h2><?php echo Egns_Helpers::egns_get_theme_option('404_subtitle') ? esc_html(Egns_Helpers::egns_get_theme_option('404_title')) : wp_kses('PAGE NOT <span>FOUND</span>',wp_kses_allowed_html('post')) ?></h2>
                        <p><?php echo Egns_Helpers::egns_get_theme_option('404_description') ? esc_html(Egns_Helpers::egns_get_theme_option('404_description')) : esc_html__("It looks like you've reached a URL that doesn’t exist. Please use the navigation above or search below to find your way back to our amazing website.", 'xoon') ?></p>
                        <a class="primary-btn3 button-hover-two" href="<?php echo esc_url(home_url('/')); ?>" ><?php echo Egns_Helpers::egns_get_theme_option('404_button_text') ? esc_html(Egns_Helpers::egns_get_theme_option('404_button_text')) : esc_html__('Back To Home', 'xoon') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();



