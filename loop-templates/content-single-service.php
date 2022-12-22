            <div class="introduction-area pt-120 mb-120">
                <div class="container">
                    <div class="row align-items-center g-4 justify-content-center">
                        <div class="col-lg-8">
                            <div class="introduction-content">
                                <?php
                                $post_cat = get_the_terms(get_the_ID(), 'xoon-service-category');
                                if (!empty($post_cat)) :
                                    $first_cat = $post_cat[0]->name; ?>
                                    <span><?php echo Egns_Helpers::egns_translate($first_cat) ?></span>
                                <?php endif; ?>
                                <h3><?php the_title() ?></h3>
                                <?php the_content(); ?>
                                <?php
                                $req_button_meta = get_post_meta(get_the_ID(), 'service_request_button', true);
                                ?>
                                <?php if (!empty($req_button_meta['req_button_text'])) : ?>
                                    <a class="primary-btn4 button-hover-two " href="<?php echo esc_url($req_button_meta['req_button_url']['url']) ?>"><?php echo esc_html($req_button_meta['req_button_text']) ?></a>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-sm-8 col-12">
                            <div class="introduction-banner">
                                <?php
                                $intro_banner_meta = get_post_meta(get_the_ID(), 'intro_banner_section', true);
                                ?>
                                <?php if (!empty($intro_banner_meta['Intro_banner_image']['url'])) : ?>
                                    <img class="img-fluid" src="<?php echo esc_url($intro_banner_meta['Intro_banner_image']['url'])  ?>" alt="<?php echo esc_attr('image') ?>">
                                <?php endif ?>
                                <div class="overlay">
                                    <div class="intro-banner-content">
                                        <?php if (!empty($intro_banner_meta['banner_title_text'])) : ?>
                                            <h4><?php echo Egns_Helpers::egns_translate($intro_banner_meta['banner_title_text'])  ?></h4>
                                        <?php endif ?>
                                        <?php if (!empty($intro_banner_meta['banner_button_text'])) : ?>
                                            <a class="primary-btn4 button-hover-two" href="<?php echo esc_url($intro_banner_meta['banner_button_url']['url']) ?>"><?php echo esc_html($intro_banner_meta['banner_button_text']) ?></a>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- why choose area starts here -->
            <?php
            $choose_us_meta = get_post_meta(get_the_ID(), 'why_choose_us_section', true);
            ?>
            <div class="choose-area pt-100 mb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="choose-bg">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="choose-content">
                                            <?php if (!empty($choose_us_meta['why_choose_us_subtitle'])) : ?>
                                                <span><?php echo Egns_Helpers::egns_translate($choose_us_meta['why_choose_us_subtitle']) ?></span>
                                            <?php endif ?>
                                            <?php if (!empty($choose_us_meta['why_choose_us_title'])) : ?>
                                                <h2><?php echo Egns_Helpers::egns_translate($choose_us_meta['why_choose_us_title']) ?></h2>
                                            <?php endif ?>
                                            <p><?php echo wp_kses($choose_us_meta['why_choose_us_description'], wp_kses_allowed_html('post')) ?></p>
                                            <ul>
                                                <?php
                                                if (is_array($choose_us_meta['choose_us_repeater']) || is_object($choose_us_meta['choose_us_repeater'])) :

                                                    foreach ($choose_us_meta['choose_us_repeater'] as $items) : ?>
                                                        <li><?php echo Egns_Helpers::egns_translate($items['choose_us_items']) ?></li>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </ul>
                                            <?php if (!empty($choose_us_meta['choose_us_button_text'])) : ?>
                                                <a class="primary-btn4 button-hover-two" href="<?php echo esc_url($choose_us_meta['choose_us_button_url']['url']) ?>"><?php echo Egns_Helpers::egns_translate($choose_us_meta['choose_us_button_text']) ?></a>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- contact form -->
            <div class="home1-booking-area mb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <?php
                            $booking_form_meta = get_post_meta(get_the_ID(), 'service_booking_form', true);
                            ?>
                            <?php if (!empty($booking_form_meta['booking_form_shortcode'])) : ?>
                                <?php echo do_shortcode($booking_form_meta['booking_form_shortcode']) ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>