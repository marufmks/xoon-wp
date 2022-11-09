<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corelaw
 */
get_header(); 

if( ! is_front_page()):
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-archive' );
endif;

Egns_Helpers::egns_dynamic_blog_layout();

get_footer();

?> 