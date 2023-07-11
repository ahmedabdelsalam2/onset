<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ appDir() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')

            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/eva-icons.js'])
        @livewireStyles
        @livewireScripts

        @if(app()->getLocale() == 'ar')
            <style>
                body {
                    font-family: 'Cairo', sans-serif;
                    /* Use different font-weight and font-style as needed */
                    font-weight: normal;
                    font-style: normal;
                }
            </style>
        @endif
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body x-data="{ showScrollBtn: false }">

        @yield('body')

    </body>
</html>
