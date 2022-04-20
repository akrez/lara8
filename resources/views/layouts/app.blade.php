<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>@yield('title', config('app.name'))</title>
    <!-- Font Sahel -->
    <link rel="stylesheet" href="{{asset('css/font-sahel.css')}}">
    <!-- Font SahelFD -->
    <link rel="stylesheet" href="{{asset('css/font-sahel-fd.css')}}">
    <!-- All -->
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
    <!-- Theme RTL style -->
    <link rel="stylesheet" href="{{asset('css/adminlte-rtl.css')}}">
    <!-- bootstrap-rtl -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('POS_HEAD')
</head>

<body class="@yield('body_class')">
    @yield('POS_BEGIN')
    @yield('content')
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte.js')}}"></script>
    <!-- script -->
    <script src="{{asset('js/script.js')}}"></script>

    @yield('POS_END')
</body>

</html>