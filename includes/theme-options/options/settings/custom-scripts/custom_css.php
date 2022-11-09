<?php 
	/*-----------------------------------
		H Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'custom_scripts', 
		'title'  => esc_html__( 'Custom CSS', 'corelaw' ),
		'id'     => 'custom_css',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( All Device )', 'corelaw' ),
            ),
            array(
                'id'       => 'custom_css',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post.', 'corelaw' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Ipad Pro )', 'corelaw' ),
            ),
            array(
                'id'       => 'custom_css_ipad',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 1024px maximum 1366px.', 'corelaw' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Tablet )', 'corelaw' ),
            ),
            array(
                'id'       => 'custom_css_tablet',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 768px maximum 992px.', 'corelaw' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Mobile Device )', 'corelaw' ),
            ),
            array(
                'id'       => 'custom_css_mobile',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be maximum 767px.', 'corelaw' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
        ),

	) );

 ?>