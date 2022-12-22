<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package xoon
 */
?>

<!-- ========== footer_section start======== -->

<footer class="style1">
  <?php if (class_exists('CSF') && (Egns_Helpers::is_enabled(1, Egns_Helpers::egns_page_option_value('footer_widget_enable'))) && (is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3'))) : ?>
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center g-4">
          <?php egns_footer_widgets(); ?>
        </div>
      </div>
    </div>
  <?php endif ?>
  <div class="footer-btm d-flex justify-content-center">
    <?php egns_footer_copyright(); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>