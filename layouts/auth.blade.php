<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ isset($title) ? $title : '' }}{{ ' | ' . config('app.name') }}</title>

    <link href="/dist/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/dist/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/dist/css/app.css" rel="stylesheet">
    @stack('css')
</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    @yield('content')
    <!-- Login Content -->
    <script src="/dist/vendor/jquery/jquery.min.js"></script>
    <script src="/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/dist/js/app.min.js"></script>
    @stack('js')
</body>

</html>
