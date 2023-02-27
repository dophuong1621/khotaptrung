{{-- popup atm --}}
<div class="load-atm" style="display: none">
    <div class="modal-atm" style="z-index: 100001">
        <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog tw-dialog-trans"
            style="margin-top: 15vh;">
            <div class="el-dialog__header">
                <div class="text-white fw-6">
                    NẠP TIỀN - CHUYỂN KHOẢN QUA
                </div>
                <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                        class="el-dialog__close el-icon btn-close btn-close-white"></i></button>
            </div>
            <div class="el-dialog__body">
                <div class="my-3" style="word-break: break-word;">
                    <div class="d-grid grid-temp-col-12 gap-3">
                        <div class="gc-6 gc-12i"><button
                                class="px-3 align-items-center br-025 w-100 d-flex h-3r border"><img
                                    class="w-15 lazyLoad isLoaded" src="/assetsU/image/bank.png"> <span
                                    class="ml-05 fw-6">Ngân Hàng (ATM)</span></button></div>
                        <div class="gc-6 gc-12i"><button
                                class="px-3 align-items-center br-025 w-100 d-flex h-3r border"><img
                                    class="w-15 lazyLoad isLoaded" src="/assetsU/image/momo.png"> <span
                                    class="ml-05 fw-6">Ứng dụng MOMO</span></button></div>
                    </div>
                    <div>
                        <div class="mt-3">
                            <div class="text-sm fw-6">
                                <p><span><i class="bx bx-caret-right"></i></span> Hệ thống nạp
                                    <b class="t-color">ATM/MOMO tự động 24/24</b>, Nạp 100k
                                    nhận 110k tiền shop
                                </p>
                                <p><span><i class="bx bx-caret-right"></i></span><b> Lưu ý: </b> Chuyển tiền
                                    nhanh 24/7 để tránh bị treo, chậm
                                    tiền! Nếu gửi đúng stk và nội dung mà 30p không nhận được tiền
                                    hoặc chuyển ghi sai nội dung vui lòng liên hệ page để được hỗ
                                    trợ.
                                </p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="uppercase t-color fw-7 text-sm d-block mb-2">
                                Quy Đổi Tiền Nạp ATM/MOMO
                            </label>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="box-40">
                                    <div class="w-100 position-relative">
                                        <label class="d-inline-block position-absolute text-xs fw-5"
                                            style="left: 10px; top: 6px;">
                                            Số tiền bạn chuyển
                                        </label>
                                        <input type="number" placeholder=""
                                            class="focus:tw-outline-none tw-pt-3 tw-px-2 h-3r tw-rounded border-w-2-gray w-100 text-sm fw-6 tw-placeholder-gray-800 focus:tw-placeholder-white tw-transition tw-duration-200 tw-text-red-700">
                                    </div>
                                    <span class="mt-1 position-absolute text-xs d-block fw-6"><i
                                            class="position-relative fw-5 bx bx-subdirectory-right"
                                            style="top: 1px;"></i>
                                        0đ</span>
                                </div>
                                <div class="box-20"><i class="bx bx-transfer-alt text-lg"></i></div>
                                <div class="box-40">
                                    <div class="w-100 position-relative"><label
                                            class="d-inline-block position-absolute text-xs fw-5"
                                            style="left: 10px; top: 6px;">
                                            Tiền nhận trên shop
                                        </label> <input readonly="readonly" placeholder=""
                                            class="focus:tw-outline-none tw-pt-3 tw-px-2 h-3r tw-rounded border-w-2-gray w-100 text-sm fw-6 tw-placeholder-gray-800 focus:tw-placeholder-white tw-transition tw-duration-200 tw-text-red-700">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---->
                <!---->
            </div>
            <!---->
        </div>
    </div>
</div>

