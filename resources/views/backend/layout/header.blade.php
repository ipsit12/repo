<!doctype html> <html lang="en" dir="ltr">


<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/ingresspharma.png') }}"> <!--
        Vendor CSS Files --> <link href="backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> <link
        href="backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> <link
        href="backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet"> <link
        href="backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet"> <link
        href="backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="backend/assets/vendor/style.css" rel="stylesheet">
    {{-- @stack('title') --}}
    <!-- TITLE -->
    <title>IngressPharmacy | Admin</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet"> <!--- FONT-ICONS CSS -->
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.css">

    <!-- INTERNAL SWITCHER CSS -->
    <link href="{{ asset('backend/assets/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/switcher/demo.css') }}" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <style>
        .bi-caret-up::before {
            content: "\f238";
            line-height: 2 !important;
            font-size: 24px !important;
        }

        a {
            text-decoration: none !important;
        }
    </style>
</head>

<body class="app sidebar-mini ltr light-mode">


    {{-- <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER --> --}}

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- APP-HEADER -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex align-items-center">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0);"></a>
                        <div class="responsive-logo">
                            <a href="#" class="header-logo">
                                <img src="{{ asset('backend/assets/img/icons/logo-removebg-preview.png') }}"
                                    class="header-brand-img desktop-logo" alt="logo">
                                <img src="{{ asset('backend/assets/img/icons/logo-removebg-preview.png') }}"
                                    class="header-brand-img desktop-logo" alt="logo">
                            </a>
                        </div>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="#">
                            <img src="{{ asset('backend/assets/img/icons/logo-removebg-preview.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('backend/assets/img/icons/logo-removebg-preview.png') }}"
                                class="header-brand-img desktop-logo" alt="logo">
                        </a>
                        <!-- LOGO -->




                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-block d-lg-none">
                                            <a href="javascript:void(0);" class="nav-link icon"
                                                data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-md-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown d-md-flex">
                                            <form action="{{ route('admin.logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="nav-link icon nav-link-bg"><i
                                                        class="fe fe-log-in log-in-button"></i></button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /APP-HEADER -->