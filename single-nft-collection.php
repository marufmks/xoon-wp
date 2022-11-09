<?php
get_header();

get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>
<div class="collection-details bg-color2 pt-120 pb-120">
        <div class="container">
            <div class="row g-lg-5 g-4">
                <div class="col-lg-6">
                    <div class="collection-thumb-slider">
                        <?php 
                            $nft_gallery = Egns_Helpers::egns_page_option_value( 'collection_gallery_image' );
                            $nft_gallery_ids = explode( ',', $nft_gallery );
                            
                        ?>
                        <div class="swiper collection-thumb-slider01" >
                            <div class="swiper-wrapper">
                                <?php 
                                    if ( ! empty( $nft_gallery_ids ) ) {
                                        foreach ( $nft_gallery_ids as $nft_gallery_id ) {
                                           ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo esc_url(wp_get_attachment_url( $nft_gallery_id ));?>" alt="<?php esc_html(the_title());?>">
                                            </div>
                                           <?php 
                                        }
                                    }
                                ?>
                            </div>
                        </div>
            
                      <div class="swiper collection-thumb-slider02">
                        <div class="swiper-wrapper">
                            <?php 
                                if ( ! empty( $nft_gallery_ids ) ) {
                                    foreach ( $nft_gallery_ids as $nft_gallery_id ) {
                                        ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo esc_url(wp_get_attachment_url( $nft_gallery_id ));?>" alt="<?php esc_html(the_title());?>">
                                        </div>
                                        <?php 
                                    }
                                }
                            ?>
                        </div>
                      </div>
                      <div class="slider-btn d-flex align-items-center justify-content-md-between justify-content-center gap-5">
                        <div class="swiper-button-next1"><i class="bi bi-chevron-left"></i></div>
                        <div class="swiper-button-prev1"><i class="bi bi-chevron-right"></i></div>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="collection-details-content">
                        <div class="section-title">
                            <?php 
                                $nft_price = Egns_Helpers::egns_page_option_value( 'collection_price' );
                                if(!empty($nft_price)){
                                    ?>
                                    <h3><?php echo esc_html__('Price:', 'xoon'); ?> <span> <?php echo esc_html($nft_price); ?></span></h3>
                                    <?php 
                                }
                            ?>
                            
                            <h4><?php echo esc_html(the_title());?></h4>
                        </div>
                        <?php the_content(); ?>
                        <div class="collection-feature">
                            <div class="section-title">
                                <h3><?php echo esc_html__('Feature', 'xoon'); ?> </h3>
                            </div>
                            <?php 
                                $feature_list = Egns_Helpers::egns_page_option_value( 'feature_list' );
                                if(!empty($feature_list)) :
                            ?>
                            <ul class="features ">
                                <?php foreach($feature_list as $feature) :?>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M6.55462 2.78571L8.52101 0L8.63025 3.59821L11.7983 2.55357L9.83193 5.40592L13 6.61607L9.83193 7.66071L11.7983 10.5625L8.52101 9.40179V13L6.44538 10.0982L4.47899 13L4.36975 9.40179L1.20168 10.4464L3.16807 7.66071L0 6.5L3.16807 5.33929L1.20168 2.55357L4.47899 3.48214V0L6.55462 2.78571Z">
                                        </path>
                                    </svg>
                                    <?php echo esc_html($feature['feature_list_title']); ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                            <div class="row justify-content-center g-4">
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Clothing</span>
                                        <h5>Blank</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Eyes</span>
                                        <h5>Mix</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Face</span>
                                        <h5>Gray</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Skin</span>
                                        <h5>Gray</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Background</span>
                                        <h5>Blank</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="single-features">
                                        <span>Special</span>
                                        <h5>Art</h5>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="nft-collection-btn">
                                        <?php
                                            $nft_collection_button = Egns_Helpers::egns_page_option_value( 'nft_collection_button' ); 
                                        ?>
                                        <?php 
                                            if(!empty($nft_collection_button['nft_button_name']) && !empty($nft_collection_button['nft_button_url'])) :
                                        ?>
                                        <div class="open-btn">
                                            <a <?php if($nft_collection_button['url_target_enable_disable'] == 'enabled'){echo 'target="_blank"';} ?> href="<?php echo esc_url($nft_collection_button['nft_button_url']);?>">
                                                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.0042 10C21.0042 15.52 16.5223 20 11 20C5.47768 20 0.995789 15.52 0.995789 10C0.995789 4.48 5.47768 0 11 0C16.5223 0 21.0042 4.48 21.0042 10Z" fill="#2081E2"/>
                                                    <path d="M5.93762 10.3401L5.97763 10.2801L8.57873 6.22008C8.61875 6.16008 8.69878 6.16008 8.7388 6.24008C9.17898 7.22008 9.53914 8.42008 9.37907 9.18008C9.29903 9.50008 9.09895 9.92008 8.85885 10.3001C8.83884 10.3601 8.79882 10.4201 8.75881 10.4601C8.7388 10.4801 8.71879 10.5001 8.67877 10.5001H5.99764C5.93762 10.4801 5.8976 10.4001 5.93762 10.3401Z" fill="white"/>
                                                    <path d="M17.5224 11.1V11.74C17.5224 11.78 17.5024 11.8 17.4624 11.82C17.2623 11.9 16.562 12.22 16.2819 12.62C15.5416 13.64 14.9813 15.1 13.7408 15.1H8.51859C6.67782 15.1 5.17719 13.6 5.17719 11.74V11.68C5.17719 11.64 5.2172 11.6 5.25722 11.6H8.19846C8.25848 11.6 8.2985 11.66 8.2985 11.7C8.27849 11.88 8.31851 12.08 8.39854 12.26C8.57862 12.62 8.93877 12.82 9.31893 12.82H10.7595V11.7H9.33894C9.2589 11.7 9.21889 11.62 9.25891 11.56C9.27891 11.54 9.29892 11.52 9.31893 11.48C9.45899 11.28 9.63906 11 9.83915 10.66C9.97921 10.44 10.0993 10.18 10.1993 9.94C10.2193 9.9 10.2393 9.86 10.2593 9.8C10.2793 9.72 10.3194 9.64 10.3394 9.58C10.3594 9.52 10.3794 9.46 10.3994 9.4C10.4394 9.2 10.4594 8.98 10.4594 8.74C10.4594 8.66 10.4594 8.56 10.4394 8.46C10.4394 8.36 10.4194 8.26 10.4194 8.16C10.4194 8.08 10.3994 7.98 10.3794 7.9C10.3594 7.76 10.3394 7.64 10.2993 7.5L10.2793 7.46C10.2593 7.38 10.2393 7.28 10.1993 7.2C10.1193 6.92 10.0192 6.64 9.91918 6.4C9.87917 6.3 9.83915 6.2 9.79913 6.1C9.73911 5.96 9.67908 5.82 9.61906 5.7C9.59905 5.64 9.55903 5.6 9.53902 5.54C9.51901 5.48 9.479 5.42 9.45899 5.36C9.43898 5.32 9.41897 5.28 9.39896 5.24L9.21889 4.92C9.19888 4.88 9.2389 4.82 9.27891 4.84L10.3794 5.14L10.5194 5.18L10.6795 5.22L10.7395 5.24V4.58C10.7395 4.26 10.9996 4 11.2998 4C11.4598 4 11.5999 4.06 11.6999 4.16C11.8 4.26 11.86 4.4 11.86 4.56V5.52L11.9801 5.56C11.9801 5.56 12.0001 5.56 12.0001 5.58C12.0201 5.6 12.0601 5.64 12.1201 5.68C12.1601 5.72 12.2001 5.76 12.2602 5.8C12.3602 5.88 12.5003 6 12.6403 6.12C12.6803 6.16 12.7204 6.18 12.7404 6.22C12.9204 6.38 13.1205 6.58 13.3206 6.8C13.3806 6.86 13.4207 6.92 13.4807 6.98C13.5407 7.04 13.5807 7.12 13.6408 7.18C13.7008 7.26 13.7808 7.36 13.8408 7.44C13.8608 7.48 13.9009 7.52 13.9209 7.58C14.0009 7.7 14.0609 7.82 14.141 7.94C14.161 8 14.201 8.06 14.221 8.12C14.301 8.28 14.3611 8.44 14.3811 8.62C14.4011 8.66 14.4011 8.7 14.4011 8.72C14.4211 8.76 14.4211 8.82 14.4211 8.88C14.4411 9.06 14.4211 9.22 14.4011 9.4C14.3811 9.48 14.3611 9.54 14.341 9.62C14.321 9.68 14.301 9.76 14.261 9.84C14.201 9.98 14.121 10.12 14.0409 10.26C14.0209 10.3 13.9809 10.36 13.9409 10.42C13.9009 10.48 13.8608 10.52 13.8408 10.58C13.8008 10.64 13.7408 10.7 13.7008 10.76C13.6608 10.82 13.6207 10.88 13.5607 10.94C13.5007 11.02 13.4207 11.1 13.3606 11.18C13.3206 11.22 13.2806 11.28 13.2206 11.32C13.1806 11.36 13.1405 11.42 13.0805 11.46C13.0205 11.52 12.9605 11.58 12.9004 11.62L12.7804 11.72C12.7604 11.74 12.7404 11.74 12.7204 11.74H11.84V12.86H12.9405C13.1806 12.86 13.4207 12.78 13.6007 12.62C13.6608 12.56 13.9409 12.32 14.281 11.96C14.301 11.94 14.301 11.94 14.321 11.94L17.3623 11.06C17.4824 11 17.5224 11.04 17.5224 11.1Z" fill="white"/>
                                                </svg>
                                                <?php echo esc_html($nft_collection_button['nft_button_name']);?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        <?php 
                                            if(!empty($nft_collection_button['nft_button_name_2']) && !empty($nft_collection_button['nft_button_url_2'])) :
                                        ?>
                                        <div class="open-btn">
                                            <a <?php if($nft_collection_button['url_target_enable_disable_2'] == 'enabled'){echo 'target="_blank"';} ?> href="<?php echo esc_url($nft_collection_button['nft_button_url_2']);?>">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M20.0084 10C20.0084 15.52 15.5265 20 10.0042 20C4.48189 20 0 15.52 0 10C0 4.48 4.48189 0 10.0042 0C15.5265 0 20.0084 4.48 20.0084 10Z" fill="#5865F2"/>
                                                    <g clip-path="url(#clip0_1809_9)">
                                                    <path d="M14.6474 5.84729C16.1634 8.02475 16.9121 10.4809 16.6322 13.3084C16.6311 13.3204 16.6247 13.3314 16.6146 13.3386C15.4666 14.1621 14.3542 14.6619 13.2575 14.9933C13.249 14.9958 13.2398 14.9957 13.2314 14.9929C13.2229 14.9901 13.2156 14.9848 13.2104 14.9777C12.957 14.6333 12.7268 14.2703 12.5251 13.889C12.5135 13.8665 12.5241 13.8395 12.5479 13.8306C12.9135 13.6961 13.2612 13.5348 13.5956 13.3438C13.622 13.3287 13.6236 13.2919 13.5993 13.2741C13.5283 13.2227 13.458 13.1686 13.3907 13.1145C13.3782 13.1045 13.3612 13.1025 13.3469 13.1093C11.1758 14.0886 8.79745 14.0886 6.60065 13.1093C6.58639 13.103 6.56944 13.1052 6.55719 13.115C6.49007 13.1691 6.4196 13.2227 6.34929 13.2741C6.32496 13.2919 6.32698 13.3287 6.35349 13.3438C6.68791 13.5312 7.03558 13.6961 7.40071 13.8313C7.42437 13.8402 7.43561 13.8665 7.42387 13.889C7.22654 14.2708 6.99632 14.6338 6.73825 14.9782C6.727 14.9922 6.70855 14.9985 6.6911 14.9933C5.59957 14.6619 4.48725 14.1621 3.33918 13.3386C3.32961 13.3314 3.32273 13.3199 3.32173 13.3079C3.08782 10.8621 3.56453 8.38569 5.30475 5.8468C5.30895 5.84008 5.31533 5.83483 5.32271 5.83172C6.17898 5.44783 7.09633 5.1654 8.05512 5.00411C8.07257 5.00149 8.09002 5.00935 8.09908 5.02443C8.21755 5.22933 8.35296 5.49209 8.44458 5.70682C9.45522 5.55601 10.4816 5.55601 11.5134 5.70682C11.605 5.49668 11.7358 5.22933 11.8537 5.02443C11.8579 5.01695 11.8644 5.01096 11.8723 5.00731C11.8802 5.00366 11.8891 5.00254 11.8977 5.00411C12.857 5.16589 13.7743 5.44832 14.6299 5.83172C14.6375 5.83483 14.6437 5.84008 14.6474 5.84729V5.84729ZM8.95837 10.4976C8.96894 9.77455 8.42931 9.17626 7.75191 9.17626C7.08005 9.17626 6.54561 9.7693 6.54561 10.4976C6.54561 11.2257 7.09062 11.8187 7.75191 11.8187C8.42394 11.8187 8.95837 11.2257 8.95837 10.4976V10.4976ZM13.4188 10.4976C13.4293 9.77455 12.8897 9.17626 12.2125 9.17626C11.5404 9.17626 11.006 9.7693 11.006 10.4976C11.006 11.2257 11.551 11.8187 12.2125 11.8187C12.8897 11.8187 13.4188 11.2257 13.4188 10.4976V10.4976Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_1809_9">
                                                    <rect width="14" height="10" fill="white" transform="translate(3 5)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <?php echo esc_html($nft_collection_button['nft_button_name_2']);?>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                        <?php 
                                            if(!empty($nft_collection_button['nft_button_name_3']) && !empty($nft_collection_button['nft_button_url_3'])) :
                                        ?>
                                        <div class="open-btn">
                                            <a <?php if($nft_collection_button['url_target_enable_disable_3'] == 'enabled'){echo 'target="_blank"';} ?> href="<?php echo esc_url($nft_collection_button['nft_button_url_3']);?>"><?php echo esc_html($nft_collection_button['nft_button_name_3']);?></a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();