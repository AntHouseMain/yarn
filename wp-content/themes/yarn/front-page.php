<?php get_header(); ?>
<section class="uk-header-slider uk-visible@s">
    <div class="uk-position-relative uk-visible-toggle top-slider-home-page"
         uk-slideshow="animation: push; min-height: 300; max-height: 600">
        <div class="uk-position-center uk-position-small uk-text-center uk-light uk-information-slide">
            <h1 class="uk-margin-remove"><?php the_field('title_slider'); ?></h1>
            <p>
                <?php the_field('paragraph_slider'); ?>
            </p>
            <?php $link_shop = get_field('shop_link');
            if ($link_shop): ?>
                <a class="uk-margin-medium-top" href="<?php echo $link_shop['url']; ?>">
                    <?php _e('Перейти к товару', 'yarn'); ?>
                </a>
            <?php endif; ?>
        </div>
        <ul class="uk-slideshow-items">
            <?php if (have_rows('slider_top_home')): ?>
                <?php while (have_rows('slider_top_home')): the_row();
                    $top_home_slide = get_sub_field('top_home_slide');
                    ?>
                    <?php
                    if (!empty($top_home_slide)): ?>
                        <li>
                            <img src="<?php echo $top_home_slide['url']; ?>" alt="<?php echo $top_home_slide['alt']; ?>"
                                 uk-cover>
                        </li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="uk-section uk-section-popular">
    <div class="uk-container-expand">
        <div class="uk-margin-large-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase">
                    <span><?php _e(' популярное ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <?php $args = array(
        'taxonomy' => 'product_cat',
        'number' => $number,
        'name' => $orderby,
        'ASC' => $order,
        'hide_empty' => $hide_empty,
        'include' => $ids,
    );
    $product_categories = get_terms('product_cat', $args);
    $cat_array = array(0, 1, 2);

    ?>
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-3@s">
                <div class="" uk-grid>
                    <div class="uk-width-1-1@s">
                        <div class="uk-width-1-1@s uk-position-relative">
                            <div class="uk-text-center">
                                <div class="uk-popular-small-img uk-inline-clip uk-transition-toggle">
                                    <?php $catTerm = $product_categories[$cat_array[0]];

                                    $thumbnail_id = get_woocommerce_term_meta($catTerm->term_id, 'thumbnail_id', true);

                                    // get the image URL
                                    $image = wp_get_attachment_url($thumbnail_id); ?>
                                    <img src="<?php echo $image; ?>" alt="">
                                    <div
                                        class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"
                                           class="uk-position-cover"></a>
                                        <p class="uk-h4 uk-margin-remove">Смотреть</p>
                                    </div>
                                </div>
                                <p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
                                    <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"><?php echo $catTerm->name; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s">
                        <div class="uk-width-1-1@s uk-position-relative">
                            <div class="uk-text-center">
                                <div class="uk-popular-small-img uk-inline-clip uk-transition-toggle">

                                    <?php $catTerm = $product_categories[$cat_array[1]];

                                    $thumbnail_id = get_woocommerce_term_meta($catTerm->term_id, 'thumbnail_id', true);

                                    // get the image URL
                                    $image = wp_get_attachment_url($thumbnail_id); ?>
                                    <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"><img
                                            src="<?php echo $image; ?>" alt=""></a>

                                    <div
                                        class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <a href="#" class="uk-position-cover"></a>
                                        <p class="uk-h4 uk-margin-remove">Смотреть</p>
                                    </div>
                                </div>
                                <p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
                                    <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"><?php echo $catTerm->name; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-3@s">
                <div class="uk-width-1-1@s uk-position-relative">
                    <div class="uk-text-center">
                        <div class="uk-inline-clip uk-transition-toggle uk-lg-block">

                            <?php $catTerm = $product_categories[$cat_array[2]];

                            $thumbnail_id = get_woocommerce_term_meta($catTerm->term_id, 'thumbnail_id', true);

                            // get the image URL
                            $image = wp_get_attachment_url($thumbnail_id); ?>
                            <img src="<?php echo $image; ?>" alt="">
                            <div
                                class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"
                                   class="uk-position-cover"></a>
                                <p class="uk-h4 uk-margin-remove">Смотреть</p>
                            </div>
                        </div>
                        <p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
                            <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"><?php echo $catTerm->name; ?>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="uk-section uk-section-about-us-front-page">
    <div class="uk-container-expand">
        <div class="uk-margin-large-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
                    <span><?php _e('  о нас  ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container-small uk-text-center">
        <?php the_field('about_us_home'); ?>
        <?php $link = get_field('link_page');
        if ($link): ?>
            <a href="<?php echo $link['url']; ?>">
                <?php _e(' Узнать больше ', 'yarn'); ?>
            </a>
        <?php endif; ?>
    </div>
</section>

<section class="uk-section uk-section-our-yarn">
    <div class="uk-container-expand">
        <div class="uk-margin-medium-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
                    <span><?php _e('  наша пряжа  ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div uk-grid>
            <?php $product_categories = array_reverse($product_categories);
            for ($i = 0; $i < 6; $i++) { ?>
                <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
                    <div class="uk-text-center  uk-position-relative">
                        <div class="uk-image-wrap uk-inline-clip uk-transition-toggle">
                            <?php $catTerm = $product_categories[$i];
                            $thumbnail_id = get_woocommerce_term_meta($catTerm->term_id, 'thumbnail_id', true);
                            // get the image URL
                            $image = wp_get_attachment_url($thumbnail_id); ?>
                            <img src="<?php echo $image; ?>" alt="">
                            <div
                                class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <a href="<?php echo(get_term_link($catTerm->term_id)); ?>"
                                   class="uk-position-cover"></a>
                                <p class="uk-h4 uk-margin-remove">Смотреть</p>
                            </div>
                        </div>
                        <p class="uk-popular-title uk-margin-small-top uk-text-uppercase"><a
                                href="<?php echo(get_term_link($catTerm->term_id)); ?>"><?php echo $catTerm->name; ?>
                            </a>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div uk-grid>
            <div class="uk-margin-medium-top uk-width-1-1@m uk-text-center">
                <?php if ($link_shop): ?>
                    <a class="uk-catalog-front-page"
                       href="<?php echo $link_shop['url']; ?>"><?php _e(' Каталог товаров ', 'yarn'); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="uk-section uk-section-reviews">
    <div class="uk-container-expand">
        <div class="uk-margin-large-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
                    <span><?php _e('  отзывы  ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-reviews-slider">
                    <?php if (have_rows('all_reviews')): ?>
                        <?php while (have_rows('all_reviews')): the_row();
                            $reviews_image = get_sub_field('reviews_image');
                            ?>
                            <div class="uk-text-center">
                                <figure>
                                    <?php if (!empty($reviews_image)): ?>
                                        <img class="uk-margin-auto" src="<?php echo $reviews_image['url']; ?>"
                                             alt="<?php echo $reviews_image['alt']; ?>">
                                    <?php endif; ?>
                                    <?php
                                    $reviews_description_trim = substr(
                                        get_sub_field('reviews_description'), 0, 700);
                                    ?>
                                    <figcaption class="uk-margin-medium-top">
                                        <?php echo $reviews_description_trim; ?>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section uk-section-questions">
    <div class="uk-container-expand">
        <div class="uk-margin-medium-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
                    <span><?php _e('  есть вопросы?  ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container-small-600">
        <div uk-grid>
            <div class="uk-width-1-1@m uk-text-center uk-margin-medium-bottom">
                <p><?php _e(' Заполните контактную форму и мы обязательно на них ответим ', 'yarn'); ?></p>
            </div>
        </div>
        <div class="uk-cntact-form-question">
            <?php echo do_shortcode('[contact-form-7 id="39" title="questions"]'); ?>
        </div>
    </div>
</section>
<section class="uk-section-reviews">
    <div class="uk-container-expand">
        <div class="uk-margin-large-bottom" uk-grid>
            <div class="uk-width-1-1 uk-text-center">
                <h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
                    <span><?php _e('  наши партнеры  ', 'yarn'); ?></span>
                </h2>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-1">
                <div class="uk-position-relative uk-visible-toggle uk-light"
                     uk-slider="autoplay: true; autoplay-interval: 4000">
                    <?php if (have_rows('our_partners')): ?>
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-5@m uk-text-center uk-grid">
                            <?php while (have_rows('our_partners')): the_row(); ?>
                                <li>
                                    <?php $our_partners_image = get_sub_field('our_partners_image');
                                    if (!empty($our_partners_image)): ?>
                                        <img src="<?php echo $our_partners_image['sizes']['logo_partner']; ?>"
                                             alt="<?php echo $our_partners_image['alt']; ?>"/>
                                    <?php endif; ?>
                                    <h3 class="uk-h5 uk-color-black uk-margin-small-top"><?php the_sub_field('our_partners_name'); ?></h3>
                                </li>
                            <?php endwhile; ?>
                        </ul>

                    <?php endif; ?>
                    <ul class="uk-slider-nav uk-dotnav uk-dotnav-custom uk-flex-center uk-margin uk-position-small"></ul>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php get_footer(); ?>
