<?php

/**
 * The main template file
 *
 * Template Name: Portfolio two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xoon
 * @since 1.0.0
 * 
 */
?>
<?php get_header() ?>

<?php
get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>
<div class="portfolio-banner mr-120 position-relative">
    <div class="container position-relative">
        <!-- tab-start -->
        <div class="profile-tab-buttons">
            <i class="bi bi-filter"></i>
            <ul class="nav nav-pills mb-3 d-flex flex-column" id="pills-tab" role="tablist">
                <?php $portfolio_cat = get_terms('xoon-portfolio-category'); ?>
                <?php if (!empty($portfolio_cat)) : ?>
                    <?php foreach ($portfolio_cat as $key => $cat) : ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php echo esc_attr(($key == 0)) ? "active" : ""; ?>" id="pills-<?php echo esc_attr($cat->slug) ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-<?php echo esc_attr($cat->slug) ?>" type="button" role="tab" aria-controls="pills-<?php echo esc_attr($cat->slug) ?>" aria-selected="true"><?php echo Egns_Helpers::egns_translate($cat->name) ?></button>
                        </li>
                    <?php $key++;
                    endforeach; ?>
                <?php endif ?>
            </ul>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <?php if (!empty($portfolio_cat)) : ?>
                <?php foreach ($portfolio_cat as $key => $value) : ?>
                    <div class="tab-pane fade <?php echo esc_attr(($key == 0)) ? "show active" : ""; ?>" id="pills-<?php echo esc_attr($value->slug) ?>" role="tabpanel" aria-labelledby="pills-<?php echo esc_attr($value->slug) ?>-tab">
                        <div class="row g-4 justify-content-center">

                            <?php
                            $portfolio_cat = get_posts(
                                array(
                                    'showposts' => 9, //add -1 if you want to show all posts
                                    'post_type' => 'xoon-portfolio',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'xoon-portfolio-category',
                                            'field' => 'slug',
                                            'terms' => $value->slug //pass your term name here
                                        )
                                    )
                                )
                            );
                            ?>
                            <?php foreach ($portfolio_cat as $items) : ?>

                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="magnetic-wrap">
                                        <div class="portfolio-banner-item magnetic-item">
                                            <?php echo get_the_post_thumbnail($items->ID) ?>
                                            <div class="portfilio-img-overlay">
                                                <h2><a data-cursor="View<br>Details" class="not-hide-cursor" href="<?php the_permalink($items->ID) ?>"><?php echo Egns_Helpers::egns_translate($items->post_title) ?></a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>

                        </div>
                    </div>
                <?php $key++;
                endforeach ?>
            <?php endif ?>
        </div>
        <!-- tab-end -->
    </div>
</div>

<?php get_footer(); ?>