$(document).ready(function () {
    const numb = function (number, options = {}) {
        const config = {
            prefix: '',
            suffix: '',
            thous: '.',
            dec: 3,
            ...options,
        }
        const { prefix, suffix, thous, dec } = config;
        let number_only = ('' + number).replace(/\D/g, '');
        let pattern = '(\\d)(?=(';
        for (let i = 0; i < dec; i++) {
            pattern += '\\d';
        }
        pattern += ')+(?!\\d))';
        let regex = new RegExp(pattern, 'g')
        return prefix + number_only.replace(regex, "$1" + thous) + suffix;
    };

    $('#form_nt').on('submit', function (e) {
        e.preventDefault();

        var data = $(this).serializeArray().reduce(function (obj, item) {
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
                recharge = response.recharge;
                if (result == true) {
                    alert('Nạp thẻ thành công');
                    var html = '';
                    var type = ['Viettel', 'Vinaphone', 'Mobifone']
                    $.each(response.recharge, function (index, value) {
                        html += '<tr>';
                        html += '<th class="px-2 py-2">' + type[value.type_charge] + '</th>';
                        html += '<th class="px-2 py-2">' + value.pin + '/' + value.serial + '</th>';
                        html += '<th class="px-2 py-2">' + numb(value.money_received, { suffix: ' đ', }) + '</th>';
                        html += '</tr>';
                        $('.recharge-ct').html(html);
                    });
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
