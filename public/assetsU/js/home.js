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
        $('#ct-bank, #ct-momo, .dropdown, .btn-menu-left, .popup-home').css({ 'display': 'none' });
    });

    $(window).on('click', function (e) {
        if ($(e.target).is('.modal-atm')) {
            modal.hide();
            $('#ct-bank, #ct-momo, .dropdown').css({ 'display': 'none' });
            $('.ct-nt').css({ 'display': 'block' });
            $('.text-momo, .text-bank').removeClass('text-white');
            $('.momo, .bank').removeClass('dx');
        }
    });

    //content popup atm
    $('.bank').click(function () {
        $('.ct-nt').css({ 'display': 'none' });
        $('#ct-bank').css({ 'display': 'block' });
        $('#ct-momo').css({ 'display': 'none' });
        $('.text-bank').addClass('text-white');
        $('.bank').addClass('dx');
        $('.text-momo').removeClass('text-white');
        $('.momo').removeClass('dx');
    });

    $('.momo').click(function () {
        $('#ct-bank').css({ 'display': 'none' });
        $('.ct-nt').css({ 'display': 'none' });
        $('#ct-momo').css({ 'display': 'block' });
        $('.text-momo').addClass('text-white');
        $('.momo').addClass('dx');
        $('.text-bank').removeClass('text-white');
        $('.bank').removeClass('dx');
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

    // popup login
    $(window).on('click', function (e) {
        if ($(e.target).is('.popup-home')) {
            $('.popup-home').css({ 'display': 'none' });
        }
    });

    $('.ttb').click(function () {
        $('.popup-home').css({ 'display': 'none' })
    });

    //box left
    Array.from($('.parent')).forEach(item => {
        var active = $(item).find('.t-color').length;

        if (active) {
            $(item).find('.bg-par').addClass('dx');
            $(item).find('.ic-par').addClass('text-white');
            $(item).find('.text-par').addClass('t-color');
        }
    })

    //anh dong
    $('.close').click(function () {
        $('.animation').addClass('d-none');
    });

    // btn vina,mobi,viettel
    $('.viettel').click(function () {
        $(this).addClass('bor-col-red');
        $(this).children().css({ 'filter': '' });
        $('.mobi, .vina').children().css({ 'filter': 'grayscale(100%)' });
        $('.mobi, .vina').removeClass('bor-col-red');
    });

    $('.vina').click(function () {
        $(this).addClass('bor-col-red');
        $(this).children().css({ 'filter': '' });
        $('.mobi, .viettel').children().css({ 'filter': 'grayscale(100%)' });
        $('.mobi, .viettel').removeClass('bor-col-red');

    });

    $('.mobi').click(function () {
        $(this).addClass('bor-col-red');
        $(this).children().css({ 'filter': '' });
        $('.viettel, .vina').children().css({ 'filter': 'grayscale(100%)' });
        $('.viettel, .vina').removeClass('bor-col-red');

    });
});
