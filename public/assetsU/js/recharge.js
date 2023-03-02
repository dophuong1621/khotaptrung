$(document).ready(function () {
    $('#form_nt').on('submit', function (e) {
        e.preventDefault();

        var data = $(this).serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});

        var type = $('#homeNetwork .bor-col-red').data('type');
        data.type_charge = type;
        $.ajax({
            type: "POST",
            url: "/recharge-prs",
            data: data,
            dataType: "json",
            success: function (response) {
                result = response.result;
                message = response.message;
                if (result == true) {
                    alert(message);
                }
                else {
                    var htmlPop = '';
                    htmlPop += '<div class="t-color fw-6 text-sm py-2 px-075 bg-color br-025 w-100 d-block bor-1-red">';
                    htmlPop += message;
                    htmlPop += '</div>';
                    $('.error-nt').html(htmlPop);
                }
            },
        });
    })
});
