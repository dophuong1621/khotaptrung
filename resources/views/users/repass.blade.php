@extends('users.layouts_user.home')
@section('content')

<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        <div class="gc-8">
            <div class="py-3 px-125 w-100 br-025 bg-box">
                <div class="pb-2 border-bot-w mb-3">
                    <h2 class="fw-6 text-lg dmk">Đổi Mật Khẩu</h2>
                    <p class="text-xs">
                        Để bảo mật tài khoản, vui lòng không chia sẻ cho người khác.
                    </p>
                </div>
                <!---->
                <form class="mkht">
                    <div class="mb-2">
                        <label class="text-sm">
                            Mật khẩu hiện tại
                        </label>
                        <input autocomplete="" type="password" value=""
                            class="px-075 bor-w-1 w-100 h-25r br-025">
                    </div>
                    <div class="mb-2">
                        <label class="text-sm">
                            Mật khẩu mới
                        </label>
                        <input autocomplete="" type="password" value=""
                            class="px-075 bor-w-1 w-100 h-25r br-025">
                    </div>
                    <div class="mb-3">
                        <label class="text-sm">
                            Nhập lại mật khẩu mới
                        </label>
                        <input type="password" autocomplete="" value=""
                            class="px-075 bor-w-1 w-100 h-25r br-025">
                    </div>
                    <button type="submit"
                        class="text-white dx fw-6 px-2r br-025 h-25r">
                        Xác Nhận
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
