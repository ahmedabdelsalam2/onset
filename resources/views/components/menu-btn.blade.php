@props([
    'text',
    'icon' => null,
    'fill' => null,
    'icon_width' => null,
    'height'=> null
])

<div {{ $attributes }}>
    <button @click="menuOpen = true" class="text-sm border border-gray-900/10 py-1 px-2 rounded-lg hover:bg-gray-100">
        @if($icon)
            <x-icon :name="$icon" :fill="$fill" :width="$icon_width" :height="$height"/>
        @endif
        {{ $text }}
    </button>
</div>
