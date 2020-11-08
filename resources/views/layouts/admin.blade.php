<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Add Product | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('./assets/images/favicon.ico')}}">

        <!-- select2 css -->
        <link href="{{asset('./assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css">

        <!-- dropzone css -->
        <link href="{{asset('./assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Bootstrap Css -->
        <link href="{{asset('./assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('./assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('./assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
        @yield('css')

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('partials.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('partials.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')
                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

     


        <!-- JAVASCRIPT -->
        <script src="{{asset('./assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('./assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('./assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('./assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('./assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- select 2 plugin -->
        <script src="{{asset('./assets/libs/select2/js/select2.min.js')}}"></script>

        <!-- dropzone plugin -->
        <script src="{{asset('./assets/libs/dropzone/min/dropzone.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('./assets/js/pages/ecommerce-select2.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('./assets/js/app.js')}}"></script>


        @yield('js')

    </body>
</html>
