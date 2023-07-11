@extends('layouts.app')

@section('content')

    <div class="bg-white">

        <x-home.hero/>

        <x-home.services />

{{--        <x-home.features/>--}}



        <div class="bg-gray-50">
            <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                    <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">
                        <div>
                            <h2 class="text-4xl font-bold tracking-tight text-gray-900">Why Choose Onset </h2>
                            <p class="mt-4 text-gray-500">Choose Onset for your outdoor adventure with confidence. Our reliable and well-maintained equipment ensures a hassle-free experience. Our expert team provides guidance and support, ensuring you make the most of your outdoor activities. Enjoy flexible rental options, competitive pricing, and convenient delivery services, all backed by a track record of customer satisfaction. Trust Onset to elevate your outdoor journey.</p>
                        </div>
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg bg-gray-100">
                            <img src="https://tailwindui.com/img/ecommerce-images/incentives-07-hero.jpg" alt="" class="object-cover object-center">
                        </div>
                    </div>

                    <div class="mt-16 grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-3">
                        <div class="sm:flex lg:block">
                            <div class="sm:flex-shrink-0">
                                <img class="h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-shipping-simple.svg" alt="">
                            </div>
                            <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-sm font-medium text-gray-900">Free shipping</h3>
                                <p class="mt-2 text-sm text-gray-500">It&#039;s not actually free we just price it into the products. Someone&#039;s paying for it, and it&#039;s not us.</p>
                            </div>
                        </div>
                        <div class="sm:flex lg:block">
                            <div class="sm:flex-shrink-0">
                                <img class="h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-warranty-simple.svg" alt="">
                            </div>
                            <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-sm font-medium text-gray-900">10-year warranty</h3>
                                <p class="mt-2 text-sm text-gray-500">If it breaks in the first 10 years we&#039;ll replace it. After that you&#039;re on your own though.</p>
                            </div>
                        </div>
                        <div class="sm:flex lg:block">
                            <div class="sm:flex-shrink-0">
                                <img class="h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-exchange-simple.svg" alt="">
                            </div>
                            <div class="mt-4 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                <h3 class="text-sm font-medium text-gray-900">Exchanges</h3>
                                <p class="mt-2 text-sm text-gray-500">If you don&#039;t like it, trade it to one of your friends for something of theirs. Don&#039;t send it here though.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <div class="md:flex md:items-center md:justify-between">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Trending products</h2>
                    <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
                        Shop the collection
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>
                    <div class="group relative">
                        <div class="h-56 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-72 xl:h-80">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Leather Long Wallet
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Natural</p>
                        <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
                    </div>

                    <!-- More products... -->
                </div>

                <div class="mt-8 text-sm md:hidden">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Shop the collection
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </div>





        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8">
                <div class="rounded-2xl bg-gray-50 px-6 py-16 sm:p-16">
                    <div class="mx-auto max-w-xl lg:max-w-none">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Easy Rental Process</h2>
                        </div>
                        <div class="mx-auto mt-12 grid max-w-sm grid-cols-1 gap-x-8 gap-y-10 sm:max-w-none lg:grid-cols-3">
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root">
                                        <img class="mx-auto h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-shipping-simple.svg" alt="">
                                    </div>
                                </div>
                                <div class="mt-3 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                    <h3 class="text-sm font-medium text-gray-900">Free shipping</h3>
                                    <p class="mt-2 text-sm text-gray-500">It&#039;s not actually free we just price it into the products. Someone&#039;s paying for it, and it&#039;s not us.</p>
                                </div>
                            </div>
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root">
                                        <img class="mx-auto h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-warranty-simple.svg" alt="">
                                    </div>
                                </div>
                                <div class="mt-3 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                    <h3 class="text-sm font-medium text-gray-900">10-year warranty</h3>
                                    <p class="mt-2 text-sm text-gray-500">If it breaks in the first 10 years we&#039;ll replace it. After that you&#039;re on your own though.</p>
                                </div>
                            </div>
                            <div class="text-center sm:flex sm:text-left lg:block lg:text-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root">
                                        <img class="mx-auto h-16 w-16" src="https://tailwindui.com/img/ecommerce/icons/icon-exchange-simple.svg" alt="">
                                    </div>
                                </div>
                                <div class="mt-3 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-6">
                                    <h3 class="text-sm font-medium text-gray-900">Exchanges</h3>
                                    <p class="mt-2 text-sm text-gray-500">If you don&#039;t like it, trade it to one of your friends for something of theirs. Don&#039;t send it here though.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-line/>



        <div class="relative overflow-hidden  mx-auto max-w-7xl mt-24 sm:px-2 sm:mt-32 lg:px-4">
            <!-- Decorative background image and gradient -->
            <div aria-hidden="true" class="absolute  inset-0">
                <div class="absolute inset-0 mx-auto max-w-7xl overflow-hidden xl:px-8">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-sale-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
                </div>
                <div class="absolute inset-0 bg-white bg-opacity-75"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white"></div>
            </div>

            <!-- Callout -->
            <section aria-labelledby="sale-heading" class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Get 25% off during our one-time sale</h2>
                    <p class="mx-auto mt-4 max-w-xl text-xl text-gray-600">Most of our products are limited releases that won't come back. Get your favorite items while they're in stock.</p>
                    <a href="#" class="mt-6 inline-block w-full rounded-md border border-transparent bg-gray-900 px-8 py-3 font-medium text-white hover:bg-gray-800 sm:w-auto">Get access to our one-time sale</a>
                </div>
            </section>

            <!-- Testimonials -->
            <section aria-labelledby="testimonial-heading" class="relative mx-auto max-w-7xl px-4 py-24 sm:px-6 lg:px-8 lg:py-32">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <h2 id="testimonial-heading" class="text-2xl font-bold tracking-tight text-gray-900">What are people saying?</h2>

                    <div class="mt-16 space-y-16 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                        <blockquote class="sm:flex lg:block">
                            <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                            </svg>
                            <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                <p class="text-lg text-gray-600">My order arrived super quickly. The product is even better than I hoped it would be. Very happy customer over here!</p>
                                <cite class="mt-4 block font-semibold not-italic text-gray-900">Sarah Peters, New Orleans</cite>
                            </div>
                        </blockquote>
                        <blockquote class="sm:flex lg:block">
                            <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                            </svg>
                            <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                <p class="text-lg text-gray-600">I had to return a purchase that didn’t fit. The whole process was so simple that I ended up ordering two new items!</p>
                                <cite class="mt-4 block font-semibold not-italic text-gray-900">Kelly McPherson, Chicago</cite>
                            </div>
                        </blockquote>
                        <blockquote class="sm:flex lg:block">
                            <svg width="24" height="18" viewBox="0 0 24 18" aria-hidden="true" class="flex-shrink-0 text-gray-300">
                                <path d="M0 18h8.7v-5.555c-.024-3.906 1.113-6.841 2.892-9.68L6.452 0C3.188 2.644-.026 7.86 0 12.469V18zm12.408 0h8.7v-5.555C21.083 8.539 22.22 5.604 24 2.765L18.859 0c-3.263 2.644-6.476 7.86-6.451 12.469V18z" fill="currentColor" />
                            </svg>
                            <div class="mt-8 sm:ml-6 sm:mt-0 lg:ml-0 lg:mt-10">
                                <p class="text-lg text-gray-600">Now that I’m on holiday for the summer, I’ll probably order a few more shirts. It’s just so convenient, and I know the quality will always be there.</p>
                                <cite class="mt-4 block font-semibold not-italic text-gray-900">Chris Paul, Phoenix</cite>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </section>
        </div>




        <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

        <x-line/>






    </div>


@endsection
