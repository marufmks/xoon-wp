<?php get_header() ?>

<?php
get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>

<div class="our-portfilio-area pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filters filter-button-group">
                    <ul class="d-flex justify-content-lg-start justify-content-center flex-wrap">
                        <li class="active" data-filter="*"><?php echo esc_html('All Photo') ?></li>
                        <?php $portfolio_menus = get_terms('xoon-portfolio-category');
                        if (!empty($portfolio_menus)) {
                        ?>
                            <?php foreach ($portfolio_menus as $cat) : ?>
                                <li data-filter=".<?php echo esc_attr($cat->slug) ?>"><?php echo Egns_Helpers::egns_translate($cat->name) ?></li>
                        <?php endforeach;
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row grid g-4 mb-70">
            <?php
            $query = new \WP_Query(
                array(
                    'post_type'      => 'xoon-portfolio',
                    'posts_per_page' => -1,
                )
            );
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 grid-item 
                        <?php
                        $portfolio_items = get_the_terms(get_the_ID(), 'xoon-portfolio-category');
                        if (!empty($portfolio_items)) {
                            foreach ($portfolio_items as $portfolio_item) {
                                echo esc_attr($portfolio_item->slug);
                            }
                        }
                        ?>">
                        <div class="portfolio-img magnetic-item">
                            <?php the_post_thumbnail() ?>
                            <div class="overlay">
                                <div class="icon">
                                    <a data-cursor="View<br>Details" href="<?php the_permalink() ?>"><i class="bi bi-plus"></i></a>
                                </div>
                                <div class="content">
                                    <h4><a data-cursor="View<br>Details" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                                    <span><?php echo esc_html__('Date: ', 'xoon') ?><?php echo get_the_date('j F Y') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>