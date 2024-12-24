<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{('assets/images/logo/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{('assets/css/file-upload.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{('assets/css/plyr.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{('assets/css/full-calendar.css')}}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{('assets/css/jquery-ui.css')}}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{('assets/css/editor-quill.css')}}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{('assets/css/apexcharts.css')}}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{('assets/css/calendar.css')}}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{('assets/css/jquery-jvectormap-2.0.5.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{('assets/css/main.css')}}">
    <!-- Style css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>

<body>

    <div class="dashboard-main-wrapper">
        
        <!-- Header -->
         @include('backend.layouts.header')
      
        <!-- Content -->
        @yield('content')

        <!-- Footer -->
        @include('backend.layouts.footer')

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