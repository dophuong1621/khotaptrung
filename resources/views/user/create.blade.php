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
                            <form id="TypeValidation" class="form-horizontal" action="{{ route('user.store') }}"
                                method="post">
                                @csrf
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Add User</h3>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Fullname</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="fullname" type="text" placeholder="FullName"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select id="gender" name="gender" class="form-control">
                                                        <option value="0">Female</option>
                                                        <option value="1">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="phone"
                                                            placeholder="Phone" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-at"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text"
                                                            class="form-control form-control-lg form-control-solid"
                                                            name="email" placeholder="Email" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select id="account_type" name="account_type" class="form-control">
                                                        <option value="0">Normal</option>
                                                        <option value="1">Vip</option>
                                                    </select>
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
                    <i class="material-icons">person_add</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Add User</h4>

                    <div class="col-md-12">

                        <form id="TypeValidation" class="form-horizontal" action="{{ route('user.store')}}" method="post">
                            @csrf
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Fullname</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="text" name="fullname" name="required" required="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Email</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="email" name="email" email="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Gender</label>
                                    <div class="col-sm-7">
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Phone</label>
                                    <div class="col-sm-7">
                                        <div class="form-group label-floating">
                                            <label class="control-label"></label>
                                            <input class="form-control" type="tel" name="phone" email="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Type</label>
                                    <div class="col-sm-7">
                                        <select id="type" name="type" class="form-control">
                                            <option value="1">Vip</option>
                                            <option value="0">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Status</label>
                                    <div class="col-sm-7">
                                        <select id="status" name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-rose btn-fill">Add User</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}
@endsection
