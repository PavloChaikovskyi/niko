<div class="section-clutch container-fluid p-0 home-section__container">
    <div class="container section-clutch__wrapper">
        <h3 class="section-clutch__title order-0 order-lg-0">Find us on <span class="text-secondary">Clutch</span></h3>
        <?php if( get_field('clutch-description') ): ?>
        <p class="section-clutch__description order-2 order-lg-1"><?php the_field('clutch-description'); ?></p>
        <?php endif; ?>
        <?php if( get_field('clutch-image') ): ?>
        <img src="<?php the_field('clutch-image'); ?>"
            class="section-clutch__image order-1 order-lg-2"
            title="Clutch"
            alt="Clutch logo" />
        <?php endif; ?>
    </div>
</div>