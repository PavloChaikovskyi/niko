<div class="container home-section__container section-why__title">
    <h3 class="container home-section__title">Why Applandeo?</h3>
</div>
<div class="container p-0 section-why">
    <div id="whySlider">
        <div class="section-why__item col-lg-5">
            <span>1/3</span>
            <?php if( get_field('adv_title_1') ): ?>
            <h5><?php the_field('adv_title_1'); ?></h5>
            <?php endif; ?>
            <?php if( get_field('adv_description_1') ): ?>
            <p><?php the_field('adv_description_1'); ?></p>
            <?php endif; ?>
        </div>
        <div class="section-why__item col-lg-5">
            <span>2/3</span>
            <?php if( get_field('adv_title_2') ): ?>
            <h5><?php the_field('adv_title_2'); ?></h5>
            <?php endif; ?>
            <?php if( get_field('adv_description_2') ): ?>
            <p><?php the_field('adv_description_2'); ?></p>
            <?php endif; ?>
        </div>
        <div class="section-why__item col-lg-5">
            <span>3/3</span>
            <?php if( get_field('adv_title_3') ): ?>
            <h5><?php the_field('adv_title_3'); ?></h5>
            <?php endif; ?>
            <?php if( get_field('adv_description_3') ): ?>
            <p><?php the_field('adv_description_3'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>