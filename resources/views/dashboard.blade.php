<x-app-layout title="Dashboard">
    <x-slot name="header">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8" >
            <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
          </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>
