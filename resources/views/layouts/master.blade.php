<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Omni Digital Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="
        Jasa pengembangan website profesional yang menyediakan solusi KUSTOM untuk kebutuhan personal atau bisni Anda.
        Tersedia berbagai paket yang menarik juga ramah dompet dan rekening." />
    <meta name="keywords" content="jasa pengembangan website, jasa web, pengembangan web, desain web, situs web kustom, web kustom" />
    <meta name="author" content="Omni Digital Technology" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="nositelinkssearchbox">
{{--    <meta name="google-site-verification" content="">--}}

{{--    <link rel="canonical" href="http://www.omnidigitaltechnology.com/" />--}}

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset("build/images/favicon/apple-icon-57x57.png") }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset("build/images/favicon/apple-icon-60x60.png") }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset("build/images/favicon/apple-icon-72x72.png") }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset("build/images/favicon/apple-icon-76x76.png") }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset("build/images/favicon/apple-icon-114x114.png") }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset("build/images/favicon/apple-icon-120x120.png") }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset("build/images/favicon/apple-icon-144x144.png") }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset("build/images/favicon/apple-icon-152x152.png") }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset("build/images/favicon/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset("build/images/favicon/android-icon-192x192.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset("build/images/favicon/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset("build/images/favicon/favicon-96x96.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset("build/images/favicon/favicon-16x16.png") }}">
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon/favicon.ico')}}">
    <link rel="manifest" href="{{ URL::asset("build/images/favicon/manifest.json") }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset("build/images/favicon/ms-icon-144x144.png") }}">
    <meta name="theme-color" content="#ffffff">

    @include('layouts.head-css')
</head>
    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>
