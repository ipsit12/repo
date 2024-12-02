<!doctype html>
<html lang="en" dir="ltr">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="EDevlop">
    <meta name="author" content="">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('backend/assets/images/ingresspharma.png') }}>

    <!-- TITLE -->
    <title>Ingresspharma | Login</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href={{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

    <!-- STYLE CSS -->
    <link href={{ asset('backend/assets/css/style.css') }} rel="stylesheet">
    <link href={{ asset('backend/assets/css/plugins.css') }} rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href={{ asset('backend/assets/css/icons.css') }} rel="stylesheet">

    <!-- INTERNAL SWITCHER CSS -->
    <link href={{ asset('backend/assets/switcher/css/switcher.css') }} rel="stylesheet">
    <link href={{ asset('backend/assets/switcher/demo.css') }} rel="stylesheet">

    {{-- style  --}}
    <style>
        .horizontalMenucontainer {
            background-image: url('backend/assets/images/bg2.gif');
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body class="app sidebar-mini ltr light-mode ">


    <!-- BACKGROUND-IMAGE -->
    <div class="horizontalMenucontainer " style="">
        <div class="container">
            <div class="login-img">

                <!-- GLOABAL LOADER -->
                {{-- <div id="global-loader">
                    <img src="https://php.spruko.com/zanex/zanex/assets/images/loader.svg" class="loader-img"
                        alt="Loader">
                </div> --}}
                <!-- /GLOABAL LOADER -->

                <!-- PAGE -->
                <div class="page login-page">
                    <div>
                        <!-- CONTAINER OPEN -->
                        <div class="col col-login mx-auto mt-7">

                        </div>
                        <div class="container-login100">
                            <div class="wrap-login100 p-0">
                                <div class="card-body">
                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif

                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    
                                    <form class="login100-form validate-form" action="{{ route('admin.loginpost') }}"
                                        method="post">
                                        @csrf
                                        @method('POST')
                                        <div class="text-center">
                                            <img src={{ asset('backend/assets/images/ingresspharma.png') }}
                                                class="header-brand-img mb-5" alt="">
                                        </div>


                                        <div class="wrap-input100 validate-input"
                                            data-bs-validate="Valid email is required">
                                            <input class="input100" type="text" name="email" placeholder="Email">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                            </span>
                                            <span class="text-danger">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror

                                            </span>
                                        </div>
                                        <div class="wrap-input100 validate-input"
                                            data-bs-validate="Password is required">
                                            <input class="input100" type="password" name="password"
                                                placeholder="Password">
                                            <span class="focus-input100"></span>
                                            <span class="symbol-input100">
                                                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                            </span>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror

                                            </span>
                                        </div>
                                        {{-- <div class="text-end pt-1">
                                            <p class="mb-0"><a href="forgot-password.html"
                                                    class="text-primary ms-1">Forgot
                                                    Password?</a></p>
                                        </div> --}}
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                        {{-- <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Not a member?<a href="#"
                                                    class="text-primary ms-1">Create
                                                    an Account</a></p>
                                        </div> --}}
                                    </form>
                                </div>

                            </div>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- END PAGE -->

            </div>
            <!-- BACKGROUND-IMAGE CLOSED -->
        </div>
    </div>


    </div>


    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src={{ asset('backend/assets/js/jquery.min.js') }}></script>

    <!-- BOOTSTRAP JS -->
    <script src={{ asset('backend/assets/plugins/bootstrap/js/popper.min.js') }}></script>
    <script src={{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}></script>

    <!-- SIDE-MENU JS -->
    <script src={{ asset('backend/assets/plugins/sidemenu/sidemenu.js') }}></script>

    <!-- STICKY JS -->
    <script src={{ asset('backend/assets/js/sticky.js') }}></script>

    <!-- SIDEBAR JS -->
    <script src={{ asset('backend/assets/plugins/sidebar/sidebar.js') }}></script>

    <!-- PERFECT SCROLLBAR JS-->
    <script src={{ asset('backend/assets/plugins/p-scroll/perfect-scrollbar.js') }}></script>
    <script src={{ asset('backend/assets/plugins/p-scroll/pscroll.js') }}></script>
    <script src={{ asset('backend/assets/plugins/p-scroll/pscroll-1.js') }}></script>

    <!-- SPARKLINE JS-->
    <script src={{ asset('backend/assets/js/jquery.sparkline.min.js') }}></script>

    <!-- CHART-CIRCLE JS-->
    <script src={{ asset('backend/assets/js/circle-progress.min.js') }}></script>

    <!-- CHARTJS CHART JS-->
    <script src={{ asset('backend/assets/plugins/chart/Chart.bundle.js') }}></script>
    <script src={{ asset('backend/assets/plugins/chart/utils.js') }}></script>

    <!-- PIETY CHART JS-->
    <script src={{ asset('backend/assets/plugins/peitychart/jquery.peity.min.js') }}></script>
    <script src={{ asset('backend/assets/plugins/peitychart/peitychart.init.js') }}></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src={{ asset('backend/assets/plugins/select2/select2.full.min.js') }}></script>

    <!-- INTERNAL DATA TABLES JS -->
    <script src={{ asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('backend/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}></script>
    <script src={{ asset('backend/assets/plugins/datatable/dataTables.responsive.min.js') }}></script>

    <!-- ECHART JS-->
    <script src={{ asset('backend/assets/plugins/echarts/echarts.js') }}></script>

    <!-- APEXCHART JS -->
    <script src={{ asset('backend/assets/js/apexcharts.js') }}></script>

    <!-- INDEX JS -->
    <script src={{ asset('backend/assets/js/index1.js') }}></script>


    <!-- COLOR THEME JS -->
    <script src={{ asset('backend/assets/js/themeColors.js') }}></script>

    <!-- SWITCHER STYLES JS -->
    <script src={{ asset('backend/assets/js/swither-styles.js') }}></script>

    <!-- CUSTOM JS -->
    <script src={{ asset('backend/assets/js/custom.js') }}></script>

    <!-- SWITCHER JS -->
    <script src={{ asset('backend/assets/switcher/js/switcher.js') }}></script>

</body>


</html>