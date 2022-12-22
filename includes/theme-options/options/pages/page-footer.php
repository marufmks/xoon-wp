<?php

/*-----------------------------------
    PAGE FOOTER SECTION
------------------------------------*/
CSF::createSection(
	EGNS_PAGE_META_ID,
	array(
		'title'  => esc_html__('Page Footer', 'xoon'),
		'parent' => 'page_meta_option',
		'fields' => array(

			array(
				'type'    => 'subheading',
				'content' => esc_html__('Page Footer Options', 'xoon'),
			),
			array(
				'id'      => 'footer_widget_enable',
				'type'    => 'switcher',
				'title'   => esc_html__('Footer Widget Area', 'xoon'),
				'desc'    => esc_html__('If you want to show the footer widget area you can set here by ( YES / NO ).', 'xoon'),
				'default' => true,
			),
			array(
				'id'         => 'footer_copyright_enable',
				'type'       => 'switcher',
				'title'      => esc_html__('Footer Copyright Area', 'xoon'),
				'desc'       => esc_html__('If you need custom style in page footer copyright area you can style here.', 'xoon'),
				'default'    => true,
			),

		)
	)
);
