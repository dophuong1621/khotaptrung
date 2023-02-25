@extends('users.layouts_user.home')
@section('content')

<div>
    <div class="px-2 gap-2 ct d-grid mx-auto">
        @include('users.box-left-content')
        @include('users.btn-menu')
        <div class="gc-8 gc-12i">
            <div class="bg-box py-sm-3 px-125 w-100 br-025 p-05r">
                <div class="mb-2 mb-sm-3 pb-2 border-bot-w">
                    <h2 class="fw-6 text-lg">Danh Sách Mua Vật Phẩm (Dịch Vụ)</h2>
                    <p class="text-sm">Đơn hàng bị từ chối sẽ tự động hoàn lại tiền shop, dùng điện thoại vui lòng kéo
                        "bảng danh sách" ngang để xem hết thông tin.</p>
                </div>
                <!---->
                <div>
                    <div class="fw-6 my-2 t-color">
                        Vui lòng đợi shop duyệt đơn tối đa 48 tiếng.
                    </div>
                    <div class="el-table el-table--fit el-table--enable-row-hover" style="width: 100%;">
                        <div class="hidden-columns">
                            <div></div>
                            <div></div>
                        </div>
                        <div class="el-table__header-wrapper">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__header"
                                style="width: 867px;">
                                <colgroup>
                                    <col name="el-table_1_column_1" width="747">
                                    <col name="el-table_1_column_2" width="120">
                                    <col name="gutter" width="0">
                                </colgroup>
                                <thead class="has-gutter">
                                    <tr class="">
                                        <th colspan="1" rowspan="1"
                                            class="el-table_1_column_1     is-leaf el-table__cell">
                                            <div class="cell">THÔNG TIN</div>
                                        </th>
                                        <th colspan="1" rowspan="1"
                                            class="el-table_1_column_2     is-leaf el-table__cell">
                                            <div class="cell">TRẠNG THÁI</div>
                                        </th>
                                        <th class="el-table__cell gutter" style="width: 0px; display: none;"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="el-table__body-wrapper is-scrolling-none">
                            <table cellspacing="0" cellpadding="0" border="0" class="el-table__body"
                                style="width: 867px;">
                                <colgroup>
                                    <col name="el-table_1_column_1" width="747">
                                    <col name="el-table_1_column_2" width="120">
                                </colgroup>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="el-table__empty-block" style="height: 100%; width: 867px;"><span
                                    class="el-table__empty-text">Không có dữ liệu</span></div>
                        </div>
                        <div class="el-table__column-resize-proxy" style="display: none;"></div>
                    </div>
                    <div class="my-2">
                        <!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
