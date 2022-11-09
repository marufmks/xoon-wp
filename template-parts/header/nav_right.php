<div class="nav-right d-flex jsutify-content-end align-items-center gap-5">
    <div class="mobile-menu-btn d-xl-none d-block">
        <i class="bi bi-list text-white"></i>
    </div>
    <?php  if( class_exists('CSF') && Egns_Helpers::is_enabled($egns_theme_options['header_button_enable'],Egns_Helpers::egns_page_option_value('page_header_button_enable')) && !empty( $egns_theme_options['header_button_text'] && $egns_theme_options['header_button_style'] == 'header_button_style_one' ) ) { ?>
        <div class="eg-btn btn--primary btn--lg d-flex">
            <a href="<?php echo esc_url($egns_theme_options['header_button_link']) ?>"><i class="bi bi-dash-lg"></i><?php echo esc_html($egns_theme_options['header_button_text']); ?></a>
        </div>
    <?php } ?>
    <?php  if( class_exists('CSF') && Egns_Helpers::is_enabled($egns_theme_options['header_button_enable'],Egns_Helpers::egns_page_option_value('page_header_button_enable')) && !empty( $egns_theme_options['header_button_text'] && $egns_theme_options['header_button_style'] == 'header_button_style_two' ) ) { ?>
    <div class="eg-btn btn--primary2 capsule btn--lg d-xl-flex d-none">
        <a href="<?php echo esc_url( $egns_theme_options['header_button_link'] ) ?>"><?php echo esc_html($egns_theme_options['header_button_text']); ?>
            <svg width="18" height="15" viewBox="0 0 22 13" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.9805 6.64708C21.955 6.74302 20.6834 7.78829 18.0766 9.85862C13.9311 13.156 14.0201 13.0954 13.5751 12.949C13.1809 12.8177 13.0219 12.5097 13.1809 12.1814C13.2127 12.1057 14.6369 10.9342 16.3408 9.5809L19.4309 7.11669V5.90479L16.3091 3.41534C14.23 1.75907 13.1682 0.885493 13.1427 0.789551C13.041 0.466377 13.2635 0.143203 13.6577 0.0472607C13.7595 0.0270623 13.8485 0.00181433 13.8612 0.00181433C14.0201 -0.0385824 14.8467 0.582518 18.1148 3.18306C20.6898 5.23824 21.955 6.27846 21.9805 6.36935C22.0059 6.45015 22.0059 6.57134 21.9805 6.64708Z" fill="white"/>
                <path d="M17.4313 5.90479V7.11669L2.71236 7.10659C2.27365 7.10608 1.84766 7.10558 1.43438 7.10507C1.19278 7.10507 0.954985 7.10457 0.721643 7.10457C0.320448 7.09396 0 6.83189 0 6.51074C0 6.34662 0.0839268 6.19817 0.218718 6.09061C0.349695 5.98659 0.528993 5.92044 0.728001 5.9169L1.23283 5.9164L2.706 5.91488L17.4313 5.90479Z" fill="white"/>
            </svg>
        </a>
    </div>
    <?php } ?>
    <?php  if( class_exists('CSF') && Egns_Helpers::is_enabled($egns_theme_options['header_button_enable'],Egns_Helpers::egns_page_option_value('page_header_button_enable')) && !empty( $egns_theme_options['header_button_text'] && $egns_theme_options['header_button_style'] == 'header_button_style_three' ) ) { ?>
        <a href="<?php echo esc_url($egns_theme_options['header_button_link']) ?>" class="eg-btn btn--primary2 sibling2  btn--lg2 d-xxl-flex d-none">
            <i class="bi bi-dash-lg"></i><?php echo esc_html($egns_theme_options['header_button_text']); ?><i class="bi bi-chevron-right"></i>
        </a>
    <?php } ?>
    <?php if( !empty( $egns_theme_options['header_contact_enable'] ) && !empty( Egns_Helpers::egns_page_option_value('page_header_contact_enable') ) && Egns_Helpers::is_enabled( $egns_theme_options['header_contact_enable'], Egns_Helpers::egns_page_option_value('page_header_contact_enable') )  ) : ?>
        <div class="phone-call d-xl-flex d-none justify-content-center align-items-center flex-row">
            <?php if( !empty( $egns_theme_options['header_contact_icon']['url'] ) ) : ?>
            <div class="icon">
                <img src="<?php echo esc_url( $egns_theme_options['header_contact_icon']['url'] ) ?>" alt="<?php echo esc_attr('phone-icon') ?>">
            </div>
            <?php endif ?>
            <div class="number">
                <?php if( !empty( $egns_theme_options['header_contact_text'] ) ) : ?>
                    <span><?php echo esc_html( $egns_theme_options['header_contact_text'] ) ?></span>
                <?php endif ?>
                <?php if( !empty( $egns_theme_options['header_contact_phone'] ) ) : ?>
                    <h5><a href="tel:<?php echo wp_kses( str_replace(' ','',$egns_theme_options['header_contact_phone']) , wp_kses_allowed_html('post') ) ?>"><?php echo wp_kses( str_replace(' ','',$egns_theme_options['header_contact_phone'] ), wp_kses_allowed_html('post') ) ?></a></h5>
                <?php endif ?>
            </div>
        </div>
    <?php endif ?>
</div>