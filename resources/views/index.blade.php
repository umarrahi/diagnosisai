@extends('backend.layouts.app')

@section('title')
Diagnosis AI - HealinGenz
@endsection

@section('content')
<div class="dashboard-body">

<div class="row">
    <div class="col-xxl-2 col-md-2 col-sm-2"></div>

    <div class="col-xxl-8 col-md-8 col-sm-2">
        <!-- Tab Start -->
        <div class="card">

            <div class="card-body row gy-20 p-40">
                <div class="col-xxl-12 col-md-12 col-sm-12">

                    <div>
                        <h1 class="text-gray-400">Welcome to your health assistant!</h1>
                        <!-- Paragraph tag for description -->
                        <p class="fs-3">Let's take a step toward better health together. Share a few details, and I'll guide you with tailored insights.</p>
                        <p class="fs-3"><strong>This form has <span style="color: #75B643;">7 simple steps</span> to complete.</strong> Let's begin!</p>
                    </div>

                </div>

                <div class="flex-align justify-content-start gap-8">
                    <a href="{{url('/step1')}}" class="btn btn-main rounded-pill py-9">Start Now</a>
                </div>
            </div>
        </div>
        <!-- Course Tab End -->
    </div>

    <div class="col-xxl-2 col-md-2 col-sm-2"></div>
</div>

</div>
@endsection
