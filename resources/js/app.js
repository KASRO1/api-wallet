// require('./bootstrap');
//
// require('./scripts/jquery.meanmenu');
// require('./scripts/wow.min');
// require('./scripts/owl.carousel');
// require('./scripts/jquery.nice-select.min');
// // require('./scripts/jquery.appear');
// require('./scripts/odometer.min');
// require('./scripts/jquery.magnific-popup.min');
// require('./scripts/jquery.ajaxchimp.min');
// require('./scripts/form-validator.min');
// require('./scripts/contact-form-script');
// require('./scripts/map');
// require('./scripts/custom');
//
// require('./scripts/runtime.a5dd35324ddfd942bef1')
// require('./scripts/es2015-polyfills.4a4cfea0ce682043f4e9')
// require('./scripts/polyfills.407a467dedb63cfdd103')
// require('./scripts/scripts.806effac119676237f10')
// require('./scripts/main.2fbb8f0398b01c8fbd83')

$(document).ready(function () {
    $(".page-header__mob-menu-link, .mob-menu__close").click(function () {
        $(".mob-menu").toggleClass("_open");

        return false;
    });

    $(".video-preview").click(function () {
        $(this).hide();
    });

    $(".referal-details-item").click(function () {
        $(this).toggleClass('open');
    });
});
