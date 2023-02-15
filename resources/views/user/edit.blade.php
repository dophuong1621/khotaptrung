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
                            <form method="POST" action="{{ route('user.update', $user->id) }}">
                                @method('PUT')
                                @csrf
                                <!--begin::Form Wizard Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Edit User</h3>

                                    <div class="row">
                                        <div class="col-xl-12">
                                            {{-- Avata --}}
                                            {{-- <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <div class="image-input image-input-outline" id="kt_contact_add_avatar">
                                                    <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_2.jpg)"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                        <input type="hidden" name="profile_avatar_remove" />
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> --}}
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Fullname</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="fullname" type="text" value="{{ $user->fullname }}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select id="gender" name="gender" class="form-control">
                                                        <option value="1"
                                                            @if ($user->gender == 1) selected @endif>Male
                                                        </option>
                                                        <option value="0"
                                                            @if ($user->gender == 0) selected @endif>Female
                                                        </option>
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
                                                            name="phone" value="{{ $user->phone }}"
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
                                                            name="email" value="{{ $user->email }}"
                                                            placeholder="Email" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select name="account_type" class="form-control">
                                                        <option value="1"
                                                            @if ($user->account_type == 1) selected @endif>Vip
                                                        </option>
                                                        <option value="0"
                                                            @if ($user->account_type == 0) selected @endif>Normal
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select name="status" class="form-control">
                                                        <option value="1"
                                                            @if ($user->account_type == 1) selected @endif>Active
                                                        </option>
                                                        <option value="0"
                                                            @if ($user->account_type == 0) selected @endif>In-Active
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
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">User Edit
                        </h4>
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">FullName</label>
                                        <input type="text" class="form-control" name="fullname"
                                            value="{{ $user->fullname }}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Gender</label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="1" @if ($user->gender == 1) selected @endif>Male
                                            </option>
                                            <option value="0" @if ($user->gender == 0) selected @endif>Female
                                            </option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Phone</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $user->phone }}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $user->email }}">
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Type</label>
                                        <select id="type" name="type" class="form-control">
                                            <option value="1" @if ($user->type == 1) selected @endif>Vip
                                            </option>
                                            <option value="0" @if ($user->type == 0) selected @endif>Normal
                                            </option>
                                        </select>
                                        <span class="material-input"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating ">
                                        <label class="control-label">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="1" @if ($user->status == 1) selected @endif>Active
                                            </option>
                                            <option value="0" @if ($user->status == 0) selected @endif>
                                                In-Active</option>
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
