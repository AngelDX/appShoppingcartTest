<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/js/app.js'])

         <!-- Styles -->
         @livewireStyles
    </head>
    <body class="antialiased">
        <div class="sticky top-0 z-50">@livewire('web.navbar')</div>
        <div class="sm:justify-center sm:items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-4">
                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>
                {{-- Footer --}}
            </div>
            <footer class="bg-gray-800 text-center text-gray-200">
                {{-- <div class="px-6 pt-3">
                    <div class="mb-3 flex justify-center">
                        <a href="#!" class="flex items-center justify-center m-1 h-9 w-9 rounded-full border-2 border-gray-400 leading-normal text-gray-400 transition duration-150 ease-in-out hover:text-white hover:border-white focus:outline-none focus:ring-0">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#!" class="flex items-center justify-center m-1 h-9 w-9 rounded-full border-2 border-gray-400 leading-normal text-gray-400 transition duration-150 ease-in-out hover:text-white hover:border-white focus:outline-none focus:ring-0">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#!" class="flex items-center justify-center m-1 h-9 w-9 rounded-full border-2 border-gray-400 leading-normal text-gray-400 transition duration-150 ease-in-out hover:text-white hover:border-white focus:outline-none focus:ring-0">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#!" class="flex items-center justify-center m-1 h-9 w-9 rounded-full border-2 border-gray-400 leading-normal text-gray-400 transition duration-150 ease-in-out hover:text-white hover:border-white focus:outline-none focus:ring-0">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </div>
                </div> --}}

                <!--Copyright section-->
                <div class="p-4 text-center">
                    ©2023 Copyright: JuliacaFlower
                </div>
            </footer>
        </div>
    @stack('modals')
    @livewireScripts
    </body>
</html>
