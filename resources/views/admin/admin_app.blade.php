<!DOCTYPE html>
<html lang="en">

    <head>

        <title>itransmissions</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="#" />
        <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app" />
        <meta name="author" content="#" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/feather/css/feather.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">


        <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/data-table/css/buttons.dataTables.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}" />


        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/data-table/css/buttons.dataTables.min.css')}}"/>

        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />

        <link rel="stylesheet" href="{{ asset('admin/select2/css/select2.min.css') }}" />

    </head>

    <body>

        <div class="theme-loader">
            <div class="ball-scale">
                <div class="contain">
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                    <div class="ring">
                        <div class="frame"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                @include('admin.layouts.navbar')

                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">

                       @include('admin.layouts.sidebar')

                       <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">

                                        @yield('content')

                                    </div>
                                    {{-- <div id="styleSelector"></div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        {{-- <script type="text/javascript" src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        <script src="{{ asset('admin/select2/js/select2.min.js') }}"></script>

        <script type="text/javascript" src="{{asset('admin/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/chart.js/dist/Chart.js')}}"></script>

        <script src="{{asset('admin/assets/pages/widget/amchart/amcharts.js')}}"></script>
        <script src="{{asset('admin/assets/pages/widget/amchart/serial.js')}}"></script>
        <script src="{{asset('admin/assets/pages/widget/amchart/light.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/js/SmoothScroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>

        <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>

        <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        {{-- <script src="{{asset('admin/assets/pages/data-table/js/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/pages/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script> --}}
        <script src="{{asset('admin/assets/pages/user-profile.js')}}"></script>
        <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vartical-layout.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

        <script src="{{asset('admin/assets/pages/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/modernizr.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>

        <script type="text/javascript" src="{{asset('admin/bower_components/i18next/i18next.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>

        <script src="{{asset('admin/assets/pages/data-table/js/data-table-custom.js')}}"></script>

        <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vartical-layout.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/js/script.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/custom-dashboard.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        @yield('scripts')


    </body>

</html>
