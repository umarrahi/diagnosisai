@extends('backend.layouts.app')

@section('title')
Sleep & Mood
@endsection

@section('content')
<div class="dashboard-body">

    <div class="row">
        <div class="col-xxl-2 col-md-2 col-sm-2"></div>

        <div class="col-xxl-8 col-md-8 col-sm-2">
            <!-- Step List Start -->
            <ul class="step-list mb-24">
                <li
                    class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6">
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
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
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
                            <div class="col-sm-12 d-flex align-items-center flex-wrap">
                                <span class="fs-1 text-gray-400 ">Usually, I sleep</span>
                                <div>
                                    <select id="" name="sleep_duration" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                        <option value="1" disabled selected></option>
                                        <option value="2">More than 6 Hours</option>
                                        <option value="2">Less than 6 Hours</option>
                                    </select>
                                </div>
                                <span class="fs-1 text-gray-400">. Do experience</span>
                                <span class="fs-1 text-gray-400">any change or disturbance in sleep?</span>
                                <div>
                                    <select id="" name="sleep_disturbance" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                        <option value="1" disabled selected></option>
                                        <option value="2">Yes</option>
                                        <option value="2">No</option>
                                        <option value="2">Maybe</option>
                                    </select>
                                </div>
                                <span class="fs-1 text-gray-400">.</span>
                                <span class="fs-1 text-gray-400">Were you feeling sad, depressed or hopeless in</span>
                                <span class="fs-1 text-gray-400"> past few months?</span>
                                <div>
                                    <select id="" name="feeling_sad" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                        <option value="1" disabled selected></option>
                                        <option value="2">Yes</option>
                                        <option value="2">No</option>
                                        <option value="2">Maybe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex-align justify-content-end gap-8">
                                <a href="{{url('/step3')}}" class="btn btn-outline-main rounded-pill py-9">Back</a>
                                <a href="{{url('/step5')}}" class="btn btn-main rounded-pill py-9">Next</a>
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