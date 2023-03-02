@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card card-custom gutter-b">
            <div class="card-body p-0">
                <div class="wizard wizard-1" id="kt_contact_add" data-wizard-state="step-first" data-wizard-clickable="true">
                    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-7">
                            <form id="TypeValidation" class="form-horizontal" action="{{ route('recharge-auto.store') }}"
                                method="post">
                                @csrf
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Add Recharge Auto</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Nhà mạng</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select id="type_charge" name="type_charge" class="form-control" required>
                                                        <option value="" selected>Chọn nhà mạng</option>
                                                        <option value="0">Viettel</option>
                                                        <option value="1">Vinaphone</option>
                                                        <option value="1">Mobifone</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Mệnh giá thẻ</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <select id="money_received" name="money_received" class="form-control" required>
                                                        <option value="" selected>Chọn mệnh giá</option>
                                                        <option value="10000">10.000 VNĐ</option>
                                                        <option value="20000">20.000 VNĐ</option>
                                                        <option value="30000">30.000 VNĐ</option>
                                                        <option value="50000">50.000 VNĐ</option>
                                                        <option value="100000">100.000 VNĐ</option>
                                                        <option value="200000">200.000 VNĐ</option>
                                                        <option value="300000">300.000 VNĐ</option>
                                                        <option value="500000">500.000 VNĐ</option>
                                                        <option value="1000000">1.000.000 VNĐ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Mã Thẻ</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="pin" type="text" placeholder="Mã Thẻ" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Số Serial</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="serial" type="text" placeholder="Số Serial" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">ID User</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="user_id" type="number" placeholder="ID User" />
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
@endsection
