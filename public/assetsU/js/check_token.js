$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "/api/auth/user-profile",
        dataType: "json",
        success: function (response) {
            if (response != '') {
                console.log(response);
                $('.btn-loginn').addClass('d-none');
                $('.btn-loginn').removeClass('d-flex');

                var noti = '';
                var btn = '';

                noti += '<a href="/notification" class="h-25r me-sm-3 text-2xl br-05 justify-content-center align-items-center w-25r d-flex position-relative mr-075" > ';
                noti += '<i class="bx bxs-bell"></i>';
                noti += '</a>';

                btn += '<button class="pl-075 h-25r text-sm fw-6 br-05 align-items-center d-flex position-relative dx pr-2 h-25r btn-inf h2r" style="min-width:4rem;" aria-describedby="el-popover-1422" tabindex="0">';
                btn += '<span>';
                btn += '<img src="/assetsU/image/unknown-avatar.jpg" class="d-none d-sm-block bor-1 w-15r br-05 " > ';
                btn += '</span>';
                btn += '<span class="d-none d-sm-block position-relative ms-1 text-white" style="top:-1px;">|</span>';
                btn += '<span class="ms-sm-1 fw-7 text-white"> 0đ</span>';
                btn += '<i class="text-lg position-absolute bx bx-caret-down-circle text-white top-down" style="right:8px;"> </i>';
                btn += '</button>';

                $('.noti').html(noti);
                $('.hehe').html(btn);
                $('.btn-inf').click(function () {
                    $('.dropdown').toggle('d-block');
                });


                // $('[data-toggle="popover"]').popover();

            } else {
                $.ajax({
                    type: "GET",
                    url: "/api/auth/refresh",
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                    },
                });
            }
        },
    });
});
