{{-- @extends('layouts_user.home')
@section('content') --}}
<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        <div class="d-block ct-l">
            <div class="px-0 py-0 w-100 position-sticky ct-l-2" style="z-index: 200;">
                <div class="pb-2 pe-2 gap-2 menu-ava d-grid">
                    <div class="d-flex align-items-center ava">
                        <img class="ava-l w-100 br-9999" src="../image/unknown-avata.jpg">
                    </div>
                    <div class="ava-r">
                        <p class="d-flex align-items-center p"><b class="me-1">ID:</b> 1650845
                            <span class="justify-content-center align-items-center ic-cop d-flex ms-2"><i
                                    class="fa-solid fa-clone"></i></span>
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
                                class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute"
                                style="top: -2px;">
                                <i class="fa-solid fa-user"></i>
                            </span>
                            <span class="d-block ml-225">Tài khoản</span>
                        </div>
                        <div class="fw-6 text-sm ml-275 mt-1">
                            <ul><a href="/myaccount/profile" class="py-1 d-block t-color-black">Thông tin chung
                                </a> <a href="/myaccount/profile/password" class="py-1 d-block t-color-black">Đổi mật
                                    khẩu</a>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-075">
                        <div class="position-relative fw-6"><span
                                class="br-9999 justify-content-center align-items-center w-175 h-175 d-inline-flex position-absolute"
                                style="top: -2px;"><i class="  "></i></span> <span class="d-block ml-225">Thông báo
                            </span></div>
                        <div class="ml-275">
                            <ul><a href="/myaccount/notification" class=" t-color-black">Tất cả thông báo
                                </a></ul>
                        </div>
                    </div>
                    <div class="mb-075 fw-6">
                        <div class="  "><span class="       " style="top: px;"><i class="  "></i></span> <span
                                class=" ">Trò chơi
                            </span></div>
                        <div class="    ">
                            <ul><a href="/myaccount/game/withdraw" class=" t-color-black">Rút vật phẩm</a></ul>
                        </div>
                    </div>
                    <div class="mb-075">
                        <div class="  "><span class="        " style="top: px;"><i class="  "></i></span> <span
                                class="  ">Giao dịch
                            </span></div>
                        <div class="    ">
                            <ul><a href="/myaccount/transaction/recharge" class=" t-color-black">Nạp
                                    thẻ cào tự động</a> <a class=" t-color-black">Nạp qua
                                    ATM/MOMO</a></ul>
                        </div>
                    </div>
                    <div class="mb-075">
                        <div class="  "><span class="       " style="top: px;"><i class="  "></i></span> <span
                                class=" ">Voucher
                            </span></div>
                        <div class="    ">
                            <ul><a href="/myaccount/voucher" class=" t-color-black">Danh sách voucher</a></ul>
                        </div>
                    </div>
                    <div class="mb-075">
                        <div class="  "><span class="       " style="top: px;"><i class="  "></i></span> <span
                                class=" ">Lịch sử</span></div>
                        <div class="    ">
                            <ul><a href="/myaccount/history/game" class=" t-color-black">Chơi game</a> <a
                                    href="/myaccount/history/recharge" class=" t-color-black">Nạp thẻ</a> <a
                                    href="/myaccount/history/transaction" class=" t-color-black ">Giao dịch</a> <a
                                    href="/myaccount/history/nick" class="  t-color-black">Mua tài khoản (nick)</a> <a
                                    href="/myaccount/history/item" class=" t-color-black">Mua hòm v.phẩm</a> <a
                                    href="/myaccount/history/service/item" class=" t-color-black">Mua vật phẩm (Dịch
                                    vụ)</a></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" ">
            <div class="      ">
                <div class="    ">
                    <h2 class=" ">Nạp Thẻ Cào</h2>
                    <p class="">
                        Tự động 24/7 - Nhập sai mệnh giá sẽ mất thẻ.
                    </p>
                </div>
                <!---->
                <form class="">
                    <div class=""><label class=" ">
                            Nhà mạng <b>(Ưu tiên Viettel, Vinaphone)</b></label>
                        <div class="   "><button type="button" class="      "><img style="filter: grayscale(100%);"
                                    src="/viettel.png"></button> <button type="button" class="      "><img
                                    style="filter: grayscale(100%);" src="/vinaphone.png"></button> <button
                                type="button" class="      "><img style="filter: grayscale(100%);"
                                    src="/mobifone.png"></button></div>
                    </div>
                    <div class=""><label class=" "> Mệnh giá </label> <select class="      ">
                            <option disabled="disabled" value="">Chọn mệnh giá</option>
                            <option class=" " value="10000">
                                10,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="20000">
                                20,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="30000">
                                30,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="50000">
                                50,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="100000">
                                100,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="200000">
                                200,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="300000">
                                300,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="500000">
                                500,000 VNĐ (nhận 100%)
                            </option>
                            <option class=" " value="1000000">
                                1,000,000 VNĐ (nhận 100%)
                            </option>
                        </select></div>
                    <div class=""><label class=" "> Mã thẻ </label> <input class="      ">
                    </div>
                    <div class=""><label class=" "> Serial thẻ </label> <input class="      ">
                    </div> <button type="submit" class="      ">
                        Nạp Thẻ
                    </button>
                </form>
            </div>
            <div class="        ">
                <div class="">
                    <p><span style="color: rgb(220, 38, 38);"><strong>Khi nạp thẻ mua nick tại web
                                shop&nbsp;nạp&nbsp;thẻ không trừ chiết khấu nạp 100k card = 100k tiền
                                shop</strong></span></p>
                    <p><span style="color: rgb(220, 38, 38);"><strong>Lưu ý: Vui lòng nạp đúng mệnh giá, sai mệnh giá
                                sẽ không được cộng tiền vào tài khoản.</strong></span></p>
                </div>
            </div>
            <div class="   ">
                <div class="      ">
                    <h2 class=" ">Thẻ Nạp Gần Nhất</h2>
                </div>
                <div id="list" class="">
                    <table class=" ">
                        <thead>
                            <tr class="       ">
                                <th class=" ">Thẻ Nạp</th>
                                <th class=" "><span class=" ">Mã thẻ/Seri</span>
                                    <span class=" ">Chi tiết</span>
                                </th>
                                <th class="   ">
                                    M.giá/T.nhận
                                </th>
                            </tr>
                        </thead>
                        <tbody class="   "></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
