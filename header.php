<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>

    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <!-- custom logo start -->
            <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    ?>
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"> <img
                    src="<?php echo $image[0]; ?>" alt=""></a>
            <!--  custom logo stop -->
        </div>
        <div class="hamburger-icon" id="icon">
            <div class="icon-1" id="a"></div>
            <div class="icon-2" id="b"></div>
            <div class="icon-3" id="c"></div>
            <div class="clear"></div>
        </div>
        <nav class="navbar" id="nav">

            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'menu_class'        => 'menu',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>


        </nav>
        <div class="dark-blue" id="blue"></div>


    </header>

    <script>
    var icon = document.getElementById("icon");
    var icon1 = document.getElementById("a");
    var icon2 = document.getElementById("b");
    var icon3 = document.getElementById("c");
    var nav = document.getElementById('nav');
    var blue = document.getElementById("blue");
    var burgerBtn = document.getElementById("blue");

    icon.addEventListener('click', function() {
        icon1.classList.toggle('a');
        icon2.classList.toggle('c');
        icon3.classList.toggle('b');
        nav.classList.toggle('show');
        blue.classList.toggle('slide');
        icon.classList.toggle('fixed');
    });
    </script>