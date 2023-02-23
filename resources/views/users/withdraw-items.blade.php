{{-- @extends('layouts_user.home')
@section('content') --}}
<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        <div class="gc-8">
            <h2 class="fw-7 text-xl mb-2">RÚT VẬT PHẨM (GAME)</h2>
            <div class="grid-temp-col-12 d-grid mb-3 bg-box">
                <button class="fw-8 text-white py-2 border-bot-w-red gc-4 position-relative rut-robux">
                    <span>Rút
                        <span class="d-inline-block">Robux</span><span class="d-none">RB</span></span>
                    <p class="text-sm fw-6">(Robux)</p>
                </button>
            </div>
            <div class="bg-box px-125 py-3 br-025 w-100 mb-3">
                <div class="tw-form-withdraw">
                    <div>
                        <div class="fw-7 pb-2 border-bot-w mb-2">
                            Hiện có:
                            <b class="t-color uppercase">
                                0
                                RB (Robux)
                            </b>
                        </div>
                        <div class="gap-3 grid-temp-col-12 d-grid">
                            <div class="gc-6">
                                <form class="px-0">
                                    <div class="mb-3"><label class="fw-6 text-sm d-block mb-2"><b>Bước
                                                1:</b> Chọn hình thức rút vật phẩm
                                        </label>
                                        <div class="el-select" style="width:100%;">
                                            <!---->
                                            <div class="el-input el-input--suffix">
                                                <!----><input type="text" readonly="readonly" autocomplete="off"
                                                    placeholder="Chọn hình thức rút vật phẩm." class="el-input__inner">
                                                <!----><span class="el-input__suffix"><span
                                                        class="el-input__suffix-inner"><i class="fa fa-arrow-up"></i>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </span>
                                                    <!---->
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                            <div class="el-select-dropdown el-popper"
                                                style="display: none; min-width: 425.6px;">
                                                <div class="el-scrollbar" style="">
                                                    <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                                        style="margin-bottom: -16px; margin-right: -16px;">
                                                        <ul class="el-scrollbar__view el-select-dropdown__list">
                                                            <!---->
                                                            <li class="el-select-dropdown__item"><span>Mua robux Bằng
                                                                    Gamepass
                                                                    Sever Vip </span></li>
                                                            <li class="el-select-dropdown__item"><span>Sever Vip Giới
                                                                    Hạn mua
                                                                    50k, Nên Mua Gamepass</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-horizontal">
                                                        <div class="el-scrollbar__thumb"
                                                            style="transform: translateX(0%);">
                                                        </div>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-vertical">
                                                        <div class="el-scrollbar__thumb"
                                                            style="transform: translateY(0%);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><label class="fw-6 text-sm d-block mb-2"><b>Bước
                                                2:</b> Chọn gói vật phẩm
                                        </label>
                                        <div class="el-select" style="width:100%;">
                                            <!---->
                                            <div class="el-input is-disabled el-input--suffix">
                                                <!----><input type="text" disabled="disabled" readonly="readonly"
                                                    autocomplete="off" placeholder="Chọn gói vật phẩm."
                                                    class="el-input__inner">
                                                <!----><span class="el-input__suffix"><span
                                                        class="el-input__suffix-inner"><i
                                                            class="el-select__caret el-input__icon el-icon-arrow-up"></i>
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                        <!---->
                                                    </span>
                                                    <!---->
                                                </span>
                                                <!---->
                                                <!---->
                                            </div>
                                            <div class="el-select-dropdown el-popper"
                                                style="display: none; min-width: 425.6px;">
                                                <div class="el-scrollbar" style="">
                                                    <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                                        style="margin-bottom: -16px; margin-right: -16px;">
                                                        <ul class="el-scrollbar__view el-select-dropdown__list">
                                                            <!---->
                                                            <li class="el-select-dropdown__item"><span>85 RB</span></li>
                                                            <li class="el-select-dropdown__item"><span>170 RB</span>
                                                            </li>
                                                            <li class="el-select-dropdown__item"><span>255 RB</span>
                                                            </li>
                                                            <li class="el-select-dropdown__item"><span>425 RB</span>
                                                            </li>
                                                            <li class="el-select-dropdown__item"><span>850 RB</span>
                                                            </li>
                                                            <li class="el-select-dropdown__item"><span>1700 RB</span>
                                                            </li>
                                                            <li class="el-select-dropdown__item"><span>2550 RB</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-horizontal">
                                                        <div class="el-scrollbar__thumb"
                                                            style="transform: translateX(0%);">
                                                        </div>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-vertical">
                                                        <div class="el-scrollbar__thumb"
                                                            style="transform: translateY(0%);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </div> <b class="mb-2">Bước 3:</b>
                                    <div class="mb-2"><label class="fw-6 text-sm d-block mb-2">
                                            Nhập Tài khoản, mật khẩu (Roblox)
                                        </label>
                                        <div class="mb-2 el-input">
                                            <!----><input type="text" autocomplete="off"
                                                placeholder="Tên đăng nhập Roblox" class="el-input__inner">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                        <div class="el-input">
                                            <!----><input type="text" autocomplete="off"
                                                placeholder="Nhập mật khẩu Roblox" class="el-input__inner">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="mb-2"><label class="fw-6 text-sm d-block mb-2"><b>Hoặc</b></label>
                                        <label class="fw-6 text-sm mb-1 d-block">
                                            Nhập link Gamepass / Svip
                                        </label>
                                        <div class="el-input">
                                            <!----><input type="text" autocomplete="off"
                                                placeholder="Nhập Link Gamepass / SeverVip" class="el-input__inner">
                                            <!---->
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="text-sm py-1 mb-2 t-color">
                                        <b> Vui lòng tắt xác minh 2
                                            bước
                                            (xem hướng dẫn). </b>
                                    </div>
                                    <div class="mb-3"><button
                                            class="text-white border rvp fw-6 px-075 w-100 br-025 h-25r">
                                            RÚT VẬT PHẨM
                                        </button></div>
                                </form>
                            </div>
                            <div class="gc-6 text-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-box px-125 py-3 br-025 w-100">
                <div class="mb-3 pb-2 border-bot-w d-flex justify-content-center align-items-center">
                    <div class="d-inline-block">
                        <h2 class="text-lg fw-6">
                            Danh Sách Rút Vật Phẩm
                        </h2>
                        <p class="text-sm">
                            Đơn hàng bị từ chối sẽ tự động hoàn lại tiền shop, dùng điện
                            thoại vui lòng kéo "bảng danh sách" ngang để xem hết thông
                            tin.
                        </p>
                    </div>
                    <button type="button"
                        class="text-white fw-6 px-1 rvp ml-2 br-025 position-relative border"
                        style="top: -1px"><i class="relative bx bx-revision mr-1" style="top: 1px"></i>
                        Làm mới
                    </button>
                </div>
                <!---->
                <div>
                    <table id="list" class="w-100">
                        <thead>
                            <tr
                                class="ttvp fw-6">
                                <th class="tt py-2 px-2">
                                    Thông tin
                                </th>
                                <th class="py-2 px-2"><span>Chi tiết</span></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white tw-border tw-border-t-0 tw-rounded"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
