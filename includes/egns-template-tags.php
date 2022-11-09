<?php

/**
 * astrip blog meta for blog listing.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_meta')) {

    function egns_blog_meta()
    {
?>
        <div class="blog-body-top">
            <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
            <a href="<?php echo esc_url($author_url) ?>" class="blog-writer"><i class="bi bi-person-circle"></i> <?php echo esc_html__('By', 'astrip') . ' ' . esc_html(get_the_author()); ?> </a>
            <?php
            if (Egns_Helpers::egns_post_layout() == 'default') {
            ?>
                <a href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'))); ?>" class="blog-comments"><i class="bi bi-calendar3"></i> <?php echo esc_html(get_the_date()); ?></a>
            <?php
            }
            ?>
            <a class="blog-comments" href="<?php echo esc_url(get_comments_link()); ?>">
                <i class="bi bi-chat-left-quote"></i><?php echo wp_kses_post('(' . esc_html(get_comments_number()) . ')' . ' ' . esc_html__('Comment', 'astrip')); ?>
            </a>
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
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ?></a>
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
                $read_more = '<div class="read-more"><a href="' . esc_url(get_permalink()) . '">' . esc_html__('Read More', 'astrip') . '<i class="bx bx-right-arrow-alt"></i></a></div>';
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
                <a class="blog-writer" href="<?php echo esc_url($author_url) ?>"><i class="bi bi-person-circle"></i><?php echo esc_html__('by', 'astrip') . ' ' . esc_html(get_the_author()); ?></a>
                <a class="blog-time" href="<?php echo esc_url(get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'))); ?>"><i class="bi bi-calendar3"></i> <?php echo esc_html(get_the_date()); ?></a>
                <a class="blog-comments" href="<?php echo esc_url(get_comments_link()); ?>">
                    <i class="bi bi-chat-left-quote"></i><?php echo wp_kses_post('(' . get_comments_number() . ')' . ' ' . esc_html__('Comment', 'astrip')); ?>
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
            <div class="next-prev-link"><?php previous_post_link('%link', '<i class="bi bi-chevron-left"></i> ' . esc_html__('Previous', 'astrip') . '', TRUE); ?></div>
            <a href="<?php the_permalink(); ?>" class="next-post-link"><?php esc_html(the_title()); ?></a>
            <div class="next-prev-link"><?php next_post_link('%link', '' . esc_html__('Next', 'astrip') . ' <i class="bi bi-chevron-right"></i>', TRUE); ?></div>
        </div>

    <?php
    }
}

/**
 * Astrip Footer Widgets
 *
 * @since 1.0.0
 */
