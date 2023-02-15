@extends('layouts.app')
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <i class="text-dark-50 la la-bus" style="margin-right: 10px;"></i>
                <span>
                    <h3 class="card-label">Bus Item</h3>
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
                    <!--begin::Button-->
                    <a href="{{ route('bus-item.create') }}" class="btn btn-primary font-weight-bolder">
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
                        <th class="text-center">Plate Number</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Created</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        @foreach ($bus as $b)>
                    <td class="text-center">{{ $b->id }}</td>
                    <td class="text-center">{{ $b->title }}</td>
                    <td class="text-center"><?= $b->status == 1 ? 'Active' : 'In-active' ?></td>
                    <td class="text-center">{{ $b->created_at }}</td>
                    <td>
                        <div class="td-actions text-center" style=" display: flex; justify-content: space-evenly;">
                            <a rel="tooltip" href="{{ route('bus-item.edit', $b->id) }}" data-original-title="Edit">
                                <i class="flaticon2-pen ki text-primary"></i>
                            </a>
                            <form method="post" action="{{ route('bus-item.destroy', $b->id) }}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="closeU" style="border: 0px; background-color: white;color: red;"><i class="ki-bold-close ki text-danger"></i></button>
                            </form>
                        </div>
                    </td>
                </tr @endforeach>
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="content">
    <div class="row">
</div> --}}
@endsection
