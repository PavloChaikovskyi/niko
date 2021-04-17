<div class="bg-gradient-hero">
    <div class="container section-hero h-100">
        <h1 class="section-hero__slogan-wrapper">
            <?php
    if(get_field('hero-slogan_1'))
      {
        echo '<span class="section-hero__slogan--1">' . get_field('hero-slogan_1') . '</span>';
      }
  ?>

            <?php
    if(get_field('hero-slogan_2'))
      {
        echo '<span class="section-hero__slogan--2">' . get_field('hero-slogan_2') . '</span>';
      }
  ?>
        </h1>
        <?php
    if(get_field('hero-description'))
      {
        echo '<p class="section-hero__description d-none d-lg-block">' . get_field('hero-description') . '</p>';
      }
  ?>
        <?php 
    $link = get_field('hero-button');
    if( $link ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="custom-btn custom-btn--outlined section-hero__button d-none d-lg-inline-flex"
            role="button"
            href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/home/hero-img.svg"
            class="section-hero__image"
            alt="avatar" />

        <?php 
    $link = get_field('hero-button');
    if( $link ): 
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="custom-btn custom-btn section-hero__button d-lg-none"
            role="button"
            href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

        <div class="arrow-scroll d-lg-none">
            <span></span>
            <span></span>
        </div>


    </div>
</div>