<?php 


	/*-------------------------------------------------------
		   ** 404 page options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'     => '404_page',
		'title'  => esc_html__( '404 Page', 'corelaw' ),
		'icon'   => 'fa fa-exclamation-triangle',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( '404 Page Options', 'corelaw' ) . '</h3>',
			),
			array(
				'id'         => '404_title',
				'title'      => esc_html__( 'Title', 'corelaw' ),
				'type'       => 'text',
				'info'       => wp_kses( __( 'you can change <mark>title</mark> of 404 page', 'corelaw' ), $allowed_html ),
				'default'	 => esc_html__( 'Page Not Found!', 'corelaw' )
			),
			array(
				'id'      => '404_image',
				'type'    => 'media',
				'title'   => esc_html__( '404 Image', 'corelaw' ),
				'library' => 'image',
				'default'				=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/404-image.png' ),
					'id'          => '404_image',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/404-image.png' ),
					'alt'         => esc_attr( '404 image' ),
					'title'       => esc_html( '404 image' ),
				),
			),
			array(
				'id'         => '404_description',
				'title'      => esc_html__( 'Description', 'corelaw' ),
				'type'       => 'textarea',
				'info'       => wp_kses( __( 'you can change <mark>sub title</mark> of 404 page', 'corelaw' ), $allowed_html ),
				'default'	 => esc_html__( "It looks like you've reached a URL that doesn’t exist. Please use the navigation above or search below to find your way back to our amazing website.", 'corelaw' )
			),
			array(
				'id'         => '404_button_text',
				'title'      => esc_html__( 'Button Text', 'corelaw' ),
				'type'       => 'text',
				'info'       => wp_kses( __( 'you can change <mark>button text</mark> of 404 page', 'corelaw' ), $allowed_html ),
				'default'	 => esc_html__( 'Go To Home', 'corelaw' )
			),
		
		)
	) );
 ?>