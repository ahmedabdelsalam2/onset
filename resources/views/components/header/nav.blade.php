<header dir="ltr" x-data="{ show: false }" class="absolute inset-x-0 top-0 z-50">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">

        <x-app-logo/>

        <div class="flex lg:hidden">
            <button @click="show = true" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">{{ trans('general.open_menu') }}</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">{{ trans('auth.product') }}</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">{{ trans('auth.features') }}</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">{{ trans('auth.marketplace') }}</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">{{ trans('auth.company') }}</a>
        </div>

        <div class="hidden lg:flex lg:flex-1 items-center lg:justify-end">
{{--            <div class="mx-3 text-xs">--}}
{{--                <a href="{{ route('lang', 'en') }}"> en </a>|--}}
{{--                <a href="{{ route('lang', 'ar') }}"> ar </a>--}}
{{--            </div>--}}
            @if(Route::has('login'))
                @auth
                    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                        <div class="flex h-16 justify-between">
                            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                                <button type="button" class="rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">View notifications</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                    </svg>
                                </button>

                                <i data-eva="globe-outline" data-eva-fill="#959595  "></i>

                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button type="button" class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        </button>
                                    </div>

                                    <!--
                                      Dropdown menu, show/hide based on menu state.

                                      Entering: "transition ease-out duration-200"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                      Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"
                                    -->
                                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                        <!-- Active: "bg-gray-100", Not Active: "" -->
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    </div>
                                </div>
                            </div>
                            <div class="-mr-2 flex items-center sm:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <i data-eva="person-outline"></i>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 ">{{ trans('auth.logout') }}</button>
                        </form>
                @else
                    <x-menu>
                        <x-menu-btn
                            text="Account"
                            icon="person-outline"
                        />
                        <x-menu-card class="space-y-4">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <x-menu-item
                                text="{{ trans('auth.log_in') }}"
                                to="{{ route('login') }}"
                                icon="log-in-outline"
                            />
                            <x-menu-item
                                text="{{ trans('auth.sign_in') }}"
                                to="{{ route('register') }}"
                                icon="person-add-outline"
                            />

                            <x-line/>
                            <x-menu-item
                                text="{{ trans('auth.arabic') }}"
                                to="{{ route('lang', 'ar') }}"
                                img="/images/ar.png"
                            />
                            <x-menu-item
                                text="{{ trans('auth.english') }}"
                                to="{{ route('lang', 'en') }}"
                                img="/images/en.png"
                            />

                        </x-menu-card>
                    </x-menu>

{{--                        <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">--}}
{{--                            {{ trans('auth.log_in') }}--}}
{{--                            <span aria-hidden="true">--}}
{{--                                &rightarrow;--}}
{{--                            </span>--}}
{{--                        </a>--}}
                @endauth
            @endif
        </div>


    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div
        x-cloak
        x-show=" show "
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 animate__slideInRight"
        x-transition:enter-end="opacity-100 "
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="lg:hidden"
        role="dialog"
        aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ env('APP_NAME') }}</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <button @click="show = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">{{ trans('general.close_menu') }}</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                    </div>
                    @if(Route::has('login'))
                        @auth
                            <x-mop-auth-info/>
                        @else
                            <div class="py-6">
                                <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">{{ trans('auth.log_in') }}</a>
                            </div>
                        @endauth
                    @endif


                </div>
            </div>
        </div>
    </div>
</header>
