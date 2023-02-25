$(document).ready(function () {
    // $('.b1-sel').select2();

    var modal = $('.load-atm');
    var btn = $('.atm');
    var close = $('.btn-close');

    btn.click(function () {
        modal.show();
        modal.css({ 'display': 'block' });
    });

    close.click(function () {
        modal.hide();
        $('.btn-menu-left').css({ 'display': 'none' });
        $('.popup-login').css({ 'display': 'none' });
    });

    $(window).on('click', function (e) {
        if ($(e.target).is('.modal-atm')) {
            modal.hide();
        }
    });

    // popup login
    $(window).on('click', function (e) {
        if ($(e.target).is('.popup-login')) {
            $('.popup-login').css({ 'display': 'none' });
        }
    });

    // bxh
    var sk = $('.sk-new');
    var tn = $('.top-nap');

    sk.click(function () {
        sk.addClass('bg-box');
        $('.t-sk').addClass('bg-box t-color');
        tn.addClass('bg-box-gray');
        $('.t-top').addClass('text-black');
        $('.nt-ct-h').addClass('d-none');
        $('.t-ct-h').removeClass('d-none');
    });

    tn.click(function () {
        sk.removeClass('bg-box');
        $('.t-sk').removeClass('bg-box t-color');
        tn.removeClass('bg-box-gray');
        $('.t-top').removeClass('text-black');
        $('.nt-ct-h').removeClass('d-none');
        $('.t-ct-h').addClass('d-none');
    });

    // dropdown
    $('.btn-inf').click(function () {
        $('.dropdown').toggle('d-block');
    });

    //btn-menu
    $('.menu').click(function () {
        $('.btn-menu-left').show();
        $('.btn-menu-left').css({ 'display': 'block' });
    })

    $(window).on('click', function (e) {
        if ($(e.target).is('.modal-menu')) {
            $('.btn-menu-left').css({ 'display': 'none' });
        }
    });
});
