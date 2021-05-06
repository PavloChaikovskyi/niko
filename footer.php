<footer class="footer">
    <div class="container content">
        <div class="row mx-0">
            <a href="#intro" class="footer__link logo col-xl-3">
                <img src="<?php the_field('footer_logo_image', 'options') ?>" alt="" class="footer__logo">
            </a>

            <a href="<?php the_field('company_adress_link', 'options') ?>"
                class="col-xl-3 col-md-4 footer__link footer__column adress row mx-0">
                <img src="<?php the_field('company_adress_icon', 'options') ?>" alt=""
                    class="adress__icon footer__icon">
                <p class="adress__text link__text"><?php the_field('company_adress_text', 'options') ?></p>
            </a>

            <div class="col-xl-3 col-md-4 footer__column">
                <a href="tel:<?php the_field('company_phone_number_without_spaces', 'options') ?>"
                    class="footer__link phone">
                    <img src="<?php the_field('company_number_icon', 'options') ?>" alt=""
                        class="phone__icon footer__icon">
                    <p class="link__text phone__text"><?php the_field('company_phone_number', 'options') ?></p>
                </a>
                <a href="mailto:<?php the_field('company_mail', 'options') ?>" class="footer__link">
                    <img src="<?php the_field('company_mail_icon', 'options') ?>" alt=""
                        class="mail__icon footer__icon">
                    <p class="link__text mail__text"><?php the_field('company_mail', 'options') ?></p>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 footer__column">
                <a href="<?php the_field('rodo_link', 'options') ?>"
                    class="rodo footer__link"><?php the_field('rodo_text', 'options') ?></a>
                <a href="<?php the_field('privacy_policy_link', 'options') ?>" class="privacy-policy footer__link">
                    <?php the_field('privacy_policy_text', 'options') ?> </a>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row mx-0">
            <div class="col-md-6">Copyright Nikolink 2021</div>
            <div class="col-md-6 realization">Project i realizacja - <a href="/"
                    class="copyrights__link">codusa.space</a></div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>





</body>

</html>