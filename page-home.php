<?php
/*
 * Template Name: Home Template
 */
get_header();
?>

<div class="top-space"></div>

<?php 
    $introImageDesktop = get_field('intro_zdjecie_w_tle');
?>


<section class="intro"
    style="background-image: url(<?php echo $introImageDesktop ?>)">
    <div class="intro__banner banner">
        <h2 class="banner__text top"><?php the_field('intro_tekst_top') ?></h2>
        <h2 class="banner__text bottom"><?php the_field('intro_tekst_bottom') ?></h2>
        <a href="<?php the_field('intro_przycisk_link') ?>"
            class="banner__btn btn__circle">
            <?php include 'assets/src/img/icons/btn_arrow-right.php'; ?>
            <span><?php the_field('napis_zobacz', 'options') ?></span>
        </a>
    </div>
</section>





<section class="info right">
    <div class="container right">
        <h2 class="section__title info__title title right"><?php the_field('info_right_tytul') ?></h2>
        <div class="info__content section__content content right"><?php the_field('info_right_tresc') ?></div>
    </div>
</section>





<section class="new new__products slider">
    <div class="container">
        <h2 class="section__title slider__title">nowośći<?php the_field('') ?></h2>

        <div class="slider slider__news">

            <?php
                $args = array(
                    'post_type' => 'product',
                    'product_cat' => 'nowosci',
                    'orderby' => 'date',
                    'posts_per_page' => -1,
                );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) : $i=0;
                while ( $loop->have_posts() ) : $loop->the_post(); $i++; 
                global $product; 
                $pid = $product->get_id();
                $currency = get_woocommerce_currency_symbol();
                $add_to_wishlist = do_shortcode('[yith_wcwl_add_to_wishlist product_id=' . $pid . ']' );
            ?>


            <a href="<?php echo get_permalink( $loop->post->ID ) ?>"
                class="product__card product"
                target="_blank">
                <div class="product__img"><?php echo $product->get_image('full'); ?>
                    <div class="product__options">
                        <div class="product__sizes"></div>
                        <div class="product__colors"></div>
                        <div class="product__wishlist">
                        </div>
                    </div>
                </div>
                <div class="product__info info">
                    <p class="product__name"><?php the_title(); ?></p>
                    <p class="product__price"><?php echo $product->get_price();?><?php echo $currency; ?></p>
                </div>
            </a>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>



    </div>
</section>


<script>
$(document).ready(function() {
    $('.slider__news').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });
});
</script>

<!-- 
<section class="info-image left">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image__wrap">
                <img src="<?php the_field('home_info_image_left_zdjecie') ?>"
                    alt=""
                    class="info-image__img">
                <img src="<?php the_field('home_info_image_left_zdjecie_hover') ?>"
                    alt=""
                    class="info-image__img">
            </div>
            <div class="col-md-6">
                <h2 class="section__title info-image-title"><?php the_field('home_info_image_left_tytul') ?></h2>
                <div class="info-image__content">
                    <?php the_field('home_info_image_left_tresc') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info-image right">
    <div class="container">
        <div class="row">
            <div class="col-md-6 image__wrap">
                <img src="<?php the_field('info_image_right_zdjecie') ?>"
                    alt=""
                    class="info-image__img">
                <img src="<?php the_field('info_image_right_zdjecie_hover') ?>"
                    alt=""
                    class="info-image__img">
            </div>
            <div class="col-md-6">
                <h2 class="section__title info-image-title"><?php the_field('info_image_right_tytul') ?></h2>
                <div class="info-image__content">
                    <?php the_field('info_image_right_tresc') ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="new new__products">
    <div class="container">
        <div class="product__card card">
            <div class="card__img"></div>
            <div class="card__info info">
                <p class="product__name"></p>
                <p class="product__price"></p>
            </div>
        </div>
    </div>
</section>


-->
<section class="info left">
    <div class="container left">
        <h2 class="section__title info__title title left"><?php the_field('info_left_tytul') ?></h2>
        <div class="info__content section__content content"><?php the_field('info_left_tresc') ?></div>
    </div>
</section>

<!-- <section
    class="info-cards">
    <div class="container">
        <div class="info__card card">
            <img src="<?php the_sub_field('info_card_icon') ?>"
                class="card__icon">
            <p class="card__name"><?php the_sub_field('info_left_tresc') ?></p>
        </div>
        </section>

        <section class="subscription">
            <div class="row mx-0">
                <div class="form">

                </div>
                <div class="instagram">

                </div>
            </div>
        </section> -->

<?php// get_template_part( 'template-parts/page/home/home', 'contact' ); ?>
<?php
get_footer();