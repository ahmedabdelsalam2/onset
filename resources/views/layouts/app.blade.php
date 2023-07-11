@extends('layouts.base')

@section('body')


    <x-header.nav class=""/>

    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset



    <div class="fixed bottom-0 z-50 w-full">
        <x-gift-banner />
    </div>

    <x-scrolle-to-top/>

    <x-footer/>

@endsection
