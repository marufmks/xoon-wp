<?php
function egns_pagination() {
	global $wp_query;
	$links = paginate_links( array(
		'current'  => max( 1, get_query_var( 'paged' ) ),
		'total'    => $wp_query->max_num_pages,
		'type'     => 'list',
		'mid_size' => apply_filters( "egns_pagination_mid_size", 3 ),
		'prev_text'    => '<i class="bi bi-chevron-double-left"></i>',
		'next_text'    => '<i class="bi bi-chevron-double-right"></i>',
	) );
	$links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination d-flex justify-content-center gap-md-3 gap-2'>", $links );
	$links = str_replace( "<li>", "<li class='page-item'>", $links );
	$links = str_replace( "page-numbers", "", $links );
	$links = str_replace( "&laquo; Previous</a>", '&laquo;</a>', $links );
	$links = str_replace( "Next &raquo;</a>", "&raquo;</a>", $links );
	$links = str_replace( "next aria-label='Next'", "page-link", $links );
	$links = str_replace( "prev aria-hidden='true'", "sr-only page-link", $links );
	$links = str_replace( "<li><span", " <li class='active'><a ", $links );
	$links = str_replace( 'span', 'a', $links );
	
	echo wp_kses_post( $links );
}

remove_action( "term_description", "wpautop" );

function pagination_mid_size( $size ) {
	return 2;
}

add_filter( "egns_pagination_mid_size", "pagination_mid_size" );
