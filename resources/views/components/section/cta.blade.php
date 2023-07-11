@props([
    'text' =>   trans('auth.book_your_adventure_now'),
    'routeName' => "",
])

@php

    $url = $routeName ? route($routeName) : '#'

@endphp

<a href="{{ $url }}" {{ $attributes->class(['rounded-md border border-gray-900 px-3.5 py-2.5 text-sm font-semibold text-balck hover:text-white shadow-sm hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600']) }}>
    {{ $text }}
</a>
