<div class="container home-section__container">
    <h3 class="home-section__title who"><?php the_field('lets-meet-section-title'); ?></h3>
</div>
<div class="container-fluid section-meet">
    <div class="row">
        <div class="col-15 col-lg-5 p-0 order-lg-1 offset-lg-1">
            <?php if( get_field('lets-meet-text') ): ?>
            <p class="section-meet__text collapsible collapse hide"><?php the_field('lets-meet-text'); ?></p>
            <?php endif; ?>
        </div>
        <div class="col-15 col-lg-6 p-0 order-lg-0">
            <?php if( get_field('lets-meet-image') ): ?>
            <img src="<?php the_field('lets-meet-image'); ?>"
                class="section-meet__image"
                alt="meet" />
            <?php endif; ?>
        </div>
    </div>
</div>