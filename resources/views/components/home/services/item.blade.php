@props([
    'title',
    'body',
    'url'=> '#',
])

<article {{ $attributes->class(['flex flex-col items-start justify-between']) }}>

    <div class="relative w-full">
        <img src="/images/illustration-1.png"
             alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>

    <div class="max-w-xl">

        <div class="group relative shadow-sm  mt-8">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="{{ $url }}">
                    <span class="absolute inset-0"></span>
                    {{ $title }}
                </a>
            </h3>

            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                {{ $body }}
            </p>

        </div>

        <div class="relative mt-8 ">
            <div class="flex items-center justify-between">
                <x-section.cta/>
                <x-section.learn_more class="rtl:ml-0" url="#"/>
            </div>
        </div>
    </div>
</article>
