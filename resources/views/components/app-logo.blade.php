<div {{ $attributes->class(['flex lg:flex-1']) }}>
    <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
        <span class="sr-only">{{ env('APP_NAME') }}</span>
        {{--TODO Add logo--}}
        {{--                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">--}}
        <span class="font-bold text-xl">ONSET</span>
        <i data-eva="activity-outline"></i>
    </a>
</div>
