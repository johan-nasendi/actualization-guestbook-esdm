
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

   <title> {{ config('app.name') }}  @yield('title') </title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{asset('/assets/img/logos.png')}}">

   <!-- Plugins css -->
   <link href="{{asset('/admin/assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('/admin/assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('/admin/assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('/admin/assets/libs/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('/admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />

   <!-- App css -->
    <link href="{{asset('/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{asset('/admin/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{asset('/admin/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

</head>




<body class="loading">

        <!-- Begin page -->
        <div id="wrapper">
            {{-- Navbar --}}
            <div class="navbar-custom">
                @include('layouts._app-dashboard.navbar')
            </div>
            {{-- Sidebar --}}
            <div class="left-side-menu">
                @include('layouts._app-dashboard.sidebar')
            </div>
            {{-- Content --}}
        @yield('content')

            @include('layouts._app-dashboard.footer')

        </div>


</body>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
       <!-- jquery -->


    <!-- Vendor js -->
    <script src="{{asset('/admin/assets/js/vendor.min.js')}}"></script>

    <script src="{{asset('/admin/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('/admin/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <script src="https://kit.fontawesome.com/b00263187e.js" crossorigin="anonymous"></script>
    <!-- App js -->
    <script src="{{asset('/admin/assets/js/app.min.js')}}"></script>

    <script src="{{asset('/admin/assets/js/pages/dashboard-1.init.js')}}"></script>

    @include('sweetalert::alert')

</html>
