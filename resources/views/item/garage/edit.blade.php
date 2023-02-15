@extends('layouts.app')
@section('content')
<div class="container">
    <!--begin::Card-->
    <div class="card card-custom gutter-b">
        <!--begin::Body-->
        <div class="card-body p-0">
            <!--begin::Wizard-->
            <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                <!--begin::Wizard Body-->
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-7">
                        <!--begin::Form Wizard Form-->
                        <form method="POST" action="{{ route('garage-item.update',$garage->id) }}">
                            @method('PUT')
                            @csrf
                            <!--begin::Form Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">Edit Item Garage</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Fullname</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="title" type="text" value="{{ $garage->title }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <select name="status" class="form-control">
                                                    <option value="1"
                                                        @if ($garage->status == 1) selected @endif>Active
                                                    </option>
                                                    <option value="0"
                                                        @if ($garage->status == 0) selected @endif>In-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-top pt-10" style="text-align:center">
                                <button type="submit"
                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">maps_home_work</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Garage Edit
                    </h4>
                    <form method="POST" action="{{ route('garage-item.update',$garage->id) }}">
                        @method("PUT")
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{ $garage->title }}">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-floating ">
                                    <label class="control-label">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="1" @if($garage->status == 1) selected @endif>Active</option>
                                        <option value="0" @if($garage->status == 0) selected @endif>In-Active</option>
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
</div> --}}
@endsection
