<?php
/**
* Theme Option Settings. This is the main file to manage options.
* @package xoon
* @since 1.0.0
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 

if( !class_exists( 'CSF' ) ) {
	return;
}

if ( ! current_user_can( 'manage_options' ) ) {
	return;
}


/*-------------------------------
    Options Initialization.
---------------------------------*/
    $info       = wp_get_theme();
    $name       = $info->get( 'Name' );
    $version    = $info->get( 'Version' );
    $version    = '<small>' . sprintf( __( '- Version %s', 'xoon' ) . '</small>', $version );
    $author     = $info->get( 'Author' );
    $author_uri = $info->get( 'AuthorURI' );
    $author_uri = '<small>' . esc_html__( 'BY', 'xoon' ) . ' <a target="_blank" href="' . esc_url( $author_uri ) . '">' . esc_html( $author ) . '</a></small>';
    $theme_uri  = $info->get( 'ThemeURI' );

    CSF::createOptions( EGNS_OPTION_ID, array(

        /*--------------------------
        FRAMEWORK TITLE
        ---------------------------*/
        'framework_title'    => sprintf( __( '%1$s WordPress Theme %2$s %3$s', 'xoon' ), $name, $version, $author_uri ),
        'framework_class'    => 'xoon',

        /*--------------------------
        MENU SETTINGS
        ---------------------------*/
        'menu_title'         => sprintf( __( '%s Options', 'xoon' ), $name ),
        'menu_slug'          => 'egns_options',
        'menu_type'          => 'menu',
        'menu_capability'    => 'manage_options',
        'menu_icon'          => null,
        'menu_position'      => 2,
        'menu_hidden'        => false,

        /*--------------------------
        EXTRAS
        ---------------------------*/
        'show_bar_menu'      => true,
        'show_sub_menu'      => true,
        'show_in_network'    => true,

        'show_search'        => true,
        'show_reset_all'     => true,
        'show_reset_section' => true,
        'show_footer'        => true,
        'show_all_options'   => true,
        'show_form_warning'  => true,
        'sticky_header'      => true,
        'save_defaults'      => true,
        'ajax_save'          => true,

        /*--------------------------
        FOOTER
        ---------------------------*/
        'footer_credit'      => sprintf( __( 'Credited by %s', 'xoon' ), $author_uri ),
        'footer_text'        => sprintf( __( 'Made with love by %s', 'xoon' ), $author_uri ),
        'footer_after'       => '',
        'transient_time'     => 0,

        /*--------------------------
        TYPOGRAPHY OPTIONS
        ---------------------------*/
        'enqueue_webfont'    => true,
        'async_webfont'      => true,

        /*--------------------------
        OTHERS
        ---------------------------*/
        'output_css'         => true,
    ) );



/*--------------------------------
	PAGE META
---------------------------------*/
require_once EGNS_INC . '/theme-options/options/pages/page.php';

/*--------------------------------
	POST META
---------------------------------*/
require_once EGNS_INC . '/theme-options/options/post/post.php';


/*-------------------------------
    THEME OPTION SETTINGS
---------------------------------*/
require_once EGNS_THEME_SETTINGS . 'settings.php';

