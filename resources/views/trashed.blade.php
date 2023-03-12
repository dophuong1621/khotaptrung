@extends('layouts.app')
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <i class="text-dark-50 ki ki-reload" style="margin-right: 10px;"></i>
                <span><h3 class="card-label">Trashed</h3></span>
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
                    <!--begin::Button-->
                    <a href="{{ route('trashed.restore-all') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                            <i class="ki ki-reload"></i>
                            <!--end::Svg Icon-->
                        </span>Restore All</a>
                    <!--end::Button-->
                </div>

            </div>
        </div>
        <!--end::Search Form-->
        <!--end: Search Form-->
        <!--begin: Datatable-->
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">UserName</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Created</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        @foreach ($user as $u)>
                        <td class="text-center">{{ $u->id }}</td>
                        <td class="text-center">{{ $u->username }}</td>
                        <td class="text-center"><?= $u->gender == 1 ? 'Male' : 'Female' ?></td>
                        <td class="text-center">{{ $u->phone }}</td>
                        <td class="text-center">{{ $u->email }}</td>
                        <td class="text-center"><?= $u->acount_type == 1 ? 'Vip' : 'Normal' ?></td>
                        <td class="text-center"><?= $u->status == 1 ? 'Active' : 'In-Active' ?></td>
                        <td class="text-center">{{ $u->created_at }}</td>
                        <td>
                            <div class="td-actions text-center">
                                <a class="" href="{{ route('trashed.restore', $u->id) }}">
                                    <i class="text-dark-50 ki ki-reload"></i>
                                </a>
                            </div>
                        </td>
                    </tr @endforeach>
                </tbody>
            </table>
            <div class="text-center">
                {{ $user->appends([
                        'user' => $user,
                    ])->links() }}
            </div>
        </div>
        <!--end: Datatable-->
    </div>
    {{-- <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">person</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Trased</h4>
                    <div class="text-right">
                        <a rel="tooltip" title="" class="btn btn-primary" href="{{ route('trashed.restore-all') }}" data-original-title="Restore All">
                            <i class="ti-plus">Restore All</i>
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">FullName</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Type</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr @foreach ($user as $u)>
                                    <td class="text-center">{{ $u->id }}</td>
                                    <td class="text-center">{{ $u->fullname }}</td>
                                    <td class="text-center"><?= $u->gender == 1 ? 'Male' : 'Female' ?></td>
                                    <td class="text-center">{{ $u->phone }}</td>
                                    <td class="text-center">{{ $u->email }}</td>
                                    <td class="text-center"><?= $u->acount_type == 1 ? 'Vip' : 'Normal' ?></td>
                                    <td class="text-center"><?= $u->status == 1 ? 'Active' : 'In-Active' ?></td>
                                    <td class="text-center">{{ $u->created_at }}</td>
                                    <td>
                                        <div class="td-actions text-center">
                                            <a class="" href="{{ route('trashed.restore', $u->id) }}">
                                                <i class="text-dark-50 ki ki-reload"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr @endforeach>
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $user->appends([
                                'user' => $user
                            ])->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
