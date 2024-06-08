@props(['title'])
<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-page-title :title="$title ?? config('app.name', 'IBNiti')" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @wireUiScripts
        @livewireStyles
        
    </head>
    <body class="h-full text-gray-900">
        @livewire('navigation-menu')
        <div class="min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0 dark:bg-gray-900">
            
            
            
            <main>
                {{ $slot }}
                @livewireScripts
            </main>
             
            
        </div>

        @livewire('footer')
        
    </body>
</html>
