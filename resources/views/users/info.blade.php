@extends('users.layouts_user.home')
@section('content')
    <div>
        <div class="px-2 gap-2 ct d-grid mx-auto">
            @include('users.box-left-content')
            <div class="gc-8 gc-12i">
                <div class="gap-3 d-grid grid-temp-col-12">
                    <div class="d-sm-none gc-12 d-block">
                        <div class="d-grid grid-temp-col-12 gap-2 padding-05r bg-box br-025">
                            <div class="gc-3 d-flex align-items-center ">
                                <img src="/assetsU/image/unknown-avatar.jpg" class="w-100 br-9999 bor-1">
                            </div>
                            <div class="gc-9 d-flex align-items-center">
                                <div class="ms-2">
                                    <p><b>ID:</b> 1650845</p>
                                    <p class="text-base"><b>Số dư:</b> <span
                                            class="t-color fw-7">0đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gc-12">
                        <div class="fw-6 px-075 py-2 bg-box br-025 gap-2 grid-temp-col-12 d-grid mb-1">
                            <div class="gc-5">Tên Tài Khoản</div>
                            <div class="gc-7">
                                jirim162
                            </div>
                        </div>
                        <div class="fw-6 px-075 py-2 bg-box br-025 gap-2 grid-temp-col-12 d-grid mb-1">
                            <div class="gc-5">Số Điện Thoại</div>
                            <div class="gc-7">
                                0522901601
                            </div>
                        </div>
                        <div class="fw-6 px-075 py-2 bg-box br-025 gap-2 grid-temp-col-12 d-grid mb-1">
                            <div class="gc-5">Email</div>
                            <div class="gc-7">
                                ----------
                            </div>
                        </div>
                        <div class="fw-6 px-075 py-2 bg-box br-025 gap-2 grid-temp-col-12 d-grid mb-1">
                            <div class="gc-5">Ngày Tham Gia</div>
                            <div class="gc-7">
                                22/02/2023 15:13:16
                            </div>
                        </div>
                        <div class="fw-6 px-075 py-2 bg-box br-025 gap-2 grid-temp-col-12 d-grid mb-1">
                            <div class="gc-5 d-flex align-items-center">Thoát</div>
                            <div class="gc-7"><button class="fw-7 text-xs py-1 px-2 br-025 text-white dx">
                                    Đăng xuất
                                </button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
