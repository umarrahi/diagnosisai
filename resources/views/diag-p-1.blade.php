@extends('backend.layouts.app')

@section('title')
Personal Info
@endsection

@section('content')
<div class="dashboard-body">

    <div class="row">
        <div class="col-xxl-2 col-md-2 col-sm-2"></div>

        <div class="col-xxl-8 col-md-8 col-sm-2">
            <!-- Step List Start -->
            <ul class="step-list mb-24">
                <li
                    class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6  active">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Personal Info #1
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Physical Details #2
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Vital Info #3
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Sleep & Mood #4
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Lifestyle & Energy #5
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Family Info #6
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Medical History #7
                    <span class="line position-relative"></span>
                </li>
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
                    <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                    Diagnostic Report
                    <span class="line position-relative"></span>
                </li>
            </ul>
            <!-- Step List End -->

            <!-- Tab Start -->
            <div class="card">
                <div class="card-body p-40">
                    <form action="#">
                        <div class="row gy-20">

                            <div class="col-sm-12 gap-2 0 d-flex align-items-center flex-wrap">
                                <span class="fs-1 text-gray-400">I am</span>
                                <div class="">
                                    <select id="" name="gender" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                        <option value="1" disabled selected></option>
                                        <option value="2">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                                <span class="fs-1 text-gray-400">. My name is </span>
                                <div class="">
                                    <input type="text" name="name" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                </div>
                                <span class="fs-1 text-gray-400">.</span>
                                <span class="fs-1 text-gray-400">I am following</span>
                                <div class="">
                                    <select id="" name="religion" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                        <option value="1"></option>
                                        <option value="2">Islam</option>
                                        <option value="2">Buddhism</option>
                                        <option value="2">Judaism</option>
                                        <option value="2">Christianity </option>
                                    </select>
                                </div>
                                <span class="fs-1 text-gray-400 ">as religion. I need my health details on my mobile</span>
                                <div class="">
                                    <input type="tel" name="cell_no" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                </div>
                                <span class="fs-1 text-gray-400">or email address</span>
                                <div class="">
                                    <input type="email" name="email" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                </div>
                                <span class="fs-1 text-gray-400">.</span>
                            </div>
                            <div class="flex-align justify-content-end gap-8">
                                <a href="{{url('/')}}" class="btn btn-outline-main rounded-pill py-9">Back</a>
                                <a href="{{url('/step2')}}" class="btn btn-main rounded-pill py-9">Next</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Tab End -->
        </div>

        <div class="col-xxl-2 col-md-2 col-sm-2"></div>
    </div>

</div>
@endsection