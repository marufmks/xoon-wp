<?php 
	/*-------------------------------------------------------
		   ** Footer  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'Footer', 'xoon' ),
		'id'     => 'footer_options',
		'icon'   => 'fa fa-copyright',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Options', 'xoon' ) . '</h3>'
			),

			
            array(
                'id'          => 'footer_widget_area_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Widget Area Space', 'xoon' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'xoon' ),
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

			//------------------------- footer menu end--------------------------//
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Copyright Area', 'xoon' ) . '</h3>'
			),

			array(
				'id'    => 'copyright_text',
				'title' => esc_html__( 'Copyright Area Text', 'xoon' ),
				'type'  => 'textarea',
				'default' => wp_kses( ('Copyright 2022 <a href="https://www.egenslab.com" class="egns-lab">XOON </a>| Design By <a href="https://www.egenslab.com" class="egns-lab">Egens Lab.</a>' ), $allowed_html ),
				'desc'  => wp_kses( __( 'use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'xoon' ), $allowed_html ),
			),


			// ----------------------------Social End ------------------------------------//
			array(
				'type'    	=> 'subheading',
				'content' 	=> '<h3>' . esc_html__( 'Color Options', 'xoon' ) . '</h3>'
			),

			array(
				'id'    	=> 'footer_title_area_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Footer Text Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Text Title Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_description_area_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Footer Description Text Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Description Text Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Text Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color_hover',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Hover Text Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Text Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Link Color', 'xoon' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'xoon' ), $allowed_html ),
			),

		)
	) );
	
 ?>