if (!function_exists('egns_footer_widgets')) {
    function egns_footer_widgets()
    {
    ?>





        <?php if (is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3') || is_active_sidebar('footer_4')) : ?>
            <div class="col-lg-4">
                <div class="footer-text-area">

                    <?php
                    if (is_active_sidebar('footer_1')) {
                        dynamic_sidebar('footer_1');
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-text-area">
                    <?php
                    if (is_active_sidebar('footer_2')) {
                        dynamic_sidebar('footer_2');
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-text-area">
                    <?php
                    if (is_active_sidebar('footer_4')) {
                        dynamic_sidebar('footer_4');
                    }
                    ?>
                </div>
            </div>
            </div>
        <?php endif ?>



    <?php
    }
}





// Social fotter link widget


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
        $footer_menu_list = Egns_Helpers::egns_get_theme_option('footer_bottom_social_link');
        $is_footer_menu_list = true;
        if (is_array($footer_menu_list) && class_exists('CSF')) {
            $is_footer_menu_list = true;
        } else {
            $is_footer_menu_list = false;
        }
    ?>




        <div class="copyright-area">
            <div class="row g-4">
                <div class="col-lg-6 d-flex justify-content-lg-start <?php echo !is_array($footer_menu_list) ? 'justify-content-center' : '' ?>">
                    <div class="copyright">
                        <?php if (class_exists('CSF') && !empty($copyright_text)) : ?>
                            <p><?php echo wp_kses($copyright_text, wp_kses_allowed_html('post')) ?></p>
                        <?php else : ?>

                            <p>&copy;<?php echo date('Y') ?> <a href="<?php echo esc_url('https://www.xoon-wp.egenslab.com') ?>" class="egns-lab"><?php echo esc_html__('xoon', 'xoon') ?> </a> <?php echo esc_html__('is Proudly Powered by', 'xoon') ?> <a href="<?php echo esc_url('https://www.egenslab.com') ?>" class="egns-lab"><?php echo esc_html__('Egens Lab', 'xoon') ?></a>.</p>

                        <?php endif ?>
                    </div>
                </div>
                <?php if (is_array($footer_menu_list)) : ?>
                    <div class="col-lg-6 justify-content-lg-end justify-content-center">
                        <ul class="footer-social">


                            <?php foreach ($footer_menu_list as $menu_list) : ?>

                                <li>
                                    <img src="<?php echo esc_url($menu_list['footer_bottom_social_image']['url']) ?>" alt="<?php echo esc_attr('image')?>">
                                    <a href="<?php echo esc_url($menu_list['footer_bottom_social_link_url']) ?>"><?php echo esc_html($menu_list['footer_bottom_social_text']) ?></a>
                                </li>
                            <?php endforeach ?>

                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>









        <?php
    }
}

/**	
 * Widget area background
 *
 * @since   1.0.0
 */
if (!function_exists('footer_widget_area_background')) {
    function footer_widget_area_background()
    {
        $img_url = Egns_Helpers::egns_get_theme_option('footer_widget_area_background');
        if (!empty($img_url['url'])) {
        ?>
            <div class="footer-vactor">
                <img src="<?php echo esc_url($img_url['url']); ?>" alt="<?php echo esc_attr('footer-background') ?>">
            </div>
        <?php
        }
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
        <div class="author-pic">
            <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
        </div>
        <div class="author-info">
            <h5><a href="<?php echo esc_url($author_url) ?>"><?php echo get_the_author_meta('display_name') ?></a></h5>
            <a href="<?php echo esc_url(home_url(get_the_date('Y/m/d'))) ?>">
                <time datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date(); ?></time>
            </a>
        </div>
    <?php
    }
}
if (!function_exists('egns_blog_post_meta')) {
    function egns_blog_post_meta()
    {
        $author_url = get_author_posts_url(get_the_author_meta("ID"));

    ?>
        <ul class="blog-meta">
            <li><a href="<?php echo esc_url($author_url) ?>"><?php echo get_the_author_meta('display_name') ?></a></li>
            <li>
                <a href="blog-grid.html">
                    <svg width="13" height="13" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M6.55462 2.78571L8.52101 0L8.63025 3.59821L11.7983 2.55357L9.83193 5.40592L13 6.61607L9.83193 7.66071L11.7983 10.5625L8.52101 9.40179V13L6.44538 10.0982L4.47899 13L4.36975 9.40179L1.20168 10.4464L3.16807 7.66071L0 6.5L3.16807 5.33929L1.20168 2.55357L4.47899 3.48214V0L6.55462 2.78571Z" />
                    </svg>
                    <?php echo get_the_date(); ?>
                </a>
            </li>
            <li>
                <a href="blog-grid.html">
                    <svg width="16" height="16" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M6.55462 2.78571L8.52101 0L8.63025 3.59821L11.7983 2.55357L9.83193 5.40592L13 6.61607L9.83193 7.66071L11.7983 10.5625L8.52101 9.40179V13L6.44538 10.0982L4.47899 13L4.36975 9.40179L1.20168 10.4464L3.16807 7.66071L0 6.5L3.16807 5.33929L1.20168 2.55357L4.47899 3.48214V0L6.55462 2.78571Z" />
                    </svg>
                    Art
                </a>
            </li>
        </ul>

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
            <?php egns_blog_post_meta(); ?>

            <div class="blog-title">
                <h3><a href="<?php the_permalink(); ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
            </div>
            <p>
                <?php
                Egns_Helpers::egns_translate_with_escape_(substr(get_the_excerpt(), '0', '150'));
                if (strlen(get_the_excerpt()) > 150) {
                    echo ' [...]';
                }
                ?>
            </p>
            <div class="read-more-btn">
                <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More
                    <svg width="51" height="10" viewBox="0 0 51 10" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 5L50 5" stroke="#008B5E"></path>
                        <path d="M45 9L50 5L45 1" stroke="#008B5E" stroke-linecap="round"></path>
                    </svg>
                </a>
            </div>
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
        <?php egns_blog_is_sticky() ?>
        <?php egns_blog_thumbnail() ?>
        <?php egns_blog_news_content() ?>
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
            <div class="signle-news-list post-audio">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_audio() ?>
                <?php egns_blog_news_content() ?>
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
            <div class="signle-news-list post-video">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_video() ?>
                <?php egns_blog_news_content() ?>
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
            <div class="signle-news-list post-gallery">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_gallery() ?>
                <?php egns_blog_news_content() ?>
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
                <?php egns_blog_news_content() ?>
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

        <?php egns_blog_post_meta(); ?>
        <?php the_content() ?>
        <?php Egns_Helpers::egns_get_post_pagination(); ?>
        <?php if (!empty(get_the_tag_list()) || class_exists('CSF')) :  ?>

        <?php endif ?>
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
        <div class="blog-share-area">
                <div class="row">
                    <div class="col-md-9">
                        <?php if (!empty(get_the_tag_list())) :  ?>
                            <div class="blog-tag-area">
                                <h6><?php echo esc_html__('Tags:', 'astrip') ?></h6>
                                <?php echo get_the_tag_list();  ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="col-md-3">
                        <div class="blog-share">
                            <div class="front">
                                <i class="bi bi-share"></i> <span><?php echo esc_html__('SHARE:', 'astrip') ?></span>
                            </div>
                            <div class="back">
                                <ul class="share-list d-flex justify-content-end flex-row align-items-center gap-3">
                                    <li><a href="<?php echo esc_url('http://www.facebook.com/sharer/sharer.php?u=' . get_permalink()); ?>"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="<?php echo esc_url('http://www.twitter.com/share?url=' . get_permalink()); ?>"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="<?php echo esc_url('https://pinterest.com/pin/create/button/?url=' . get_permalink()); ?>"><i class="bx bxl-instagram"></i></a></li>
                                    <li><a href="<?php echo esc_url('http://www.instagram.com/share?url=' . get_permalink()); ?>"><i class="bx bxl-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
        <div class="blog-details-single">
            <?php
            egns_blog_info();
            ?>
        </div>
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
        <div class="post-formate-quote">
            <blockquote>
                <?php
                echo Egns_Helpers::egns_quote_content('100%', '100%');
                ?>
            </blockquote>
        </div>
<?php
    }
}

?>