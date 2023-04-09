<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="fahri">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ isset($title) ? $title : '' }}{{ ' | ' . config('app.name') }}</title>

    <link href="/dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/dist/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/dist/css/app.css" rel="stylesheet">
    @stack('css')
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.partials.sidebar')
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                @include('layouts.partials.navbar')
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        @yield('content-header')
                    </div>

                    @yield('content')

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @stack('modal')

    <script src="/dist/vendor/jquery/jquery.min.js"></script>
    <script src="/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/dist/js/app.min.js"></script>
    @stack('js')
</body>

</html>
