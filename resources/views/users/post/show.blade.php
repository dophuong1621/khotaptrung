@extends('users.layouts_user.home')
@section('content')
    <div class="mw-72r mx-auto px-2 mt-2">
        <div class="bg-box d-grid grid-temp-col-12 gap-3 padding-075r br-025">
            <div class="gc-6">
                <div>
                    <div class="position-relative">
                        <img src="{{ $postShow->image }}"
                            class="h-18r w-100 object-fit-fill object-position-center br-025 cursor-pointer">

                    </div>
                    {{-- <div class="position-relative px-25 mt-3">
                        <div class="swiper-container swiper swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-active" style="width: 85.6px; margin-right: 10px;">
                                    <div
                                        class="br-025 tw-h-12 text-white d-flex d-flex-col align-items-center tw-justify-center cursor-pointer tw-select-none">
                                        <div class="position-relative">
                                            <img class="w-100 tw-h-12 tw-object-fill tw-object-center br-025 bor-w-1 bor-solid-2 bor-w-1 bor-solid-red-600 lazyLoad isLoaded"
                                                src="{{ $postShow->image }}">
                                            <span
                                                class="position-absolute tw-inline-block tw-px-1 br-025-sm text-xs fw-6 text-white tw-bg-gray-500 tw-bg-red-700"
                                                style="top: 3px; right: 3px;">
                                                1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tw-left-0 position-absolute swiper-button-prev tw-z-50 swiper-button-disabled"
                                tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true"><button
                                    class="tw-w-10 text-2xl tw-bg-amber-500 tw-h-12 br-025 text-white"><i
                                        class="bx bx-chevron-left"></i></button></div>
                            <div class="position-absolute tw-right-0 swiper-button-next tw-z-50 swiper-button-disabled"
                                tabindex="-1" role="button" aria-label="Next slide" aria-disabled="true"><button
                                    class="tw-w-10 text-2xl tw-bg-amber-500 tw-h-12 br-025 text-white"><i
                                        class="bx bx-chevron-right"></i></button></div><span class="swiper-notification"
                                aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="gc-6">
                <div class="mb-075 mt-0 dx text-white py-1 px-2 br-025 ms">
                    <div class="uppercase text-xl fw-7">
                        Mã Số: {{ $postShow->id }}
                    </div>
                    <div class="text-xs position-relative fw-6 uppercase text-dm">
                        DANH MỤC:
                        <span>ACC ROBLOX TỰ CHỌN</span>
                    </div>
                </div>
                <div
                    class="rounded-x-025 bg-color py-2 px-2 d-flex justify-content-between align-items-center position-relative">
                    <div class="t-color">
                        <div class="position-relative text-sm fw-6" style="top: 2px">
                            <small>
                                <b class="fw-7">THẺ CÀO</b>
                            </small>
                        </div>
                        <b class="text-2xl">{{ number_format($postShow->price, 0, '.', '.') }}<small>đ</small></b>
                    </div>
                    <div class="text-xs fw-7 t-color"><small>hoặc</small></div>
                    <div class="t-color">
                        <div class="position-relative text-sm fw-6" style="top: 2px">
                            <small>
                                <b class="fw-7">ATM/MOMO</b> chỉ cần</small>
                        </div>
                        <b class="text-2xl">
                            {{ number_format($postShow->price, 0, '.', '.') }}<small>đ</small>
                        </b>
                    </div>
                </div>
                <div>
                    <!---->
                    <div class="mb-075 bor-w-1 bor-solid bor-gray bor-bot-x-ra-025">
                        <div class="d-grid grid-temp-col-12 gap-2 py-1 bor-w-1 bor-gray bor-solid">
                            <div class="gc-5">
                                <i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                Level
                            </div>
                            <div class="gc-7 fw-6 text-capitalize"><span>2450</span></div>
                        </div>
                        <div class="d-grid grid-temp-col-12 gap-2 py-1 bor-w-1 bor-solid bor-gray">
                            <div class="gc-5"><i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                Thông tin
                            </div>
                            <div class="gc-7 fw-6 text-capitalize">
                                <span>{{ $postShow->content }}</span>
                            </div>
                        </div>
                        <div class="d-grid grid-temp-col-12 gap-2 py-1">
                            <div class="gc-5"><i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                Nổi bật
                            </div>
                            <div class="gc-7 fw-6 text-capitalize">
                                <div>
                                    <div><span>{{ $postShow->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="position-sticky top-35r my-075 px-075 br-025 py-2 text-xl text-white fw-7 dx br-025 w-100 z-i-50">
                    <span class="position-relative pl-2r">
                        <i class="position-absolute text-3xl bx bxs-cart-add tw-mr-1" style="top: -4px; left: -8px"></i>
                        MUA NGAY
                    </span>
                </button>
                <div class="my-075 w-100 text-center text-xl text-gray-800 br-025 fw-7">
                    NẠP QUA ATM/MOMO
                    <p><a class="focus:tw-outline-none cursor-pointer t-color fw-7 atm-post">
                            XEM TẠI ĐÂY</a></p>
                </div>
            </div>
        </div>
        <div class="mt-25r text-xl fw-7">TÀI KHOẢN ĐỒNG GIÁ</div>
        <div class="d-grid grid-temp-col-12 gap-2 py-2">
            @foreach ($dongGia as $dg)
                <div class="gc-3 bg-box position-relative bor-w-1 br-025">
                    <a href="{{ route('postshowPost', $dg->id) }}">
                        <div class="postion-relative mb-5r">
                            <span
                                class="new-id position-absolute d-inline-flex align-items-center px-2 h-15r bg-color-red text-white fw-6 br-025 text-sm"
                                style="top: 8px; left: 8px">
                                MS {{ $dg->id }}
                            </span>
                            <img src="{{ $dg->image }}" class="h-10r w-100 img-post">
                            <div class="border-bot-w py-2 text-sm px-2 title text-black">
                                <i class="t-color bx bxs-hot"></i>
                                {{ $dg->title }}
                            </div>
                            <div class="my-2 py-1 px-2 position-relative">
                                <div class="d-grid grid-temp-col-12 rg-025r lh-15r text-xs text-black"
                                    style="font-size: 15px; font-weight: 500">
                                    <div class="gc-12 text-sm">
                                        <p>
                                            <i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                            Level:
                                            <b class="fw-7"><span>2450</span></b>
                                        </p>
                                    </div>
                                    <div class="gc-12 text-sm element">
                                        <p><i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                            Thông tin:
                                            <b class="fw-7"><span>{{ $dg->content }}</span></b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute right-0 bottom-0 left-0">
                            <div class="border-top-w ct-down px-2 py-1">
                                <ul class="br-0125 w-100 fw-5">
                                    <span class="w-100 text-center t-color d-inline-block fw-8 px-2">
                                        {{ number_format($dg->price, 0, '.', '.') }}<small>đ</small>
                                    </span>
                                </ul>
                            </div>
                            <div
                                class="w-100 text-center cursor-pointer tw-border ct-down text-white uppercase dx fw-6 py-1 px-075">
                                <i class="text-2xl bx bxs-cart-add"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-25r text-xl fw-7">TÀI KHOẢN ĐỀ XUẤT</div>
        <div class="d-grid grid-temp-col-12 gap-2 py-2">
            @foreach ($dongGia as $dg)
                <div class="gc-3 bg-box position-relative bor-w-1 br-025">
                    <a href="{{ route('postshowPost', $dg->id) }}">
                        <div class="postion-relative mb-5r">
                            <span
                                class="new-id position-absolute d-inline-flex align-items-center px-2 h-15r bg-color-red text-white fw-6 br-025 text-sm"
                                style="top: 8px; left: 8px">
                                MS {{ $dg->id }}
                            </span>
                            <img src="{{ $dg->image }}" class="h-10r w-100 img-post">
                            <div class="border-bot-w py-2 text-sm px-2 title text-black">
                                <i class="t-color bx bxs-hot"></i>
                                {{ $dg->title }}
                            </div>
                            <div class="my-2 py-1 px-2 position-relative">
                                <div class="d-grid grid-temp-col-12 rg-025r lh-15r text-xs text-black"
                                    style="font-size: 15px; font-weight: 500">
                                    <div class="gc-12 text-sm">
                                        <p>
                                            <i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                            Level:
                                            <b class="fw-7"><span>2450</span></b>
                                        </p>
                                    </div>
                                    <div class="gc-12 text-sm element">
                                        <p><i class="position-relative bx bx-caret-right" style="top: 1px"></i>
                                            Thông tin:
                                            <b class="fw-7"><span>{{ $dg->content }}</span></b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute right-0 bottom-0 left-0">
                            <div class="border-top-w ct-down px-2 py-1">
                                <ul class="br-0125 w-100 fw-5">
                                    <span class="w-100 text-center t-color d-inline-block fw-8 px-2">
                                        {{ number_format($dg->price, 0, '.', '.') }}<small>đ</small>
                                    </span>
                                </ul>
                            </div>
                            <div
                                class="w-100 text-center cursor-pointer tw-border ct-down text-white uppercase dx fw-6 py-1 px-075">
                                <i class="text-2xl bx bxs-cart-add"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
