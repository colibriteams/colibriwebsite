<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- meta data --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url()->to('/') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/collibri-favicon.ico') }}">

    {{-- seo meta data --}}
    @yield('seo')

    {{-- all view styles that are hooked before the host styles --}}
    @livewireStyles
    @stack('styles')
    @include('common.styles')

    {{-- for extra head data --}}
    @yield('head')

    <title>@yield('title')</title>

</head>
<body>
    @yield('nav')
    @yield('content')
    @yield('footer')

@livewireScripts
@include('common.scripts')
@stack('scripts')
</body>
</html>
