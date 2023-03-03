@extends('users.layouts_user.home')
@section('content')
    <div class="mw-72r mx-auto px-2">
        <span class="text-sm position-relative" style="top: 1px">DANH MỤC: </span>
        <h2 class="mb-2 t-color text-lg fw-6 uppercase">
            Danh sách bài viết
        </h2>
        <div class="d-grid grid-temp-col-12 gap-075 py-2">
            @foreach ($post as $p)
                <div class="gc-3 bg-box position-relative bor-w-1 br-025">
                    <a href="{{ route('postshowPost', $p->id) }}">
                        <div class="postion-relative mb-5r">
                            <span
                                class="new-id position-absolute d-inline-flex align-items-center px-2 h-15r bg-color-red text-white fw-6 br-025 text-sm"
                                style="top: 8px; left: 8px">
                                MS {{ $p->id }}
                            </span>
                            <img src="{{ $p->image }}" class="h-10r w-100 img-post">
                            <div class="border-bot-w py-2 text-sm px-2 title text-black">
                                <i class="t-color bx bxs-hot"></i>
                                {{ $p->title }}
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
                                            <b class="fw-7"><span>{{ $p->content }}</span></b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute right-0 bottom-0 left-0">
                            <div class="border-top-w ct-down px-2 py-1">
                                <ul class="br-0125 w-100 fw-5">
                                    <span class="w-100 text-center t-color d-inline-block fw-8 px-2">
                                        {{ number_format($p->price, 0, '.', '.') }}<small>đ</small>
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
