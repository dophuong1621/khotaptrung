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
                            <form id="TypeValidation" class="form-horizontal" action="{{ route('danh-sach-bai-viet.store') }}"
                                method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Thêm bài viết</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Tiêu đề</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="title" type="text" placeholder="Tiêu đề" required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Nội dung</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="content" type="text" placeholder="Nội dung" required/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Giá</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input class="form-control form-control-lg form-control-solid"
                                                        name="price" type="number" placeholder="Giá" required />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Ảnh</label>
                                                <div class="col-lg-9 col-xl-9">
                                                    <input type="file" class="form-control form-control-lg form-control-solid"
                                                        name="image" placeholder="Ảnh" required />
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
