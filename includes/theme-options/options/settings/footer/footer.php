<?php 
	/*-------------------------------------------------------
		   ** Footer  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'Footer', 'astrip' ),
		'id'     => 'footer_options',
		'icon'   => 'fa fa-copyright',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Options', 'astrip' ) . '</h3>'
			),

			array(
				'id'      => 'footer_widget_area_background',
				'title'   => esc_html__( 'Footer Background Image', 'astrip' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'Set footer bottom background Image.', 'astrip' ), $allowed_html ),
				'default' => array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/footer/footer-bg.png' ),
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/footer/footer-bg.png' ),
					'alt'         => esc_attr( 'Footer Image' ),
					'title'       => esc_html( 'Footer Image' ),
				),
			),

            array(
                'id'          => 'footer_widget_area_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Widget Area Space', 'astrip' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'astrip' ),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','px','em','%','cm','pt' ),
                'output_mode' => 'padding',
                'output'      => '.footer-bottom',
                'default'     => array(
                    'top'       => '',
                    'bottom'    => '',
                    'unit'      => 'px',
                ),
            ),
			//-------------------------------- Footer menu start-----------------------------//

			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Footer Menu', 'spinner') . '</h4>',
				

			),


			array(
				'id'     => 'footer_menu_link',
				'type'   => 'repeater',
				'title'  => esc_html__('Footer Menu', 'spinner'),
				'fields' => array(
					array(
						'id'    => 'footer_menu_link_url',
						'type'  => 'text',
						'title' => esc_html__('Footer Menu  URL', 'spinner'),
					),
					array(
						'id'    => 'footer_menu_text',
						'type'  => 'text',
						'title' => esc_html('Footer Menu Text'),
					),

				),
				'default'   => array(
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'Home',
					),
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'About',

					),
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'Collection',

					),
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'Roadmap',

					),
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'Blog',

					),
					array(
						'footer_menu_link_url' => esc_url('#'),
						'footer_menu_text' => 'Contact',

					)
				)
			),

			//------------------------- footer menu end--------------------------//
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Copyright Area', 'astrip' ) . '</h3>'
			),

			array(
				'id'    => 'copyright_text',
				'title' => esc_html__( 'Copyright Area Text', 'astrip' ),
				'type'  => 'textarea',
				'default' => wp_kses( ('© 2022 <a href="#" class="egns-lab">xoon </a> is Proudly Powered by <a href="https://egenslab.com" class="egns-lab">Egens Lab</a>.' ), $allowed_html ),
				'desc'  => wp_kses( __( 'use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'astrip' ), $allowed_html ),
			),
			//  array(
            //     'id'          => 'copyright_area_spacing',
            //     'type'        => 'spacing',
            //     'title'       => esc_html__( 'Footer Copyright Area Space', 'astrip' ),
            //     'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'astrip' ),
            //     'left'        => false,
            //     'right'       => false,
            //     'units'       => array( 'px','px','em','%','cm','pt' ),
            //     'default'     => array(
            //         'top'       => '',
            //         'bottom'    => '',
            //         'unit'      => 'px',
            //     ),
            // ),





			// ---------------------------------------------social-----------------------------------------//

			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Footer Social Info', 'spinner') . '</h4>',
				

			),


			array(
				'id'     => 'footer_bottom_social_link',
				'type'   => 'repeater',
				'title'  => esc_html__('Footer Bottom Social Links', 'spinner'),
				'fields' => array(
					array(
						'id'    => 'footer_bottom_social_link_url',
						'type'  => 'text',
						'title' => esc_html__('Social Link URL', 'spinner'),
					),
					array(
						'id'    => 'footer_bottom_social_image',
						'type'  => 'media',
						'title' => esc_html('Social Image'),
					),
					array(
						'id'    => 'footer_bottom_social_text',
						'type'  => 'text',
						'title' => esc_html('Social Text', 'spinner'),
					),

				),
				'default'   => array(
					array(
						'footer_bottom_social_link_url' => esc_url('https://instagram.com'),
						'footer_bottom_social_image' =>
						array(
							'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
							'id'          => 'logo',
							'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
							'alt'         => esc_attr('logo'),
							'title'       => esc_html('Logo'),
						),
						'footer_bottom_social_text' => 'IN',
					),
					array(
						'footer_bottom_social_link_url' => esc_url('https://dribbble.com/'),
						'footer_bottom_social_image' =>
						array(
							'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
							'id'          => 'logo',
							'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
							'alt'         => esc_attr('logo'),
							'title'       => esc_html('Logo'),
						),
						'footer_bottom_social_text' => 'DB',

					),
					array(
						'footer_bottom_social_link_url' => esc_url('https://pinterest.com'),
						'footer_bottom_social_image' =>
						array(
							'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
							'id'          => 'logo',
							'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
							'alt'         => esc_attr('logo'),
							'title'       => esc_html('Logo'),
						),
						'footer_bottom_social_text' => 'PN',

					),
					array(
						'footer_bottom_social_link_url' => esc_url('https://twitter.com/'),
						'footer_bottom_social_image' =>
						array(
							'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
							'id'          => 'logo',
							'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
							'alt'         => esc_attr('logo'),
							'title'       => esc_html('Logo'),
						),
						'footer_bottom_social_text' => 'TW',

					),
					array(
						'footer_bottom_social_link_url' => esc_url('https://www.behance.com/'),
						'footer_bottom_social_image' =>
						array(
							'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
							'id'          => 'logo',
							'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
							'alt'         => esc_attr('logo'),
							'title'       => esc_html('Logo'),
						),
						'footer_bottom_social_text' => 'BE',

					)
				)
			),


			// ----------------------------Social End ------------------------------------//
			array(
				'type'    	=> 'subheading',
				'content' 	=> '<h3>' . esc_html__( 'Color Options', 'astrip' ) . '</h3>'
			),

			array(
				'id'    	=> 'footer_title_area_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Footer Text Color', 'astrip' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Text Color </mark> for footer section', 'astrip' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Text Color', 'astrip' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'astrip' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color_hover',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Hover Text Color', 'astrip' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'astrip' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Text Color', 'astrip' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'astrip' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Link Color', 'astrip' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'astrip' ), $allowed_html ),
			),

		)
	) );
	
 ?>