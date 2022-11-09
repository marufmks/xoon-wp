<?php

function egns_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'astrip' ),
		'id'            => 'blog_sidebar',
		'description'   => esc_html__( 'Blog archive and blog details page', 'astrip' ),
		'before_widget' => '<div id="%1$s" class="blog-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="blog-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Destination Sidebar', 'astrip' ),
		'id'            => 'destination_sidebar',
		'description'   => esc_html__( 'Destination Single Page Sidebar', 'astrip' ),
		'before_widget' => '<div id="%1$s" class="destination-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="destination-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'astrip' ),
		'id'            => 'footer_1',
		'description'   => esc_html__( 'Footer One Sidebar', 'astrip' ),
		'before_widget' => '<div id="%1$s" class="destination-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="destination-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'astrip' ),
		'id'            => 'footer_2',
		'description'   => esc_html__( 'Footer Two Sidebar', 'astrip' ),
		'before_widget' => '<div id="%1$s" class="destination-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="destination-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'astrip' ),
		'id'            => 'footer_3',
		'description'   => esc_html__( 'Footer Three Sidebar', 'astrip' ),
		'before_widget' => '<div id="%1$s" class="destination-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="destination-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	// register_sidebar( array(
	// 	'name'          => esc_html__( 'Footer Four', 'astrip' ),
	// 	'id'            => 'footer_4',
	// 	'description'   => esc_html__( 'Footer Four Sidebar', 'astrip' ),
	// 	'before_widget' => '<div id="%1$s" class="destination-widget-item %2$s">',
	// 	'after_widget'  => '</div>',
	// 	'before_title'  => '<div class="destination-widget-title"><h3>',
	// 	'after_title'   => '</h3></div>',
	// ) );

}

add_action( 'widgets_init', 'egns_widgets_init' );