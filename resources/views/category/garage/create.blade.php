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
                        <form id="TypeValidation" class="form-horizontal" action="{{ route('garage-category.store') }}"
                            method="post">
                            @csrf
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">Add Category Garage</h3>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Fullname</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    name="title" type="text" placeholder="FullName" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <select id="status" name="status" class="form-control">
                                                    <option value="0">In-Active</option>
                                                    <option value="1">Active</option>
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
                    <i class="material-icons">commute</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Add Driver</h4>
                    <div class="col-md-12">
                        <form id="TypeValidation" class="form-horizontal" action="{{ route('garage-category.store')}}" method="post">
                            @csrf
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">FullName</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="title" name="required" required="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Status</label>
                                    <div class="col-sm-7">
                                        <select id="status" name="status" class="form-control">
                                            <option value="0">In-Active</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-rose btn-fill">Add Garage</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
