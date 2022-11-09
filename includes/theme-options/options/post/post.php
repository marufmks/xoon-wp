<?php 

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if( class_exists( 'CSF' ) ) {

	/*-----------------------------------
		REQUIRE META FILES
	------------------------------------*/
	require_once EGNS_THEME_OPTIONS . 'post/video.php';
	require_once EGNS_THEME_OPTIONS . 'post/gallery.php';
	require_once EGNS_THEME_OPTIONS . 'post/image.php';
	require_once EGNS_THEME_OPTIONS . 'post/quote.php';
	require_once EGNS_THEME_OPTIONS . 'post/audio.php';

}