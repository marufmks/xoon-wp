<?php
if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}
function egnsCustomStyling()
{
    $custom_css = "";
    $egns_theme_options = get_option('egns_theme_options');

    //page meta options
    $page_meta_chooseUs = get_post_meta(get_the_ID(), 'why_choose_us_section', true);


    /**************************
     * Primary Color Start
     *************************/
    $primary_color = $egns_theme_options['primary_color'] ?? '';
    $primary_color_two = $egns_theme_options['primary_color_two'] ?? '';
    $primary_color_three = $egns_theme_options['primary_color_three'] ?? '';
    $primary_dark_color_one = $egns_theme_options['primary_dark_color_one'] ?? '';
    $primary_dark_color_two = $egns_theme_options['primary_dark_color_two'] ?? '';
    $primary_dark_color_three = $egns_theme_options['primary_dark_color_three'] ?? '';

    if (!empty($primary_color)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_color; 
            }
        ";
    }

    if (!empty($primary_color_two)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_color_two; 
            }
        ";
    }

    if (!empty($primary_color_three)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_color_three; 
            }
        ";
    }

    if (!empty($primary_dark_color_one)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_dark_color_one; 
            }
        ";
    }

    if (!empty($primary_dark_color_two)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_dark_color_two; 
            }
        ";
    }

    if (!empty($primary_dark_color_three)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_dark_color_three; 
            }
        ";
    }

    /**************************
     * Primary Color Start
     *************************/



    /**************************
     * Header Style Start 
     *************************/

    // Header One 

    $header_one_background_color = $egns_theme_options['header_one_formate_color']['header_one_background_color'] ?? '';
    $header_one_menu_text_color = $egns_theme_options['header_one_formate_color']['header_one_menu_text_color'] ?? '';
    $header_one_menu_hover_text_color = $egns_theme_options['header_one_formate_color']['header_one_menu_hover_text_color'] ?? '';
    $header_one_sub_menu_background_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_background_color'] ?? '';
    $header_one_sub_menu_text_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_text_color'] ?? '';
    $header_one_sub_menu_text_hover_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_hover_text_color'] ?? '';
    $header_one_sidebar_icon_color = $egns_theme_options['header_one_formate_color']['header_one_sidebar_icon_color'] ?? '';
    $header_one_sidebar_menu_text_color = $egns_theme_options['header_one_formate_color']['header_one_sidebar_menu_text_color'] ?? '';
    $header_one_sidebar_menu_icon_color = $egns_theme_options['header_one_formate_color']['header_one_sidebar_menu_icon_color'] ?? '';


    if (!empty($header_one_background_color)) {
        $custom_css .= "
            header.style-1{
                background-color: $header_one_background_color; 
            }
        ";
    }

    if (!empty($header_one_menu_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu .menu-list > li a {
                color: $header_one_menu_text_color;
            }
        ";
    }

    if (!empty($header_one_menu_hover_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu .menu-list > li a:hover {
                color: $header_one_menu_hover_text_color;
            }
        ";
    }

    if (!empty($header_one_sub_menu_background_color)) {
        $custom_css .= "
        header.style-1 .main-menu .menu-list > li .sub-menu {
                background-color: $header_one_sub_menu_background_color
            }
            
        ";
    }

    if (!empty($header_one_sub_menu_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu .menu-list > li .sub-menu > li a {
                color: $header_one_sub_menu_text_color;
            }
        ";
    }

    if (!empty($header_one_sub_menu_text_hover_color)) {
        $custom_css .= "
        header.style-1 .main-menu .menu-list > li .sub-menu > li a:hover {
                color: $header_one_sub_menu_text_hover_color;
            }
        ";
    }


    // Sidebar Header one


    if (!empty($header_one_sidebar_icon_color)) {
        $custom_css .= "
        header.style-1 .nav-right .side-icon.style-two svg {
                fill: $header_one_sidebar_icon_color;
            }
        ";
    }
    if (!empty($header_one_sidebar_menu_text_color)) {
        $custom_css .= "
        .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li a {
            -webkit-text-stroke: 1px $header_one_sidebar_menu_text_color;
            }
        ";
    }
    if (!empty($header_one_sidebar_menu_icon_color)) {
        $custom_css .= "
        .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li > .bi {
            color: $header_one_sidebar_menu_icon_color;
            }
        ";
    }

    // Header Two
    $header_two_background_color = $egns_theme_options['header_two_formate_color']['header_two_background_color'] ?? '';
    $header_two_menu_text_color = $egns_theme_options['header_two_formate_color']['header_two_menu_text_color'] ?? '';
    $header_two_menu_hover_text_color = $egns_theme_options['header_two_formate_color']['header_two_menu_hover_text_color'] ?? '';
    $header_two_sub_menu_background_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_background_color'] ?? '';
    $header_two_sub_menu_text_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_text_color'] ?? '';
    $header_two_sub_menu_text_hover_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_hover_text_color'] ?? '';
    $header_two_button_text_color = $egns_theme_options['header_two_formate_color']['header_two_btn_text_color'] ?? '';
    $header_two_button_text_hover_color = $egns_theme_options['header_two_formate_color']['header_two_btn_text_hover_color'] ?? '';
    $header_two_button_background_color = $egns_theme_options['header_two_formate_color']['header_two_btn_background_color'] ?? '';
    $header_two_button_background_hover_color = $egns_theme_options['header_two_formate_color']['header_two_btn_background_hover_color'] ?? '';
    $header_two_button_border_color = $egns_theme_options['header_two_formate_color']['header_two_btn_border_color'] ?? '';
    $header_two_sidebar_icon_color = $egns_theme_options['header_two_formate_color']['header_two_sidebar_icon_color'] ?? '';
    $header_two_sidebar_menu_text_color = $egns_theme_options['header_two_formate_color']['header_two_sidebar_menu_text_color'] ?? '';
    $header_two_sidebar_menu_icon_color = $egns_theme_options['header_two_formate_color']['header_two_sidebar_menu_icon_color'] ?? '';

    if (!empty($header_two_background_color)) {
        $custom_css .= "
                header.style-2{
                    background-color: $header_two_background_color; 
                }
            ";
    }

    if (!empty($header_two_menu_text_color)) {
        $custom_css .= "
            header.style-2 .main-menu .menu-list > li a {
                    color: $header_two_menu_text_color;
                }
            ";
    }

    if (!empty($header_two_menu_hover_text_color)) {
        $custom_css .= "
            header.style-2 .main-menu .menu-list > li a:hover {
                    color: $header_two_menu_hover_text_color;
                }
            ";
    }

    if (!empty($header_two_sub_menu_background_color)) {
        $custom_css .= "
            header.style-2 .main-menu .menu-list > li .sub-menu {
                    background-color: $header_two_sub_menu_background_color
                }
                
            ";
    }

    if (!empty($header_two_sub_menu_text_color)) {
        $custom_css .= "
            header.style-2 .main-menu .menu-list > li .sub-menu > li a {
                    color: $header_two_sub_menu_text_color;
                }
            ";
    }

    if (!empty($header_two_sub_menu_text_hover_color)) {
        $custom_css .= "
            header.style-2 .main-menu .menu-list > li .sub-menu > li a:hover {
                    color: $header_two_sub_menu_text_hover_color;
                }
            ";
    }
    // Header Two Button

    if (!empty($header_two_button_text_color)) {
        $custom_css .= "
                header.style-2 .nav-right .header-btn a {
                    color: $header_two_button_text_color;
                }
            ";
    }
    if (!empty($header_two_button_text_hover_color)) {
        $custom_css .= "
                .button-hover-two:hover {
                    color: $header_two_button_text_hover_color;
                }
            ";
    }

    if (!empty($header_two_button_background_color)) {
        $custom_css .= "
                header.style-2 .nav-right .header-btn a {
                    background: $header_two_button_background_color
                }
            ";
    }
    if (!empty($header_two_button_background_hover_color)) {
        $custom_css .= "
                .button-hover-two::before {
                    background: $header_two_button_background_hover_color
                }
            ";
    }

    if (!empty($header_two_button_border_color)) {
        $custom_css .= "
                header.style-2 .nav-right .header-btn a {
                    border:1px solid $header_two_button_border_color;
                }
            ";
    }



    // Sidebar Header Two


    if (!empty($header_two_sidebar_icon_color)) {
        $custom_css .= "
                header.style-2 .nav-right .side-icon.style-two svg {
                    stroke: $header_two_sidebar_icon_color
                }
            ";
    }
    if (!empty($header_two_sidebar_menu_text_color)) {
        $custom_css .= "
            .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li a {
                -webkit-text-stroke: 1px $header_two_sidebar_menu_text_color;
                }
            ";
    }
    if (!empty($header_two_sidebar_menu_icon_color)) {
        $custom_css .= "
            .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li > .bi {
                color: $header_two_sidebar_menu_icon_color;
                }
            ";
    }
    // Header Three 

    $header_three_background_color = $egns_theme_options['header_three_formate_color']['header_three_background_color'] ?? '';
    $header_three_menu_text_color = $egns_theme_options['header_three_formate_color']['header_three_menu_text_color'] ?? '';
    $header_three_menu_hover_text_color = $egns_theme_options['header_three_formate_color']['header_three_menu_hover_text_color'] ?? '';
    $header_three_sub_menu_background_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_background_color'] ?? '';
    $header_three_sub_menu_text_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_text_color'] ?? '';
    $header_three_sub_menu_text_hover_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_hover_text_color'] ?? '';
    $header_three_button_text_color = $egns_theme_options['header_three_formate_color']['header_three_btn_text_color'] ?? '';
    $header_three_button_text_hover_color = $egns_theme_options['header_three_formate_color']['header_three_btn_text_hover_color'] ?? '';
    $header_three_button_background_color = $egns_theme_options['header_three_formate_color']['header_three_btn_background_color'] ?? '';
    $header_three_button_background_hover_color = $egns_theme_options['header_three_formate_color']['header_three_btn_background_hover_color'] ?? '';
    $header_three_button_border_color = $egns_theme_options['header_three_formate_color']['header_three_btn_border_color'] ?? '';
    $header_three_sidebar_icon_color = $egns_theme_options['header_three_formate_color']['header_three_sidebar_icon_color'] ?? '';
    $header_three_sidebar_menu_text_color = $egns_theme_options['header_three_formate_color']['header_three_sidebar_menu_text_color'] ?? '';
    $header_three_sidebar_menu_icon_color = $egns_theme_options['header_three_formate_color']['header_three_sidebar_menu_icon_color'] ?? '';


    if (!empty($header_three_background_color)) {
        $custom_css .= "
            header.style-3{
                background-color: $header_three_background_color; 
            }
        ";
    }

    if (!empty($header_three_menu_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu .menu-list > li a {
                color: $header_three_menu_text_color;
            }
        ";
    }

    if (!empty($header_three_menu_hover_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu .menu-list > li a:hover {
                color: $header_three_menu_hover_text_color;
            }
        ";
    }

    if (!empty($header_three_sub_menu_background_color)) {
        $custom_css .= "
        header.style-3 .main-menu .menu-list > li .sub-menu {
                background-color: $header_three_sub_menu_background_color
            }
            
        ";
    }

    if (!empty($header_three_sub_menu_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu .menu-list > li .sub-menu > li a {
                color: $header_three_sub_menu_text_color;
            }
        ";
    }

    if (!empty($header_three_sub_menu_text_hover_color)) {
        $custom_css .= "
        header.style-3 .main-menu .menu-list > li .sub-menu > li a:hover {
                color: $header_three_sub_menu_text_hover_color;
            }
        ";
    }


    // Header three Button

    if (!empty($header_three_button_text_color)) {
        $custom_css .= "
            header.style-3 .nav-right .header-btn a {
                color: $header_three_button_text_color;
            }
        ";
    }
    if (!empty($header_three_button_text_hover_color)) {
        $custom_css .= "
            .button-hover-one:hover {
                color: $header_three_button_text_hover_color;
            }
        ";
    }

    if (!empty($header_three_button_background_color)) {
        $custom_css .= "
            header.style-3 .nav-right .header-btn a {
                background: $header_three_button_background_color
            }
        ";
    }
    if (!empty($header_three_button_background_hover_color)) {
        $custom_css .= "
            .button-hover-one::before {
                background: $header_three_button_background_hover_color
            }
        ";
    }

    if (!empty($header_three_button_border_color)) {
        $custom_css .= "
            header.style-3 .nav-right .header-btn a {
                border:1px solid $header_three_button_border_color;
            }
        ";
    }


    // Sidebar Header three


    if (!empty($header_three_sidebar_icon_color)) {
        $custom_css .= "
        header.style-3 .nav-right .side-icon.style-two svg {
                fill: $header_three_sidebar_icon_color;
            }
        ";
    }
    if (!empty($header_three_sidebar_menu_text_color)) {
        $custom_css .= "
        .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li a {
            -webkit-text-stroke: 1px $header_three_sidebar_menu_text_color;
            }
        ";
    }
    if (!empty($header_three_sidebar_menu_icon_color)) {
        $custom_css .= "
        .main-nav-wrapper .main-nav .sidebar-menu-area > ul > li > .bi {
            color: $header_three_sidebar_menu_icon_color;
            }
        ";
    }









    /**************************
     * Header Style End
     *************************/

    /************************
     * Start Breadcrumb Style
     ************************/


    $breadcrumb_title = $egns_theme_options['breadcrumb_title_typography'] ?? '';
    $breadcrumb_link = $egns_theme_options['breadcrumb_link_typography'] ?? '';


    // Breadcrumb Title

    $breadcrumb_title_font_size = $breadcrumb_title['font-size'] ?? '';
    $breadcrumb_title_color = $breadcrumb_title['color'] ?? '';
    $breadcrumb_title_font_family = $breadcrumb_title['font-family'] ?? '';
    $breadcrumb_title_font_style = $breadcrumb_title['font-style'] ?? '';
    $breadcrumb_title_text_transform = $breadcrumb_title['text-transform'] ?? '';



    if (!empty($breadcrumb_title_font_size)) {
        $custom_css .= "
        .inner-page-banner .banner-content h1{
            font-size: $breadcrumb_title_font_size" . 'px' . ";
        }
    ";
    }

    if (!empty($breadcrumb_title_color)) {
        $custom_css .= "
        .inner-page-banner .banner-content h1{
            color: $breadcrumb_title_color;
        }
    ";
    }
    if (!empty($breadcrumb_title_font_family)) {
        $custom_css .= "
        .inner-page-banner .banner-content h1{
            font-family: $breadcrumb_title_font_family;
        }
    ";
    }
    if (!empty($breadcrumb_title_font_style)) {
        $custom_css .= "
        .inner-page-banner .banner-content h1{
            font-style: $breadcrumb_title_font_style;
        }
    ";
    }
    if (!empty($breadcrumb_title_text_transform)) {
        $custom_css .= "
        .inner-page-banner .banner-content h1{
            text-transform: $breadcrumb_title_text_transform;
        }
    ";
    }

    // Breadcrumb Link 

    $breadcrumb_link_font_size = $breadcrumb_link['font-size'] ?? '';
    $breadcrumb_link_color = $breadcrumb_link['color'] ?? '';
    $breadcrumb_link_font_family = $breadcrumb_link['font-family'] ?? '';
    $breadcrumb_link_font_style = $breadcrumb_link['font-style'] ?? '';
    $breadcrumb_link_text_transform = $breadcrumb_link['text-transform'] ?? '';

    if (!empty($breadcrumb_link_font_size)) {
        $custom_css .= "
        .inner-page-banner .banner-content nav ol li a{
            font-size: $breadcrumb_link_font_size" . 'px' . ";
        }
    ";
    }
    if (!empty($breadcrumb_link_color)) {
        $custom_css .= "
        .inner-page-banner .banner-content nav ol li a{
            color: $breadcrumb_link_color;
        }
    ";
    }

    if (!empty($breadcrumb_link_font_family)) {
        $custom_css .= "
        .inner-page-banner .banner-content nav ol li a{
            font-family: $breadcrumb_link_font_family;
        }
    ";
    }

    if (!empty($breadcrumb_link_font_style)) {
        $custom_css .= "
        .inner-page-banner .banner-content nav ol li a{
            font-style: $breadcrumb_link_font_style;
        }
    ";
    }
    if (!empty($breadcrumb_link_text_transform)) {
        $custom_css .= "
        .inner-page-banner .banner-content nav ol li a{
            text-transform: $breadcrumb_link_text_transform;
        }
    ";
    }

    /*********************
     * End Breadcrumb Style
     *********************/

    $footer_widget_area_padding_top = $egns_theme_options['footer_widget_area_padding']['top'] ?? '';
    $footer_widget_area_padding_bottom = $egns_theme_options['footer_widget_area_padding']['bottom'] ?? '';
    $footer_widget_area_padding_unit = $egns_theme_options['footer_widget_area_padding']['unit'] ?? '';



    if (!empty($footer_widget_area_padding_top)) {
        $custom_css .= "
        footer.style1{
            padding-top: $footer_widget_area_padding_top$footer_widget_area_padding_unit;
        }
    ";
    }
    if (!empty($footer_widget_area_padding_bottom)) {
        $custom_css .= "
        footer.style1{
            padding-bottom: $footer_widget_area_padding_bottom$footer_widget_area_padding_unit;
        }
    ";
    }

    // color css for footer option

    $footer_title_color = $egns_theme_options['footer_title_area_text_color'] ?? '';
    $footer_description_color = $egns_theme_options['footer_description_area_text_color'] ?? '';
    $footer_menu_color = $egns_theme_options['footer_social_link_color'] ?? '';
    $footer_menu_color_hover = $egns_theme_options['footer_social_link_color_hover'] ?? '';
    $footer_copy_right_text_color = $egns_theme_options['footer_copyright_text_color'] ?? '';
    $footer_copy_right_link_color = $egns_theme_options['footer_copyright_link_color'] ?? '';



    if (!empty($footer_title_color)) {
        $custom_css .= "
        .footer-top .footer-widget h4{
            color: $footer_title_color;
        }
        
    ";
    }

    if (!empty($footer_description_color)) {
        $custom_css .= "
        footer.style1 .footer-widget p{
            color: $footer_description_color;
        }
        
    ";
    }


    if (!empty($footer_menu_color)) {
        $custom_css .= "
        footer.style1 .footer-widget .widget_nav_menu ul.menu li a{
            color: $footer_menu_color !important;
        }

    ";
    }

    if (!empty($footer_menu_color_hover)) {
        $custom_css .= "
        footer.style1 .footer-widget .widget_nav_menu ul.menu li a:hover{
            color: $footer_menu_color_hover !important;
        }

    ";
    }

    if (!empty($footer_copy_right_text_color)) {
        $custom_css .= "
        footer.style1 .footer-btm p{
            color: $footer_copy_right_text_color;
        }

    ";
    }

    if (!empty($footer_copy_right_link_color)) {
        $custom_css .= "
        footer.style1 .footer-btm p a{
            color: $footer_copy_right_link_color;
        }

    ";
    }




    // Page options value 
    $chooseUs_bg_img = $page_meta_chooseUs['choose_us_image']['url'] ?? '';

    if (!empty($chooseUs_bg_img)) {
        $custom_css .= "
        .choose-area .choose-bg {
            background-image: url($chooseUs_bg_img);
        }

    ";
    }



    wp_register_style('egns-stylesheet', false);
    wp_enqueue_style('egns-stylesheet', false);
    wp_add_inline_style('egns-stylesheet', $custom_css, true);
}
if (class_exists('CSF')) {
    add_action('wp_enqueue_scripts', 'egnsCustomStyling');
}
