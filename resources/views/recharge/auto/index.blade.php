@extends('layouts.app')
@php
    $type = ['Viettel', 'Vinaphone', 'Mobifone'];

@endphp
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <i class="text-dark-50 la la-bus" style="margin-right: 10px;"></i>
                <span>
                    <h3 class="card-label">Recharge Auto</h3>
                </span>
            </div>

        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <form class="" role="search" action="">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="Search..." name="search"
                                            id="kt_datatable_search_query" />
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 my-2 my-md-0">
                                    <button type="submit" class="btn btn-light-primary px-6 font-weight-bold">
                                        Search
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="card-toolbar" style="position: absolute;right: 0px;padding: 25px;">
                    <a href="{{ route('recharge-auto.create') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <i class="ki ki-plus"></i>
                        </span>ADD
                    </a>
                </div>

            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Loại</th>
                        <th class="text-center">Mệnh giá</th>
                        <th class="text-center">Mã Thẻ</th>
                        <th class="text-center">Số Serial</th>
                        <th class="text-center">ID User</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Create</th>
                        {{-- <th class="text-center">Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr
                        @foreach ($index as $i)>
                    <td class="text-center">{{ $i->id }}</td>
                    <td class="text-center">{{ $type[$i->type_charge] }} </td>
                    <td class="text-center">{{ number_format($i->money_received, 0, '.', '.') }}đ</td>
                    <td class="text-center">{{ $i->pin }}</td>
                    <td class="text-center">{{ $i->serial }}</td>
                    <td class="text-center">{{ $i->user_id ? $i->user_id : 'Vãng lai' }}</td>
                    <td class="text-center">{{ $i->user[0]->username }}</td>
                    <td class="text-center">{{ $i->created_at }}</td>
                    {{-- <td>
                        <div class="td-actions text-center" style=" display: flex; justify-content: space-evenly;">
                            <a rel="tooltip" href="" data-original-title="Edit">
                                <i class="flaticon2-pen ki text-primary"></i>
                            </a>
                            <form action="">
                                <button type="submit" class="closeU" style="border: 0px; background-color: white;color: red;">
                                    <i class="ki-bold-close ki text-danger"></i>
                                </button>
                            </form>
                        </div>
                    </td> --}}
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="content">
    <div class="row">
</div> --}}
@endsection
