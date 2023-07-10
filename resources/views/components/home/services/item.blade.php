<article {{ $attributes->class(['flex flex-col items-start justify-between']) }}>

    <div class="relative w-full">
        <img src="https://tailwindui.com/img/ecommerce-images/incentives-07-hero.jpg"
             alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>

    <div class="max-w-xl">

        <div class="group relative shadow-sm  mt-8">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="#">
                    <span class="absolute inset-0"></span>
                    Boost your conversion rate
                </a>
            </h3>

            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                Illo sint voluptas. Error voluptates culpa
                eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem
                placeat consectetur nulla deserunt vel. Iusto corrupti dicta.
            </p>

        </div>

        <div class="relative mt-8 ">
            <div class="text-sm leading-6 flex items-center justify-between gap-x-4 space-x-4">

                <x-section.cta/>
                <x-section.learn_more  url="#"/>

            </div>
        </div>
    </div>
</article>
