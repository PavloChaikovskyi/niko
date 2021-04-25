<?php
/*
 * Template Name: Home Template
 */
get_header();
?>
<!-- <div class="top-space"></div> -->

<?php the_field('') ?>

<!-- <section class="welcome">
    <img src="<?php// the_field('big_logo') ?>"
        alt=""
        class="welcome__img">
</section> -->

<section id="intro"
    class="intro">
    <div class="container">
        <div class="row mx-0">
            <div class="col-md-6 intro__content">
                <h1 class="intro__title"><?php the_field('intro_title') ?></h1>
                <h2 class="intro__subtitle"><?php the_field('intro_subtitle') ?></h2>
                <a href="<?php the_field('intro_button_linkc') ?>"
                    class="btn intro__btn"><?php the_field('intro_button_text') ?></a>
            </div>
            <?php 
            $introSlider = get_field('intro_slider');
            if( $introSlider  ) { ?>
            <div class="col-md-6">
                <div class="intro__slider">
                    <?php foreach($introSlider as $slide) { 
                        $slideLink = ["intro_slider_link"]; 
                        $slideImage = $slide["intro_slider_image"]; 
                        $sliderText = $slide["intro_slider_text"];  ?>
                    <a href="<?php echo $slideLink ?>"
                        class="slider__item">
                        <img src="<?php echo $slideImage ?>"
                            alt=""
                            class="slider__img">
                    </a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>


        </div>
    </div>
</section>

<script>
$('.intro__slider').slick({
    arrows: false,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: false,
    autoplay: true,
});
</script>

<section class="products">
    <div class="container small">

        <h2 class="section__title pruducts__title dark"><?php the_field('our_products_title') ?></h2>
        <div class="row mx-0">

            <?php 
            $products= get_field('products');
            if( $products ) { ?>
            <?php foreach($products as $product) { 
                    $productLink = $product["product_link"];
                    $productIcon = $product["product_icon"];
                    $productIconHover = $product["product_hover_image"];
                    $productName = $product["product_name"];
                    $productDescription = $product["product_hover_description"];  ?>
            <a href="<?php echo $productLink ?>"
                class="product__card col-md-4">
                <img src="<?php echo $productIcon ?>"
                    alt=""
                    class="product__icon">
                <img src="<?php echo $productIconHover ?>"
                    alt=""
                    class="product__icon hover">
                <p class="product__name"><?php echo $productName ?></p>
                <p class="product__description hover"><?php echo $productDescription ?></p>
            </a>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="shops">
    <div class="container">
        <h2 class="section__title shops__title dark"><?php the_field('our_shops_title') ?></h2>
        <div class="row mx-0">
            <?php 
            $shops = get_field('our_shops');
            if( $shops ) { ?>
            <?php foreach($shops as $shop) {  
                $shopIcon = $shop["shop_icon_in_color"];
                $shopLink = $shop["shop_link"];
            ?>
            <a href="<?php echo $shopLink  ?>"
                class="shop__link col-md-3">
                <img src="<?php echo $shopIcon ?>"
                    alt=""
                    class="shop__icon">
            </a>

            <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="b2b">
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-md-5">
                <img src="<?php the_field('b2b_image') ?>"
                    alt=""
                    class="b2b__img">
            </div>
            <div class="col-md-7 form">
                <h2 class="b2b__title"><?php the_field('b2b_title') ?></h2>
                <div class="b2b__subtitle"><?php the_field('b2b_description') ?></div>
                <div class="b2b__form">
                    <?php echo do_shortcode( '[contact-form-7 id="28" title="Контактная форма 1"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="prepearing">
    <div class="container small">
        <h2 class="section__title prepearing__title white"><?php the_field('prepearing_title') ?></h2>
        <h3 class="section__subtitle prepearing__subtitle"><?php the_field('prepearing_subtitle') ?></h3>
        <div class="row mx-0 prepearing__steps">
            <?php 
            $steps = get_field('prepearing_steps'); 
            if ( $steps ) {
            foreach($steps as $step) { 
                $stepIcon = $step['step_icon'];
                $stepName = $step['step_name'];
                $stepAsLink = $step['does_this_step_is_link'];
                $stepLink = $step['step_link'];
            
            if ( $stepAsLink ) { ?>
            <a href="<?php echo $stepLink  ?>"
                class="step__link col-md-4">
                <?php } else { ?>
                <a class="step__link col-md-4">
                    <?php } ?>
                    <img src="<?php echo $stepIcon  ?>"
                        alt=""
                        class="step__icon">
                    <p class="step__name"><?php echo $stepName  ?></p>
                </a>

                <?php } ?><?php } ?>
        </div>
    </div>
</section>


<section class="brands">
    <div class="container-fluid">
        <h2 class="section__title brands__title black"><?php the_field('brands_title') ?></h2>
        <div class="brands__slider">
            <?php 
            $brands = get_field('brands_slider');
            if ( $brands ) { 
            foreach($brands as $brand) { 
                $brandLogo =  $brand['brand_logo'];
                $brandLink =  $brand['brand_link'];
            ?>
            <a href="<?php echo $brandLink  ?>"
                class="brand__link"><img src="<?php echo $brandLogo ?>"
                    alt=""
                    class="brand__logo"></a>
            <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<script>
$('.brands__slider').slick({
    arrows: true,
    adaptiveHeight: true,
    // dots: true,
    // speed: 300,
    slidesToShow: 4,
    adaptiveHeight: false,
    autoplay: true,
});
</script>


<section class="about">
    <div class="container-fluid">
        <h2 class="section__title about__title white"><?php the_field('about_us_title') ?></h2>
        <h3 class="section__subtitle about__subtitle white"><?php the_field('about_us_subtitle') ?></h3>
        <div class="row mx-0">
            <div class="col-md-7 about__content">
                <h3 class="content__title"><?php the_field('about_content_title') ?></h3>
                <p class="content__text"><?php the_field('about_content_description') ?></p>
            </div>
            <div class="col-md-5">
                <img src="<?php the_field('about_img') ?>"
                    alt=""
                    class="about__img">
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>