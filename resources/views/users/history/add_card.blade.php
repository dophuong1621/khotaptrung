@extends('users.layouts_user.home')
@section('content')
<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        <div class="gc-8">
            <div class="bg-box br-025 py-3 px-125 w-100">
                <div class="border-bot-w mb-3 pb-2">
                    <h2 class="text-lg fw-6">Danh Sách Nạp Thẻ</h2>
                    <p class="text-sm">
                        Tháng 02 nạp:
                        <b>0đ </b> - Tổng nạp:
                        <b>0đ </b>
                    </p>
                </div>
                <!---->
                <div>
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
