<!-- This example requires Tailwind CSS v2.0+ -->
<nav x-data="{ open: false }" class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile -menu button-->
                <button x-on:click="open = ! open" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-PurpleTaio hover:text-white hover:bg-GreenEstibas focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-12 w-auto" src="{{ asset('images/logos/logo.png') }}"
                        alt="logo nuevo proyecto coandes">
                    <img class="hidden lg:block h-12 w-auto" src="{{ asset('images/logos/logo.png') }}"
                        alt="logo nuevo proyecto coandes">
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="#" class="text-white px-3 py-2 rounded-md text-lg font-medium"
                            aria-current="page">Inicio</a>

                        <a href="#"
                            class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas px-3 py-2 rounded-md text-lg font-medium ">Menu 1</a>

                        <a href="#"
                            class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas px-3 py-2 rounded-md text-lg font-medium">Menu 2</a>

                        <a href="#"
                            class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas px-3 py-2 rounded-md text-lg font-medium">Menu 3</a>

                        <a href="#"
                            class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas px-3 py-2 rounded-md text-lg font-medium">Menu 4</a>
                    </div>
                </div>
            </div>
            {{-- <div class="absolute  inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button  type="button"
                    class=" bg-OrangeTaio p-1 rounded-full text-PurpleTaio hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </button>
            </div> --}}
        </div>

    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" class="sm:hidden  inset-0 mt-16 bg-VerdeMadera" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" x-on:click="open = false"
                class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas block px-3 py-2 rounded-md text-base font-medium">Inicio</a>

            <a href="#"
                class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas block px-3 py-2 rounded-md text-base font-medium">menu 1</a>

            <a href="#"
                class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas block px-3 py-2 rounded-md text-base font-medium">menu 2</a>

            <a href="#"
                class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas block px-3 py-2 rounded-md text-base font-medium">menu 3</a>

            <a href="#"
                class="text-white hover:bg-PurpleTaio hover:text-BrownEstibas block px-3 py-2 rounded-md text-base font-medium">menu 4</a>
        </div>
    </div>
    </div>
</nav>
