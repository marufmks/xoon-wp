<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit(); // exit if access directly
}
function egnsCustomStyling() {
    $custom_css = "";  
    $egns_theme_options = get_option( 'egns_theme_options' );


    /**************************
     * Primary Color Start
     *************************/
    $primary_color = $egns_theme_options['primary_color'] ?? '';
    $primary_color_two = $egns_theme_options['primary_color_two'] ?? '';
    $primary_color_three = $egns_theme_options['primary_color_three'] ?? '';
    $primary_dark_color_one = $egns_theme_options['primary_dark_color_one'] ?? '';
    $primary_dark_color_two = $egns_theme_options['primary_dark_color_two'] ?? '';
    $primary_dark_color_three = $egns_theme_options['primary_dark_color_three'] ?? '';

    if ( !empty( $primary_color ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_color; 
            }
        ";   
    }

    if ( !empty( $primary_color_two ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_color_two; 
            }
        ";   
    }

    if ( !empty( $primary_color_three ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_color_three; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_one ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_dark_color_one; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_two ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_dark_color_two; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_three ) ) {
        $custom_css .="
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

    $header_one_button_text_color = $egns_theme_options['header_one_formate_color']['header_one_btn_text_color'] ?? '';
    $header_one_button_background_color = $egns_theme_options['header_one_formate_color']['header_one_btn_background_color'] ?? '';
    $header_one_button_border_color = $egns_theme_options['header_one_formate_color']['header_one_btn_border_color'] ?? '';
    $header_one_hover_button_text_color = $egns_theme_options['header_one_formate_color']['header_one_btn_text_color_hover'] ?? '';
    $header_one_button_hover_background_color = $egns_theme_options['header_one_formate_color']['header_one_btn_background_color_hover'] ?? '';
    $header_one_button_hover_border_color = $egns_theme_options['header_one_formate_color']['header_one_btn_border_color_hover'] ?? '';

    $header_one_sidebar_icon_color = $egns_theme_options['header_one_formate_color']['header_one_sidebar_color'] ?? '';
    $header_one_sidebar_border_color = $egns_theme_options['header_one_formate_color']['header_one_sidebar_border_color'] ?? '';
   
 
    if ( !empty( $header_one_background_color ) ) {
        $custom_css .="
            header.style-1{
                background-color: $header_one_background_color; 
            }
        ";   
    }

    if ( !empty( $header_one_menu_text_color ) ) {
        $custom_css .="
            header.style-1 .main-menu ul li a,header.style-1 .main-menu ul li ul.sub-menu > li a, header.style-1 .main-menu ul li.menu-item-has-children > i,header.style-1 .main-menu ul li ul.sub-menu > li i {
                color: $header_one_menu_text_color;
            }
        ";
    }

    if ( !empty( $header_one_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-1 .main-menu ul li a:hover,header.style-1 .main-menu ul li ul.sub-menu > li a:hover {
                color: $header_one_menu_hover_text_color;
            }
        ";
    }

    if ( !empty($header_one_sub_menu_background_color ) ) {
        $custom_css .="
            header.style-1 .main-menu ul > li ul.sub-menu, header.style-1 .main-menu ul > li ul.sub-menu > li .sub-menu {
                background: $header_one_sub_menu_background_color
            }
            
        ";
    }

    if ( !empty($header_one_sub_menu_text_color ) ) {
        $custom_css .="
           header.style-1 .main-menu ul li ul.sub-menu > li a, header.style-1 .main-menu ul li ul.sub-menu > li .sub-menu li a {
                color: $header_one_sub_menu_text_color;
            }
        ";
    }

    if ( !empty($header_one_sub_menu_text_hover_color ) ) {
        $custom_css .="
            header.style-1 .main-menu ul li ul.sub-menu > li a:hover,header.style-1 .main-menu ul li ul.sub-menu > li .sub-menu li a:hover {
                color: $header_one_sub_menu_text_hover_color;
            }
        ";
    }


    // Header One Button

    if ( !empty($header_one_button_text_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline {
                color: $header_one_button_text_color;
            }
        ";
    }
    if ( !empty($header_one_button_background_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline::before {
                background: $header_one_button_background_color
            }
        ";
    }

    if ( !empty($header_one_button_border_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline::before {
                border:1px solid $header_one_button_border_color;
            }
        ";
    }
    if ( !empty($header_one_hover_button_text_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline:hover {
                color: $header_one_hover_button_text_color
            }
        ";
    }
    if ( !empty($header_one_button_hover_background_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline:hover::before {
                background: $header_one_button_hover_background_color;
            }
        ";
    }

    if ( !empty($header_one_button_hover_border_color ) ) {
        $custom_css .="
            header.style-1 .btn--primary-outline:hover::before {
                border:1px solid $header_one_button_hover_border_color;
            }
        ";
    }


    // Sidebar Header One


    if (!empty($header_one_sidebar_icon_color)) {
        $custom_css .= "
            header.style-1 .sidebar-button .sidebar-icon svg path {
                stroke: $header_one_sidebar_icon_color;
            }
        ";
    }

    if (!empty($header_one_sidebar_border_color)) {
        $custom_css .= "
            header.style-1 .sidebar-button .sidebar-icon-border svg {
                fill: $header_one_sidebar_border_color;
            }
        ";
    }


 



    // Header Two

    $header_two_button_text_color = $egns_theme_options['header_two_formate_color']['header_two_btn_text_color'] ?? '';
    $header_two_hover_button_text_color = $egns_theme_options['header_two_formate_color']['header_two_btn_background_color'] ?? '';
    $header_two_button_background_color = $egns_theme_options['header_two_formate_color']['header_two_btn_border_color'] ?? '';

    $header_two_svg_icon_color = $egns_theme_options['header_two_formate_color']['header_two_sidebar_color'] ?? '';
    $header_two_svg_border_color = $egns_theme_options['header_two_formate_color']['header_two_sidebar_border_color'] ?? '';
    

    // Header Two Button

    if (!empty($header_two_button_text_color)) {
        $custom_css .= "
            .header-style-2 .btn--primary2 {
                color: $header_two_button_text_color;
            }
        ";
    }
    
    if (!empty($header_one_button_background_color)) {
        $custom_css .= "
            .header-style-2 .btn--primary2 {
                background: $header_one_button_background_color
            }
        ";
    }

    if (!empty($header_one_button_border_color)) {
        $custom_css .= "
            .header-style-2 .btn--primary2::before {
                border:1px solid $header_one_button_border_color;
            }
        ";
    }



    // Sidebar Header Two


    if (!empty($header_two_svg_icon_color)) {
        $custom_css .= "
            .header-style-2 .sidebar-button .sidebar-icon svg path {
                stroke: $header_two_svg_icon_color
            }
        ";
    }

    if (!empty($header_two_svg_border_color)) {
        $custom_css .= "
            .header-style-2 .sidebar-button .sidebar-icon-border svg {
                fill: $header_two_svg_border_color;
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
        .bread-crumb-title{
            font-size: $breadcrumb_title_font_size" . 'px' . ";
        }
    ";
    }

    if (!empty($breadcrumb_title_color)) {
        $custom_css .= "
        .bread-crumb-title{
            color: $breadcrumb_title_color;
        }
    ";
    }
    if (!empty($breadcrumb_title_font_family)) {
        $custom_css .= "
        .bread-crumb-title{
            font-family: $breadcrumb_title_font_family;
        }
    ";
    }
    if (!empty($breadcrumb_title_font_style)) {
        $custom_css .= "
        .bread-crumb-title{
            font-style: $breadcrumb_title_font_style;
        }
    ";
    }
    if (!empty($breadcrumb_title_text_transform)) {
        $custom_css .= "
        .bread-crumb-title{
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
        .breadcrumb .breadcrumb-item a{
            font-size: $breadcrumb_link_font_size" . 'px' . ";
        }
    ";
    }
    if (!empty($breadcrumb_link_color)) {
        $custom_css .= "
        .breadcrumb .breadcrumb-item a{
            color: $breadcrumb_link_color;
        }
    ";
    }

    if (!empty($breadcrumb_link_font_family)) {
        $custom_css .= "
        .breadcrumb .breadcrumb-item a{
            font-family: $breadcrumb_link_font_family;
        }
    ";
    }

    if (!empty($breadcrumb_link_font_style)) {
        $custom_css .= "
        .breadcrumb .breadcrumb-item a{
            font-style: $breadcrumb_link_font_style;
        }
    ";
    }
    if (!empty($breadcrumb_link_text_transform)) {
        $custom_css .= "
        .breadcrumb .breadcrumb-item a{
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

    

    if( !empty( $footer_widget_area_padding_top ) ) {
        $custom_css .="
        .footer-section .footer-bottom{
            padding-top: $footer_widget_area_padding_top$footer_widget_area_padding_unit;
        }
    ";
    }
    if( !empty( $footer_widget_area_padding_bottom ) ) {
        $custom_css .="
        .footer-section .footer-bottom{
            padding-bottom: $footer_widget_area_padding_bottom$footer_widget_area_padding_unit;
        }
    ";
    }

    // color css for footer option


    

    $footer_title_color = $egns_theme_options['footer_title_area_text_color'] ?? '';
    $footer_menu_color = $egns_theme_options['footer_social_link_color'] ?? '';
    $footer_menu_color_hover = $egns_theme_options['footer_social_link_color_hover'] ?? '';
    $footer_copy_right_text_color = $egns_theme_options['footer_copyright_text_color'] ?? '';
    $footer_copy_right_link_color = $egns_theme_options['footer_copyright_link_color'] ?? '';



    if (!empty($footer_title_color)) {
        $custom_css .= "
        .footer-bottom .footer-text-area h3 span{
            color: $footer_title_color;
        }
        .footer-bottom .footer-text-area h3{
            color: $footer_title_color;
        }
    ";
    }


    if (!empty($footer_menu_color)) {
        $custom_css .= "
        ul.footer-list li a{
            color: $footer_menu_color !important;
        }

    ";
    }

    if (!empty($footer_menu_color_hover)) {
        $custom_css .= "
        .footer-link-area ul.footer-list li:hover a{
            color: $footer_menu_color_hover !important;
        }

    ";
    }

    if (!empty($footer_copy_right_text_color)) {
        $custom_css .= "
        .copyright-area .copyright p{
            color: $footer_copy_right_text_color;
        }

    ";
    }

    if (!empty($footer_copy_right_link_color)) {
        $custom_css .= "
        .copyright-area .copyright p a{
            color: $footer_copy_right_link_color;
        }

    ";
    }



    
    wp_register_style( 'egns-stylesheet', false );
    wp_enqueue_style( 'egns-stylesheet', false );
    wp_add_inline_style( 'egns-stylesheet', $custom_css, true );

}
if ( class_exists( 'CSF' )  ) {
    add_action( 'wp_enqueue_scripts', 'egnsCustomStyling' );
}