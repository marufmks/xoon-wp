<?php

/**
 * The template for displaying search forms
 *
 * @package corelaw
 */
?>
<div class="sidebar-widget page-search">
    <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" role="search" class="search-form" id="blog-sidebar-search">
        <input type="text" id="s" name="s" placeholder="<?php echo esc_attr__('Search Here..', 'corelaw'); ?>">
        <button type="submit"><i class="bi bi-search"></i></button>
    </form>
</div>