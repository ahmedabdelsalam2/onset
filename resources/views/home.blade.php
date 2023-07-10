@extends('layouts.app')

@section('content')
    <div class="bg-white">

        <x-header.nav/>

        <x-home.hero/>

        <x-home.services />

{{--        <x-home.features/>--}}



        <div class="bg-gray-50">
            <div class="mx-auto max-w-7xl py-24 sm:px-2 sm:py-32 lg:px-4">
                <div class="mx-auto max-w-2xl px-4 lg:max-w-none">
                    <div class="grid grid-cols-1 items-center gap-x-16 gap-y-10 lg:grid-cols-2">
                        <div>
                            <h2 class="text-4xl font-bold tracking-tight text-gray-900">We built our business on great customer service</h2>
                            <p class="mt-4 text-gray-500">At the beginning at least, but then we realized we could make a lot more money if we kinda stopped caring about that. Our new strategy is to write a bunch of things that look really good in the headlines, then clarify in the small print but hope people don't actually read it.</p>
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

        <footer class="bg-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <img class="h-7" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Company name">
                    <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Marketing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Analytics</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Commerce</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Insights</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">API Status</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-gray-900">Subscribe to our newsletter</h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">The latest news, articles, and resources, sent to your inbox weekly.</p>
                    </div>
                    <form class="mt-6 sm:flex sm:max-w-md lg:mt-0">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white px-3 py-1.5 text-base text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:w-56 sm:text-sm sm:leading-6" placeholder="Enter your email">
                        <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                            <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="mt-8 border-t border-gray-900/10 pt-8 md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 md:order-2">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <p class="mt-8 text-xs leading-5 text-gray-500 md:order-1 md:mt-0">&copy; 2020 Your Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </footer>




    </div>


@endsection
