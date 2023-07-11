<div {{ $attributes->class(['bg-white px-6 py-24 sm:py-32 lg:px-8']) }}>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <x-home.services.header/>


            <x-home.services.item-large />

            <x-home.services.grid_container class="lg:grid-cols-2">

                <x-home.services.item
                    title="{{ trans('auth.generator_rentals') }}"
                    body="{{ trans('auth.power_up_your_outdoor_experience_with_our_reliable') }}"
                />

                <x-home.services.item
                    title="{{ trans('auth.portable_bathrooms') }}"
                    body="{{ trans('auth.maintain_hygiene_and_convenience_during_your_outdo') }}"
                />

            </x-home.services.grid_container>


            <x-home.services.grid_container class="lg:grid-cols-3">

                <x-home.services.item
                    title="{{ trans('auth.outdoor_chairs') }}"
                    body="{{ trans('auth.relax_and_unwind_in_our_comfortable_outdoor_chairs') }}"
                />
                <x-home.services.item
                    title="{{ trans('auth.air_condition_rentals') }}"
                    body="{{ trans('auth.stay_cool_and_comfortable_outdoors_with_our_air_co') }}"
                />
                <x-home.services.item
                    title="{{ trans('auth.food_trucks') }}"
                    body="{{ trans('auth.elevate_your_outdoor_events_and_gatherings_with_ou') }}"
                />

            </x-home.services.grid_container>


        </div>
    </div>



