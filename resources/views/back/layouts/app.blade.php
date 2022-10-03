<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    {{-- RTL Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css') }}">

    {{-- Start Theme Styles --}}
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/back/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/back/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/back/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/back/images/favicon.png') }}" />
    {{-- End Theme Styles --}}


    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('assets/back/css/app.css') }}">
    <!-- Vite Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- livewire Scripts -->
    @livewireStyles
</head>

<body>
    <div id="app">

        <div class="container-scroller">

            @include('back.layouts.inc.navbar')

            <div class="container-fluid page-body-wrapper">

                @include('back.layouts.inc.sidebar')

                <div class="main-panel">

                    {{-- <main class="py-4"> --}}
                        @yield('content')
                        {{-- </main> --}}

                    {{-- @include('back.layouts.inc.footer') --}}
                </div>
            </div>

        </div>

    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/back/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/back/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/back/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/back/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/back/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/back/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/back/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/back/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/back/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/back/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/back/js/dataTables.bootstrap4.js') }}"></script>
    <!-- End custom js for this page-->

    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    @livewireScripts
</body>

</html>
