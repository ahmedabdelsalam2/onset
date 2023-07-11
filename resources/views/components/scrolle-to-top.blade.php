{{--# Automatically scrolls to top upon loading--}}
<div
        x-data
        x-init="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="" {{ $attributes }}></div>

{{--# Scrolls to top of the page on click--}}
<button
        @scroll.window="showScrollBtn = (window.pageYOffset < 500) ? false: true"
        x-show="showScrollBtn"
        @click.window="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="bg-gray-900/5 border border-gray-900/10 bottom-16 fixed hover: p-1.5 right-5 rounded-full">
        <i data-eva="arrow-upward-outline"></i>
</button>
