<?php 

	/*-------------------------------------------------------
		  ** Blog  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'    => 'blog_settings',
		'title' => esc_html__( 'Blog Settings', 'xoon' ),
		'icon'  => 'fa fa-rss'
	) );

	require_once EGNS_THEME_SETTINGS . '/blog/blog_list.php';

	
 ?>