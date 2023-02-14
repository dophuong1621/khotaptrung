@extends('layouts.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">commute</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Driver</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Created</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr @foreach ($driver as $d)>
                                    <td class="text-center">{{ $d->id }}</td>
                                    <td class="text-center">{{ $d->title }}</td>
                                    <td class="text-center"><?= ($d->status == 1)? "Active": "In-active" ?></td>
                                    <td class="text-center">{{ $d->created_at }}</td>
                                    <td>
                                        <div class="td-actions text-center">
                                            <a rel="tooltip" class="btn btn-info btn-simple" href="{{ route('driver-category.edit', $d->id) }}">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr @endforeach>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection