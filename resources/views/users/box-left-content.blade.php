@extends('users.layouts_user.home')
@section('content')
<div class="d-block ct-l">
    <div class="px-0 py-0 w-100 position-sticky ct-l-2" style="z-index: 200;">
        <div class="pb-2 pe-2 gap-2 menu-ava d-grid">
            <div class="d-flex align-items-center ava">
                <img class="ava-l w-100 br-9999" src="assetsU/image/unknown-avatar.jpg">
            </div>
            <div class="ava-r">
                <p class="d-flex align-items-center p"><b class="me-1">ID:</b> 1650845
                    <span class="justify-content-center align-items-center ic-cop d-flex ms-2">
                        <i class="fas fa-copy"></i></span>
                </p>
                <p class="text-sm p"><b>Số dư:</b> <span class="fw-bold t-color">0đ</span></p>
                <p class="text-sm p"><b>Xu:</b> <span class="fw-bold t-color">0xu</span></p>
            </div>
        </div>
        <div class="bot-b border-top"></div>
        <div>
            <div class="tk mb-075">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute bg-color-be"
                        style="top: -2px;">
                        <i class="fas fa-user user"></i>
                    </span>
                    <span class="d-block ml-225">Tài khoản</span>
                </div>
                <div class="fw-6 text-sm ml-275 mt-1">
                    <ul><a href="/info" class="py-1 d-block t-color-black">Thông tin chung
                        </a> <a href="/repassword" class="py-1 d-block t-color-black">Đổi mật
                            khẩu</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute bg-color-be"
                        style="top: -2px;"><i class="fas fa-bell"></i></span> <span class="d-block ml-225">Thông báo
                    </span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/notification" class="t-color-black py-1 d-block">Tất cả thông báo
                        </a></ul>
                </div>
            </div>
            <div class="mb-075">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be"
                        style="top: -2px;"><i class="fas fa-gamepad"></i></span> <span class="ml-25 d-block">Trò chơi
                    </span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/withdraw-items" class="t-color-black py-1 d-block">Rút vật phẩm</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be"
                        style="top: -2px;"><i class="fa fa-credit-card"></i></span> <span class="ml-25 d-block">Giao
                        dịch
                    </span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul>
                        <a href="/recharge" class="t-color-black py-1 d-block">Nạp
                            thẻ cào tự động</a>
                        <a class="t-color-black py-1 d-block load-atm">Nạp qua
                            ATM/MOMO</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be"
                        style="top: px;"><i class="fa fa-tag"></i></span> <span class="ml-25 d-block">Voucher
                    </span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/voucher" class="t-color-black py-1 d-block">Danh sách voucher</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075">
                <div class="position-relative fw-6"><span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be"
                        style="top: px;"><i class="fa-sharp fa-solid fa-clipboard"></i></span> <span
                        class="ml-25 d-block">Lịch
                        sử</span></div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/history/game" class="t-color-black py-1 d-block">Chơi game</a>
                        <a href="/history/add_card" class="t-color-black py-1 d-block">Nạp thẻ</a>
                        <a href="/history/transaction" class="t-color-black py-1 d-block">Giao dịch</a>
                        <a href="/history/buy_nick" class="t-color-black py-1 d-block">Mua tài khoản (nick)</a>
                        <a href="/history/buy_item" class="t-color-black py-1 d-block">Mua hòm v.phẩm</a>
                        <a href="/history/service" class="t-color-black py-1 d-block">Mua vật phẩm (Dịch vụ)</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
