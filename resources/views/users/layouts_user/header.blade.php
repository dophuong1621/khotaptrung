<header class="b-shadow">
    <nav class="m-width">
        <div class="container-h">
            <div class="header d-flex">
                <div class="h-left d-flex flex-item-cent">
                    <a href="home" class="h-img">
                        <img src="https://cdns.diongame.com/static/image-87a3f611-cc43-4bc6-a047-a5de520ad6b6.png"
                            class="h-img1">
                        <img src="https://cdns.diongame.com/static/image-49572b34-c8b0-40df-8d04-13c44741d328.png"
                            class="h-img2">
                    </a>
                    <a href="recharge"
                        class="d-none d-sm-flex ml-25r fw-7 px-075 text-sm align-items-center cursor-pointer t-color">
                        <span
                            class="d-inline-flex align-items-center justify-content-center h-15r w-175r br-025 ic-color me-2 bg-color">
                            <i class="text-lg bx bx-dollar"></i></span>

                        NẠP THẺ
                    </a>
                    <a
                        class="atm d-none d-sm-flex ml-05r fw-7 px-075 text-sm align-items-center cursor-pointer t-color">
                        <span
                            class="d-inline-flex align-items-center justify-content-center h-15r w-175r br-025 ic-color me-2 bg-color">
                            <i class="text-lg bx bx-credit-card-front"></i></span>
                        NẠP ATM/MOMO
                    </a>
                </div>
                @if (session()->get('username'))
                    <div class="d-flex flex-wrap align-items-center">
                        <a href="/notification"
                            class="h-25r me-sm-3 text-2xl br-05 justify-content-center align-items-center w-25r d-flex position-relative mr-075">
                            <i class="bx bxs-bell">
                            </i>
                            <!---->
                        </a>
                        <div class="">
                            <span>
                                <div role="tooltip" class="el-popover el-popper dropmenu dropdown">
                                    <!---->
                                    <div>
                                        <div class="border-bot-w d-grid grid-temp-col-12 gap-2 padding-05r">
                                            <div class="gc-2 d-flex align-items-center">
                                                <img src="/assetsU/image/unknown-avatar.jpg" class="w-100 br-05">
                                            </div>
                                            <div class="gc-9">
                                                <p><b>ID:</b> {{ $users[0]->id }}</p>
                                                <p><b>Số dư:</b> <span class="t-color fw-7">0đ</span></p>
                                                <p><b>Xu khóa:</b> <span class="t-color fw-7">0xu</span></p>
                                            </div>
                                        </div>
                                        <div class="text-sm">
                                            <span class="mt-2 t-color fw-7 text-sm d-block px-075">
                                                TÀI KHOẢN
                                            </span>
                                            <div class="px-2">
                                                <a href="/info" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Thông tin chung
                                                </a>
                                            </div>
                                            <span class="t-color fw-7 text-sm my-1 d-block px-075">
                                                <i class="position-relative bx bxs-dollar-circle" style="top:1px;"></i>
                                                NẠP TIỀN
                                            </span>
                                            <div class="px-2">
                                                <a href="/recharge" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Nạp thẻ cào (tự động)
                                                </a>
                                                <a class="fw-6 d-block py-1 px-075 cursor-pointer atm text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Nạp ATM/MOMO (tự động)
                                                </a>
                                            </div>
                                            <span class="t-color fw-7 text-sm my-1 d-block px-075">
                                                LỊCH SỬ
                                            </span>
                                            <div class="px-2">
                                                <a href="/history/game" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Lịch sử chơi game
                                                </a>
                                                <a href="/history/buy_nick" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Lịch sử mua nick
                                                </a>
                                                <a href="/history/buy_items"
                                                    class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Lịch sử mua v.phẩm
                                                </a>
                                            </div>
                                            <span class="t-color fw-7 text-sm my-1 d-block px-075">
                                                KHÁC
                                            </span>
                                            <div class="px-2">
                                                <a href="/voucher" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Voucher
                                                    <span
                                                        class="position-relative text-xs px-2 d-inline-block br-025 tw-bg-red-600 text-white fw-5 dx"
                                                        style="top:-1px;">
                                                        Mới
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="px-2">
                                                <a href="/withdraw-items" class="fw-6 d-block py-1 px-075 text-black">
                                                    <i class="position-relative bx bx-chevron-right"
                                                        style="top:1px;"></i>
                                                    Rút vật phẩm (Robux)
                                                </a>
                                            </div>
                                            <div class="padding-05r">
                                                <button class="text-white dx fw-6 text-center py-1 br-025 w-100">
                                                    <a href="{{ route('logout') }}" class="text-white">
                                                        Đăng xuất
                                                    </a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="el-popover__reference-wrapper">
                                    <button
                                        class="pl-075 h-25r text-sm fw-6 br-05 align-items-center d-flex position-relative dx pr-2 h-25r btn-inf"
                                        style="min-width:4rem;" aria-describedby="el-popover-1422" tabindex="0">
                                        <span>
                                            <img src="/assetsU/image/unknown-avatar.jpg"
                                                class="d-none d-sm-block bor-1 w-15r br-05 ">
                                        </span>
                                        <span class="d-none d-sm-block position-relative ms-1 text-white"
                                            style="top:-1px;">|</span>
                                        <span class="ms-sm-1 fw-7 text-white"> 0đ</span>
                                        <i class="text-lg position-absolute bx bx-caret-down-circle text-white top-down"
                                            style="right:8px;">
                                        </i>
                                    </button>
                                </span>
                            </span>
                        </div>
                    </div>
                @else
                    <div class="h-right d-flex none">
                        <button class="btn-login bg-color">
                            <span class="ct-btn-login">
                                <span class="ic-btn-login">
                                    <i class="fas fa-user"></i>
                                    <span class="t-btn-login uppercase">Đăng Nhập</span>
                                </span>
                            </span>
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </nav>
</header>
