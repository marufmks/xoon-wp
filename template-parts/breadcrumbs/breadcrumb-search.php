<?php
$enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
$breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value('enable_breadcrumb');
if (Egns_Helpers::is_enabled($enable_breadcrumb_by_theme, $breadcrumb_enable_by_page)) { ?>

    <div style="background-image:url(<?php echo !empty(Egns_Helpers::egns_get_theme_option('breadcrumb_bg', 'url')) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg', 'url') : '' ?>);" class="inner-page-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-10">
                    <div class="banner-content">
                        <h1>
                            <?php echo get_search_query(); ?>
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb gap-3">
                                <li class="breadcrumb-item"><a href="<?php echo  home_url(); ?>"><?php echo esc_html__('Home', 'xoon') ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php echo get_search_query(); ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>