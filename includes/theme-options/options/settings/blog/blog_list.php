<?php 
	/*-------------------------------------------------------
		  ** Blog Page  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'blog_settings',
		'id'     => 'blog_post_options',
		'title'  => esc_html__( 'Blog Post', 'corelaw' ),
		'icon'   => 'fa fa-list-ul',
		'fields' => array(
			array(
				'id'         => 'blog_layout_options',
				'title'      => esc_html__( 'Blog Layout', 'corelaw' ),
				'type'       => 'image_select',
				'options'    => array(
					'default' => EGNS_THEME_SETTINGS_IMAGES . '/blog/standard.png',
					'layout-01' => EGNS_THEME_SETTINGS_IMAGES . '/blog/grid_side.jpg',
				),
				'default'    => 'default',
				'desc'       => wp_kses( __( 'you can set <mark>blog layout design</mark> from blog page', 'corelaw' ), $allowed_html ),
			),	  
		),
	  
	) );

 ?>