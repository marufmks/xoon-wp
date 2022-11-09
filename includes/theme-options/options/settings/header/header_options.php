<?php
	/*-----------------------------------
		Header Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'header_options',
		'title'  => esc_html__( 'Header Options', 'astrip' ),
		'id'     => 'theme_header_options',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Header Options', 'astrip' ) . '</h3>'
			),
			array(
				'id'      => 'header_menu_style',
				'title'   => esc_html__( 'Select Style', 'astrip' ),
				'type'    => 'select',
				'options'     		=> array(
					'header_one'  	=> 'Header One',
					'header_two' 	=> 'Header Two',
				  ),
				'desc'    => wp_kses( __( 'you can select <mark>Header Style </mark> for header section', 'astrip' ), $allowed_html ),
				'default' => 'header_one',
			),


			// Header One Style Start



			array(
				'id'    		=> 'header_one_menu_button',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Button', 'astrip' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header One Right Side Content </mark> for header section', 'astrip' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'default' 		=> 1
			),


			array(
				'id'    		=> 'header_one_menu_sidebar',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__('Sidebar', 'astrip'),
				'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Right Side Content </mark> for header section', 'astrip'), $allowed_html),
				'dependency'	=> array('header_menu_style', '==', 'header_one'),
				'default' 		=> 1
			),


			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Button', 'spinner') . '</h4>',
				'dependency'	=> array('header_menu_style|header_one_menu_button', '==', 'header_one|1'),

			),

			array(
				'id'    => 'header_one_button_text',
				'type'  => 'text',
				'title'   => esc_html__('Button Text', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Button Text </mark> for header section', 'spinner'), $allowed_html),
				'default' => esc_html__("Connect Now", 'spinner'),
				'dependency'    => array('header_menu_style|header_one_menu_button', '==|==', 'header_one|1'),


			),

			array(
				'id'    => 'header_one_button_url',
				'type'  => 'text',
				'title'   => esc_html__('Button URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Button URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_one_menu_button', '==|==', 'header_one|1'),


			),


			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Sidebar Contact Info', 'spinner') . '</h4>',
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),

			),

			array(
				'id'    		=> 'header_one_sidebar_text_one',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Icon One Text', 'astrip'),
				'default' 		=> esc_html__('Opensea', 'astrip'),
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
			),


			array(
				'id'    => 'header_one_sidebar_url_one',
				'type'  => 'text',
				'title'   => esc_html__('Icon One URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Sidebar Contact URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),


			),

			array(
				'id'    		=> 'header_one_sidebar_text_two',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Icon Two Text', 'astrip'),
				'default' 		=> esc_html__('Discord', 'astrip'),
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
			),

			array(
				'id'    => 'header_one_sidebar_url_two',
				'type'  => 'text',
				'title'   => esc_html__('Icon Two URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Sidebar Contact URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),


			),





		// ---------------------------------------------social---------------------------//

			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Sidebar Social Info', 'spinner') . '</h4>',
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),

			),


			array(
				'id'     => 'header_one_social_link',
				'type'   => 'repeater',
				'title'  => esc_html__('Social Links', 'spinner'),
				'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
				'fields' => array(
					array(
						'id'    => 'header_one_social_link_url',
						'type'  => 'text',
						'title' => esc_html__('Social Link URL', 'spinner'),
					),
					array(
						'id'    => 'header_one_sidebar_social_image',
						'type'  => 'media',
						'title' => esc_html('Social Image'),
					),

				),
				'default'   => array(
					array(
						'header_one_social_link_url' => esc_url('https://instagram.com'),
						'header_one_sidebar_social_image' =>
							array(
								'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
								'id'          => 'logo',
								'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
								'alt'         => esc_attr('logo'),
								'title'       => esc_html('Logo'),
							),
					),
					array(
						'header_one_social_link_url' => esc_url('https://dribbble.com/'),
						'header_one_sidebar_social_image' =>
							array(
								'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
								'id'          => 'logo',
								'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
								'alt'         => esc_attr('logo'),
								'title'       => esc_html('Logo'),
							),
						
					),
					array(
						'header_one_social_link_url' => esc_url('https://pinterest.com'),
						'header_one_sidebar_social_image' =>
							array(
								'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
								'id'          => 'logo',
								'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
								'alt'         => esc_attr('logo'),
								'title'       => esc_html('Logo'),
							),
						
					),
					array(
						'header_one_social_link_url' => esc_url('https://twitter.com/'),
						'header_one_sidebar_social_image' =>
							array(
								'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
								'id'          => 'logo',
								'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
								'alt'         => esc_attr('logo'),
								'title'       => esc_html('Logo'),
							),
						
					),
					array(
						'header_one_social_link_url' => esc_url('https://www.behance.com/'),
						'header_one_sidebar_social_image' =>
							array(
								'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
								'id'          => 'logo',
								'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
								'alt'         => esc_attr('logo'),
								'title'       => esc_html('Logo'),
							),
						
					)
				)
			),


				// --------------------Social End-----------------------------//







			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Color Options', 'astrip' ) . '</h4>',
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
			),
			array(
				'id'            => 'header_one_formate_color',
				'type'          => 'tabbed',
				'title'         => esc_html(' Colors '),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'tabs'          => array(
				  array(
					'title'     => esc_html( 'Menu' ),
					'fields'    => array(
						array(
							'id'    	=> 'header_one_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Background Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Background Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Menu Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Menu Hover Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_sub_menu_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Sub Menu Background Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_sub_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Sub Menu Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_sub_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Sub Menu Hover Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
					)
				  ),
				  array(
					'title'     => esc_html( 'Button' ),
					'fields'    => array(
						array(
							'id'    	=> 'header_one_btn_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__( 'Button Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Background Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_btn_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_btn_border_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Border Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_btn_text_color_hover',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Hover Text Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_btn_background_color_hover',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Hover Background Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
						array(
							'id'    	=> 'header_one_btn_border_color_hover',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Hover Border Color', 'astrip' ),
							'desc'    	=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'astrip' ), $allowed_html ),
						),
					)
				  ),
				  array(
					'title'     => esc_html( 'Sidebar' ),
					'fields'    => array(
					  array(
						'id'    => 'header_one_sidebar_color',
						'type'  => 'color',
						'title' => esc_html( 'Sidebar Color' ),
					  ),
					  array(
						'id'    => 'header_one_sidebar_border_color',
						'type'  => 'color',
						'title' => esc_html( 'Sidebar Border Color' ),
					  ),
					)
				  ),
				)
			),
			// Header One Style End 

			// Header Two Style Start







			array(
				'id'    		=> 'header_two_menu_button',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__('Button', 'astrip'),
				'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Right Side Content </mark> for header section', 'astrip'), $allowed_html),
				'dependency'	=> array('header_menu_style', '==', 'header_two'),
				'default' 		=> 1
			),


			array(
				'id'    		=> 'header_two_menu_sidebar',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__('Sidebar', 'astrip'),
				'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Right Side Content </mark> for header section', 'astrip'), $allowed_html),
				'dependency'	=> array('header_menu_style', '==', 'header_two'),
				'default' 		=> 1
			),


			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Button', 'spinner') . '</h4>',
				'dependency'	=> array('header_menu_style|header_two_menu_button', '==', 'header_two|1'),

			),

			array(
				'id'    => 'header_two_button_text',
				'type'  => 'text',
				'title'   => esc_html__('Button Text', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Button Text </mark> for header section', 'spinner'), $allowed_html),
				'default' => esc_html__("Connect Now", 'spinner'),
				'dependency'    => array('header_menu_style|header_two_menu_button', '==|==', 'header_two|1'),


			),

			array(
				'id'    => 'header_two_button_url',
				'type'  => 'text',
				'title'   => esc_html__('Button URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Button URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_two_menu_button', '==|==', 'header_two|1'),


			),



			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Sidebar Contact Info', 'spinner') . '</h4>',
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),

			),

			array(
				'id'    		=> 'header_two_sidebar_text_one',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Icon One Text', 'astrip'),
				'default' 		=> esc_html__('Opensea', 'astrip'),
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
			),

			array(
				'id'    => 'header_two_sidebar_url_one',
				'type'  => 'text',
				'title'   => esc_html__('Icon One URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Sidebar Contact URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),


			),


			array(
				'id'    		=> 'header_two_sidebar_text_two',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Icon Two Text', 'astrip'),
				'default' 		=> esc_html__('Discord', 'astrip'),
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
			),

			array(
				'id'    => 'header_two_sidebar_url_two',
				'type'  => 'text',
				'title'   => esc_html__('Icon Two URL', 'spinner'),
				'desc'    => wp_kses(__('you can set <mark>Header One Sidebar Contact URL </mark> for header section', 'spinner'), $allowed_html),
				'default' => '#',
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),


			),


		// ---------------------------------------------social---------------------------//

			array(
				'type'    => 'subheading',
				'content' => '<h4>' . esc_html__('Sidebar Social Info', 'spinner') . '</h4>',
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),


			),


			array(
				'id'     => 'header_two_social_link',
				'type'   => 'repeater',
				'title'  => esc_html__('Social Links', 'spinner'),
				'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),

				'fields' => array(
					array(
						'id'    => 'header_two_social_link_url',
						'type'  => 'text',
						'title' => esc_html__('Social Link URL', 'spinner'),
					),
					array(
						'id'    => 'header_two_sidebar_social_image',
						'type'  => 'media',
						'title' => esc_html('Social Image'),
					),

				),
				'default'   => array(
				array(
					'header_two_social_link_url' => esc_url('https://instagram.com'),
					'header_two_sidebar_social_image' =>
					array(
						'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
						'id'          => 'logo',
						'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/instagram.svg'),
						'alt'         => esc_attr('logo'),
						'title'       => esc_html('Logo'),
					),
				),
				array(
					'header_two_social_link_url' => esc_url('https://dribbble.com/'),
					'header_two_sidebar_social_image' =>
					array(
						'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
						'id'          => 'logo',
						'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/dribbble.svg'),
						'alt'         => esc_attr('logo'),
						'title'       => esc_html('Logo'),
					),

				),
				array(
					'header_two_social_link_url' => esc_url('https://pinterest.com'),
					'header_two_sidebar_social_image' =>
					array(
						'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
						'id'          => 'logo',
						'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/pinterest.svg'),
						'alt'         => esc_attr('logo'),
						'title'       => esc_html('Logo'),
					),

				),
				array(
					'header_two_social_link_url' => esc_url('https://twitter.com/'),
					'header_two_sidebar_social_image' =>
					array(
						'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
						'id'          => 'logo',
						'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/Twitter.svg'),
						'alt'         => esc_attr('logo'),
						'title'       => esc_html('Logo'),
					),

				),
				array(
					'header_two_social_link_url' => esc_url('https://www.behance.com/'),
					'header_two_sidebar_social_image' =>
					array(
						'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
						'id'          => 'logo',
						'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/social/behance.svg'),
						'alt'         => esc_attr('logo'),
						'title'       => esc_html('Logo'),
					),

				)
				)
			),

			// --------------------Social End-----------------------------//


			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Color Options', 'astrip' ) . '</h4>',
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
			),
			array(
				'id'            => 'header_two_formate_color',
				'type'          => 'tabbed',
				'title'         => esc_html(' Colors '),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
				'tabs'          => array(
				array(
					'title'     => esc_html('Button'),
					'fields'    => array(
						array(
							'id'    	=> 'header_two_btn_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Text Color', 'astrip'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'astrip'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Color', 'astrip'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'astrip'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_border_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Border Color', 'astrip'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'astrip'), $allowed_html),
						),

					)
				),
				array(
					'title'     => esc_html('Sidebar'),
					'fields'    => array(
						array(
							'id'    => 'header_two_sidebar_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Color'),
						),
						array(
							'id'    => 'header_two_sidebar_border_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Border Color'),
						),
					)
				),

				)
			),
			
			
			

		),
		
	) );