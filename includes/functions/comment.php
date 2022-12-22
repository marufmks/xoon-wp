<?php 
if( ! function_exists( 'egns_comment_callback' ) ):
function egns_comment_callback($comment, $args, $depth) {
   
    ?>

    
    <div class="comment-item" id="comment-<?php esc_attr( comment_ID() ) ?>">
        <div class="single-comment d-flex align-items-center justify-content-between flex-md-nowrap flex-wrap">
            <div class="d-flex justify-content-between">
                <div class="comment-image">
                    <?php echo get_avatar($comment, $size='120' ); ?>
                </div>
                <div class="comment-content">
                    <div class="c-header d-flex align-items-center">
                        <h5 class="mb-0"><?php echo get_comment_author() ?> -</h5>
                        <div class="c-date"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , 'xoon'), get_comment_date(),  get_comment_time() ) ?></div>
                        
                    </div>
                    <div class="c-body">
                        <p><?php comment_text() ?></p>
                    </div>
                </div>
            </div>

            
            <?php if( $depth < $args['max_depth'] && comments_open() ) :  ?>
                <div class="replay-btn">
                    <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ) ?>
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
					 '<label for="wp-comment-cookies-consent">'.esc_html__('Save my name, email in this browser for the next time I comment.', 'xoon').'</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
add_action('comment_form_before_fields', '_lp_before_comment_fields');
add_action('comment_form_after_fields', '_lp_after_comment_fields');
