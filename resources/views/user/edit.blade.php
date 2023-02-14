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
                    <h4 class="card-title">User Edit
                    </h4>
                    <form method="POST" action="{{ route('user.update',$user->id) }}">
                        @method("PUT")
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">FullName</label>
                                    <input type="text" class="form-control" name="fullname" value="{{ $user->fullname }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Gender</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option value="1" @if($user->gender == 1) selected @endif>Male</option>
                                        <option value="0" @if($user->gender == 0) selected @endif>Female</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Type</label>
                                    <select id="type" name="type" class="form-control">
                                        <option value="1" @if($user->type == 1) selected @endif>Vip</option>
                                        <option value="0" @if($user->type == 0) selected @endif>Normal</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="1" @if($user->status == 1) selected @endif>Active</option>
                                        <option value="0" @if($user->status == 0) selected @endif>In-Active</option>
                                    </select>
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-rose pull-right">Edit</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection