$(document).ready(function () {
    $('#form_login').on('submit', function (e) {
        e.preventDefault();

        var username = $('#username').val();
        var password = $('#password').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('form[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "/auth/login",
            data: {
                username: username,
                password: password,
            },
            dataType: "json",
            success: function (response) {
            
                result = response.result;
                message = response.message;
                if (result == true) {
                    location.reload();
                }
                else {
                    var htmlPop = '';
                    htmlPop += '<div class="t-color fw-6 text-sm py-2 px-3 bg-color br-025 w-100 d-block bor-1-red">';
                    htmlPop += message;
                    htmlPop += '</div>';
                    $('.error-login').html(htmlPop);
                }
            },
        });
    })
})
