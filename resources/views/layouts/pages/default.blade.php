<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

</head>
<body class="layout-2">
 @include('layouts/includes/header_2')
 
 @yield('content')
 
 @include('layouts/includes/footer')

</body>
</html>
