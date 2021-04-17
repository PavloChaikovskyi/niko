<div class="container-fluid section-industries">
    <div class="row">
        <div class="col-lg-7 p-0 order-1 order-lg-0">
            <?php if( get_field('industries-image') ): ?>
            <img src="<?php the_field('industries-image'); ?>"
                class="section-industries__image"
                alt="industry" />
            <?php endif; ?>
        </div>
        <div class="col-lg-7 offset-lg-1 order-0 order-lg-1 section-industries__wrapper">
            <h3 class="home-section__title"><?php the_field('industries-title') ?></h3>
            <?php if( get_field('industries-description') ): ?>
            <?php the_field('industries-description'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>