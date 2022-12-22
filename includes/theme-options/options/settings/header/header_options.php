<?php
/*-----------------------------------
		Header Options
	------------------------------------*/

CSF::createSection($prefix . '_theme_options', array(
	'parent' => 'header_options',
	'title'  => esc_html__('Header Options', 'xoon'),
	'id'     => 'theme_header_options',
	'icon'   => 'fa fa-id-card-o',
	'fields' => array(
		array(
			'type'    => 'subheading',
			'content' => '<h3>' . esc_html__('Header Options', 'xoon') . '</h3>'
		),
		array(
			'id'      		=> 'header_menu_style',
			'title'   		=> esc_html__('Select Style', 'xoon'),
			'type'    		=> 'image_select',
			'options'     		=> array(
				'header_one'  	=> esc_url(EGNS_THEME_SETTINGS_IMAGES . '/header/header1.png'),
				'header_two' 	=> esc_url(EGNS_THEME_SETTINGS_IMAGES . '/header/header2.png'),
				'header_three' 	=> esc_url(EGNS_THEME_SETTINGS_IMAGES . '/header/header3.png'),
			),
			'desc'    		=> wp_kses(__('you can select <mark>Header Style </mark> for header section', 'xoon'), wp_kses_allowed_html('post')),
			'default' 		=> 'header_one',
		),


		// --------------------Header One General Options Starts-------------------------//

		//Header one Sidebar
		array(
			'id'    		=> 'header_one_menu_sidebar',
			'type'  		=> 'switcher',
			'title'   		=> esc_html__('Sidebar', 'xoon'),
			'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Sidebar </mark> from here', 'xoon'), $allowed_html),
			'dependency'	=> array('header_menu_style', '==', 'header_one'),
			'default' 		=> 1
		),


		array(
			'type'    => 'subheading',
			'content' => '<h4>' . esc_html__('Sidebar Contact Info', 'xoon') . '</h4>',
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),

		),

		array(
			'id'    		=> 'header_one_sidebar_contact_number_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input Name', 'xoon'),
			'default' 		=> esc_html__('Phone:', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),

		array(
			'id'    		=> 'header_one_sidebar_contact_number_one',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Phone Number', 'xoon'),
			'default' 		=> esc_html__('+880 170 1111 000', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),

		array(
			'id'    		=> 'header_one_sidebar_contact_address_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input Name', 'xoon'),
			'default' 		=> esc_html__('Address:', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),

		array(
			'id'    		=> 'header_one_sidebar_contact_address_one',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Address', 'xoon'),
			'default' 		=> esc_html__('121 King Street, Melbourne Victoria 3000, Australia.', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),

		array(
			'id'    		=> 'header_one_sidebar_contact_email_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input text', 'xoon'),
			'default' 		=> esc_html__('E-mail:', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),

		array(
			'id'    		=> 'header_one_sidebar_contact_email_one',
			'type'  		=> 'text',
			'title'   		=> esc_html__('E-mail', 'xoon'),
			'default' 		=> esc_html__('example@gmail.com', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
		),



		// -------------------------------social---------------------------//


		array(
			'id'     => 'header_one_sidebar_social_link',
			'type'   => 'repeater',
			'title'  => esc_html__('Sidebar Social Links', 'xoon'),
			'dependency'    => array('header_menu_style|header_one_menu_sidebar', '==|==', 'header_one|1'),
			'fields' => array(
				array(
					'id'    => 'header_one_sidebar_social_link_url',
					'type'  => 'link',
					'title' => esc_html__('Social Link', 'xoon'),
					'default'  => array(
						'url'    => '#',
						'text'   => esc_html('Menu Link'),
						'target' => '_blank'
					),
				),
				array(
					'id'    => 'header_one_sidebar_social_icon_class',
					'type'  => 'text',
					'title' => esc_html('Icon Class ( Bootstrap/Box Icon/ Font Awesome )'),
				),
			),
			'default'   => array(
				array(
					'header_one_sidebar_social_icon_class' => esc_html('fab fa-dribbble'),
					'header_one_sidebar_social_link_url' => array(
						'url'   => esc_url('https://dribbble.com/'),
						'text'  => esc_html('fab fa-dribbble'),
						'target' => '_blank'
					),
				),
				array(
					'header_one_sidebar_social_icon_class' => esc_html('fab fa-instagram'),
					'header_one_sidebar_social_link_url' => array(
						'url'   => esc_url('https://instagram.com/'),
						'text'  => esc_html('fab fa-instagram'),
						'target' => '_blank'
					),
				),
				array(
					'header_one_sidebar_social_icon_class' => esc_html('fab fa-facebook'),
					'header_one_sidebar_social_link_url' => array(
						'url'   => esc_url('https://facebook.com/'),
						'text'  => esc_html('fab fa-facebook'),
						'target' => '_blank'
					),
				),
				array(
					'header_one_sidebar_social_icon_class' => esc_html('fab fa-twitter'),
					'header_one_sidebar_social_link_url' => array(
						'url'   => esc_url('https://twitter.com/'),
						'text'  => esc_html('fab fa-twitter'),
						'target' => '_blank'
					),
				),
			)
		),


		// --------------------Social End-------------------------//

		// --------------------Header One Style Starts-------------------------//

		array(
			'type'    		=> 'subheading',
			'content' 		=> '<h4>' . esc_html__('Color Options', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style', '==', 'header_one'),
		),
		array(
			'id'            => 'header_one_formate_color',
			'type'          => 'tabbed',
			'title'         => esc_html(' Colors '),
			'dependency'	=> array('header_menu_style', '==', 'header_one'),
			'tabs'          => array(
				array(
					'title'     => esc_html('Menu'),
					'fields'    => array(
						array(
							'id'    	=> 'header_one_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_one_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_one_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_one_sub_menu_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_one_sub_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_one_sub_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
					)
				),
				array(
					'title'     => esc_html('Sidebar'),
					'fields'    => array(
						array(
							'id'    => 'header_one_sidebar_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Icon Color'),
						),
						array(
							'id'    => 'header_one_sidebar_menu_text_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Text Color'),
						),
						array(
							'id'    => 'header_one_sidebar_menu_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Icon Color'),
						),

					)
				),
			)
		),
		// --------------------Header One Style Ends-------------------------//


		// --------------------Header Two General Options Starts-------------------------//
		array(
			'id'    		=> 'header_two_menu_button',
			'type'  		=> 'switcher',
			'title'   		=> esc_html__('Button', 'xoon'),
			'desc'    		=> wp_kses(__('you can enable/disable <mark>Header Two Button </mark> from here', 'xoon'), $allowed_html),
			'dependency'	=> array('header_menu_style', '==', 'header_two'),
			'default' 		=> 1
		),

		array(
			'type'    => 'subheading',
			'content' => '<h4>' . esc_html__('Button', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style|header_two_menu_button', '==', 'header_two|1'),

		),

		array(
			'id'    		=> 'header_two_button_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Button Text', 'xoon'),
			'default' 		=> esc_html__('Hire Us Now', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_button', '==|==', 'header_two|1'),
		),
		array(
			'id'    		=> 'header_two_button_url',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Button Url', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_button', '==|==', 'header_two|1'),
			'default' 		=> '#',
		),


		array(
			'id'    		=> 'header_two_menu_sidebar',
			'type'  		=> 'switcher',
			'title'   		=> esc_html__('Sidebar', 'xoon'),
			'desc'    		=> wp_kses(__('you can enable/disable <mark>Header Two Sidebar </mark> from here', 'xoon'), $allowed_html),
			'dependency'	=> array('header_menu_style', '==', 'header_two'),
			'default' 		=> 1
		),


		array(
			'type'    => 'subheading',
			'content' => '<h4>' . esc_html__('Sidebar', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style|header_two_menu_sidebar', '==', 'header_two|1'),

		),

		array(
			'id'    		=> 'header_two_sidebar_contact_number_two',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Phone Number', 'xoon'),
			'default' 		=> esc_html__('+880 170 1111 000', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
		),


		array(
			'id'    		=> 'header_two_sidebar_contact_address_two',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Address', 'xoon'),
			'default' 		=> esc_html__('121 King Street, Melbourne Victoria 3000, Australia.', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
		),
		array(
			'id'    		=> 'header_two_sidebar_contact_email_two',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Email', 'xoon'),
			'default' 		=> esc_html__('example@gmail.com', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
		),


		// --------------------------------social---------------------------//


		array(
			'id'     => 'header_two_sidebar_social_link',
			'type'   => 'repeater',
			'title'  => esc_html__('Sidebar Social Links', 'xoon'),
			'dependency'    => array('header_menu_style|header_two_menu_sidebar', '==|==', 'header_two|1'),
			'fields' => array(
				array(
					'id'    => 'header_two_sidebar_social_link_url',
					'type'  => 'text',
					'title' => esc_html__('Social Link', 'xoon'),
				),
				array(
					'id'    => 'header_two_sidebar_social_icon_class',
					'type'  => 'text',
					'title' => esc_html('Icon Class ( Bootstrap/Box Icon/ Font Awesome )'),
				),
			),
			'default'   => array(
				array(
					'header_two_sidebar_social_link_url' => esc_url('https://dribbble.com/'),
					'header_two_sidebar_social_icon_class' => 'fab fa-dribbble',
				),
				array(
					'header_two_sidebar_social_link_url' => esc_url('https://www.instagram.com/'),
					'header_two_sidebar_social_icon_class' => 'fab fa-instagram',
				),
				array(
					'header_two_sidebar_social_link_url' => esc_url('https://www.twitter.com/'),
					'header_two_sidebar_social_icon_class' => 'fab fa-twitter',
				),
				array(
					'header_two_sidebar_social_link_url' => esc_url('https://www.behance.com/'),
					'header_two_sidebar_social_icon_class' => 'fab fa-behance',
				),
				array(
					'header_two_sidebar_social_link_url' => esc_url('https://www.facebook.com/'),
					'header_two_sidebar_social_icon_class' => 'fab fa-facebook',
				)
			)
		),


		// --------------------Social End-----------------------------//

		// --------------------Header Two Style Starts-------------------------//

		array(
			'type'    		=> 'subheading',
			'content' 		=> '<h4>' . esc_html__('Color Options', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style', '==', 'header_two'),
		),
		array(
			'id'            => 'header_two_formate_color',
			'type'          => 'tabbed',
			'title'         => esc_html(' Colors '),
			'dependency'	=> array('header_menu_style', '==', 'header_two'),
			'tabs'          => array(

				array(
					'title'     => esc_html('Menu'),
					'fields'    => array(
						array(
							'id'    	=> 'header_two_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_sub_menu_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_sub_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_sub_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
					)
				),

				array(
					'title'     => esc_html('Button'),
					'fields'    => array(
						array(
							'id'    	=> 'header_two_btn_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_text_hover_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Text Hover Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_background_hover_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Hover Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_two_btn_border_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Border Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),

					)
				),
				array(
					'title'     => esc_html('Sidebar'),
					'fields'    => array(
						array(
							'id'    => 'header_two_sidebar_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Icon Color'),
						),
						array(
							'id'    => 'header_one_sidebar_menu_text_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Text Color'),
						),
						array(
							'id'    => 'header_one_sidebar_menu_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Icon Color'),
						),

					)
				),

			)
		),

		// header two style ends

		//header three starts

		// --------------------Header three General Options Starts-------------------------//
		//Header three Button
		array(
			'id'    		=> 'header_three_menu_button',
			'type'  		=> 'switcher',
			'title'   		=> esc_html__('Button', 'xoon'),
			'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Button </mark> from here', 'xoon'), $allowed_html),
			'dependency'	=> array('header_menu_style', '==', 'header_three'),
			'default' 		=> 1
		),

		array(
			'type'    => 'subheading',
			'content' => '<h4>' . esc_html__('Button', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style|header_three_menu_button', '==', 'header_three|1'),

		),

		array(
			'id'    		=> 'header_three_button_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Button Text', 'xoon'),
			'default' 		=> esc_html__('Hire Us Now', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_button', '==|==', 'header_three|1'),
		),
		array(
			'id'    		=> 'header_three_button_url',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Button Url', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_button', '==|==', 'header_three|1'),
			'default' 		=> '#',
		),

		//Header one Sidebar
		array(
			'id'    		=> 'header_three_menu_sidebar',
			'type'  		=> 'switcher',
			'title'   		=> esc_html__('Sidebar', 'xoon'),
			'desc'    		=> wp_kses(__('you can enable/disable <mark>Header One Sidebar </mark> from here', 'xoon'), $allowed_html),
			'dependency'	=> array('header_menu_style', '==', 'header_three'),
			'default' 		=> 1
		),


		array(
			'type'    => 'subheading',
			'content' => '<h4>' . esc_html__('Sidebar Contact Info', 'xoon') . '</h4>',
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),

		),

		array(
			'id'    		=> 'header_three_sidebar_contact_number_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input Name', 'xoon'),
			'default' 		=> esc_html__('Phone:', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),

		array(
			'id'    		=> 'header_three_sidebar_contact_number_three',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Phone Number', 'xoon'),
			'default' 		=> esc_html__('+880 170 1111 000', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),

		array(
			'id'    		=> 'header_three_sidebar_contact_address_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input Name', 'xoon'),
			'default' 		=> esc_html__('Address:', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),

		array(
			'id'    		=> 'header_three_sidebar_contact_address_three',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Address', 'xoon'),
			'default' 		=> esc_html__('121 King Street, Melbourne Victoria 3000, Australia.', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),

		array(
			'id'    		=> 'header_three_sidebar_contact_email_text',
			'type'  		=> 'text',
			'title'   		=> esc_html__('Input text', 'xoon'),
			'default' 		=> esc_html__('E-mail:', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),

		array(
			'id'    		=> 'header_three_sidebar_contact_email_three',
			'type'  		=> 'text',
			'title'   		=> esc_html__('E-mail', 'xoon'),
			'default' 		=> esc_html__('example@gmail.com', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
		),



		// -------------------------------social---------------------------//


		array(
			'id'     => 'header_three_sidebar_social_link',
			'type'   => 'repeater',
			'title'  => esc_html__('Sidebar Social Links', 'xoon'),
			'dependency'    => array('header_menu_style|header_three_menu_sidebar', '==|==', 'header_three|1'),
			'fields' => array(
				array(
					'id'    => 'header_three_sidebar_social_link_url',
					'type'  => 'link',
					'title' => esc_html__('Social Link', 'xoon'),
					'default'  => array(
						'url'    => '#',
						'text'   => esc_html('Menu Link'),
						'target' => '_blank'
					),
				),
				array(
					'id'    => 'header_three_sidebar_social_icon_class',
					'type'  => 'text',
					'title' => esc_html('Icon Class ( Bootstrap/Box Icon/ Font Awesome )'),
				),
			),
			'default'   => array(
				array(
					'header_three_sidebar_social_icon_class' => esc_html('fab fa-dribbble'),
					'header_three_sidebar_social_link_url' => array(
						'url'   => esc_url('https://dribbble.com/'),
						'text'  => esc_html('fab fa-dribbble'),
						'target' => '_blank'
					),
				),
				array(
					'header_three_sidebar_social_icon_class' => esc_html('fab fa-instagram'),
					'header_three_sidebar_social_link_url' => array(
						'url'   => esc_url('https://instagram.com/'),
						'text'  => esc_html('fab fa-instagram'),
						'target' => '_blank'
					),
				),
				array(
					'header_three_sidebar_social_icon_class' => esc_html('fab fa-facebook'),
					'header_three_sidebar_social_link_url' => array(
						'url'   => esc_url('https://facebook.com/'),
						'text'  => esc_html('fab fa-facebook'),
						'target' => '_blank'
					),
				),
				array(
					'header_three_sidebar_social_icon_class' => esc_html('fab fa-twitter'),
					'header_three_sidebar_social_link_url' => array(
						'url'   => esc_url('https://twitter.com/'),
						'text'  => esc_html('fab fa-twitter'),
						'target' => '_blank'
					),
				),
			)
		),


		// --------------------Social End-------------------------//

		// --------------------Header three Style Starts-------------------------//

		array(
			'type'    		=> 'subheading',
			'content' 		=> '<h4>' . esc_html__('Color Options', 'xoon') . '</h4>',
			'dependency'	=> array('header_menu_style', '==', 'header_three'),
		),
		array(
			'id'            => 'header_three_formate_color',
			'type'          => 'tabbed',
			'title'         => esc_html(' Colors '),
			'dependency'	=> array('header_menu_style', '==', 'header_three'),
			'tabs'          => array(
				array(
					'title'     => esc_html('Menu'),
					'fields'    => array(
						array(
							'id'    	=> 'header_three_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_sub_menu_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_sub_menu_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_sub_menu_hover_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Sub Menu Hover Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
					)
				),
				array(
					'title'     => esc_html('Button'),
					'fields'    => array(
						array(
							'id'    	=> 'header_three_btn_text_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Text Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_btn_text_hover_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Text Hover Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Background Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_btn_background_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_btn_background_hover_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Background Hover Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),
						array(
							'id'    	=> 'header_three_btn_border_color',
							'type'  	=> 'color',
							'title'   	=> esc_html__('Button Border Color', 'xoon'),
							'desc'    	=> wp_kses(__('you can select <mark>Header Menu Color </mark> for header section', 'xoon'), $allowed_html),
						),

					)
				),
				array(
					'title'     => esc_html('Sidebar'),
					'fields'    => array(
						array(
							'id'    => 'header_three_sidebar_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Icon Color'),
						),
						array(
							'id'    => 'header_three_sidebar_menu_text_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Text Color'),
						),
						array(
							'id'    => 'header_three_sidebar_menu_icon_color',
							'type'  => 'color',
							'title' => esc_html('Sidebar Nav-menu Icon Color'),
						),

					)
				),
			)
		),
		// --------------------Header three Style Ends-------------------------//


	),

));
