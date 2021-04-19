<footer class="footer">
    <div class="container content">
        <div class="row mx-0">
            <a href="#intro"
                class="footer__link logo col-md-3">
                <img src="<?php the_field('footer_logo_image', 'options') ?>"
                    alt=""
                    class="footer__logo">
            </a>

            <a href="<?php the_field('company_adress_link', 'options') ?>"
                class="
                col-md-3
                footer__link
                adress
                row
                mx-0">
                <img src="<?php the_field('company_adress_icon', 'options') ?>"
                    alt=""
                    class="adress__icon footer__icon">
                <p class="adress__text link__text"><?php the_field('company_adress_text', 'options') ?></p>
            </a>

            <div class="col-md-3">
                <a href="tel:<?php the_field('company_phone_number_without_spaces', 'options') ?>"
                    class="footer__link">
                    <img src="<?php the_field('company_number_icon', 'options') ?>"
                        alt=""
                        class="phone__icon footer__icon">
                    <p class="link__text phone__text"><?php the_field('company_phone_number', 'options') ?></p>
                </a>
                <a href="mailto:<?php the_field('company_mail', 'options') ?>"
                    class="footer__link">
                    <img src="<?php the_field('company_mail_icon', 'options') ?>"
                        alt=""
                        class="mail__icon footer__icon">
                    <p class="link__text mail__text"><?php the_field('company_mail', 'options') ?></p>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php the_field('', 'options') ?>"
                    class="rodo footer__link"><?php the_field('', 'options') ?></a>
                <a href="<?php the_field('', 'options') ?>"
                    class="privacy-policy footer__link">
                    <?php the_field('', 'options') ?> </a>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row mx-0">
            <div class="col-md-6">Copyright Nikolink 2021</div>
            <div class="col-md-6">Project i realizacja - <a href="/"
                    class="copyrights__link">Web Studio Czajkowski</a></div>
        </div>
    </div>
</footer>



<?php wp_footer(); ?>




<!-- animated hamburger menu -->
<script>
$(document).ready(function() {
    $('.first-button').on('click', function() {
        $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function() {
        $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function() {
        $('.animated-icon3').toggleClass('open');
    });
});
</script>
<!-- end animated hamburger menu -->

<!-- Toggle Class On Click Burger Menu Start-->
<script>
$("button.first-button").click(function() {
    $("nav.navbar").toggleClass("navbar-box-shadow");
});
</script>
<!-- Toggle Class On Click Burger Menu End-->

</body>

</html>