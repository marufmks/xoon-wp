<?php

/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corelaw
 */

get_header();


?>



<div class="bread-crumb-section two">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-6 d-flex  align-items-center">
                <div class="error-content">
                    <h2><?php echo Egns_Helpers::egns_get_theme_option('404_title') ? esc_html(Egns_Helpers::egns_get_theme_option('404_title')) : esc_html__('Page Not Found!', 'corelaw') ?></h2>
                    <p class="para"><?php echo Egns_Helpers::egns_get_theme_option('404_description') ? esc_html(Egns_Helpers::egns_get_theme_option('404_description')) : esc_html__("It looks like you've reached a URL that doesn’t exist. Please use the navigation above or search below to find your way back to our amazing website.", 'corelaw') ?></p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" ><i class="bx bx-home"></i> <?php echo Egns_Helpers::egns_get_theme_option('404_button_text') ? esc_html(Egns_Helpers::egns_get_theme_option('404_button_text')) : esc_html__('Back To Home', 'xoon') ?></a>
                </div>
            </div>
            <div class="col-lg-6 position-relative">
                <div class="error-img">
                    <img class="img-fluid" src="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('404_image', 'url'))  ?>" alt="<?php echo esc_attr('error-image') ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="error-marque">
    <ul class="d-flex align-items-center p-0 m-0">
        <li>Error Maintance Break</li>
        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"> 404<img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"></li>
        <li>Error Maintance Break</li>
        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"> 404<img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"></li>
        <li>Error Maintance Break</li>
        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"> 404<img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"></li>
        <li>Error Maintance Break</li>
        <li><img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"> 404<img src="<?php echo get_template_directory_uri()?>/assets/images/icons/error-star.svg" alt="error-star"></li>
    </ul>
</div> -->

<?php
get_footer();



