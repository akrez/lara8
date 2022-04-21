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
    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="{{asset('dist/bootstrap-5.0.2-dist/css/bootstrap.rtl.min.css')}}">
    <!-- Font Sahel -->
    <link rel="stylesheet" href="{{asset('dist/vazirmatn-v32.102/Vazirmatn-font-face.css')}}">
    <!-- All -->
    <link rel="stylesheet" href="{{asset('dist/fontawesome-free-5.15.4-web/css/all.min.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('POS_HEAD')
</head>

<body dir="rtl">

    @yield('POS_BEGIN')
    <h1 class="m-0">@yield('content-header')</h1>
    @yield('content-breadcrumb')
    @yield('content')

    <!-- jQuery -->
    <script src="{{asset('dist/jquery-3.6.0/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('dist/jquery-ui-1.13.1/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 5 -->
    <script src="{{asset('dist/bootstrap-5.0.2-dist/js/bootstrap.bundle.js')}}"></script>
    <!-- script -->
    <script src="{{asset('js/script.js')}}"></script>

    @yield('POS_END')
</body>

</html>