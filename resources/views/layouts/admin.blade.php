<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('styles')
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- ========== Start Header ========== -->
        <x-admin.header />
        <!-- ========== End Header ========== -->
        <!-- ========== Start Sidebar ========== -->
        <x-admin.sidebar />
        <!-- ========== End Sidebar ========== -->

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Enroll new student</h1>
                        </div>
                        <div class="col-sm-6">
                            @yield('breadcrumb')
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>

        <!-- ========== Start Footer ========== -->
        <x-admin.footer />
        <!-- ========== End Footer ========== -->

    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>
