<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'IBNiti') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @wireUiScripts
        @livewireStyles
    </head>
    <body class="h-full">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Sidebar -->
            <livewire:layout.sidebar />
            
            <div class="lg:pl-72">
                <livewire:layout.navigation />

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-gray-800">
                        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                    @livewireScripts
                </main>
            </div>
        </div>
    </body>
</html>
