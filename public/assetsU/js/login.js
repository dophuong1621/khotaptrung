$(document).ready(function () {
    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

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
            url: "/login",
            data: {
                username: username,
                password: password,
            },
            dataType: "json",
            success: function (response) {
                setCookie("token", response.access_token, response.expires_in);
                setCookie("token_type", response.token_type);
                setCookie("expires_in", response.expires_in);
                if (getCookie("token") != '') {
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
