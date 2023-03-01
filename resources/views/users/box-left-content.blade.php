<div class="d-sm-block d-none ct-l">
    <div class="px-0 py-0 w-100 position-sticky ct-l-2" style="z-index: 200;">
        <div class="pb-2 pe-2 gap-2 menu-ava d-grid">
            <div class="d-flex align-items-center ava">
                <img class="ava-l w-100 br-9999" src="/assetsU/image/unknown-avatar.jpg">
            </div>
            <div class="ava-r">
                <p class="d-flex align-items-center p">
                    <b class="me-1">ID:</b><span id="id-user"> {{ $users[0]->id }}</span>
                    <span class="justify-content-center align-items-center ic-cop d-flex ms-2"
                        onclick="copyId('#id-user')">
                        <i class="fas fa-copy"></i>
                    </span>
                </p>
                <p class="text-sm p"><b>Số dư:</b> <span class="fw-bold t-color">0đ</span></p>
                <p class="text-sm p"><b>Xu:</b> <span class="fw-bold t-color">0xu</span></p>
            </div>
        </div>
        <div class="bot-b border-top"></div>
        <div>
            <div class="tk mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="fas fa-user user ic-par"></i>
                    </span>
                    <span class="d-block ml-225 text-par">Tài khoản</span>
                </div>
                <div class="fw-6 text-sm ml-275 mt-1">
                    <ul><a href="/info"
                            class="py-1 d-block {{ request()->is('info') ? 't-color' : 'text-black' }}">Thông tin chung
                        </a> <a href="/repassword"
                            class="py-1 d-block {{ request()->is('repassword') ? 't-color' : 'text-black' }}">Đổi mật
                            khẩu</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="bx bxs-bell-ring ic-par"></i>
                    </span>
                    <span class="d-block ml-225 text-par">Thông báo
                    </span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/notification"
                            class="{{ request()->is('notification') ? 't-color' : 'text-black' }} py-1 d-block ">Tất cả
                            thông báo
                        </a>
                    </ul>
                </div>
            </div>
            <div class="mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="bx bxs-game ic-par"></i>
                    </span>
                    <span class="ml-25 d-block text-par">Trò chơi</span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/withdraw-items"
                            class="{{ request()->is('withdraw-items') ? 't-color' : 'text-black' }} py-1 d-block">Rút
                            vật phẩm</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="fa fa-credit-card ic-par"></i>
                    </span>
                    <span class="ml-25 d-block text-par">Giao dịch</span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul>
                        <a href="/recharge"
                            class="{{ request()->is('recharge') ? 't-color' : 'text-black' }} py-1 d-block">Nạp
                            thẻ cào tự động</a>
                        <a class="text-black py-1 d-block atm cursor-pointer">Nạp qua ATM/MOMO</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="fa fa-tag ic-par"></i>
                    </span>
                    <span class="ml-25 d-block text-par">Voucher</span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1">
                    <ul><a href="/voucher"
                            class="{{ request()->is('voucher') ? 't-color' : 'text-black' }} py-1 d-block">Danh sách
                            voucher</a>
                    </ul>
                </div>
            </div>
            <div class="mb-075 parent">
                <div class="position-relative fw-6">
                    <span
                        class="br-9999 w-175 h-175 justify-content-center align-items-center d-inline-flex position-absolute bg-color-be bg-par"
                        style="top: -2px;">
                        <i class="bx bxs-notepad ic-par"></i>
                    </span>
                    <span class="ml-25 d-block text-par">Lịch sử</span>
                </div>
                <div class="ml-275 fw-6 text-sm mt-1 ">
                    <ul>
                        <a href="/history/game"
                            class="{{ request()->is('history/game') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Chơi
                            game</a>
                        <a href="/history/add_card"
                            class="{{ request()->is('history/add_card') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Nạp
                            thẻ</a>
                        <a href="/history/transaction"
                            class="{{ request()->is('history/transaction') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Giao
                            dịch</a>
                        <a href="/history/buy_nick"
                            class="{{ request()->is('history/buy_nick') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Mua
                            tài khoản (nick)</a>
                        <a href="/history/buy_items"
                            class="{{ request()->is('history/buy_items') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Mua
                            hòm v.phẩm</a>
                        <a href="/history/service"
                            class="{{ request()->is('history/service') ? 't-color' : 'text-black' }} py-1 d-block ls-c">Mua
                            vật phẩm (Dịch vụ)</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    //copy ID
    function copyId(e) {
        copied = $('#id-user').text();
        var copy = $('<input>');
        $('body').append(copy);
        copy.val($(e).text()).select();
        document.execCommand("copy");
        copy.remove();
        alert("Đã copy:" + copied);
    }
</script>
