<?php
$enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
$breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value('enable_breadcrumb');
if (Egns_Helpers::is_enabled($enable_breadcrumb_by_theme, $breadcrumb_enable_by_page)) { ?>

    



    <div class="bread-crumb-section" style="background-image:url(<?php echo !empty(Egns_Helpers::egns_get_theme_option('breadcrumb_bg','url')) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg','url') : '' ?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 d-flex justify-content-center flex-column align-items-center">
                    <div class="circle-text-common circel-tex-area3">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/inner-star.svg" alt="image">
                        <p id="CircleTypeText1" class="circle-text">
                            <?php echo esc_html__('SCROLL * DOWN NOW&nbsp;', 'xoon') ?>
                        </p>
                    </div>
                    <div class="banner-content d-flex justify-content-center flex-column align-items-center">
                        <h2 class="bread-crumb-title">
                            <?php printf(esc_html__('Search Results for : %s', 'astrip'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
                        </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb gap-3">
                                <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>"><?php echo esc_html__('Home', 'xoon') ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php printf(esc_html__('Search Results for : %s', 'astrip'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
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