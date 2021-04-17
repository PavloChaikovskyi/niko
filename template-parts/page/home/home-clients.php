<div class="container-fluid home-section__container section-partners">
    <div class="container p-0">
        <h3 class="home-section__title d-lg-none">Our <span class="text-secondary">Clients</span></h3>
        <div class="row row-cols-md-4 mx-0 section-partners__item-wrapper">
            <?php 
      $posts = get_posts(array(
        'posts_per_page'	=> -1,
        'post_type'			=> 'clients'
      ));
      if( $posts ): ?>
            <?php foreach( $posts as $post ): 
            setup_postdata( $post );
            $link = get_field('commons-services-general-link');
            ?>
            <div class="col section-partners__item">
                <img src="<?php the_field('home-clients-image'); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>"
                    class="section-partners__item-img" />
            </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>