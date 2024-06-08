<!-- resources/views/livewire/sidebar.blade.php -->
<div x-data="{ mobileMenuOpen: false }">
    <!-- Mobile sidebar -->
    <div x-show="mobileMenuOpen" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <div @click="mobileMenuOpen = false" class="fixed inset-0 bg-gray-900/80"></div>
        <div class="fixed inset-0 flex">
            <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="relative flex flex-1 w-full max-w-xs mr-16 transition duration-300 ease-in-out transform -translate-x-full" :class="{'translate-x-0': mobileMenuOpen, '-translate-x-full': !mobileMenuOpen}">
                <div class="absolute top-0 flex justify-center w-16 pt-5 left-full">
                    <button @click="mobileMenuOpen = false" type="button" class="-m-2.5 p-2.5">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col px-6 pb-4 overflow-y-auto bg-indigo-600 grow gap-y-5">
                    <div class="flex items-center h-16 shrink-0">
                        <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
                    </div>
                    <nav class="flex flex-col flex-1">
                        <ul role="list" class="flex flex-col flex-1 gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-white bg-indigo-700 rounded-md group gap-x-3">
                                            <svg class="w-6 h-6 text-white shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                            <svg class="w-6 h-6 text-indigo-200 shrink-0 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                            </svg>
                                            Team
                                        </a>
                                    </li>
                                    <!-- Add more navigation items as needed -->
                                </ul>
                            </li>
                            <li>
                                <div class="text-xs font-semibold leading-6 text-indigo-200">Your teams</div>
                                <ul role="list" class="mt-2 -mx-2 space-y-1">
                                    <li>
                                        <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">H</span>
                                            <span class="truncate">Heroicons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">T</span>
                                            <span class="truncate">Tailwind Labs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">W</span>
                                            <span class="truncate">Workcation</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="mt-auto">
                                <a href="#"  class="flex p-2 -mx-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                    <svg class="w-6 h-6 text-indigo-200 shrink-0 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Desktop sidebar -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex flex-col px-6 pb-4 overflow-y-auto bg-indigo-600 grow gap-y-5">
            <div class="flex items-center h-16 shrink-0">
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/mark.svg?color=white" alt="Your Company">
            </div>
            <nav class="flex flex-col flex-1">
                <ul role="list" class="flex flex-col flex-1 gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-white bg-indigo-700 rounded-md group gap-x-3">
                                    <svg class="w-6 h-6 text-white shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                    <svg class="w-6 h-6 text-indigo-200 shrink-0 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                    Team
                                </a>
                            </li>
                            <!-- Add more navigation items as needed -->
                        </ul>
                    </li>
                    <li>
                        <div class="text-xs font-semibold leading-6 text-indigo-200">Your teams</div>
                        <ul role="list" class="mt-2 -mx-2 space-y-1">
                            <li>
                                <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">H</span>
                                    <span class="truncate">Heroicons</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"  class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">T</span>
                                    <span class="truncate">Tailwind Labs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex p-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border border-indigo-400 bg-indigo-500 text-[0.625rem] font-medium text-white">W</span>
                                    <span class="truncate">Workcation</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-auto">
                        <a href="#" class="flex p-2 -mx-2 text-sm font-semibold leading-6 text-indigo-200 rounded-md group gap-x-3 hover:bg-indigo-700 hover:text-white">
                            <svg class="w-6 h-6 text-indigo-200 shrink-0 group-hover:text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
