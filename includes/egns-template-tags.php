<?php

/**
 * xoon blog meta for blog listing.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_meta')) {

    function egns_blog_meta()
    {
        ?>
            <div class="blog-meta">
                <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                <p>
                    <?php echo esc_html__('Posted by :', 'xoon') . ' '; ?> 
                    <a class="name" href="<?php echo esc_url($author_url) ?>">
                        <?php echo esc_html(get_the_author()); ?>
                    </a>

                        <?php echo esc_html('-'). ' ' ?> 
                    <?php if (have_comments()): ?>
                        <a href="<?php echo esc_url(get_comments_link()); ?>">                   
                            <?php comments_number( esc_html__('0 Comments', 'xoon'), esc_html__('1 Comment', 'xoon'), esc_html__(  '% Comments', 'xoon') ); ?>
                        </a> 
                    <?php endif ?>                   
                </p>
            </div>

        <?php
            }
        }
        /**
         * Blog thumbnail for blog listing.
         *
         * @since 1.0.0
         */
        if (!function_exists('egns_blog_thumbnail')) {
            function egns_blog_thumbnail()
            {
                if (has_post_thumbnail()) {
                    ?>
                        <div class="magnetic-wrap">
                            <div class="blog-img  magnetic-item">
                                    <?php the_post_thumbnail() ?>
                                <div class="publish-date">
                                    <span><?php echo esc_html(get_the_date('M')); ?></span>
                                    <p><?php echo esc_html(get_the_date('j')); ?></p>
                                    <span><?php echo esc_html(get_the_date('Y')); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php
                }
            }
        }


        /**
         * Blog archive title.
         *
         * @since 1.0.0
         */
        if (!function_exists('egns_blog_archive_meta')) {
            function egns_blog_archive_meta()
            {
                if (!is_single()) {


                    $title = '<h3 class="blog-title"><a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a></h3>';
                    $content = '';
                    $read_more = '';
                    if (Egns_Helpers::egns_post_layout() == 'default') {
                        $content = '<p class="blog-short-description">' . wp_trim_words(esc_html(get_the_excerpt()), 30) . '</p>';
                        $read_more = '<div class="read-more"><a href="' . esc_url(get_permalink()) . '">' . esc_html__('Read More', 'xoon') . '<i class="bx bx-right-arrow-alt"></i></a></div>';
                    }
                    echo  Egns_Helpers::egns_translate($title) . Egns_Helpers::egns_translate($content) . Egns_Helpers::egns_translate($read_more);
                }
                ?>


    <?php
        }
    }

    /**
     * Blog archive title.
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_post_header')) {
        function egns_blog_post_header()
        {

            ?>

        <div class="post-header">
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
            <div class="post-meta">
                <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                <a class="blog-writer" href="<?php echo esc_url($author_url) ?>"><i class="bi bi-person-circle"></i><?php echo esc_html__('by', 'xoon') . ' ' . esc_html(get_the_author()); ?></a>
                <a class="blog-time" href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'))); ?>"><i class="bi bi-calendar3"></i> <?php echo esc_html(get_the_date()); ?></a>
                <a class="blog-comments" href="<?php echo esc_url(get_comments_link()); ?>">
                    <i class="bi bi-chat-left-quote"></i><?php echo wp_kses_post('(' . get_comments_number() . ')' . ' ' . esc_html__('Comment', 'xoon')); ?>
                </a>
            </div>
        </div>

    <?php
        }
    }

    /**
     * Blog post thumbnail
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_post_thumbnail')) {
        function egns_blog_post_thumbnail()
        {

            ?>
        <?php if (has_post_thumbnail()) { ?>
            <div class="post-thumb">
                <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
            </div>
        <?php } ?>

    <?php
        }
    }

    /**
     * Blog post footer
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_post_footer')) {
        function egns_blog_post_footer()
        {

            ?>
        <div class="post-footer flex-wrap flex-md-nowrap">
            <div class="next-prev-link"><?php previous_post_link('%link', '<i class="bi bi-chevron-left"></i> ' . esc_html__('Previous', 'xoon') . '', TRUE); ?></div>
            <a href="<?php the_permalink(); ?>" class="next-post-link"><?php esc_html(the_title()); ?></a>
            <div class="next-prev-link"><?php next_post_link('%link', '' . esc_html__('Next', 'xoon') . ' <i class="bi bi-chevron-right"></i>', TRUE); ?></div>
        </div>

    <?php
        }
    }

    /**
     * xoon Footer Widgets
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_footer_widgets')) {
        function egns_footer_widgets()
        {
            ?>

        <?php if (is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3')) : ?>
            <div class="col-xl-4 col-lg-6 justify-content-lg-start justify-content-center">
                <div class="footer-widget one">

                    <?php
                                if (is_active_sidebar('footer_1')) {
                                    dynamic_sidebar('footer_1');
                                }
                                ?>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6">
                <div class="footer-widget two three">
                    <?php
                                if (is_active_sidebar('footer_2')) {
                                    dynamic_sidebar('footer_2');
                                }
                                ?>
                </div>
            </div>

            <div class="col-xl-4 col-lg-10">
                <div class="footer-widget">
                    <?php
                                if (is_active_sidebar('footer_3')) {
                                    dynamic_sidebar('footer_3');
                                }
                                ?>
                </div>
            </div>
            </div>
        <?php endif ?>

    <?php
        }
    }





    // Social footer link widget


    if (!function_exists('egns_footer_menu_widgets')) {
        function egns_footer_menu_widgets()
        {
            ?>

        <div class="footer-link-area">
            <ul class="footer-list">
                <?php if (is_array(Egns_Helpers::egns_get_theme_option('footer_menu_link'))) : ?>
                    <?php foreach (Egns_Helpers::egns_get_theme_option('footer_menu_link') as $roww) : ?>
                        <li><a href="<?php echo esc_url($roww['footer_menu_link_url']) ?>"><?php echo esc_html($roww['footer_menu_text']) ?></a></li>
                    <?php endforeach ?>
                <?php endif ?>
            </ul>
        </div>


    <?php
        }
    }

    /**	
     * Copyright text for footer.
     *
     * @since   1.0.0
     */
    if (!function_exists('egns_footer_copyright')) {
        function egns_footer_copyright()
        {
            $copyright_text = Egns_Helpers::egns_get_theme_option('copyright_text');

            ?>

        <div class="footer-btm d-flex justify-content-center">
            <?php if (class_exists('CSF') && !empty($copyright_text)) : ?>
                <p><?php echo wp_kses($copyright_text, wp_kses_allowed_html('post')) ?></p>
            <?php else : ?>

                <p>Copyright <?php echo date('Y') ?> <a href="<?php echo esc_url('https://www.xoon-wp.egenslab.com') ?>" class="egns-lab"><?php echo esc_html__('XOON-WP', 'xoon') ?> </a> <?php echo esc_html__(' | Design By', 'xoon') ?> <a href="<?php echo esc_url('https://www.egenslab.com') ?>" class="egns-lab"><?php echo esc_html__('Egens Lab', 'xoon') ?></a>.</p>

            <?php endif ?>
        </div>


    <?php
        }
    }



    /*********** Blog Template Tag Start */


    /**	
     * Blog post meta
     *
     * @since   1.0.0
     */

    if (!function_exists('egns_blog_author_info')) {
        function egns_blog_author_info()
        {
            $author_url = get_author_posts_url(get_the_author_meta("ID"));

            ?>

        <div class="post-author-area d-flex align-items-center">
            <div class="author-img">
                <?php echo get_avatar(get_the_author_meta('ID'), 130); ?>
            </div>
            <div class="author-content">
                <div class="author-name">
                    <h4><?php echo get_the_author_meta('display_name') ?></h4>
                </div>
                <p><?php echo  get_the_author_meta("description"); ?></p>
            </div>
        </div>
    <?php
        }
    }
    if (!function_exists('egns_blog_post_meta')) {
        function egns_blog_post_meta()
        {
            $get_category_list = get_the_category(get_the_ID());

            ?>
        <div class="blog-publisher-meta-title d-flex align-items-center">
            <div class="publish-date">
                <span><?php echo esc_html(get_the_date('M')); ?></span>
                <p><?php echo esc_html(get_the_date('j')); ?></p>
                <span><?php echo esc_html(get_the_date('Y')); ?></span>
            </div>
            <div class="title-meta">
                <div class="blog-meta">
                    <?php
                        $i = 0;
                        foreach ($get_category_list as $value) :
                            $i++;
                            ?>
                        <?php if ($i <= 2) : ?>
                            <a href="<?php echo esc_url(get_category_link($value->cat_ID)) ?>">
                                <?php echo esc_html($value->name)?>
                            </a>
                        <?php endif ?>

                    <?php endforeach ?>

                </div>
                <div class="post-title">
                    <h3><?php the_title(); ?></h3>
                </div>
            </div>
        </div>

        <?php
            }
        }


        /**	
         * Comment for Blog Standard
         *
         * @since   1.0.0
         */
        if (!function_exists('egns_comment_count')) {
            function egns_comment_count()
            {
                if (!post_password_required() && (comments_open() || get_comments_number()) && get_comments_number() > 0) {
                    ?>
            <div class="comments">
                <span>
                    <i class="bi bi-chat-dots"></i>
                    <?php Egns_Helpers::egns_translate_with_escape_('comments') ?> <?php echo "(" . get_comments_number() . ")" ?>
                </span>
            </div>
        <?php
                }
            }
        }

        /**	
         * Blog Post Is Sticky
         *
         * @since   1.0.0
         */

        if (!function_exists('egns_blog_is_sticky')) {
            function egns_blog_is_sticky()
            {
                ?>
        <?php if (is_sticky(get_the_ID())) { ?>
            <div class="sticky-post-icon">
                <i class="bi bi-pin-angle"></i>
            </div>
        <?php } ?>
    <?php
        }
    }

    /**	
     * Blog Post News Content
     *
     * @since   1.0.0
     */

    if (!function_exists('egns_blog_news_content')) {
        function egns_blog_news_content()
        {
        ?>
            <div class="blog-content">
                <?php egns_blog_meta() ?>
                <h3><a data-cursor="View<br>Details" href="<?php esc_url( the_permalink() ) ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
                <p>
                    <?php
                            Egns_Helpers::egns_translate_with_escape_(substr(get_the_excerpt(), '0', '150'));
                            if (strlen(get_the_excerpt()) > 150) {
                                echo ' [...]';
                            }
                            ?>
                </p>
                <div class="button-social">
                    <div class="read-more-btn">
                        <a class="primary-btn3 button-hover-two" href="<?php esc_url( the_permalink() ) ?>"><?php Egns_Helpers::egns_translate_with_escape_('Read More')  ?></a>
                    </div>
                    <ul class="social-icon">
                        <li><a href="<?php echo esc_url('http://www.facebook.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('FB.', 'xoon') ?></a></li>
                        <li><a href="<?php echo esc_url('https://linkedin.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('LI.', 'xoon') ?></a></li>
                        <li><a href="<?php echo esc_url('http://www.instagram.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('IN.', 'xoon') ?></a></li>
                        <li><a href="<?php echo esc_url('http://www.twitter.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('TW.', 'xoon') ?></a></li>
                    </ul>
                </div>
            </div>
        <?php
        }
    }

     /**	
     * Blog Post Grid One Content
     *
     * @since   1.0.0
     */
    if (!function_exists('egns_blog_grid_one_content')) {
        function egns_blog_grid_one_content()
        {
        ?>
            <div class="blog-content">
                <div class="blog-meta">
                    <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                    <p>
                        <?php echo esc_html__('Posted by :', 'xoon') . ' '; ?> 
                        <a class="name" href="<?php echo esc_url($author_url) ?>">
                            <?php echo esc_html(get_the_author()); ?>
                        </a>

                            <?php echo esc_html('-'). ' ' ?> 
                        <?php if (have_comments()): ?>
                            <a href="<?php echo esc_url(get_comments_link()); ?>">                   
                                <?php comments_number( esc_html__('0 Comments', 'xoon'), esc_html__('1 Comment', 'xoon'), esc_html__(  '% Comments', 'xoon') ); ?>
                            </a> 
                        <?php endif ?>                   
                    </p>
                </div>
                <h3><a data-cursor="View<br>Details" href="<?php esc_url( the_permalink() ) ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
            </div>
        <?php
        }
    }

    /**
     * Blog list view
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_list_view')) {
        function egns_blog_list_view()
        {
            ?>
        <div class="blog-wrrap mb-60">
            <?php egns_blog_is_sticky() ?>
            <?php egns_blog_thumbnail() ?>
            <?php egns_blog_news_content() ?>
        </div>
    <?php
        }
    }

    /**
     * Blog list audio view
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_list_audio_view')) {
        function egns_blog_list_audio_view()
        {
            ?>
        <div class="col-12">
            <div class="signle-news-list post-audio mb-60">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_audio() ?>
                <?php egns_blog_grid_one_content() ?>
            </div>
        </div>
    <?php
        }
    }

    /**
     * Blog list video view
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_list_video_view')) {
        function egns_blog_list_video_view()
        {
            ?>
        <div class="col-12">
            <div class="signle-news-list post-video mb-60">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_video() ?>
                <?php egns_blog_grid_one_content() ?>
            </div>
        </div>
    <?php
        }
    }

    /**
     * Blog list gallery view
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_list_gallery_view')) {
        function egns_blog_list_gallery_view()
        {
            ?>
        <div class="col-12">
            <div class="signle-news-list post-gallery mb-60">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_gallery() ?>
                <?php egns_blog_grid_one_content() ?>
            </div>
        </div>
    <?php
        }
    }

    /**
     * Blog list quote view
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_list_quote_view')) {
        function egns_blog_list_quote_view()
        {
            ?>
        <div class="col-12">
            <div class="signle-news-list blog-post-quote">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_quote() ?>
                <?php egns_blog_grid_one_content() ?>
            </div>
        </div>
    <?php
        }
    }



    /**
     * Blog list Grid Sidebar View
     *
     * @since 1.0.0
     */

    if (!function_exists('egns_blog_grid_sidebar_view')) {
        function egns_blog_grid_sidebar_view()
        {
            ?>
        <div class="blog-single1 style-2">
            <?php egns_blog_thumbnail() ?>
            <div class="text">
                <div class="post-meta">
                    <div class="date">
                        <a href="<?php echo esc_url(home_url(get_the_date('Y/m/d'))) ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/calendr.svg'); ?>" alt="image"><span><?php echo get_the_date(); ?></span>
                        </a>
                    </div>
                    <?php if (comments_open()) { ?>
                        <a href="<?php echo esc_url(get_comments_link()); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/bubble.svg" alt="image"><span><?php Egns_Helpers::egns_translate_with_escape_('Comments') ?> <?php echo "(" . get_comments_number() . ")" ?></span>
                        </a>
                    <?php  } ?>
                </div>
                <h4>
                    <a href="<?php esc_url(the_permalink()) ?>">
                        <?php echo get_the_title() ?>
                    </a>
                </h4>
            </div>
        </div>
    <?php
        }
    }
    /**
     * Blog list Grid Sidebar View
     *
     * @since 1.0.0
     */

    if (!function_exists('egns_blog_info')) {
        function egns_blog_info()
        { ?>
        <?php the_content() ?>
        <?php Egns_Helpers::egns_get_post_pagination(); ?>
        <div class="blog-footer-meta">
            <?php echo egns_blog_share();  ?>
            <?php echo egns_blog_author_info() ?>
        </div>

    <?php
        }
    }


    /**
     * Blog Share Area View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_share')) {
        function egns_blog_share()
        { ?>
        <div class="tag-social-area d-flex align-items-center justify-content-between flex-wrap">
            <?php if (!empty(get_the_tag_list())) :  ?>
                <div class="tags">
                    <p><?php echo esc_html__('Tags:', 'xoon') ?>
                        <?php echo get_the_tag_list();  ?>
                    </p>
                </div>
            <?php endif ?>
            <div class="social-area">
                <ul class="d-flex">
                    <li><a href="<?php echo esc_url('http://www.facebook.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('FB.', 'xoon') ?></a></li>
                    <li><a href="<?php echo esc_url('https://linkedin.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('LI.', 'xoon') ?></a></li>
                    <li><a href="<?php echo esc_url('http://www.instagram.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('IN.', 'xoon') ?></a></li>
                    <li><a href="<?php echo esc_url('http://www.twitter.com/share?url=' . get_permalink()); ?>"><?php echo esc_html__('TW.', 'xoon') ?></a></li>
                </ul>
            </div>
        </div>
    <?php
        }
    }
    /**
     * Blog Details View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_details')) {
        function egns_blog_details()
        { ?>

        <?php
            if (has_post_thumbnail()) {
                ?>
                <div class="post-thumbnail">
                    <?php
                        the_post_thumbnail();
                        ?>
                </div>
            <?php
                }
                egns_blog_post_meta();
                egns_blog_info();
                ?>

    <?php
        }
    }


    /**
     * Blog Audio Details View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_audio_details')) {
        function egns_blog_audio_details()
        { ?>
        <?php
                post_formate_audio();
                egns_blog_info();
                ?>
    <?php
        }
    }

    /**
     * Blog Video Details View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_video_details')) {
        function egns_blog_video_details()
        { ?>
        <?php
                post_formate_video();
                egns_blog_info();
                ?>
    <?php
        }
    }

    /**
     * Blog Gallery Details View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_gallery_details')) {
        function egns_blog_gallery_details()
        { ?>
        <?php
                post_formate_gallery();
                egns_blog_info();
                ?>
    <?php
        }
    }

    /**
     * Blog Quote Details View
     *
     * @since 1.0.0
     */
    if (!function_exists('egns_blog_quote_details')) {
        function egns_blog_quote_details()
        { ?>
        <?php
                post_formate_quote();
                egns_blog_info();
                ?>
    <?php
        }
    }



    /**
     * Blog Post Formate Template Tag
     */

    if (!function_exists('post_formate_audio')) {
        function post_formate_audio()
        {
            ?>
        <div class="post-audio">
            <?php
                    if (Egns_Helpers::egns_has_embeded_audio()) {
                        echo Egns_Helpers::egns_embeded_audio('100%', '100%');
                    }
                    ?>
        </div>
    <?php
        }
    }


    /**
     * Blog Post Formate Template Tag
     */

    if (!function_exists('post_formate_video')) {
        function post_formate_video()
        {
            ?>
        <div class="post-video">
            <?php
                    if (Egns_Helpers::has_egns_embeded_video()) {
                        echo Egns_Helpers::egns_embeded_video('100%', '100%');
                    }
                    ?>
        </div>
    <?php
        }
    }

    /**
     * Blog Post Formate Template Tag
     */

    if (!function_exists('post_formate_gallery')) {
        function post_formate_gallery()
        {
            ?>

        <div class="post-gallery blog-format">
            <span class="blog-date"><?php echo get_the_date(); ?></span>
            <?php
                    if (Egns_Helpers::has_egns_gallery()) {
                        echo Egns_Helpers::egns_gallery_images('100%', '100%');
                    }
                    ?>
        </div>
    <?php
        }
    }

    /**
     * Blog Post Formate Template Tag
     */

    if (!function_exists('post_formate_quote')) {
        function post_formate_quote()
        {
            ?>
        <blockquote class="wp-block-quote">
            <div class="quage-icon">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icons/quote-1.svg'); ?>" alt="<?php echo esc_attr('image') ?>">
            </div>
            <p><?php echo Egns_Helpers::egns_quote_content('100%', '100%'); ?></p>
            <cite>
                <?php echo esc_html(get_the_author()) ?>
            </cite>
        </blockquote>
<?php
    }
}

?>