<?php 

	/*-------------------------------------------------------
		   ** Color  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'     => 'color_options',
		'title'  => esc_html__( 'Color Options', 'corelaw' ),
		'icon'   => 'fa fa-tint',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Color Options', 'corelaw' ) . '</h3>',
			),
			
			array(
				'id'      => 'primary_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color', 'corelaw' ),
			),

			array(
				'id'      => 'primary_color_two',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color Two', 'corelaw' ),
			),

			array(
				'id'      => 'primary_color_three',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color Three', 'corelaw' ),
			),

			array(
				'id'      => 'primary_dark_color_one',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color One', 'corelaw' ),
			),

			array(
				'id'      => 'primary_dark_color_two',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color Two', 'corelaw' ),
			),

			array(
				'id'      => 'primary_dark_color_three',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color Three', 'corelaw' ),
			),
		)
	) );
 ?>