<div class="container">
    <div class="row mx-0">
        <div class="col-xl-4 col-md-12 logo__wrap">

            <img src="<?php the_field('footer_logo','options') ?>"
                alt="maleo_logo">

        </div>
        <!-- <div class="col-xl-4 col-md-6">
            <div class="row mx-0"> -->
        <div class="col-12 col-sm-4 col-lg-3 col-xl-2 footer__column">
            <h4 class="footer__title"><?php the_field('footer_information_title', 'option') ?></h4>
            <?php $links = get_field('footer_information_fields', 'options');  ?>
            <?php include 'part-footerColumn.php'; ?>
        </div>
        <div class="col-12 col-sm-4 col-lg-3 col-xl-2 footer__column">
            <h4 class="footer__title"><?php the_field('footer_account_title', 'option') ?></h4>
            <?php $links = get_field('footer_account_fields', 'options');  ?>
            <?php include 'part-footerColumn.php'; ?>
        </div>
        <!-- </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="row mx-0"> -->
        <div class="col-12 col-sm-4 col-lg-3 col-xl-2 footer__column kontakt">
            <h4 class="footer__title"><?php the_field('footer_kontakt_title', 'option') ?></h4>
            <p class="footer__text"><?php the_field('contact_name', 'option') ?></p>
            <a href="tel:<?php the_field('tel_link', 'option') ?>"
                class="footer__link"><?php the_field('tel_link', 'option') ?></a>
            <a href="mailto:<?php the_field('email_adress_link', 'option') ?>"
                class="footer__link email"><?php the_field('email_adress_link', 'option') ?></a>
            <p class="footer__text"><?php the_field('schedule_name', 'option') ?></p>
            <p class="footer__text"><?php the_field('schedule_info', 'option') ?></p>

        </div>
        <div class="col-12 col-sm-12 col-lg-3 col-xl-2 footer__column socialmedia">
            <h4 class="footer__title"><?php the_field('footer_socialmedia_title', 'option') ?></h4>
            <div class="socialmedia__wrap">
                <div class="wrap">
                    <?php $links = get_field('socialmedia_links', 'options');  ?>
                    <?php if ($links) {
                        foreach($links as $link) {
                                echo '<a href="'.$link['socialmedia_link']. '" target="_blanc" class="footer__link socialmedia">'.
                                '<img class="footer__icon" src="'.$link['socialmedia_icon'].'">'
                                . '<p class="footer__text">'. $link['socialmedia_text'].'</p>'.'</a>';      
                        // }
                    }}
                    ?>
                </div>
            </div>
        </div>
        <!-- </div>
        </div> -->
    </div>
</div>