<header class="header-style-2">
    <div class="container d-flex justify-content-between align-items-center ">
        <div class="logo">
            <?php
            if (!empty(Egns_Helpers::egns_page_option_value('header_two_logo', 'url'))) {
                Egns_Helpers::get_theme_logo(Egns_Helpers::egns_page_option_value('header_two_logo', 'url'));
            } else {
                if (!empty(Egns_Helpers::egns_get_theme_option('header_logo', 'url'))) {
                    Egns_Helpers::get_theme_logo(Egns_Helpers::egns_get_theme_option('header_logo', 'url'));
                } else {
                    Egns_Helpers::get_theme_logo(NULL);
                }
            }
            ?>
        </div>
        <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_two_menu_button')) && (Egns_Helpers::egns_get_theme_option('header_two_menu_button')   ==  1) && class_exists('CSF')) :  ?>
            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_two_button_url'))) :   ?>
                <a href="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('header_two_button_url')) ?>" class="eg-btn btn--primary2 btn--lg d-lg-flex d-none"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/btn-star.svg" alt="image"><?php echo esc_html(Egns_Helpers::egns_get_theme_option('header_two_button_text')) ?></a>
            <?php endif ?>
        <?php endif ?>
        <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_two_menu_sidebar')) && (Egns_Helpers::egns_get_theme_option('header_two_menu_sidebar')   ==  1) && class_exists('CSF')) :  ?>
            <div class="sidebar-button mobile-menu-btn ">
                <div class="sidebar-icon-border">
                    <svg width="51" height="51" viewBox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.5968 50C19.5284 49.6696 16.6724 48.7962 14.0289 47.3801C11.3854 45.9639 9.09586 44.1582 7.16041 41.9632C5.22495 39.7681 3.71435 37.2543 2.62861 34.422C1.54287 31.5896 1 28.6156 1 25.5C1 19.1744 3.05347 13.6749 7.16041 9.00145C11.2673 4.32804 16.4364 1.66089 22.6676 1V2.5578C16.9085 3.36031 12.1171 5.92124 8.29335 10.2406C4.46965 14.56 2.5578 19.6464 2.5578 25.5C2.5578 31.3064 4.45785 36.381 8.25795 40.724C12.058 45.067 16.8377 47.6397 22.5968 48.4422V50ZM28.474 50V48.4422C30.5039 48.159 32.4747 47.6515 34.3866 46.9198C36.2984 46.1881 38.0804 45.1614 39.7327 43.8396L41.0072 44.9725C39.119 46.2943 37.1245 47.3801 35.0238 48.2298C32.9232 49.0795 30.7399 49.6696 28.474 50ZM39.8743 7.30202C38.1749 6.07466 36.3692 5.04793 34.4574 4.22182C32.5455 3.39571 30.5511 2.84104 28.474 2.5578V1C30.7399 1.33044 32.9114 1.92052 34.9884 2.77023C37.0655 3.61994 39.0718 4.72929 41.0072 6.09827L39.8743 7.30202ZM44.9725 40.724L43.8396 39.6619C45.1142 38.0096 46.1291 36.2276 46.8844 34.3158C47.6397 32.4039 48.159 30.4094 48.4422 28.3324H50C49.7168 30.5983 49.1503 32.7816 48.3006 34.8822C47.4509 36.9829 46.3415 38.9302 44.9725 40.724ZM48.4422 22.6676C48.159 20.5906 47.6397 18.5961 46.8844 16.6842C46.1291 14.7724 45.1142 12.9904 43.8396 11.3382L45.185 10.1344C46.4123 12.0226 47.4273 14.0171 48.2298 16.1178C49.0323 18.2184 49.6224 20.4017 50 22.6676H48.4422Z" stroke="#0A0A0A" stroke-width="0.7" />
                    </svg>
                </div>
                <div class="sidebar-icon">
                    <svg width="24" height="20" viewBox="0 0 24 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.9998 7H5.88867" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23 1H1" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23 13H1" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.9998 19H5.88867" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        <?php endif;?>
    </div>
</header>

<!-- ====== header-section end ======== -->

