<?php 

	/*-------------------------------------------------------
		  ** General Options
	--------------------------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'General', 'corelaw' ),
		'id'     => 'general_options',
		'icon'   => 'fa fa-wrench',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Preloader Options', 'corelaw' ) . '</h3>'
			),
			array(
				'id'      => 'preloader_enable',
				'title'   => esc_html__( 'Preloader', 'corelaw' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable preloader', 'corelaw' ), $allowed_html ),
				'default' => true,
			),

		)
	) );


 ?>