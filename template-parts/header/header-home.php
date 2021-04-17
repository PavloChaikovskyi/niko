<nav class="navbar menu">
    <div id="navbarTop"
        class="container container__small">
        <div class="row mx-0 row__top">

            <div class="left row mx-0">
                <a href="#"
                    class="menu__link menu__top btn__circle">
                    <?php include 'svg-user.php'; ?>
                </a>
                <a href="#"
                    class="menu__link menu__top btn__circle">
                    <?php include 'svg-search.php'; ?>
                </a>
            </div>

            <div class="middle">
                <a href="/"
                    class="header__logo big">
                    <?php include 'svg-logo-header-big.php'; ?>
                </a>
                <a href="/"
                    class="header__logo small d-none">
                    <?php include 'svg-logo-header-small.php'; ?>
                </a>
            </div>

            <div class="right row mx-0">
                <a href="#"
                    class="menu__link menu__top btn__circle">
                    <?php include 'svg-heart.php'; ?>
                </a>
                <a href="#"
                    class="menu__link menu__top btn__circle">
                    <?php include 'svg-cart.php'; ?>
                </a>
            </div>
        </div>
    </div>






    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary_bottom',
            'depth'             => 2,
            'link_before'    => '<span class="screen-reader-text socialmedia">',
            'link_after'     => '</span>',
            'container'         => 'div',
            'container_class'   => 'container-fluid',
            'container_id'      => 'navbarBottom',
            'menu_class'        => 'container row row__bottom',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
</nav>

<nav id="navbarBurger"
    class="navbar burger closed">
    <a href="/"
        class="header__logo big">
        <?php include 'svg-logo-header-big.php'; ?>
    </a>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary_bottom',
            'depth'             => 2,
            'link_before'    => '<span class="screen-reader-text socialmedia">',
            'link_after'     => '</span>',
            'container'         => 'div',
            'container_class'   => 'container',
            'container_id'      => 'navbarBurger',
            'menu_class'        => 'nav__links',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
    <button id="closeBurgerBtn"
        class="close close__btn">
        X
    </button>

</nav>



<nav id="navbarMobile"
    class="navbar__mobile d-none">
    <div class="container">
        <div class="row__nav mobile row mx-0">
            <a href=""
                id="burgerBtn"
                class="col-2 nav__link mobile burger__btn">
                <?php include 'svg-menu.php'; ?>
                <p class="link__name mobile ">menu</p>

            </a>
            <a href="#"
                class="col-2 nav__link mobile">
                <?php include 'svg-search.php'; ?>
                <p class="
                link__name
                mobile">szukaj</p>
            </a>

            <a href="#"
                class="col-2 nav__link mobile">

                <?php include 'svg-user.php'; ?>
                <p class="link__name mobile">konto</p>
            </a>

            <a href="#"
                class="col-2 nav__link mobile">
                <?php include 'svg-heart.php'; ?>
                <p class="link__name mobile">ulubione</p>
            </a>

            <a href="#"
                class="col-2 nav__link mobile">
                <?php include 'svg-cart.php'; ?>
                <p class="link__name mobile">koszyk</p>
            </a>

            <a href="#"
                class="col-2 nav__link mobile">
                <?php include 'svg-user.php'; ?>
                <p class="link__name mobile">atelier</p>
            </a>
        </div>
    </div>
</nav>



<script>
const $bigHeaderLogo = document.querySelector('.header__logo.big');
const $smallHeaderLogo = document.querySelector('.header__logo.small');
const $navbarTop = document.querySelector('#navbarTop');
const $navbarBottomLinksArr = document.querySelectorAll('#menu-menu-header-bottom li');
const $navbarMobile = document.querySelector('#navbarMobile');
const $navbarBurger = document.querySelector('#navbarBurger');
const $burgerBtn = document.querySelector('#burgerBtn');
const $closeBurgerBtn = document.querySelector('#closeBurgerBtn');




function checkSpace() {
    // const scroll = window.scrollTop
    // console.log(document.body.scrollTop);
    // console.log(document.documentElement.scrollTop);
    if (window.innerWidth > 1199) {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {

            $bigHeaderLogo.classList.add('d-none');
            $smallHeaderLogo.classList.remove('d-none');
            $navbarTop.classList.add('scrolled');
            $navbarBottomLinksArr[2].classList.add('scrolled', 'first');
            $navbarBottomLinksArr[3].classList.add('scrolled', 'second');
            // console.log($navbarBottomLinksArr[2], $navbarBottomLinksArr[3]);


        } else {
            $bigHeaderLogo.classList.remove('d-none');
            $smallHeaderLogo.classList.add('d-none');
            $navbarTop.classList.remove('scrolled');
            $navbarBottomLinksArr[2].classList.remove('scrolled', 'first');
            $navbarBottomLinksArr[3].classList.remove('scrolled', 'second');
        }
    }

    if (window.innerWidth < 767) {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            $navbarMobile.classList.remove('d-none');
        } else {
            $navbarMobile.classList.add('d-none');
        }
    }

}

function openBurgerMenu() {
    $navbarBurger.classList.remove('closed');
    $navbarBurger.classList.add('opened');
    $navbarMobile.classList.add('hidden');
}

function closeBurgerMenu() {
    $navbarBurger.classList.add('closed');
    $navbarBurger.classList.remove('opened');
    $navbarMobile.classList.remove('hidden');
}

window.addEventListener('scroll', checkSpace);
$burgerBtn.addEventListener('click', openBurgerMenu);
$closeBurgerBtn.addEventListener('click', closeBurgerMenu);



// console.log($bigLogo);


// scroll 
// on scroll check  if -> heightY biger than 100px -> find element big image, check if has class d-none -> if no -> add d-none
// find el small img and remove class d-none  
</script>