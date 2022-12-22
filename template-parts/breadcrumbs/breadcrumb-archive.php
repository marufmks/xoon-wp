<?php

$enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
$breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value('enable_breadcrumb');

if (Egns_Helpers::is_enabled($enable_breadcrumb_by_theme, $breadcrumb_enable_by_page)) : ?>


    <div style="background-image:url(<?php echo !empty(Egns_Helpers::egns_get_theme_option('breadcrumb_bg', 'url')) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg', 'url') : '' ?>);" class="inner-page-banner">
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-md-10">
                    <div class="banner-content">
                        <h1>
                            <?php
                            if (is_category()) {
                                single_cat_title();
                            } elseif (is_tag()) {
                                single_tag_title();
                            } elseif (is_author()) {
                                the_author();
                            } elseif (is_date()) {
                                if (is_day()) {
                                    echo get_the_time('F j, Y');
                                } else if (is_month()) {
                                    echo get_the_time('F, Y');
                                } else if (is_year()) {
                                    echo get_the_time('Y');
                                }
                            } elseif (is_home()) {
                                Egns_Helpers::egns_translate_with_escape_('Blog');
                            } elseif (is_post_type_archive()) {
                                post_type_archive_title();
                            } else {
                                the_title();
                            }
                            ?>
                        </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb gap-3">
                                <li class="breadcrumb-item"><a href="<?php echo  home_url(); ?>"><?php echo esc_html__('Home', 'xoon') ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php
                                    if (is_category()) {
                                        single_cat_title();
                                    } elseif (is_tag()) {
                                        single_tag_title();
                                    } elseif (is_author()) {
                                        the_author();
                                    } elseif (is_date()) {
                                        if (is_day()) {
                                            echo get_the_time('F j, Y');
                                        } else if (is_month()) {
                                            echo get_the_time('F, Y');
                                        } else if (is_year()) {
                                            echo get_the_time('Y');
                                        }
                                    } elseif (is_home()) {
                                        Egns_Helpers::egns_translate_with_escape_('Blog');
                                    } elseif (is_post_type_archive()) {
                                        post_type_archive_title();
                                    } else {
                                        the_title();
                                    }
                                    ?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>