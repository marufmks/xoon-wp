<?php 
	/*-----------------------------------
		Logo Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'header_options', 
		'title'  => esc_html__( 'Logo', 'xoon' ),
		'id'     => 'theme_header_logo_options',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Upload Logo', 'xoon' ) . '</h3>'
			),
			array(
				'id'      => 'header_logo',
				'title'   => esc_html__( 'Upload Header Logo', 'xoon' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Header One Logo</mark> for header', 'xoon' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'id'          => 'logo',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
			),
			array(
				'id'      => 'header_logo_mobile',
				'title'   => esc_html__( 'Upload Mobile Logo', 'xoon' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Mobile Logo</mark> for header', 'xoon' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'id'          => 'logo',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
			),
		),

	) );

 ?>