<!-- ====== sidebar start ======== -->
<div class="main-nav-wrapper">
    <div class="main-nav">
        <div class="menu-close-btn"><i class="bi bi-x-lg"></i></div>
        <div class="mobile-logo-area d-flex justify-content-start align-items-center">
            <div class="header-logo">
                <!-- <a href="index.html"><img alt="image" class="img-fluid" src="assets/images/icons/header1-logo.svg"></a> -->
                <?php
                if (!empty(Egns_Helpers::egns_page_option_value('header_two_logo_mobile', 'url'))) {
                    Egns_Helpers::get_theme_logo(Egns_Helpers::egns_page_option_value('header_two_logo_mobile', 'url'));
                } else {
                    if (!empty(Egns_Helpers::egns_get_theme_option('header_logo_mobile', 'url'))) {
                        Egns_Helpers::get_theme_logo(Egns_Helpers::egns_get_theme_option('header_logo_mobile', 'url'));
                    } else {
                        Egns_Helpers::get_theme_logo(NULL);
                    }
                }
                ?>
            </div>
        </div>
        <div class="sidebar-menu-area">
            <!-- <ul class="menu-list">
                <li class="menu-item-has-children menu-item">
                    <a href="#" class="drop-down" data-hover='Home'>Home</a><i class='bi bi-plus-lg dropdown-icon'></i>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index2.html">Home Two</a></li>
                        <li><a href="index3.html">Home Three</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="about.html" data-hover='About'>About</a></li>
                <li class="menu-item-has-children menu-item">
                    <a href="collection1.html" data-hover='Collectoin'> Collectoin</a><i class='bi bi-plus-lg dropdown-icon'></i>
                    <ul class="sub-menu">
                        <li><a href="collection1.html">Collection 01</a></li>
                        <li><a href="collection2.html">Collection 02</a></li>
                        <li><a href="collection-details.html">Collection Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children menu-item">
                    <a href="#" class="drop-down" data-hover='Pages'> Pages</a><i class='bi bi-plus-lg dropdown-icon'></i>
                    <ul class="sub-menu">
                        <li><a href="roadmap.html">Roadmap</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="error.html">Error</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children menu-item">
                    <a href="blog-grid.html" data-hover='Blog'>Blog</a><i class='bi bi-plus-lg dropdown-icon'></i>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-standard.html">Blog Standard</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="contact.html" data-hover='Contact'>Contact</a></li>
            </ul> -->
            <?php
            Egns_Helpers::egns_get_theme_menu('primary-menu', 'main-nav-wrapper', '<i class="bi bi-circle-fill"></i>', 'ul', 3);
            ?>


            <div class="sidebar-menu-contact d-flex justify-content-start">

                <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_two_sidebar_url_one'))) :   ?>
                    <a href="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('header_two_sidebar_url_one')) ?>" data-cursor="<?php echo esc_attr__(Egns_Helpers::egns_get_theme_option('header_two_sidebar_text_one'), 'egns-core') ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/opensea-icon.svg" class="img-fluid" alt="<?php echo esc_attr('sidebar-image') ?>"></a>
                <?php endif ?>

                <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_two_sidebar_url_two'))) : ?>
                    <a href="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('header_two_sidebar_url_two')) ?>" data-cursor="<?php echo esc_attr__(Egns_Helpers::egns_get_theme_option('header_two_sidebar_text_two'), 'egns-core') ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/discord-icon.svg" class="img-fluid" alt="<?php echo esc_attr('sidebar-image') ?>"></a>
                    </a>
                <?php endif; ?>

            </div>
        </div>
        <div class="sidebar-social d-flex justify-content-center gap-5">
            <?php if (is_array(Egns_Helpers::egns_get_theme_option('header_two_social_link'))) : ?>
                <?php foreach (Egns_Helpers::egns_get_theme_option('header_two_social_link') as $roww) : ?>
                    <a href="<?php echo esc_url($roww['header_two_social_link_url']) ?>"><img src="<?php echo esc_url($roww['header_two_sidebar_social_image']['url']) ?>" alt="image"></a>
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>
</div>