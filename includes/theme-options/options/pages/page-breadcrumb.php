<?php

/*-----------------------------------
    PAGE BARNER SECTION
------------------------------------*/
CSF::createSection(
	EGNS_PAGE_META_ID,
	array(
		'title'  => esc_html__('Breadcrumb', 'xoon'),
		'parent' => 'page_meta_option',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__('Breadcrumb Options', 'xoon'),
			),
			array(
				'id'      => 'enable_breadcrumb',
				'type'    => 'switcher',
				'title'   => esc_html__('Enable Breadcrumb', 'xoon'),
				'desc'    => esc_html__('If you want to show or hide page banner you can set here by toggle ( YES / NO ).', 'xoon'),
				'default' => true,
			),

		)
	)
);