{{-- btn-menu  --}}
<div class="btn-menu-left" style="z-index: 1001;display:none">
    <div class="modal-menu el-drawer__open">
        <div class="modal-contentt ltr" style="width:280px;">
            <header id="btn-menu-title" class="btn-menu-header">
                <div>
                    <b>DANH MỤC MENU</b>
                </div>
                <button type="button" class="btn-close-menu">
                    <i class="btn-close btn-close-black"></i>
                </button>
            </header>
            <section class="btn-menu-body">
                <div style="max-height: 95vh; overflow: hidden auto;">
                    <div class="w-100 padding-05r position-sticky " style="z-index: 200;top: 5rem">
                        <div class="d-grid grid-temp-col-12 gap-2 pe-2 pb-2">
                            <div class="gc-3 d-flex align-items-center">
                                <img class="w-100 br-9999 border-w-1" src="/assetsU/image/unknown-avatar.jpg">
                            </div>
                            <div class="gc-9">
                                <p class="d-flex align-items-center">
                                    <b class="me-1">ID:</b> 1650845
                                    <span
                                        class="w-1 h-1 d-flex align-items-center justify-content-center ms-2 cursor-pointer"><i
                                            class="bx bxs-copy"></i>
                                    </span>
                                </p>
                                <p class="text-sm"><b>Số dư:</b> <span class="t-color fw-7">0đ</span></p>
                                <p class="text-sm"><b>Xu:</b> <span class="t-color fw-7">0xu</span></p>
                            </div>
                        </div>
                        <div class="mb-3 bor-w75-gray"></div>
                        <div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-user "></i></span> <span
                                        class="ml-25r d-block">Tài khoản
                                    </span></div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul><a href="/info" class="d-block py-1 text-black ">Thông tin chung
                                        </a> <a href="/repassword" class="d-block py-1 text-black">Đổi mật khẩu</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-bell"></i></span> <span
                                        class="ml-25r d-block">Thông báo
                                    </span></div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul><a href="/notification" class="d-block py-1 text-black">Tất cả thông báo
                                        </a></ul>
                                </div>
                            </div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-game"></i></span> <span
                                        class="ml-25r d-block">Trò chơi
                                    </span></div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul><a href="/withdraw-items" class="d-block py-1 text-black">Rút vật phẩm</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-wallet-alt"></i></span> <span
                                        class="ml-25r d-block">Giao dịch
                                    </span></div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul>
                                        <a href="/recharge" class="d-block py-1 text-black">Nạp
                                            thẻ cào tự động</a>
                                        <a class="cursor-pointer d-block py-1 text-black atm">Nạp qua
                                            ATM/MOMO</a>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-purchase-tag-alt"></i></span>
                                    <span class="ml-25r d-block">Voucher
                                    </span>
                                </div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul><a href="/voucher" class="d-block py-1 text-black">Danh sách voucher</a></ul>
                                </div>
                            </div>
                            <div class="mb-075">
                                <div class="position-relative fw-6"><span
                                        class="h-175r w-175r br-9999 d-inline-flex justify-content-center align-items-center position-absolute bg-color-be"
                                        style="top: -2px;"><i class="text-lg bx bxs-notepad"></i></span> <span
                                        class="ml-25r d-block">Lịch sử</span></div>
                                <div class="ml-275 mt-1 text-sm fw-6">
                                    <ul><a href="/history/game" class="d-block py-1 text-black">Chơi game</a> <a
                                            href="/history/add_card" class="d-block py-1 text-black">Nạp thẻ</a> <a
                                            href="/history/transaction" class="d-block py-1 text-black">Giao dịch</a>
                                        <a href="/history/buy_nick" class="d-block py-1 text-black">Mua tài khoản
                                            (nick)</a>
                                        <a href="/history/buy_items" class="d-block py-1 text-black">Mua hòm
                                            v.phẩm</a> <a href="/history/service" class="d-block py-1 text-black">Mua
                                            vật phẩm (Dịch
                                            vụ)</a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

{{-- popup-login  --}}
<div class="popup-login" style="z-index: 1002;display:none">
    <div role="dialog" aria-modal="true" aria-label="dialog" class="modal-home" style="margin-top:15vh;">
        <div class="tb-login">
            <div class="t-color fw-7">
                <i class="position-relative bx bxs-bell-ring text-xl" style="top:3px;"></i>
                THÔNG BÁO
            </div>
            <button type="button" aria-label="Close" class="el-dialog__headerbtn">
                <i class="btn-close btn-close-black"></i>
            </button>
        </div>
        <div class="ct-login">
            <div class="main-ct" style="word-break: break-word;">
                <p style="margin-left: 0px; text-align: center;">
                    <span class="text-big" style="color: rgb(2, 132, 199);">
                        <strong>Hiện Tại Robux tại shop Hiha đã có hàng - Độc Quyền
                            thị trường</strong>
                    </span>
                </p>
                <p style="margin-left: 0px; text-align: center;">
                    <span class="text-big"
                        style="background-color: rgb(255, 255, 255); color: rgb(185, 28, 28);"><strong>10k = 85
                            Robux</strong>
                    </span>
                </p>
                <p style="margin-left: 0px; text-align: center;">
                    <span class="text-big" style="color: rgb(2, 132, 199);">
                        <strong>Mọi người nhanh tay mua nhé - Đơn sẽ được xử lý sớm
                            nhất</strong>
                    </span>
                </p>
                <p style="margin-left: 0px; text-align: center;">
                    <span class="text-big" style="color: rgb(2, 132, 199);">
                        <strong>Sau khi nguồn Robux ổn định sẽ quay về giá
                            cũ.</strong>
                    </span>
                </p>
                <p style="margin-left: 0px; text-align: center;">
                    <span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);">🥇</span>
                    <span style="background-color: rgb(255, 255, 255); color: rgb(39, 39, 42);">
                        <strong>HOT :
                        </strong>
                    </span>
                    <span style="background-color: rgb(255, 255, 255); color: rgb(244, 63, 94);">
                        <strong>TẶNG MIỄN PHÍ
                            NGẪU NHIÊN ROBUX VÀ TRÁI ÁC QUỶ XỊN KHI TẠO TÀI KHOẢN Ở SHOP</strong>
                    </span>
                    <span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);">🥇</span>
                </p>
            </div>
        </div>
        <div class="footer-login">
            <span class="dialog-footer">
                <button type="button" class="ttb">
                    <span>Tắt thông báo </span>
                </button>
            </span>
        </div>
    </div>
</div>
