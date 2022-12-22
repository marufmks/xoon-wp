<div class="portfolio-details-pages pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="title">
                    <h3><?php the_title() ?></h3>
                    <?php the_content() ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="client-info">
                    <?php $booking_form_meta = get_post_meta(get_the_ID(), 'portfolio_meta_info', true); ?>
                    <?php if (!empty($booking_form_meta['client_name'])) : ?>
                        <p><span><?php echo esc_html__('Client :','xoon') ?></span><?php echo Egns_Helpers::egns_translate( $booking_form_meta['client_name'] ) ?></p>
                    <?php endif ?>

                    <?php
                        $post_cat = get_the_terms(get_the_ID(), 'xoon-portfolio-category');
                        $cat_name = $post_cat[0]->name;
                    ?>

                    <?php if (!empty($post_cat)) : ?>
                        <p><span><?php echo esc_html__('Categories :','xoon') ?></span>
                            <?php echo Egns_Helpers::egns_translate($cat_name) ?>
                        </p>
                    <?php endif ?>

                    <?php if (!empty($booking_form_meta['venu_name'])) : ?>
                        <p><span><?php echo esc_html__('Venue :','xoon') ?></span><?php echo Egns_Helpers::egns_translate($booking_form_meta['venu_name']) ?></p>
                    <?php endif ?>
                    <p><span><?php echo esc_html__('Date :','xoon') ?></span><?php echo get_the_date('M j Y') ?></p>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <?php
            $get_gallery_image = egens_core()->get_custom_meta_value(get_the_ID(), 'xoon_portfolio_gallery', 'gallery_images');
            $makeImageIdToArray = explode(',', $get_gallery_image);
            ?>
            <?php foreach ($makeImageIdToArray as $gallery_single_photo) : ?>
                <div class="col-lg-4 col-sm-6 col-12">
                    <a href="<?php echo wp_get_attachment_image_url($gallery_single_photo, $size='full') ?>" class="portfolio-img" data-fancybox="gallery">
                        <img class="img-fluid" src="<?php echo wp_get_attachment_image_url($gallery_single_photo, $size='full') ?>" alt="<?php echo esc_attr__('image', 'xoon') ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- ========== Booking Area Start============= -->
<div class="home1-booking-area mb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php $booking_form_meta = get_post_meta(get_the_ID(), 'portfolio_booking_form', true); ?>
                <?php if (!empty($booking_form_meta['booking_form_shortcode'])) : ?>
                    <?php echo do_shortcode($booking_form_meta['booking_form_shortcode']) ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>