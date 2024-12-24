@extends('backend.layouts.app')

@section('title')
Diagnostic Report
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
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
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

                            <div class="col-xxl-12 col-md-12 col-sm-12">
                                <div>
                                    <!-- Paragraph tag for description -->
                                    <p class="fs-5">Let's take a step toward better health together. Share a few
                                        details, and I'll guide you with tailored insights.Your initial
                                        diagnostic report will be share on your provided contact details. This
                                        information will be treated as private and confidential. If you need
                                        further <strong>FREE</strong> assistance about your love once, kindly
                                        click here for add
                                        information. </p>
                                </div>

                                <div class="d-flex gap-10 align-items-center">
                                    <p class="fs-5">
                                        Would you like our health experts' share following tailored diet plan,
                                        <strong>FREE</strong> health camps, <strong>FREE</strong> OPDs Session and aware session details with you
                                    </p>
                                    <div class="form-check mb-0 flex-shrink-0">
                                        <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" value="" id="">
                                        <label class="form-check-label text-15 flex-grow-1">Yes</label>
                                    </div>
                                    <div class="form-check mb-0 flex-shrink-0">
                                        <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" value="" id="">
                                        <label class="form-check-label text-15 flex-grow-1">No</label>
                                    </div>
                                </div>

                            </div>

                            <div class="flex-align justify-content-end gap-8">
                                <a href="{{url('/step7')}}" class="btn btn-outline-main rounded-pill py-9">Back</a>
                                <a href="#" class="btn btn-main rounded-pill py-9">Submit & Close</a>
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