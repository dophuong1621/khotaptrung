@extends('users.layouts_user.home')
@section('content')
<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        @include('users.btn-menu')
        <div class="gc-8 gc-12i">
            <div class="bg-box py-sm-3 px-125 w-100 br-025 p-05r">
                <div class="mb-sm-3 mb-2 pb-2 border-bot-w">
                    <h2 class="fw-6 text-lg">Danh Sách Mua Vật Phẩm</h2>
                    <p class="text-sm">Lịch sử hòm vật phẩm mà bạn đã mua.</p>
                </div>
                <!---->
                <div>
                    <table class="rounded-x-025 w-100">
                        <thead>
                            <tr class="ls-0025 vct fw-6 bor-1 border-b-0">
                                <th class="px-2 py-2">Thông tin</th>
                                <th class="px-2 py-2 tw-max-w-sm">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white tw-border tw-border-t-0 tw-rounded"></tbody>
                    </table>
                    <div class="my-2">
                        <div data-v-05c811c3="" class="tw-min-w-max">
                            <section data-v-05c811c3=""
                                class="tw-flex tw-justify-between tw-py-1 tw-text-gray-700 tw-font-montserrat tw-select-none">
                                <ul data-v-05c811c3="" class="tw-flex tw-items-center">
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
