<?php

function egns_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Blog Sidebar', 'xoon'),
		'id'            => 'blog_sidebar',
		'description'   => esc_html__('Blog archive and blog details page', 'xoon'),
		'before_widget' => '<div id="%1$s" class="single-widgets %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer One', 'xoon'),
		'id'            => 'footer_1',
		'description'   => esc_html__('Footer One Sidebar', 'xoon'),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Two', 'xoon'),
		'id'            => 'footer_2',
		'description'   => esc_html__('Footer Two Sidebar', 'xoon'),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
	register_sidebar(array(
		'name'          => esc_html__('Footer Three', 'xoon'),
		'id'            => 'footer_3',
		'description'   => esc_html__('Footer Three Sidebar', 'xoon'),
		'before_widget' => '<div id="%1$s" class="widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	));
}

add_action('widgets_init', 'egns_widgets_init');
