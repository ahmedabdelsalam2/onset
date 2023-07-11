@props([
])
<article class="pt-11">
    <div class="lg:flex">
        <div class="flex-1 rtl:ml-8 ltr:mr-8">
            {{-- TODO --}}
            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-">
            <header class="mt-8 lg:mt-0">
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="#">
                            {{ trans('auth.caravan_rentals') }}
                        </a>
                    </h1>
                </div>
            </header>

            <div class="text-sm leading-6 text-gray-600 mt-5 space-y-4">
                <p>{{ trans('auth.discover_our_diverse_selection_of_comfortable_and') }}</p>
                <p>{{ trans('auth.whether_youre_embarking_on_a_solo_expedition_plann') }}</p>
                <p>{{ trans('auth.our_caravans_are_thoughtfully_furnished_with_moder') }}</p>
                <p>{{ trans('auth.from_cozy_interiors_for_a_romantic_escape_to_large') }}</p>
{{--                <p>Discover our diverse selection of comfortable and fully-equipped caravans, designed to cater to the unique needs of solo travelers, families, and group adventurers. Whether you're embarking on a solo expedition, planning a memorable family vacation, or organizing an exciting group adventure, we have the ideal caravan for you. Our caravans are thoughtfully furnished with modern amenities and spacious interiors, ensuring a comfortable and enjoyable experience during your outdoor getaway. From cozy interiors for a romantic escape to larger models with multiple sleeping areas for family or group trips, we offer a range of sizes and features to suit your specific requirements.</p>--}}
            </div>

            <div class="relative mt-8 ">
                <div class="text-sm leading-6 flex items-center justify-between gap-x-4 space-x-4">

                    <x-section.cta/>
                    <x-section.learn_more  url="#"/>

                </div>
            </div>
        </div>
    </div>
</article>
