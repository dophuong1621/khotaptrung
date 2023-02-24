@extends('users.layouts_user.home')
@section('content')

<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        <div class="gc-8">
            <div class="px-125 py-3 br-025 w-100 mb-3 bg-box">
                <div class="pb-2 border-bot-w mb-3">
                    <h2 class="text-lg fw-6 ntc">Nạp Thẻ Cào</h2>
                    <p class="text-xs">
                        Tự động 24/7 - Nhập sai mệnh giá sẽ mất thẻ.
                    </p>
                </div>
                <!---->
                <form class="form-nt">
                    <div class="mb-2">
                        <label class="text-sm">
                            Nhà mạng <b>(Ưu tiên Viettel, Vinaphone)</b></label>
                        <div class="text-sm gap-2 d-grid grid-temp-col-12">
                            <button type="button" class="fw-7 px-075 br-025 bor-w-1 gc-4 h-25r bg-box">
                                <img style="filter: grayscale(100%); max-width: 100%; height: auto;" src="assetsU/image/viettel.png">
                            </button>
                            <button type="button" class="fw-7 px-075 br-025 bor-w-1 gc-4 h-25r bg-box">
                                <img style="filter: grayscale(100%); max-width: 100%; height: auto;" src="assetsU/image/vinaphone.png">
                            </button>
                            <button type="button" class="fw-7 px-075 br-025 bor-w-1 gc-4 h-25r bg-box">
                                <img style="filter: grayscale(100%); max-width: 100%; height: auto;" src="assetsU/image/mobifone.png">
                            </button>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="text-sm"> Mệnh giá </label>
                        <select class="px-075 bor-w-1 br-025 w-100 h-25r bor-coler-be">
                            <option disabled="disabled" value="">Chọn mệnh giá</option>
                            <option class="fw-5 t-color" value="10000">
                                10,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="20000">
                                20,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="30000">
                                30,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="50000">
                                50,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="100000">
                                100,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="200000">
                                200,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="300000">
                                300,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="500000">
                                500,000 VNĐ (nhận 100%)
                            </option>
                            <option class="fw-5 t-color" value="1000000">
                                1,000,000 VNĐ (nhận 100%)
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="text-sm"> Mã thẻ </label>
                        <input class="px-075 bor-w-1 br-025 w-100 h-25r bor-coler-be">
                    </div>
                    <div class="mb-3">
                        <label class="text-sm"> Serial thẻ </label>
                        <input class="px-075 bor-w-1 br-025 w-100 h-25r bor-coler-be">
                    </div>
                    <button type="submit" class="br-025 h-25r btn-nt fw-6 t-color-white">
                        Nạp Thẻ
                    </button>
                </form>
            </div>
            <div class="line-h-175 text-sm py-1 px-075 br-025 my-2 text-br-color bg-box">
                <div>
                    <p><span style="color: rgb(220, 38, 38);"><strong>Khi nạp thẻ mua nick tại web
                                shop&nbsp;nạp&nbsp;thẻ không trừ chiết khấu nạp 100k card = 100k tiền
                                shop</strong></span></p>
                    <p><span style="color: rgb(220, 38, 38);"><strong>Lưu ý: Vui lòng nạp đúng mệnh giá, sai mệnh giá
                                sẽ không được cộng tiền vào tài khoản.</strong></span></p>
                </div>
            </div>
            <div class="bg-box br-025 mt-3 w-100">
                <div class="py-075 px-125 border-bot-w">
                    <h2 class="fw-6 text-lg">Thẻ Nạp Gần Nhất</h2>
                </div>
                <div id="list" class="padding-1r">
                    <table class="tb-tn w-100">
                        <thead>
                            <tr class="tr-table-tn fw-6">
                                <th class="px-2 py-2 ">Thẻ Nạp</th>
                                <th class="px-2 py-2">
                                    <span class="d-block">Mã thẻ/Seri</span>
                                    <span class="d-none">Chi tiết</span>
                                </th>
                                <th class="px-2 py-2">
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
@endsection