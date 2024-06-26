<div x-data="{ open: @entangle('isOpen') }">
    <!-- Hamburger Button -->
    <button @click="open = !open" type="button" class="focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div x-show="open" @click.away="open = false" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-10 bg-gray-600 bg-opacity-50"></div>
        <div class="fixed inset-y-0 right-0 z-20 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Logo">
                </a>
                <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flow-root mt-6">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="py-6 space-y-2">
                        <a href="{{ route('about') }}" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">About</a>
                        <a href="{{ route('courses') }}" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Courses</a>
                        <a href="{{ route('blog') }}" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Blog</a>
                        <a href="{{ route('resources') }}" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Resources</a>
                        {{-- <a href="{{ route('login') }}" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">Log in <span aria-hidden="true">&rarr;</span></a> --}}
                    </div>
                    <div class="py-6">
                        <a href="{{ route('login') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                        <a href="{{ route('register') }}" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Register</a>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
