<?php 
if( ! function_exists( 'egns_comment_callback' ) ):
function egns_comment_callback($comment, $args, $depth) {
   
    ?>
    
    <div id="comment-<?php echo esc_html( $comment->comment_ID ); ?>" class="single-comment">
        <div class="image">
            <?php echo get_avatar($comment, $size='100' ); ?>
        </div>
        <div class="content">
            <div class="comment-meta">
            <h5><?php echo get_comment_author() ?> -</h5><span> <?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , 'corelaw'), get_comment_date(),  get_comment_time() ) ?></span>
            </div>
            <?php comment_text() ?>
            <?php if( $depth < $args['max_depth'] && comments_open() ) :  ?>
                <div class="reply-btn">
                    <?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'],'reply_text' => 'Reply Comment <i class="bi bi-reply"></i>')) ) ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    
<?php
        }
endif; 


//for the comment wrapping functions - ensures HTML does not break.
$comment_open_div = 0;

/**
 * Creates an opening div for a bootstrap row.
 * @global int $comment_open_div
 */
function _lp_before_comment_fields(){
    global $comment_open_div;
    $comment_open_div = 1;
    echo '<div class="row">';
}
/**
 * Creates a closing div for a bootstrap row.
 * @global int $comment_open_div
 * @return type
 */
function _lp_after_comment_fields(){
    global $comment_open_div;
    if($comment_open_div == 0)
        return;
    echo '</div>';
}
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">'.esc_html__('Save my name, email in this browser for the next time I comment.', 'corelaw').'</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
add_action('comment_form_before_fields', '_lp_before_comment_fields');
add_action('comment_form_after_fields', '_lp_after_comment_fields');
