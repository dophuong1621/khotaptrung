@extends('users.layouts_user.home')
@section('content')
<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        <div class="gc-8 gc-12i">
            <div class="grid-temp-col-12 bg-box gap-3 d-grid">
                <div class="gc-12">
                    <div class="py-sm-3 px-125 w-100 br-025 p-1r">
                        <div class="mb-3 pb-2 border-tb">
                            <h2 class="fw-6 text-lg">Thông báo</h2>
                            <p class="text-xs">
                                Những thông báo quá 7 ngày sẽ tự động xóa.
                            </p>
                        </div>
                        <!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
