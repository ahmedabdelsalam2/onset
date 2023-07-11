@props([
    /** @var \mixed */
    'name' => null,
    /** @var \mixed */
    'fill' => '666',
    /** @var \mixed */
    'width' => 24,
    /** @var \mixed */
    'height' => null
])

<i
    data-eva="{{$name}}"
    data-eva-fill="#{{ $fill }}"
    data-eva-width="{{ $width }}"
    data-eva-height="{{ $height }}"
    {{ $attributes }}
></i>
