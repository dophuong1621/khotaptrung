$(document).ready(function () {
    var modal = $('.modal');
    var btn = $('.delete');
    var btnn = $('#delete');
    var close = $('.closee');
  
    btn.click(function () {
      modal.show();
    });
  
    close.click(function () {
      modal.hide();
    });

    btnn.click(function () {
      modal.hide();
    });
  
    $(window).on('click', function (e) {
      if ($(e.target).is('.modal')) {
        modal.hide();
      }
    });
  });