@extends('layouts.app')
@section('content')
<div class="content">
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
                                    <td class="text-center"><?= ($u->gender == 1) ? "Male" : "Female" ?></td>
                                    <td class="text-center">{{ $u->phone }}</td>
                                    <td class="text-center">{{ $u->email }}</td>
                                    <td class="text-center"><?= ($u->acount_type == 1) ? "Vip" : "Normal" ?></td>
                                    <td class="text-center"><?= ($u->status == 1) ? "Active" : "In-Active" ?></td>
                                    <td class="text-center">{{ $u->created_at }}</td>
                                    <td>
                                        <div class="td-actions text-center">
                                            <a rel="tooltip" class="btn btn-info btn-simple" href="{{ route('trashed.restore', $u->id) }}" data-original-title="Restore">
                                                <i class="material-icons">autorenew</i>
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
</div>
@endsection