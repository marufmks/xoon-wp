<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package corelaw
 */
?>

<!-- ========== footer_section start======== -->

<div class="footer-section bg-color2">
  <div class="footer-bottom" <?php if (!empty(Egns_Helpers::egns_get_theme_option('footer_widget_area_background', 'url'))) : ?> style="background-image:url(<?php echo esc_url(Egns_Helpers::egns_get_theme_option('footer_widget_area_background', 'url')) ?>)" <?php endif  ?>>
    <div class="container">
      <div class="row text-center d-flex justify-content-between">

        <?php if (class_exists('CSF') && (is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3'))) : ?>
          <?php egns_footer_widgets(); ?>
        <?php endif ?>


        <?php egns_footer_menu_widgets() ?>

        <?php
        egns_footer_copyright();
        ?>

      </div>
    </div>
  </div>


  <?php wp_footer(); ?>
  </body>

  </html>