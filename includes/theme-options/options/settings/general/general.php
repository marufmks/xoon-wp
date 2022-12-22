<?php 

	/*-------------------------------------------------------
		  ** General Options
	--------------------------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'General', 'xoon' ),
		'id'     => 'general_options',
		'icon'   => 'fa fa-wrench',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Preloader Options', 'xoon' ) . '</h3>'
			),
			array(
				'id'      => 'preloader_enable',
				'title'   => esc_html__( 'Preloader', 'xoon' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable preloader', 'xoon' ), $allowed_html ),
				'default' => true,
			),
			array(
				'id'      => 'scroll_top_enable',
				'title'   => esc_html__( 'Scroll-top', 'xoon' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable Scroll-top', 'xoon' ), $allowed_html ),
				'default' => true,
			),
			array(
				'id'      => 'theme_switcher',
				'title'   => esc_html__( 'Theme Switcher', 'xoon' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set dark/light <mark>Yes / No</mark> with theme-switcher', 'xoon' ), $allowed_html ),
				'default' => true,
			),

		)
	) );


 ?>