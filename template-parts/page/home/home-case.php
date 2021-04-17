<?php 
$title = get_field( "commons-titles-home-case", 703 );
?>

<div class="container home-section__container section-case">
    <h3 class="home-section__title stripes"><?php echo $title ?></h3>

    <div id="caseSlider"
        class="section-case__carousel">
        <?php 
    $posts = get_posts(array(
      'posts_per_page'	=> 6,
      'post_type'			=> 'case-study'
    ));
    if( $posts ): ?>
        <?php foreach( $posts as $post ): 
      setup_postdata( $post ); ?>
        <div class="col mb-5 p-0">
            <div class="card h-100 shadow section-case__item">
                <a href="<?php the_permalink() ?>">
                    <div
                        class="section-case__header section-case__header--<?php the_field('case-study-header-color') ?> text-center">
                        <img src="<?php the_field('case-image'); ?>"
                            class="section-case__image"
                            alt="case study - image">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title section-case__title"><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <div class="row row-cols-1 row-cols-md-3 d-none d-lg-flex">
        <?php 
    $posts = get_posts(array(
      'posts_per_page'	=> 6,
      'post_type'			=> 'case-study'
    ));
    if( $posts ): ?>
        <?php foreach( $posts as $post ): 
      setup_postdata( $post ); ?>
        <div class="col mb-5">
            <div class="card h-100 shadow section-case__item">
                <a href="<?php the_permalink() ?>">
                    <div
                        class="section-case__header section-case__header--<?php the_field('case-study-header-color') ?> text-center">
                        <img src="<?php the_field('case-image'); ?>"
                            class="section-case__image"
                            alt="case study - image">
                        <?php 
                $terms = get_field('case-tags');
                if( $terms ): ?>
                        <ul class="section-case__tags list-inline">
                            <?php foreach( $terms as $term ): ?>
                            <li class="list-inline-item"><?php echo esc_html( $term->name ); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title section-case__title"><?php the_title(); ?></h5>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <div class="container section-case__button-wrapper d-none d-lg-flex">
        <a class="custom-btn custom-btn--outlined section-case__button"
            role="button"
            href="/portfolio">See all case studies</a>
    </div>
</div>