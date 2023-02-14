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
                    <h4 class="card-title">Driver Edit
                    </h4>
                    <form method="POST" action="{{ route('driver-category.update',$driver->id) }}">
                        @method("PUT")
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $driver->title }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="1" @if($driver->status == 1) selected @endif>Active</option>
                                        <option value="0" @if($driver->status == 0) selected @endif>In-Active</option>
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