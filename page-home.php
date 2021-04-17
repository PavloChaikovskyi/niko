<?php
/*
 * Template Name: Home Template
 */
get_header();
?>
<div class="top-space"></div>


<section class="welcome">
    <img src=""
        alt=""
        class="welcome__img">
</section>

<section class="intro">
    <div class="container">
        <div class="row mx-0">
            <div class="col-md-6 intro__content">
                <h1 class="intro__title"></h1>
                <h2 class="intro__subtitle"></h2>
                <a href=""
                    class="btn intro__btn"></a>
            </div>
            <div class="col-md-6 intro__slider">
                <div class="intro__slider">
                    <?php 
            foreach($introSlider as $slide) { ?>
                    <a href=""
                        class="slider__item">
                        <img src=""
                            alt=""
                            class="slider__img">

                    </a>

                    <?php } ?>


                    <?php ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container small">

        <h2 class="section__title pruducts__title dark"></h2>
        <div class="row mx-0">
            <?php 
            foreach($introSlider as $slide) { ?>
            <a href=""
                class="product__card col-md-4">
                <img src=""
                    alt=""
                    class="product__icon">
                <img src=""
                    alt=""
                    class="product__icon hover">
                <p class="product__name"></p>
                <p class="product__description hover"></p>
            </a>

            <?php } ?>
        </div>
    </div>
</section>

<section class="shops">
    <div class="container">
        <div class="row mx-0">
            <?php 
            foreach($introSlider as $slide) { ?>
            <a href=""
                class="shop__link col-md-3">
                <img src=""
                    alt=""
                    class="shop__icon">
            </a>

            <?php } ?>
        </div>
    </div>
</section>

<section class="b2b">
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-md-5">
                <img src=""
                    alt=""
                    class="b2b__img">
            </div>
            <div class="col-md-7">
                <h2 class="b2b__title"></h2>
                <div class="b2b__subtitle"></div>
                <div class="b2b__form">

                </div>
            </div>
        </div>
    </div>
</section>

<section class="prepearing">
    <div class="container small">
        <h2 class="section__title prepearing__title white"></h2>
        <h3 class="section__subtitle prepearing__subtitle"></h3>
        <div class="row mx-0 prepearing__steps">
            <?php 
            foreach($introSlider as $slide) { ?>
            <a href=""
                class="step__link col-md-4">
                <img src=""
                    alt=""
                    class="step__icon">
                <p class="step__name"></p>
            </a>

            <?php } ?>
        </div>
    </div>
</section>

<section class="brands">
    <div class="container-fluid">
        <h2 class="section__title brands__title black"></h2>
        <div class="brands__slider">
            <?php 
            foreach($introSlider as $slide) { ?>
            <a href=""
                class="brand__link"><img src=""
                    alt=""
                    class="brand__logo"></a>
            <?php } ?>
        </div>
    </div>
</section>

<section class="about">
    <div class="container-fluid">
        <h2 class="section__title about__title white"></h2>
        <h3 class="section__subtitle about__subtitle white"></h3>
        <div class="row mx-0">
            <div class="col-md-7 about__content">
                <h3 class="content__title"></h3>
                <p class="content__text"></p>
            </div>
            <div class="col-md-5">
                <img src=""
                    alt=""
                    class="about__img">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>