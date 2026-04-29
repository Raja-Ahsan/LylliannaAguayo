<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_favicon'] }}">
    <link rel="icon" href="{{ asset('public/admin/assets/images/page') }}/{{ $home_page_data['header_favicon'] }}"
        type="image/png" sizes="32x32">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/toastr.min.css') }}">

    <style>
        label {
            font-weight: bold;
            font-size: 12px;
        }
    </style>

    <style>
        .skin-blue .wrapper,
        .skin-blue .main-header,
        .skin-blue .main-header .navbar,
        .skin-blue .main-sidebar,
        .content-header .content-header-right a,
        .content .form-horizontal .btn-success {
            background-color: #000000!important;
            /* background-image: url('{{ asset("public/assets/website/images/login.png") }}');
            background-size: cover;
            background-position: center; */
        }

        .main-sidebar {
            margin-top: 150px !important;
            height: calc(100vh - 150px) !important;
            overflow: hidden !important;
            display: flex !important;
            flex-direction: column !important;
        }
        .content-header .content-header-right a,
        .content .form-horizontal .btn-success {
            border-color: #01277c !important;
            font-weight: 700;
        }

        .sidebar-menu>li
        {
            padding: 2px !important;
        }

        img#header-logo {
            width: 210px;
            position: absolute;
            left: 10px;
            top: 100%;
            height: 80px;
        }

        a.btn.btn-primary.btn-sm:hover {
            color: #000000 !important;
            background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
            font-weight: 700;
        }

        button.btn.btn-success.pull-left:hover {
            color: #000000;
            background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
        }

        .content-header>h1,
        .content-header .content-header-left h1,
        h3 {
            color: #000000 !important;
        }

        .nav>li>a:hover {
            background-color: #000000;

        }

        .navbar-nav>.user-menu>.dropdown-menu>.user-footer {
            background-color: #000000 !important;
        }

        .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default {
            color: #000000 !important;
            background-color: #EEB72D !important;
            border-radius: 30px !important;
        }

        .navbar-nav>.user-menu>.dropdown-menu>.user-footer .btn-default:hover {
            color: #EEB72D !important;
            background-color: #000000 !important;
            border-radius: 30px !important;
            transition: all 0.3s ease-in-out !important;
            box-shadow: 0px 0px 12px 3px rgb(254 153 1) !important;
        }

        .box.box-info {
            border-top-color: #EEB72D !important;
        }

        .nav-tabs-custom>.nav-tabs>li.active {
            border-top-color: #1a2204 !important;
        }


        a.active {
            background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
            color: #000000 !important;
            font-weight: 700;

        }

        .btn-active {
            color: #000000 !important;
            background-color: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%);
            border-color: #d7b35d;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .btn-active:hover {
            color: #d7b35d !important;
            background-color: #000000 !important;
            border-color: #d7b35d;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .info-box {
            display: block;
            min-height: 90px;
            background: #000000 !important;
            width: 100%;
            box-shadow: 10px 10px 10px 2px rgb(149 149 149);
            border-radius: 2px;
            margin-bottom: 15px;
        }

        .info-box:hover {
            display: block;
            min-height: 90px;
            background: linear-gradient(180deg, #af0202 0%, #af0202 50%, #af0202 100%);
            width: 100%;
            box-shadow: 5px 5px 10px 0px rgb(181 181 181);
            border-radius: 2px;
            margin-bottom: 15px;
        }

        .info-box-content {
            padding: 10px 25px;
            margin-left: 90px;
        }

        .info-box-icon {
            background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
        }

        .info-box-text {
            color: #d7b35d !important;
        }

        .info-box-number {
            color: #d7b35d !important;
        }

        span.info-box-icon i {
            color: #000000 !important;
        }

        span.info-box-icon i:hover {
            color: #efefef !important;
        }

        a {
            color: #ffffff !important;
        }

        a.active.blk {
            color: black !important;
        }

        .skin-blue .sidebar-menu>li:hover>a {
            background: linear-gradient(180deg, #af0202 0%, #af0202 50%, #af0202 100%);
        }

        .skin-blue .sidebar-menu>li>.treeview-menu {
            margin: 0 !important;
        }

        .skin-blue .sidebar-menu>li>a {
            border-left: 0 !important;
        }

        .nav-tabs-custom>.nav-tabs>li {
            border-top-width: 1px !important;
        }

        label.error {
            color: #dc3545;
            font-size: 14px;
        }


        .pagination>.active>span {
            z-index: 3;
            color: #000000;
            background: linear-gradient(180deg, #EEB72D 0%, #FFE59F 49.52%, #EEB72D 100%) !important;
            border-color: #d7b35d;
        }

        .pagination>.active>span:hover {
            z-index: 3;
            color: #000000;
            background: linear-gradient(180deg, #af0202 0%, #af0202 50%, #af0202 100%);
            border-color: #af0202;
        }

        .pagination>li>a:hover {
            z-index: 2;
            color: #ffffff !important;
            background: linear-gradient(180deg, #af0202 0%, #af0202 50%, #af0202 100%);
            border-color: #af0202;
        }

        .pagination>li>a {
            background: #ffffff;
            color: black !important;
        }

        /* this is for modal css in invoice create blade */
        img.modal-image {
            width: 20%;
        }

        .modal-title {
            margin: 0;
            text-align: center;
            font-weight: 800;
        }

        .modal-header {
            padding: 15px;
            background-color: #daf3ff;
            border-bottom: 2px solid #ff9901;
        }
 

        /* end css for modal */
    </style>

    @stack('css')
</head>

<body class="hold-transition fixed skin-blue sidebar-mini">
    <div class="wrapper">
        <!--header-->
        @include('layouts.admin.header')

        <!--sidebar-->
        @include('layouts.admin.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>
</body>

<!-- Script -->
<script src="{{ asset('public/admin/assets/js/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/select2.full.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jscolor.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.inputmask.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.inputmask.extensions.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/moment.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/icheck.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/fastclick.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/summernote.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/demo.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/jquery.validate.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('public/admin/assets/js/toastr.min.js') }}"></script>
<script src="{{ asset('public/admin/assets/js/search.js') }}"></script>

<!-- Optional Bootstrap JS and dependencies -->


<script>
    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
    @endif

    (function() {
        $(function() {
            setTimeout(function() {
                var $sidebar = $('.main-sidebar .sidebar');
                if ($sidebar.length && $sidebar.parent().hasClass('slimScrollDiv')) {
                    $sidebar.parent().replaceWith($sidebar);
                }
            }, 100);
        });
    })();
</script>
@stack('js')
{{-- <script>
    // Disable right-click
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

    // Disable developer tools shortcuts
    document.addEventListener('keydown', function (e) {
        // F12
        if (e.key === "F12" || e.keyCode === 123) {
            e.preventDefault();
            return false;
        }
        // Ctrl+Shift+I/J/C
        if (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C')) {
            e.preventDefault();
            return false;
        }
        // Ctrl+U/S/P
        if (e.ctrlKey && (e.key === 'U' || e.key === 'S' || e.key === 'P')) {
            e.preventDefault();
            return false;
        }
    });

    // Disable selection & drag
    document.addEventListener('dragstart', e => e.preventDefault());
    document.addEventListener('selectstart', e => e.preventDefault());
</script> --}}


</html>