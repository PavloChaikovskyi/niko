<div class="container-fluid home-section__container bg-gradient-contact p-0 section-contact">
    <div class="container">
        <div class="row">
            <div class="col col-lg-9 order-1 order-lg-0 section-contact__location">
                <h3 class="home-section__title">
                    <?php the_field('contact-title-1'); ?>
                </h3>
                <span class="section-contact__address">
                    <?php the_field('contact-address'); ?>
                </span>
                <span class="section-contact__email">
                    <a href="mailto:<?php the_field('contact-email'); ?>"><?php the_field('contact-email'); ?></a><br />
                    <?php the_field('contact-tel'); ?>
                </span>
                <img src="<?php the_field('contact-image'); ?>"
                    alt="Contant us"
                    class="section-contact__image" />
            </div>
            <div class="col col-lg-6 order-0 order-lg-1 section-contact__contact">
                <h3>
                    <?php the_field('contact-title-2'); ?>
                </h3>
                <div class="section-contact__description d-none d-lg-block">
                    <img src="<?php the_field('contact-avatar'); ?>"
                        alt="avatar" />
                    <span><?php the_field('contact-subtitle'); ?></span>
                    <p><?php the_field('contact-description'); ?></p>
                </div>
                <?php echo do_shortcode( '[contact-form-7 id="138" title="Contact form 1" html_class="contact-section-contact__form use-floating-validation-tip"]' ); ?>
                <span class="section-contact__info"><?php the_field('contact-info'); ?></span>
            </div>
        </div>
    </div>
</div>