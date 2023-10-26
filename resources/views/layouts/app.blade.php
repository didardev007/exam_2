<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8-iHPPo851KJ37q5Ut53zYwFj2U0rr-LVr-ImeVakQb-YhytxuD8BOFV1BGIkbxoNeY4&usqp=CAU">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="bg-light">
@include('app.nav')
@yield('main')
</body>
</html>