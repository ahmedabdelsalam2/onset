@props([
    'text' => null,
    'to' => '#',
    'icon' => null,
    'icon_width' => 19,
    'fill' => null,
    'img' => null,
    'alt' => null,
    'key' => null
])

<a
    href="{{ $to }}"
    {{ $attributes->class(['block px-4 py-2 text-sm text-gray-700']) }}
    role="menuitem"
    tabindex="-1"
    id="user-menu-item-0"
>
        @if($icon)
            <x-icon class="mr-1" :name="$icon" :width="$icon_width" :fill="$fill" />
        @endif


        @if($img)
                <img class="inline-block rounded-full w-6"
                     src="{{ $img }}"
                     alt="{{ $alt }}">
        @endif


        @if($text)
            {{ $text }}
        @else
            {{ $slot }}
        @endif
</a>
