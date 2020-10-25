<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Custom styles for this template -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body class="d-flex min-vh-100 flex-column">

@include('layouts.header')

{{--@if(!in_array(\Illuminate\Support\Facades\Route::currentRouteName(), config('breadcrumbs.exclude')))--}}
{{--    @include('layouts.breadcrumbs')--}}
{{--@endif--}}

@yield('content')

@include('layouts.footer')

<script src="{{ mix('/js/app.js') }}"></script>
