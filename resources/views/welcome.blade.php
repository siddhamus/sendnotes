<x-guest-layout title="Home">
    @include('components.hero')

    <div class="relative overflow-hidden bg-indigo-700">
        <div x-data="{ scroll: window.scrollY }" @scroll.window="scroll = window.scrollY"
            class="absolute inset-0 bg-fixed bg-center bg-cover"
            style="background-image: url('{{ asset('img/s4.png') }}'); 
        transform: translateY(calc(-1 * (scroll / 5)px));">
        </div>
        <div class="relative px-6 py-24 bg-indigo-700 bg-opacity-75 sm:px-6 sm:py-32 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Explore IB DP Courses<br>Enhance
                    Your Learning Journey</h2>
                <p class="max-w-xl mx-auto mt-6 text-lg leading-8 text-indigo-200">
                    Dive into our comprehensive IB DP course offerings, designed to help you achieve academic excellence
                    and reach your full potential.
                </p>
                <div class="flex items-center justify-center mt-10 gap-x-6">
                    <a href="#"
                        class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                        started</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>


    @include('components.features')

    <div class="py-24 bg-indigo-900 sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:max-w-none">
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Your Gateway to Academic
                        Excellence</h2>
                    <p class="mt-4 text-lg leading-8 text-indigo-200">Specializing in Cambridge, IB, and SAT preparation
                        to help you achieve your academic goals.</p>
                </div>
                <dl
                    class="grid grid-cols-1 gap-6 mt-16 overflow-hidden text-center rounded-2xl sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col p-8 rounded-lg shadow-lg bg-white/10">
                        <dd class="order-first text-4xl font-bold tracking-tight text-white">10,000+</dd>
                        <dt class="mt-2 text-sm font-semibold leading-6 text-indigo-200">Students Enrolled</dt>
                    </div>
                    <div class="flex flex-col p-8 rounded-lg shadow-lg bg-white/10">
                        <dd class="order-first text-4xl font-bold tracking-tight text-white">150 Points</dd>
                        <dt class="mt-2 text-sm font-semibold leading-6 text-indigo-200">Average SAT Score Increase</dt>
                    </div>
                    <div class="flex flex-col p-8 rounded-lg shadow-lg bg-white/10">
                        <dd class="order-first text-4xl font-bold tracking-tight text-white">98%</dd>
                        <dt class="mt-2 text-sm font-semibold leading-6 text-indigo-200">IB Diploma Success Rate</dt>
                    </div>
                    <div class="flex flex-col p-8 rounded-lg shadow-lg bg-white/10">
                        <dd class="order-first text-4xl font-bold tracking-tight text-white">95%</dd>
                        <dt class="mt-2 text-sm font-semibold leading-6 text-indigo-200">Cambridge A-Level Pass Rate
                        </dt>
                    </div>
                </dl>
            </div>
        </div>
    </div>



    <div class="py-24 bg-white sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.
                </p>
            </div>
            <div
                class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-16 auto-rows-fr sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                <article
                    class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
                    <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                        alt="" class="absolute inset-0 object-cover w-full h-full -z-10">
                    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

                    <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
                        <time datetime="2020-03-16" class="mr-8">Mar 16, 2020</time>
                        <div class="flex items-center -ml-4 gap-x-4">
                            <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white/50">
                                <circle cx="1" cy="1" r="1" />
                            </svg>
                            <div class="flex gap-x-2.5">
                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" class="flex-none w-6 h-6 rounded-full bg-white/10">
                                Michael Foster
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            Boost your conversion rate
                        </a>
                    </h3>
                </article>

                <!-- More posts... -->
            </div>
        </div>
    </div>






    @livewire('components.testimonial')


</x-guest-layout>
