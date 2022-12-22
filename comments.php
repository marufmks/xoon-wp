<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xoon
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}

?>
<?php
if (have_comments()) : ?>
    <div class="comments-area">
        <div class="number-of-comment">
            <h5><?php comments_number(esc_html__('0 Comments', 'xoon'), esc_html__('1 Comment', 'xoon'), esc_html__('% Comments', 'xoon')); ?></h5>
        </div>
        <div class="comment-list-area mb-70">
            <div class="comment-list">
                <?php
                wp_list_comments(array(
                    'style'      => 'ul',
                    'short_ping' => true,
                    'callback' => 'egns_comment_callback',
                ));
                ?>
                <?php
                the_comments_navigation();

                // If comments are closed and there are comments, let's leave a little note, shall we?

                if (!comments_open()) {
                    echo '<p class="no-comments">' . esc_html__('Comments are closed.', 'xoon') . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if (comments_open()) : ?>
    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="comment-form">
            <?php
            // Custom comments_args here: https://codex.wordpress.org/Function_Reference/comment_form
            $commenter = wp_get_current_commenter();
            $req = get_option('require_name_email');
            $aria_req = ($req ? " aria-required='true'" : '');

            $comments_args = array(
                'title_reply'   => esc_html__('Leave a Reply', 'xoon'),
                'fields'     => apply_filters('comment_form_default_fields', array(
                    'author' => '<div class="form-inner"><label>' . esc_html__('Your Full Name required*', 'xoon') . '</label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author'])
                        . '" placeholder="' . esc_attr__('', 'xoon') . '" ' . esc_html($aria_req) . '></div>',

                    'email' => '<div class="form-inner"><label>' . esc_html__('Your E-mail required*', 'xoon') . '</label><input  id="email" name="email" type="email"  value="' . esc_attr($commenter['comment_author_email'])
                        . '" placeholder="' . esc_attr__('', 'xoon') . '" ' . esc_html($aria_req) . '></div>',

                )),
                'comment_field' => ' <div class="form-inner"><label>' . esc_html__('Type Your Comment', 'xoon') . '</label><textarea class=" text__area" id="comment" name="comment" cols="45" rows="8" placeholder="' . esc_attr__('', 'xoon') . '"></textarea></div>',
                'class_submit' => 'primary-btn3 button-hover-two',
                'label_submit' => esc_html__('Post Comment', 'xoon'),
                'format'       => 'xhtml'
            );

            ?>

            <?php
            comment_form($comments_args);
            ?>

        </div>
    </div>
<?php endif ?>