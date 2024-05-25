<header class="bg-white">
    <nav class="flex items-center justify-between p-6 mx-auto max-w-7xl lg:px-8" aria-label="Global">
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Logo">
        </a>
        <div class="flex lg:hidden">
           
            <!-- Mobile menu, show/hide based on menu open state. -->
                @livewire('mobile-menu')
               
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-gray-900">About</a>
            <a href="{{ route('courses') }}" class="text-sm font-semibold leading-6 text-gray-900">Courses</a>
            <a href="{{ route('blog') }}" class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
            <a href="{{ route('resources') }}" class="text-sm font-semibold leading-6 text-gray-900">Resources</a>
            <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
        </div>
    </nav>
    
    
</header>
