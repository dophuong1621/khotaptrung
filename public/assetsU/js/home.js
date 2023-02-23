$(document).ready(function () {
    // $('.b1-sel').select2();

    var modal = $('.load-atm');
    var btn = $('.atm');
    var close = $('.btn-close');

    btn.click(function () {
        modal.show();
        modal.css({'display': 'block'});
    });

    close.click(function () {
        modal.hide();
    });

    $(window).on('click', function (e) {
        if ($(e.target).is('.modal-atm')) {
            modal.hide();
        }
    });
});
