<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Vitals (Page 3)</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- file upload -->
    <link rel="stylesheet" href="assets/css/file-upload.css">
    <!-- file upload -->
    <link rel="stylesheet" href="assets/css/plyr.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="assets/css/full-calendar.css">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="assets/css/editor-quill.css">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="assets/css/apexcharts.css">
    <!-- calendar Css -->
    <link rel="stylesheet" href="assets/css/calendar.css">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.5.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

            <div class="flex-align gap-16">
                <!-- Toggle Button Start -->
                <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i
                        class="ph ph-list"></i></button>
                <!-- Toggle Button End -->

                <form action="#" class="w-350 d-sm-block d-none">
                    <div class="position-relative">
                        <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i
                                class="ph ph-magnifying-glass"></i></button>
                        <input type="text"
                            class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15"
                            placeholder="Search...">
                    </div>
                </form>
            </div>

            <div class="flex-align gap-16">
                <div class="flex-align gap-8">
                    <!-- Notification Start -->
                    <div class="dropdown">
                        <button
                            class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="position-relative">
                                <i class="ph ph-bell"></i>
                                <span class="alarm-notify position-absolute end-0"></span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                            <div class="card border border-gray-100 rounded-12 box-shadow-custom p-0 overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="py-8 px-24 bg-main-600">
                                        <div class="flex-between">
                                            <h5 class="text-xl fw-semibold text-white mb-0">Notifications</h5>
                                            <div class="flex-align gap-12">
                                                <button type="button"
                                                    class="bg-white rounded-6 text-sm px-8 py-2 hover-text-primary-600">
                                                    New </button>
                                                <button type="button"
                                                    class="close-dropdown hover-scale-1 text-xl text-white"><i
                                                        class="ph ph-x"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-24 max-h-270 overflow-y-auto scroll-sm">
                                        <div class="d-flex align-items-start gap-12">
                                            <img src="assets/images/thumbs/notification-img1.png" alt=""
                                                class="w-48 h-48 rounded-circle object-fit-cover">
                                            <div class="border-bottom border-gray-100 mb-24 pb-24">
                                                <div class="flex-align gap-4">
                                                    <a href="#"
                                                        class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Ashwin
                                                        Bose is requesting access to Design File - Final Project. </a>
                                                    <!-- Three Dot Dropdown Start -->
                                                    <div class="dropdown flex-shrink-0">
                                                        <button class="text-gray-200 rounded-4" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ph-fill ph-dots-three-outline"></i>
                                                        </button>
                                                        <div
                                                            class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                                            <div
                                                                class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                                <div class="card-body p-12">
                                                                    <div
                                                                        class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                                        <ul>
                                                                            <li class="mb-0">
                                                                                <a href="#"
                                                                                    class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                                    <span class="text">Mark as
                                                                                        read</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mb-0">
                                                                                <a href="#"
                                                                                    class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                                    <span class="text">Delete
                                                                                        Notification</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="mb-0">
                                                                                <a href="#"
                                                                                    class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                                    <span class="text">Report</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Three Dot Dropdown End -->
                                                </div>
                                                <div class="flex-align gap-6 mt-8">
                                                    <img src="assets/images/icons/google-drive.png" alt="">
                                                    <div class="flex-align gap-4">
                                                        <p class="text-gray-900 text-sm text-line-1">Design brief and
                                                            ideas.txt</p>
                                                        <span class="text-xs text-gray-200 flex-shrink-0">2.2 MB</span>
                                                    </div>
                                                </div>
                                                <div class="mt-16 flex-align gap-8">
                                                    <button type="button"
                                                        class="btn btn-main py-8 text-15 fw-normal px-16">Accept</button>
                                                    <button type="button"
                                                        class="btn btn-outline-gray py-8 text-15 fw-normal px-16">Decline</button>
                                                </div>
                                                <span class="text-gray-200 text-13 mt-8">2 mins ago</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start gap-12">
                                            <img src="assets/images/thumbs/notification-img2.png" alt=""
                                                class="w-48 h-48 rounded-circle object-fit-cover">
                                            <div class="">
                                                <a href="#"
                                                    class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Patrick
                                                    added a comment on Design Assets - Smart Tags file:</a>
                                                <span class="text-gray-200 text-13">2 mins ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline">
                                        View All </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Notification Start -->

                    <!-- Language Start -->
                    <div class="dropdown">
                        <button
                            class="text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph ph-globe"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                            <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                <div class="card-body">
                                    <div class="max-h-270 overflow-y-auto scroll-sm pe-8">
                                        <div
                                            class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                            <label
                                                class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light"
                                                for="arabic">
                                                <span
                                                    class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8">
                                                    <img src="assets/images/thumbs/flag1.png" alt=""
                                                        class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                                    <span class="text-15 fw-semibold mb-0">Arabic</span>
                                                </span>
                                            </label>
                                            <input class="form-check-input" type="radio" name="language" id="arabic">
                                        </div>
                                        <div
                                            class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                            <label
                                                class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light"
                                                for="germany">
                                                <span
                                                    class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8">
                                                    <img src="assets/images/thumbs/flag2.png" alt=""
                                                        class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                                    <span class="text-15 fw-semibold mb-0">Germany</span>
                                                </span>
                                            </label>
                                            <input class="form-check-input" type="radio" name="language" id="germany">
                                        </div>
                                        <div
                                            class="form-check form-radio d-flex align-items-center justify-content-between ps-0 mb-16">
                                            <label
                                                class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light"
                                                for="english">
                                                <span
                                                    class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8">
                                                    <img src="assets/images/thumbs/flag3.png" alt=""
                                                        class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                                    <span class="text-15 fw-semibold mb-0">English</span>
                                                </span>
                                            </label>
                                            <input class="form-check-input" type="radio" name="language" id="english">
                                        </div>
                                        <div
                                            class="form-check form-radio d-flex align-items-center justify-content-between ps-0">
                                            <label
                                                class="ps-0 form-check-label line-height-1 fw-medium text-secondary-light"
                                                for="spanish">
                                                <span
                                                    class="text-black hover-bg-transparent hover-text-primary d-flex align-items-center gap-8">
                                                    <img src="assets/images/thumbs/flag4.png" alt=""
                                                        class="w-32-px h-32-px border borde border-gray-100 rounded-circle flex-shrink-0">
                                                    <span class="text-15 fw-semibold mb-0">Spanish</span>
                                                </span>
                                            </label>
                                            <input class="form-check-input" type="radio" name="language" id="spanish">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Language Start -->
                </div>


                <!-- User Profile Start -->
                <div class="dropdown">
                    <button
                        class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="position-relative">
                            <img src="assets/images/thumbs/user-img.png" alt="Image" class="h-32 w-32 rounded-circle">
                            <span
                                class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
                        <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                            <div class="card-body">
                                <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                                    <img src="assets/images/thumbs/user-img.png" alt=""
                                        class="w-54 h-54 rounded-circle">
                                    <div class="">
                                        <h4 class="mb-0">Michel John</h4>
                                        <p class="fw-medium text-13 text-gray-200">examplemail@mail.com</p>
                                    </div>
                                </div>
                                <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                                    <li class="mb-4">
                                        <a href="setting.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-gear"></i></span>
                                            <span class="text">Account Settings</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="pricing-plan.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chart-bar"></i></span>
                                            <span class="text">Upgrade Plan</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="analytics.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chart-line-up"></i></span>
                                            <span class="text">Daily Activity</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="message.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-chats-teardrop"></i></span>
                                            <span class="text">Inbox</span>
                                        </a>
                                    </li>
                                    <li class="mb-4">
                                        <a href="email.html"
                                            class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-primary-600 d-flex"><i
                                                    class="ph ph-envelope-simple"></i></span>
                                            <span class="text">Email</span>
                                        </a>
                                    </li>
                                    <li class="pt-8 border-top border-gray-100">
                                        <a href="sign-in.html"
                                            class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                                            <span class="text-2xl text-danger-600 d-flex"><i
                                                    class="ph ph-sign-out"></i></span>
                                            <span class="text">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Profile Start -->

            </div>
        </div>

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
                        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 active">
                            <span class="icon text-xl d-flex"><i class="ph ph-circle"></i></span>
                            Vital Info #3
                            <span class="line position-relative"></span>
                        </li>
                        <li class="step-list__item py-15 px-24 text-15 text-heading fw-medium flex-center gap-6 ">
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
                                        <span class="fs-1 text-gray-400 ">Your BMI is</span>
                                        <div class="">
                                            <select id="" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                                <option value="1" disabled selected></option>
                                                <option value="2">Underweight</option>
                                                <option value="2">Normal weight</option>
                                                <option value="2">Overweight</option>
                                                <option value="2">Obesity</option>
                                            </select>
                                        </div>
                                        <span class="fs-1 text-gray-400">. My last checked blood pressure was</span>
                                        <div class="">
                                            <input type="number" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                        </div>
                                        <span class="fs-1 text-gray-400 ">and glucose level in</span>
                                        <span class="fs-1 text-gray-400 ">(Random/Fasting) was</span>
                                        <div class="">
                                            <select id="" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                                <option value="1" disabled selected></option>
                                                <option value="2">70-99 mg/dL (Normal)</option>
                                                <option value="2">100-125 mg/dL (Prediabetes)</option>
                                                <option value="2">126+ mg/dL (Diabetes)</option>
                                            </select>
                                        </div>
                                        <span class="fs-1 text-gray-400 ">on dated</span>
                                        <div class="">
                                            <input type="date" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                        </div>
                                        <span class="fs-1 text-gray-400 ">. My last monitored heart rate was</span>
                                        <div class="">
                                            <select id="" class="form-select fs-2 border-0 border-bottom fst-italic fw-bold">
                                                <option value="1" disabled selected></option>
                                                <option value="2">60-100 bpm (Normal)</option>
                                                <option value="2">&lt;60 bpm (Bradycardia)</option>
                                                <option value="2">100 bpm (Tachycardia)</option>
                                                <option value="2">Other</option>
                                            </select>
                                        </div>
                                        <span class="fs-1 text-gray-400 ">and SpO2 was</span>
                                        <div class="">
                                            <input type="number" class="form-control fs-2 border-0 border-bottom text-gray-400 fst-italic fw-bold">
                                        </div>
                                    </div>
                                    <div class="flex-align justify-content-end gap-8">
                                        <a href="diagnosis-p-2.html" class="btn btn-outline-main rounded-pill py-9">Back</a>
                                        <a href="diagnosis-p-4.html" class="btn btn-main rounded-pill py-9">Next</a>
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

        <!-- Footer -->
        <div class="dashboard-footer">
            <div class="flex-between flex-wrap gap-16">
                <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright HealinGenz 2024, All Right Reserverd</p>
                <div class="flex-align flex-wrap gap-16">
                    <a href="#"
                        class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="assets/js/boostrap.bundle.min.js"></script>
    <!-- Phosphor Js -->
    <script src="assets/js/phosphor-icon.js"></script>
    <!-- file upload -->
    <script src="assets/js/file-upload.js"></script>
    <!-- file upload -->
    <script src="assets/js/plyr.js"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="assets/js/full-calendar.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/jquery-ui.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/editor-quill.js"></script>
    <!-- apex charts -->
    <script src="assets/js/apexcharts.min.js"></script>
    <!-- Calendar Js -->
    <script src="assets/js/calendar.js"></script>
    <!-- jvectormap Js -->
    <script src="assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <!-- jvectormap world Js -->
    <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>


</body>

</html>