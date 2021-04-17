// animated burger
$(document).ready(function () {
    $('.first-button').on('click', function () {
        $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {
        $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {
        $('.animated-icon3').toggleClass('open');
    });
    $('#nav-icon0,#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4,#nav-icon5').click(function () {
        $(this).toggleClass('open');
    });
});

$("button.first-button").click(function () {
    $("nav.navbar").toggleClass("navbar-box-shadow");
});



$(document).ready(function () {
    $('#alert').hide();
    if (window.location.href.indexOf("index.html") > -1) {
        $('#alert').show();
    }
});



