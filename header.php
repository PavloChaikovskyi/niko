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
            <?php get_template_part('template-parts/header/header', 'home'); ?>
        </header>