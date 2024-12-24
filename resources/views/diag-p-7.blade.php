@extends('backend.layouts.app')

@section('title')
Medical History
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
                <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
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

                                <span class="fs-1 text-gray-400 ">Are you taking medication?</span>
                                <div class="input-main-div">
                                    <input type="text" name="medication" class="input-field form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                </div>

                                <span class="fs-1 text-gray-400 ">.</span>
                                <span class="fs-1 text-gray-400 ">Are you taking any multivitamin?</span>
                                <div class="input-main-div-p7">
                                    <input type="text" name="multivitamins" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                </div>
                                <span class="fs-1 text-gray-400 ">.</span>

                                <span class="fs-1 text-gray-400">My Past Medical History has</span>
                                <div class="d-flex gap-10 align-items-center mx-10">
                                    <div class="form-check mb-0 flex-shrink-0">
                                        <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" name="past_medical_history[]" value="Hypertension" id="">
                                        <label class="form-check-label text-15 flex-grow-1">Hypertension</label>
                                    </div>
                                    <div class="form-check mb-0 flex-shrink-0">
                                        <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" name="past_medical_history[]" value="Diabetes" id="">
                                        <label class="form-check-label text-15 flex-grow-1">Diabetes</label>
                                    </div>
                                    <div class="form-check mb-0 flex-shrink-0">
                                        <input class="form-check-input flex-shrink-0 rounded-4" type="checkbox" name="past_medical_history[]" value="Heart Disease" id="">
                                        <label class="form-check-label text-15 flex-grow-1">Heart Disease</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="flex-align justify-content-end gap-8">
                            <a href="{{url('/step6')}}" class="btn btn-outline-main rounded-pill py-9">Back</a>
                            <a href="{{url('/finalstep')}}" class="btn btn-main rounded-pill py-9">Next</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
        <!-- Tab End -->
    </div>

    <div class="col-xxl-2 col-md-2 col-sm-2"></div>
</div>
@endsection
