<!-- header starts -->
<header class="header-area style-3">
    <div class="header-logo">
        <?php
        if (!empty(Egns_Helpers::egns_page_option_value('header_three_logo', 'url'))) {
            Egns_Helpers::get_theme_logo(Egns_Helpers::egns_page_option_value('header_three_logo', 'url'));
        } else {
            if (!empty(Egns_Helpers::egns_get_theme_option('header_logo', 'url'))) {
                Egns_Helpers::get_theme_logo(Egns_Helpers::egns_get_theme_option('header_logo', 'url'));
            } else {
                Egns_Helpers::get_theme_logo(NULL);
            }
        }
        ?>
    </div>
    <div class="main-menu">
        <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
            <div class="mobile-logo-wrap ">
                <?php
                if (!empty(Egns_Helpers::egns_page_option_value('header_three_logo_mobile', 'url'))) {
                    Egns_Helpers::get_theme_logo(Egns_Helpers::egns_page_option_value('header_three_logo_mobile', 'url'));
                } else {
                    if (!empty(Egns_Helpers::egns_get_theme_option('header_logo_mobile', 'url'))) {
                        Egns_Helpers::get_theme_logo(Egns_Helpers::egns_get_theme_option('header_logo_mobile', 'url'));
                    } else {
                        Egns_Helpers::get_theme_logo(NULL);
                    }
                }
                ?>

            </div>
            <div class="menu-close-btn">
                <i class="bi bi-x-lg"></i>
            </div>
        </div>
        <?php
        Egns_Helpers::egns_get_theme_menu('primary-menu', 'main-menu', '<i class="bx bxs-circle dropdown-icon"></i>', 'menu-list', 3);
        ?>
    </div>
    <div class="nav-right d-flex align-items-center">
        <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_menu_button')) && (Egns_Helpers::egns_get_theme_option('header_three_menu_button')   ==  1) && class_exists('CSF')) :  ?>
            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_button_url'))) :   ?>
                <div class="header-btn">
                    <a href="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('header_three_button_url')) ?>" class="button-hover-two"><?php echo esc_html(Egns_Helpers::egns_get_theme_option('header_three_button_text')) ?></a>
                </div>
            <?php endif ?>
        <?php endif ?>
        <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_menu_sidebar')) && (Egns_Helpers::egns_get_theme_option('header_three_menu_sidebar')   ==  1) && class_exists('CSF')) :  ?>
            <div class="side-icon style-two">
                <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.421875 5.12308C0.134766 5.30769 0 5.58462 0 5.99077C0 6.39692 0.146484 6.67385 0.46875 6.87077L0.673828 7H15H29.3262L29.5312 6.87077C29.8535 6.67385 30 6.39692 30 5.99077C30 5.58462 29.8652 5.30769 29.5781 5.12308C29.3848 5 29.25 5 15 5C0.75 5 0.615234 5 0.421875 5.12308Z" />
                    <path d="M0.421875 14.125C0.140625 14.3125 0 14.5938 0 15C0 15.4062 0.140625 15.6875 0.421875 15.875C0.615234 16 0.75 16 15 16C29.25 16 29.3848 16 29.5781 15.875C29.8594 15.6875 30 15.4062 30 15C30 14.5938 29.8594 14.3125 29.5781 14.125C29.3848 14 29.25 14 15 14C0.75 14 0.615234 14 0.421875 14.125Z" />
                    <path d="M0.723529 23.0428C0.252941 23.159 0 23.5015 0 24.0214C0 24.419 0.141176 24.6942 0.423529 24.8777C0.611765 25 0.735294 25 8 25C15.2647 25 15.3882 25 15.5765 24.8777C15.8647 24.6942 16 24.419 16 24.0153C16 23.6116 15.8529 23.3364 15.5294 23.1407C15.3235 23.0122 15.2706 23.0122 8.11765 23C4.15294 23 0.823529 23.0122 0.723529 23.0428Z" />
                </svg>
            </div>
        <?php endif; ?>
    </div>
</header>

<!-- ====== sidebar start ======== -->

<div class="main-nav-wrapper">
    <div class="main-nav">
        <div class="menu-close-btn" id="menu-close-btn"><i class="bi bi-x-lg"></i></div>
        <div class="mobile-logo-area d-flex justify-content-start align-items-center">
            <div class="header-logo">
                <?php
                if (!empty(Egns_Helpers::egns_page_option_value('header_three_logo_mobile', 'url'))) {
                    Egns_Helpers::get_theme_logo(Egns_Helpers::egns_page_option_value('header_three_logo_mobile', 'url'));
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
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 px-0">
                    <div class="sidebar-menu-area">
                        <?php
                        Egns_Helpers::egns_get_theme_menu('primary-menu', 'sidebar-menu-area', '<i class="bi bi-plus-lg dropdown-icon"></i>', 'menu-list', 3);
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav-contact-list">
                        <li class="citem">
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_number_text'))) : ?>
                                <h6><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_number_text') ?></h6>
                            <?php endif ?>
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_number_three'))) : ?>
                                <a href="tel:<?php echo (Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_number_three')) ?>"><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_number_three') ?></a>
                            <?php endif ?>
                        </li>
                        <li class="citem">
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_address_text'))) : ?>
                                <h6><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_address_text') ?></h6>
                            <?php endif ?>
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_address_three'))) : ?>
                                <p><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_address_three') ?></p>
                            <?php endif ?>
                        </li>
                        <li class="citem">
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_email_text'))) : ?>
                                <h6><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_email_text') ?></h6>
                            <?php endif ?>
                            <?php if (!empty(Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_email_three'))) : ?>
                                <a href="mailto:<?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_email_three') ?>"><?php echo Egns_Helpers::egns_get_theme_option('header_three_sidebar_contact_email_three') ?></a>
                            <?php endif ?>
                        </li>
                        <li class="citem">
                            <h6><?php echo esc_html('FOLLOW US:') ?></h6>
                            <ul class="social-icon">
                                <?php if (is_array(Egns_Helpers::egns_get_theme_option('header_three_sidebar_social_link'))) : ?>
                                    <?php foreach (Egns_Helpers::egns_get_theme_option('header_three_sidebar_social_link') as $row) : ?>
                                        <li><a href="<?php echo esc_url($row['header_three_sidebar_social_link_url']['url']) ?>" target="<?php echo esc_url($row['header_three_sidebar_social_link_url']['target']) ?>"><i class='<?php echo esc_attr($row['header_three_sidebar_social_icon_class']) ?>'></i></a></li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <span></span>
    </div>
</div>