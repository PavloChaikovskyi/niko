<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        <link rel="profile"
            href="http://gmpg.org/xfn/11">
        <title><?php wp_title(); ?></title>

        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-lg navbar-light  navbar-toggleable-md navbar-inverse fixed-top bg-inverse amber">
                <div class="container">
                    <!-- custom logo start -->
                    <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    ?>
                    <a class="navbar-brand"
                        href="<?php echo esc_url(home_url('/')); ?>"
                        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                        rel="home"> <img src="<?php echo $image[0]; ?>"
                            alt=""></a>
                    <!--  custom logo stop -->

                    <!-- Collapse button burger menu Start-->
                    <button class="navbar-toggler first-button"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNavDropdown"
                        aria-controls="navbarSupportedContent20"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <div class="animated-icon1"><span></span><span></span><span></span></div>
                    </button>
                    <!-- Collapse button burger menu End-->


                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>',
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse justify-content-end',
                        'container_id'      => 'navbarNavDropdown',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>

                </div>
            </nav>
        </header>